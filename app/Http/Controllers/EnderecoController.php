<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Store a new endereco for a polymorphic model.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'addressable_type' => 'required|string',
            'addressable_id' => 'required|integer',
            'cep' => 'required|string|max:10',
            'endereco' => 'required|string|max:255',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:2',
        ]);

        // Get the polymorphic model
        $modelClass = $validated['addressable_type'];
        $model = $modelClass::findOrFail($validated['addressable_id']);

        // Create the endereco using morphMany relationship
        $endereco = $model->enderecos()->create([
            'cep' => $validated['cep'],
            'endereco' => $validated['endereco'],
            'numero' => $validated['numero'],
            'complemento' => $validated['complemento'],
            'bairro' => $validated['bairro'],
            'cidade' => $validated['cidade'],
            'estado' => $validated['estado'],
        ]);

        return redirect()->back()->with('success', 'Endereço cadastrado com sucesso!');
    }

    /**
     * Update an existing endereco.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cep' => 'required|string|max:10',
            'endereco' => 'required|string|max:255',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:100',
            'bairro' => 'nullable|string|max:100',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:2',
        ]);

        $endereco = \App\Models\Endereco::findOrFail($id);
        $endereco->update($validated);

        return redirect()->back()->with('success', 'Endereço atualizado com sucesso!');
    }

    /**
     * Delete an endereco.
     */
    public function destroy($id)
    {
        $endereco = \App\Models\Endereco::findOrFail($id);
        $endereco->delete();

        return redirect()->back()->with('success', 'Endereço removido com sucesso!');
    }
}
