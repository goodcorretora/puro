<div>
    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <div x-data="{ step: 1, isCnpj: false, formData: { name: '', email: '', cpf_cnpj: '', phone_celular: '', datadenascimento: '', identidade: '', orgaoexpedidor: '', datadeexpedicao: '', genero: '', estadocivil: '', cep: '', endereco: '', numero: '', complemento: '', bairro: '', cidade: '', estado: '', escolha: ''} }">
                    <!-- Success message -->
                    @if ($message = Session::get('message'))
                    <div class="p-3 rounded-sm bg-primary-500 text-gray-100 mb-4 ">
                        <span>{{ $message }}</span>
                    </div>
                    @endif
                    <div>
                        <form action="{{ route('forms.emprestimo.submit') }}" method="post">
                            @CSRF
                            <!-- Step 1 -->
                            <div x-show="step === 1">
                                <h2 class="text-lg font-medium text-gray-500">
                                    Step 1: Informações Pessoais
                                </h2>

                                <div class="shadow-sm overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">

                                            <!-- Name -->
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                                <input id="name" type="text" required name="name" autocomplete="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                                @error('name') <span>{{ $message }}</span> @enderror
                                            </div>

                                            <!-- Email -->
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                                <input id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                                @error('email') <span>{{ $message }}</span> @enderror
                                            </div>

                                            <!-- Mobile Phone Number -->
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone_celular" class="block text-secondary-700 text-sm font-bold mb-2">Celular</label>
                                                <input id="phone_celular" type="text" required name="phone_celular" x-mask="(99) 99999 99 99" placeholder="Celular" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                                @error('phone_celular') <span>{{ $message }}</span> @enderror
                                            </div>

                                            <!-- CPF/CNPJ -->
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="cpf_cnpj" class="block text-gray-700 text-sm font-bold mb-2">CPF/CNPJ</label>
                                                <input 
                                                    type="text" 
                                                    id="cpf_cnpj" 
                                                    name="cpf_cnpj" 
                                                    placeholder="Digite o CPF ou CNPJ" 
                                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md"
                                                    x-on:input="
                                                        let value = $event.target.value.replace(/\D/g, '');
                                                        if (value.length <= 11) {
                                                            isCnpj = false;
                                                            $event.target.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                                                        } else {
                                                            isCnpj = true;
                                                            $event.target.value = value.substring(0, 14).replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
                                                        }
                                                    "
                                                >
                                                @error('cpf_cnpj') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                                            </div>

                                            <!-- Representante (aparece apenas para CNPJ) -->
                                            <div class="col-span-6 sm:col-span-3" x-show="isCnpj" x-transition>
                                                <label for="representante" class="block text-gray-700 text-sm font-bold mb-2">Nome do Representante</label>
                                                <input 
                                                    type="text" 
                                                    id="representante" 
                                                    name="representante" 
                                                    placeholder="Nome completo do representante" 
                                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md"
                                                >
                                                @error('representante') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="button" @click="step++" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                                    </div>
                                </div> 
                            </div>

                            <!-- Step 2 -->
                            <div x-show="step === 2" style="display: none;">
                                <h2 class="text-lg font-medium text-gray-500 mb-4">
                                    Step 2: Documentos
                                </h2>
                                <div class="shadow-sm overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="datadenascimento" class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento</label>
                                                <input type="date" name="datadenascimento" id="datadenascimento" autocomplete="datadenascimento-veiculo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="identidade" class="block text-gray-700 text-sm font-bold mb-2">Identidade</label>
                                                <input type="text" name="identidade" id="identidade" autocomplete="identidade" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="orgaoexpedidor" class="block text-gray-700 text-sm font-bold mb-2">Órgão Expedidor</label>
                                                <input type="text" name="orgaoexpedidor" id="orgaoexpedidor" autocomplete="orgaoexpedidor" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="datadeexpedicao" class="block text-gray-700 text-sm font-bold mb-2">Data de Expedição</label>
                                                <input type="date" name="datadeexpedicao" id="datadeexpedicao" autocomplete="datadeexpedicao-veiculo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Gênero</label>
                                                <select id="genero" name="genero" autocomplete="genero-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                                    <option>Gênero</option>
                                                    <option>Feminino</option>
                                                    <option>Masculino</option>
                                                    <option>Outro</option>
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="estadocivil" class="block text-gray-700 text-sm font-bold mb-2">Estado Civil</label>
                                                <select id="estadocivil" name="estadocivil" autocomplete="estadocivil-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                                    <option>Estado Civil</option>
                                                    <option>Solteiro</option>
                                                    <option>Casado</option>
                                                    <option>Separado/Divorciado</option>
                                                    <option>União Estável</option>
                                                    <option>Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="button" @click="step--" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                                        <button type="button" @click="step++" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                                    </div>
                                </div> 
                            </div>

                            <!-- Step 3 -->
                            <div x-show="step === 3" style="display: none;">
                                <h2 class="text-lg font-medium text-gray-500 mb-4">
                                    Step 3: Endereço
                                </h2>

                                <div class="shadow-sm overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">

                                            <div class="inline col-span-6 sm:col-span-1">
                                                <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP</label>
                                                <input type="text" name="cep" id="cep" autocomplete="cep" 
                                                    x-mask="99999-999" placeholder="Digite o CEP"
                                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                                @error('cep') <span>{{ $message }}</span> @enderror
                                            </div>

                                            <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                                <div class="mt-2 flex items-center gap-x-3">
                                                    <button type="button" class="bg-primary-600 text-white px-4 py-2 rounded-sm" disabled>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-3">
                                                <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço</label>
                                                <input type="text" name="endereco" id="endereco" autocomplete="endereco" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-1">
                                                <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número</label>
                                                <input type="text" name="numero" id="numero" autocomplete="numero" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-1">
                                                <label for="complemento" class="block text-gray-700 text-sm font-bold mb-2">Complemento</label>
                                                <input type="text" name="complemento" id="complemento" autocomplete="complemento" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-2">
                                                <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro</label>
                                                <input type="text" name="bairro" id="bairro" autocomplete="bairro" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-2">
                                                <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade</label>
                                                <input type="text" name="cidade" id="cidade" autocomplete="cidade" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="mb-4 col-span-6 sm:col-span-1">
                                                <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                                <input type="text" name="estado" id="estado" autocomplete="estado" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                            </div>



                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="button" @click="step--" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                                        <button type="button" @click="step++" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div x-show="step === 4" style="display: none;">
                                <h2 class="text-lg font-medium text-gray-500 mb-4">
                                    Step 4: Escolha
                                </h2>

                                <div class="shadow-sm overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">

                                            <div class="col-span-6">
                                                <label for="escolha" class="block text-gray-700 text-sm font-bold mb-2">Veja nossos Produtos</label>
                                                <select id="escolha" name="escolha" autocomplete="escolha-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-lio-500 focus:border-lio-500 sm:text-sm">
                                                    <option>Escolha de Produto</option>
                                                    <option>Auto Crédito</option>
                                                    <option>Carro Fácil</option>
                                                    <option>Carro Fácil Seminovo</option>
                                                    <option>Carro por Assinatura</option>
                                                    <option>Consignado</option>
                                                    <option>Crédito Pessoal</option>
                                                    <option>Crédito com Garantia Imobiliária</option>
                                                    <option>Financiamento de Imóveis</option>
                                                    <option>Financiamento de Veículo</option>
                                                    <option>Portabilidade</option>
                                                    <option>Refinanciamento</option>
                                                    <option>Título de Capitalização para Aluguel
                                                    <option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="button" @click="step--" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                                        <button type="submit" value="Submit" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">ENVIAR</button>
                                    </div>

                                </div> 
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>






