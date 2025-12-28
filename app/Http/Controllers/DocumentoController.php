<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Store a new documento for a polymorphic model.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'documentable_type' => 'required|string',
            'documentable_id' => 'required|integer',
            'cpf_cnpj' => 'required|string|max:18',
            'representante' => 'nullable|string|max:255',
            'datadenascimento' => 'nullable|date',
            'identidade' => 'nullable|string|max:20',
            'orgaoexpedidor' => 'nullable|string|max:10',
            'datadeexpedicao' => 'nullable|date',
            'genero' => 'nullable|string|max:20',
            'estadocivil' => 'nullable|string|max:20',
        ]);

        // Get the polymorphic model
        $modelClass = $validated['documentable_type'];
        $model = $modelClass::findOrFail($validated['documentable_id']);

        // Create the documento using morphMany relationship
        $documento = $model->documentos()->create([
            'cpf_cnpj' => $validated['cpf_cnpj'],
            'representante' => $validated['representante'],
            'datadenascimento' => $validated['datadenascimento'],
            'identidade' => $validated['identidade'],
            'orgaoexpedidor' => $validated['orgaoexpedidor'],
            'datadeexpedicao' => $validated['datadeexpedicao'],
            'genero' => $validated['genero'],
            'estadocivil' => $validated['estadocivil'],
        ]);

        return redirect()->back()->with('success', 'Documento cadastrado com sucesso!');
    }

    /**
     * Update an existing documento.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cpf_cnpj' => 'required|string|max:18',
            'representante' => 'nullable|string|max:255',
            'datadenascimento' => 'nullable|date',
            'identidade' => 'nullable|string|max:20',
            'orgaoexpedidor' => 'nullable|string|max:10',
            'datadeexpedicao' => 'nullable|date',
            'genero' => 'nullable|string|max:20',
            'estadocivil' => 'nullable|string|max:20',
        ]);

        $documento = \App\Models\Documento::findOrFail($id);
        $documento->update($validated);

        return redirect()->back()->with('success', 'Documento atualizado com sucesso!');
    }

    /**
     * Delete a documento.
     */
    public function destroy($id)
    {
        $documento = \App\Models\Documento::findOrFail($id);
        $documento->delete();

        return redirect()->back()->with('success', 'Documento removido com sucesso!');
    }
}
