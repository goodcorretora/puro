<?php

namespace App\Http\Controllers\Forms;

use App\Models\Emprestimo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Alpinejs\Component;

class EmprestimoController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_celular' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'representante' => 'nullable|string|max:255',
            'datadenascimento' => 'nullable|date',
            'identidade' => 'nullable|string|max:50',
            'orgaoexpedidor' => 'nullable|string|max:50',
            'datadeexpedicao' => 'nullable|date',
            'genero' => 'nullable|string',
            'estadocivil' => 'nullable|string',
            'cep' => 'nullable|string|max:10',
            'endereco' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:2',
            'escolha' => 'required|string',
        ]);

        // sanitize phone and cpf/cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        if (!empty($validated['cpf_cnpj'])) {
            $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);
        }

        // Store data in database
        Emprestimo::create(array_merge([
            'user_id' => Auth::id(),
        ], $validated));

        // Send mail to admin
        Mail::send('emails.emprestimo', $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('goodcorretora@gmail.com', 'Solicitar Informações')
                    ->subject('Solicitação de Empréstimo - ' . ($validated['name'] ?? 'Novo contato'));
        });

        return redirect()->back()->with('message', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}
