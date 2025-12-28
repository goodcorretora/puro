@props(['model', 'endereco' => null])

<div class="space-y-4">
    <input type="hidden" name="addressable_type" value="{{ get_class($model) }}">
    <input type="hidden" name="addressable_id" value="{{ $model->id }}">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label for="cep" class="block text-sm font-medium text-gray-700">CEP *</label>
            <input 
                type="text" 
                id="cep" 
                name="cep" 
                value="{{ old('cep', $endereco?->cep) }}" 
                required
                maxlength="10"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('cep')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-2">
            <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço *</label>
            <input 
                type="text" 
                id="endereco" 
                name="endereco" 
                value="{{ old('endereco', $endereco?->endereco) }}" 
                required
                maxlength="255"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('endereco')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label for="numero" class="block text-sm font-medium text-gray-700">Número</label>
            <input 
                type="text" 
                id="numero" 
                name="numero" 
                value="{{ old('numero', $endereco?->numero) }}" 
                maxlength="20"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('numero')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-2">
            <label for="complemento" class="block text-sm font-medium text-gray-700">Complemento</label>
            <input 
                type="text" 
                id="complemento" 
                name="complemento" 
                value="{{ old('complemento', $endereco?->complemento) }}" 
                maxlength="100"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('complemento')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label for="bairro" class="block text-sm font-medium text-gray-700">Bairro</label>
            <input 
                type="text" 
                id="bairro" 
                name="bairro" 
                value="{{ old('bairro', $endereco?->bairro) }}" 
                maxlength="100"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('bairro')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade *</label>
            <input 
                type="text" 
                id="cidade" 
                name="cidade" 
                value="{{ old('cidade', $endereco?->cidade) }}" 
                required
                maxlength="100"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('cidade')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado *</label>
            <select 
                id="estado" 
                name="estado" 
                required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
                <option value="">Selecione...</option>
                <option value="AC" {{ old('estado', $endereco?->estado) == 'AC' ? 'selected' : '' }}>AC</option>
                <option value="AL" {{ old('estado', $endereco?->estado) == 'AL' ? 'selected' : '' }}>AL</option>
                <option value="AP" {{ old('estado', $endereco?->estado) == 'AP' ? 'selected' : '' }}>AP</option>
                <option value="AM" {{ old('estado', $endereco?->estado) == 'AM' ? 'selected' : '' }}>AM</option>
                <option value="BA" {{ old('estado', $endereco?->estado) == 'BA' ? 'selected' : '' }}>BA</option>
                <option value="CE" {{ old('estado', $endereco?->estado) == 'CE' ? 'selected' : '' }}>CE</option>
                <option value="DF" {{ old('estado', $endereco?->estado) == 'DF' ? 'selected' : '' }}>DF</option>
                <option value="ES" {{ old('estado', $endereco?->estado) == 'ES' ? 'selected' : '' }}>ES</option>
                <option value="GO" {{ old('estado', $endereco?->estado) == 'GO' ? 'selected' : '' }}>GO</option>
                <option value="MA" {{ old('estado', $endereco?->estado) == 'MA' ? 'selected' : '' }}>MA</option>
                <option value="MT" {{ old('estado', $endereco?->estado) == 'MT' ? 'selected' : '' }}>MT</option>
                <option value="MS" {{ old('estado', $endereco?->estado) == 'MS' ? 'selected' : '' }}>MS</option>
                <option value="MG" {{ old('estado', $endereco?->estado) == 'MG' ? 'selected' : '' }}>MG</option>
                <option value="PA" {{ old('estado', $endereco?->estado) == 'PA' ? 'selected' : '' }}>PA</option>
                <option value="PB" {{ old('estado', $endereco?->estado) == 'PB' ? 'selected' : '' }}>PB</option>
                <option value="PR" {{ old('estado', $endereco?->estado) == 'PR' ? 'selected' : '' }}>PR</option>
                <option value="PE" {{ old('estado', $endereco?->estado) == 'PE' ? 'selected' : '' }}>PE</option>
                <option value="PI" {{ old('estado', $endereco?->estado) == 'PI' ? 'selected' : '' }}>PI</option>
                <option value="RJ" {{ old('estado', $endereco?->estado) == 'RJ' ? 'selected' : '' }}>RJ</option>
                <option value="RN" {{ old('estado', $endereco?->estado) == 'RN' ? 'selected' : '' }}>RN</option>
                <option value="RS" {{ old('estado', $endereco?->estado) == 'RS' ? 'selected' : '' }}>RS</option>
                <option value="RO" {{ old('estado', $endereco?->estado) == 'RO' ? 'selected' : '' }}>RO</option>
                <option value="RR" {{ old('estado', $endereco?->estado) == 'RR' ? 'selected' : '' }}>RR</option>
                <option value="SC" {{ old('estado', $endereco?->estado) == 'SC' ? 'selected' : '' }}>SC</option>
                <option value="SP" {{ old('estado', $endereco?->estado) == 'SP' ? 'selected' : '' }}>SP</option>
                <option value="SE" {{ old('estado', $endereco?->estado) == 'SE' ? 'selected' : '' }}>SE</option>
                <option value="TO" {{ old('estado', $endereco?->estado) == 'TO' ? 'selected' : '' }}>TO</option>
            </select>
            @error('estado')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
