<?php

namespace App\Http\Controllers\Forms;

use App\Models\Moto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MotoController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_celular' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'placa' => 'nullable|string|max:20',
            'modelo' => 'nullable|string|max:255',
            'ano' => 'nullable|string|max:4',
            'ano_fabricacao' => 'nullable|string|max:4',
            'zero_km' => 'nullable|boolean',
            'localizacao' => 'nullable|string|max:10',
            'eCondutorPrincipal' => 'nullable|string',
            'cpf_condutor' => 'nullable|string',
            'interesse_comunicacoes' => 'nullable|boolean',
        ]);

        // Sanitize phone and cpf/cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        if (!empty($validated['cpf_cnpj'])) {
            $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);
        }
        if (!empty($validated['cpf_condutor'])) {
            $validated['cpf_condutor'] = preg_replace('/\D+/', '', $validated['cpf_condutor']);
        }

        // Store data in database
        Moto::create(array_merge([
            'user_id' => Auth::id(),
        ], $validated));

        // Send mail to admin
        Mail::send('emails.moto', $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('goodcorretora@gmail.com', 'Solicitar Informações')
                    ->subject('Solicitação de Seguro Moto - ' . ($validated['name'] ?? 'Novo contato'));
        });

        return redirect()->back()->with('success', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}
