<div x-data="{
    step: 1,
    isCnpj: false,
    placa: '',
    modelo: '',
    ano: '',
    ano_fabricacao: '',
    zero_km: null,
    localizacao: '',
    cpf_cnpj: '',
    eCondutorPrincipal: '',
    cpf_condutor: '',
    name: @auth'{{ auth()->user()->name }}'@else''@endauth,
    email: @auth'{{ auth()->user()->email }}'@else''@endauth,
    phone_celular: '',
    interesse_comunicacoes: false,
    
    nextStep() {
        if (this.step === 1 && this.placa.trim() !== '') {
            this.step = 3;
        } else {
            this.step++;
        }
    },
    
    prevStep() {
        if (this.step === 3 && this.placa.trim() !== '') {
            this.step = 1;
        } else {
            this.step--;
        }
    },
    
    skipPlacaStep() {
        this.placa = '';
        this.step = 2;
    },
    
    updateMask() {
        const cleanValue = this.cpf_cnpj.replace(/\D/g, '');
        this.isCnpj = cleanValue.length > 11;
    }
}">
    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">
            
            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('success'))
                <div class="p-3 rounded-sm bg-primary-500 text-white mb-4 ">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form method="POST" action="{{ route('forms.moto.submit') }}">
                    @csrf
                    
                    <div x-show="step === 1">
                    <!-- Etapa 1: Apresentação -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!-- Digite a placa do veículo -->
                                <div class="col-span-6">
                                    <label for="placa" class="block text-secondary-700 text-base font-bold mb-2">Qual é a placa da sua moto?</label>
                                    <input x-model="placa" id="placa" type="text" name="placa" placeholder="Placa do carro (opcional)" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                    @error('placa') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Checkbox para Não sei ou não tenho a placa do veículo -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="text-sm">
                                                <button @click="skipPlacaStep()" type="button" class="text-primary-600 text-lg font-bold">
                                                    Não sei ou não tenho a placa do veículo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button @click="nextStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>
                    </div>

