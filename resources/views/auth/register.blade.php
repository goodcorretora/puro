<x-layouts.guest>

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input 
                id="name" 
                class="block mt-1 w-full" 
                type="text" 
                name="name" 
                :value="old('name')" 
                required 
                autofocus 
                autocomplete="name" 
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Telefone (opcional ou obrigatório, você decide) -->
        <div class="mb-4">
            <x-input-label for="phone_celular" :value="__('Celular')" />
            <x-text-input 
                id="phone_celular" 
                class="block mt-1 w-full" 
                type="tel" 
                name="phone_celular" 
                :value="old('phone_celular')" 
                required
                maxlength="15"
                placeholder="(11) 99999-9999"
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('phone_celular')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                class="block mt-1 w-full" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input 
                id="password" 
                class="block mt-1 w-full"
                type="password"
                name="password"
                required 
                autocomplete="new-password" 
            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input 
                id="password_confirmation" 
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
            />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Terms of Service -->
        <div class="mt-4">
            <label for="terms" class="inline-flex items-center">
                <input 
                    id="terms" 
                    type="checkbox" 
                    class="rounded-sm border-gray-300 text-primary-600 shadow-xs focus:border-primary-300 focus:ring-3 focus:ring-primary-200 focus:ring-opacity-50" 
                    name="terms"
                    {{ old('terms') ? 'checked' : '' }}
                >
                <span class="ml-2 text-sm text-gray-600">
                    Eu aceito os
                    <a href="{{ url('termos-de-servicos') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-sm font-medium text-primary-600 hover:bg-primary-50">Termos de Serviços</a> 
                    e 
                    <a href="{{ url('politica-de-privacidade') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-sm font-medium text-primary-600 hover:bg-primary-50">Política de Privacidade</a>.
                </span>
            </label>
            <x-input-error :messages="$errors->get('terms')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" href="{{ route('login') }}">
                {{ __('Já está registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </form>
    
</x-layouts.guest>

<!-- JAVASCRIPT PARA DETECTAR CPF/CNPJ -->

<script>
    function isCPF(value) {
        return value.length === 11;
    }

    function isCNPJ(value) {
        return value.length === 14;
    }

    document.getElementById('cpf_cnpj').addEventListener('input', function () {
        let value = this.value.replace(/\D/g, '');

        if (isCNPJ(value)) {
            document.getElementById('representante_container').classList.remove('hidden');
        } else {
            document.getElementById('representante_container').classList.add('hidden');
        }
    });
</script>

<!-- Máscara simples para telefone -->
<script>
    const phoneInput = document.getElementById('phone_celular');
    if (phoneInput) {
        phoneInput.addEventListener('input', function (e) {
            let v = this.value.replace(/\D/g, '');
            if (v.length > 11) v = v.slice(0, 11);
            if (v.length <= 2) this.value = '(' + v;
            else if (v.length <= 6) this.value = '(' + v.slice(0,2) + ') ' + v.slice(2);
            else if (v.length <= 10) this.value = '(' + v.slice(0,2) + ') ' + v.slice(2,6) + '-' + v.slice(6);
            else this.value = '(' + v.slice(0,2) + ') ' + v.slice(2,7) + '-' + v.slice(7);
        });
    }
</script>

<!-- JAVASCRIPT PARA BUSCAR ENDEREÇO PELO CEP (ViaCEP) -->

<script>
    document.getElementById('cep').addEventListener('blur', async function () {
        let cep = this.value.replace(/\D/g, '');

        if (cep.length !== 8) {
            alert("CEP inválido");
            return;
        }

        let response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        let data = await response.json();

        if (data.erro) {
            alert("CEP não encontrado");
            return;
        }

        document.getElementById('endereco').value = data.logradouro;
        document.getElementById('bairro').value = data.bairro;
        document.getElementById('cidade').value = data.localidade;
        document.getElementById('estado').value = data.uf;
    });
</script>

