<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\TermosWa;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TermosWaController extends Controller
{
    /**
     * Store acceptance of WhatsApp terms
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'aceito' => ['required', 'boolean'],
        ]);

        $termo = TermosWa::create([
            'aceito' => $validated['aceito'],
            'user_id' => $request->user()?->id,
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Termos aceitos com sucesso',
            'data' => $termo,
        ]);
    }

    /**
     * Validate terms acceptance without saving
     */
    public function validate(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'aceito' => ['required', 'boolean'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $validated,
        ]);
    }
}
