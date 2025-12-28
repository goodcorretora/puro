@props(['model', 'documento' => null])

<div class="space-y-4">
    <input type="hidden" name="documentable_type" value="{{ get_class($model) }}">
    <input type="hidden" name="documentable_id" value="{{ $model->id }}">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="cpf_cnpj" class="block text-sm font-medium text-gray-700">CPF/CNPJ *</label>
            <input 
                type="text" 
                id="cpf_cnpj" 
                name="cpf_cnpj" 
                value="{{ old('cpf_cnpj', $documento?->cpf_cnpj) }}" 
                required
                maxlength="18"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('cpf_cnpj')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="representante" class="block text-sm font-medium text-gray-700">Representante</label>
            <input 
                type="text" 
                id="representante" 
                name="representante" 
                value="{{ old('representante', $documento?->representante) }}" 
                maxlength="255"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('representante')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label for="datadenascimento" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
            <input 
                type="date" 
                id="datadenascimento" 
                name="datadenascimento" 
                value="{{ old('datadenascimento', $documento?->datadenascimento) }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('datadenascimento')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="genero" class="block text-sm font-medium text-gray-700">Gênero</label>
            <select 
                id="genero" 
                name="genero" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
                <option value="">Selecione...</option>
                <option value="Masculino" {{ old('genero', $documento?->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ old('genero', $documento?->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="Outro" {{ old('genero', $documento?->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
            </select>
            @error('genero')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="estadocivil" class="block text-sm font-medium text-gray-700">Estado Civil</label>
            <select 
                id="estadocivil" 
                name="estadocivil" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
                <option value="">Selecione...</option>
                <option value="Solteiro(a)" {{ old('estadocivil', $documento?->estadocivil) == 'Solteiro(a)' ? 'selected' : '' }}>Solteiro(a)</option>
                <option value="Casado(a)" {{ old('estadocivil', $documento?->estadocivil) == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                <option value="Divorciado(a)" {{ old('estadocivil', $documento?->estadocivil) == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                <option value="Viúvo(a)" {{ old('estadocivil', $documento?->estadocivil) == 'Viúvo(a)' ? 'selected' : '' }}>Viúvo(a)</option>
            </select>
            @error('estadocivil')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label for="identidade" class="block text-sm font-medium text-gray-700">Identidade</label>
            <input 
                type="text" 
                id="identidade" 
                name="identidade" 
                value="{{ old('identidade', $documento?->identidade) }}" 
                maxlength="20"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('identidade')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="orgaoexpedidor" class="block text-sm font-medium text-gray-700">Órgão Expedidor</label>
            <input 
                type="text" 
                id="orgaoexpedidor" 
                name="orgaoexpedidor" 
                value="{{ old('orgaoexpedidor', $documento?->orgaoexpedidor) }}" 
                maxlength="10"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('orgaoexpedidor')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="datadeexpedicao" class="block text-sm font-medium text-gray-700">Data de Expedição</label>
            <input 
                type="date" 
                id="datadeexpedicao" 
                name="datadeexpedicao" 
                value="{{ old('datadeexpedicao', $documento?->datadeexpedicao) }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
            @error('datadeexpedicao')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
