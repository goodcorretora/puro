<?php

namespace App\Http\Controllers\Forms;

use App\Models\Consorcio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ConsorcioController extends Controller
{
public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_celular' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'representante' => 'nullable|string',
            'consorcio' => 'required|string',
        ]);

        // sanitize phone and cpf/cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);

        // Store data in database
        $consorcio = Consorcio::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_celular' => $validated['phone_celular'],
            'cpf_cnpj' => $validated['cpf_cnpj'],
            'representante' => $validated['representante'] ?? null,
            'consorcio' => $validated['consorcio'],
        ]);

        // Send mail to admin
        Mail::send('emails.consorcio', ['consorcio' => $consorcio] + $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('goodcorretora@gmail.com', 'Solicitar Informações')
                    ->subject($validated['name'] ?? 'Novo contato');
        });

        return redirect()->back()->with('message', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}