<div x-show="step === 2" style="display: none;">
                    <!-- Etapa 2:  Descrição do Veículo -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Campo para selecionar o ano de fabricação da moto -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano da moto</label>
                                    <input type="text" x-model="ano" id="ano" value="ano" x-mask="9999" placeholder="Digite o ano do modelo do seu veículo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- Campo para selecionar o ano de fabricação da moto -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano_fabricacao" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano de fabricação da moto</label>
                                    <input type="text" x-model="ano_fabricacao" id="ano_fabricacao" value="ano_fabricacao" x-mask="9999" placeholder="Digite o ano de fabricação da moto" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- A moto é zero KM? -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label class="block text-secondary-700 text-sm font-bold mb-2">A moto é zero KM?</label>
                                    <div class="flex items-start ">
                                        <div class="flex h-5 items-center">
                                            <input x-model="zero_km" type="radio" name="zero_km" id="zero_km_sim" value="1" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm inline">
                                            <label for="zero_km" class="font-medium text-secondary-700">
                                                Sim
                                            </label>
                                        </div>
                                        <div class="ml-5 flex h-5 items-center">
                                            <input x-model="zero_km" type="radio" name="zero_km" id="zero_km_nao" value="0" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="zero_km" class="font-medium text-secondary-700">
                                                Não
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campo para informar o modelo da moto -->
                                <div class="col-span-6">
                                    <label for="modelo" class="block text-secondary-700 text-sm font-bold mb-2">Informe o modelo da moto</label>
                                    <input x-model="modelo" type="text" name="modelo" id="modelo"
                                        placeholder="DESCRIÇÃO DA MOTO"                                    
                                    class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button @click="prevStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button @click="nextStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>

                    </div>
                    </div>

                    <div x-show="step === 3" style="display: none;">
                    <!-- Etapa 3: Localização -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!--  -->
                                <div class="col-span-6">
                                    <label for="localizacao" class="block text-secondary-700 text-sm font-bold mb-2">Onde sua moto fica a noite?</label>
                                    <input x-model="localizacao" type="text" name="localizacao" id="localizacao" 
                                    x-mask="99999-999" placeholder="Digite o CEP"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                    @error('localizacao') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-span-6">
                                    <div class="text-lg font-bold text-primary-600"><a href="https://buscacepinter.correios.com.br/app/endereco/index.php">Não sei o CEP</a></div>
                                </div>




                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button @click="prevStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button @click="nextStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>
                    </div>

                    <div x-show="step === 4" style="display: none;">
                    <!-- Etapa 4: Condutor -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!-- Digite o CPF/CNPJ -->


                                <div class="inline col-span-6">
                                    <label for="cpf_cnpj" class="block text-secondary-700 text-sm font-bold mb-2">Número do Documento (CPF/CNPJ)</label>
                                    <input x-model="cpf_cnpj" @input="updateMask()" type="text" id="cpf_cnpj" name="cpf_cnpj" 
                                    :x-mask="isCnpj ? '99.999.999/0001-99' : '999.999.999-99'" 
                                    :placeholder="isCnpj ? 'Digite o CNPJ' : 'Digite o CPF'"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                    @error('cpf_cnpj') <span>{{ $message }}</span> @enderror
                                </div>



                                <div class="col-span-6">
                                    <!-- Digite o CPF CONDUTOR -->

                                    <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                        <label for="eCondutorPrincipal">Você é o condutor principal?</label><br>
                                        <input type="radio" x-model="eCondutorPrincipal" id="condutor_sim" name="eCondutorPrincipal" value="sim" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Sim<br >
                                        <input type="radio" x-model="eCondutorPrincipal" id="condutor_nao" name="eCondutorPrincipal" value="nao" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Não<br>
                                    </div>


                                    <div x-show="eCondutorPrincipal === 'nao'" class="px-5 mb-4">
                                        <label for="cpf_condutor">CPF do condutor principal (obrigatório)</label><br>
                                        <input type="text" id="cpf_condutor" name="cpf_condutor" x-model="cpf_condutor" x-mask="999.999.999-99" placeholder="Digite o CPF do condutor"
                                        class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        <br>
                                    </div>

                                </div>












                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button @click="prevStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button @click="nextStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>
                    </div>

                    <div x-show="step === 5" style="display: none;">
                    <!-- Etapa 5: Dados Pessoais -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">



                                <!-- Informe seus dados -->
                                <div class="col-span-6">


                                    <!-- Digite o Nome -->
                                    <div class="col-span-6">
                                        <label for="name" class="block text-secondary-700 text-sm font-bold mb-2">Nome</label>
                                        <input x-model="name" id="name" type="text" required name="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        @error('name') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Digite o Email -->
                                    <div class="col-span-6">
                                        <label for="email" class="block text-secondary-700 text-sm font-bold mb-2">Email</label>
                                        <input x-model="email" id="email" type="email" required name="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        @error('email') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Digite o Telefone com DDD -->
                                    <!-- Mobile Phone Number -->
                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="phone_celular" class="block text-secondary-700 text-sm font-bold mb-2">Celular</label>
                                        <input x-model="phone_celular" id="phone_celular" type="text" required name="phone_celular" 
                                        x-mask="(99) 99999-9999" placeholder="Celular"
                                        class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        @error('phone_celular') <span>{{ $message }}</span> @enderror
                                    </div>

                                </div>

                                 <!-- Checkbox para confirmar ou não interesse em receber comunicações -->
                                 <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input x-model="interesse_comunicacoes" id="interesse_comunicacoes" type="checkbox" name="interesse_comunicacoes" value="comunicacoes" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="interesse_comunicacoes" class="font-medium text-secondary-700">
                                                    Não tenho interesse em receber comunicações com condições especiais e ofertas de Produtos e Serviços Porto.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                       
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button @click="prevStep()" type="button" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button type="submit" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">ENVIAR</button>
                        </div>
                    </div>
                    </div>

                </form>
            </div>


        </div>

    </section>
</div>