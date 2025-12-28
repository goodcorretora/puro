<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContatoController extends Controller
{
/**
     * Store contact message
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_celular' => ['required', 'string', 'max:20'],
            'phone_fixo' => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        // Store data in database
        $contato = Contato::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_celular' => $validated['phone_celular'],
            'phone_fixo' => $validated['phone_fixo'] ?? null,
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Send email to admin
        Mail::send('emails.contato', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_celular' => $validated['phone_celular'],
            'phone_fixo' => $validated['phone_fixo'] ?? null,
            'subject' => $validated['subject'],
            'mensagem' => $validated['message'],
        ], function ($mail) use ($validated) {
            $mail->to('contato@goodcorretora.com.br', 'Contato')
                 ->cc('goodcorretora@gmail.com', 'Contato')
                 ->subject($validated['subject']);
        });

        return redirect()->back()->with('success', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
    }
}
