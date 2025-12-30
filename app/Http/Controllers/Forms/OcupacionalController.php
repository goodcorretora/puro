<?php

namespace App\Http\Controllers\Forms;

use App\Models\Ocupacional;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OcupacionalController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'representante' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone_celular' => 'required|string',
            'phone_fixo' => 'nullable|string',
            'cnpj' => 'required|string',
            'cep' => 'nullable|string|max:10',
            'endereco' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:2',
            'funcionarios' => 'nullable|string|max:50',
            'ocupacional' => 'nullable|boolean',
            'seguranca' => 'nullable|boolean',
            'ergonomico' => 'nullable|boolean',
            'ambulatorio' => 'nullable|boolean',
            'pericia' => 'nullable|boolean',
            'promocao' => 'nullable|boolean',
        ]);

        // Sanitize phone and cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        if (!empty($validated['phone_fixo'])) {
            $validated['phone_fixo'] = preg_replace('/\D+/', '', $validated['phone_fixo']);
        }
        if (!empty($validated['cnpj'])) {
            $validated['cnpj'] = preg_replace('/\D+/', '', $validated['cnpj']);
        }
        if (!empty($validated['cep'])) {
            $validated['cep'] = preg_replace('/\D+/', '', $validated['cep']);
        }

        // Store data in database
        $ocupacional = Ocupacional::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'representante' => $validated['representante'] ?? null,
            'email' => $validated['email'],
            'phone_celular' => $validated['phone_celular'],
            'phone_fixo' => $validated['phone_fixo'] ?? null,
            'cnpj' => $validated['cnpj'],
            'funcionarios' => $validated['funcionarios'] ?? null,
            'ocupacional' => $validated['ocupacional'] ?? false,
            'seguranca' => $validated['seguranca'] ?? false,
            'ergonomico' => $validated['ergonomico'] ?? false,
            'ambulatorio' => $validated['ambulatorio'] ?? false,
            'pericia' => $validated['pericia'] ?? false,
            'promocao' => $validated['promocao'] ?? false,
        ]);

        // Create polymorphic endereco if provided
        if (!empty($validated['cep'])) {
            $ocupacional->enderecos()->create([
                'cep' => $validated['cep'],
                'endereco' => $validated['endereco'] ?? null,
                'numero' => $validated['numero'] ?? null,
                'complemento' => $validated['complemento'] ?? null,
                'bairro' => $validated['bairro'] ?? null,
                'cidade' => $validated['cidade'] ?? null,
                'estado' => $validated['estado'] ?? null,
            ]);
        }

        // Send mail to admin
        Mail::send('emails.ocupacional', ['ocupacional' => $ocupacional] + $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('test@sfn.com.br', 'Solicitar Informações')
                    ->subject('Solicitação de Saúde Ocupacional - ' . ($validated['name'] ?? 'Novo contato'));
        });

        return redirect()->back()->with('success', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}

