<?php

namespace App\Http\Controllers\Forms;

use App\Models\Cartao;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class CartaoController extends Controller
{
public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_celular' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'representante' => 'nullable|string|max:255',
            'datadenascimento' => 'required|date',
            'identidade' => 'required|string|max:255',
            'orgaoexpedidor' => 'required|string|max:255',
            'datadeexpedicao' => 'required|date',
            'genero' => 'required|string|max:255',
            'estadocivil' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'endereco' => 'required|string|max:255',
            'numero' => 'required|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'renda' => 'required|string|max:255',
            'bandeira' => 'required|string|max:255',
        ]);

        // // sanitize phone and cpf/cnpj
        // $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        // $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);
        // $validated['cep'] = preg_replace('/\D+/', '', $validated['cep']);

        // sanitize phone and cpf/cnpj
        $validated['phone_celular'] = preg_replace('/\D+/', '', $validated['phone_celular']);
        if (!empty($validated['cpf_cnpj'])) {
            $validated['cpf_cnpj'] = preg_replace('/\D+/', '', $validated['cpf_cnpj']);
        }

        // Store data in database
        Cartao::create(array_merge([
            'user_id' => Auth::id(),
        ], $validated));
        // // Store data in database
        // Cartao::create([
        //     'user_id' => Auth::id(),
        //     ...$validated,
        // ]);

        // Send mail to admin
        Mail::send('emails.cartao', $validated, function ($message) use ($validated) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('goodcorretora@gmail.com', 'Solicitar Informações')
                    ->subject('Solicitação de Cartão de Crédito - ' . ($validated['nome'] ?? 'Novo contato'));
        });

        return redirect()->back()->with('success', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}

