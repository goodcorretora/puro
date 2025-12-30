<?php

namespace App\Http\Controllers\Forms;

use App\Models\Documento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class DocumentoController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cpf_cnpj' => 'required',
            'representante',
        ]);

        // Store data in database
        Documento::create([
            'user_id' => Auth::id(),
            ...$validated,
        ]);

        // Send mail to admin
        Mail::send('emails.documento', $validated, function ($message) {
            $message->to('contato@goodcorretora.com.br', 'Solicitar Informações')
                    ->to('test@sfn.com.br', 'Solicitar Informações')
                    ->subject($validated['name'] ?? 'Novo contato');
        });

        return redirect()->back()->with('success', 'Recebemos sua mensagem. Obrigado por entrar em contato!');
    }
}
