<?php

namespace App\Http\Controllers\Forms;

use App\Models\Saude;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class SaudeController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_celular' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'representante' => 'nullable|string|max:255',
            'saude' => 'required|string',
        ]);

        // sanitize phone and cpf/cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);

        // Store data in database
        Saude::create([
            'user_id' => Auth::id(),
            ...$validated,
        ]);

        // Send mail to admin
        Mail::send('emails.saude', $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('goodcorretora@gmail.com', 'Solicitar Informações')
                    ->subject('Solicitação de Plano de Saúde - ' . ($validated['name'] ?? 'Novo contato'));
        });

        return redirect()->back()->with('success', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}
