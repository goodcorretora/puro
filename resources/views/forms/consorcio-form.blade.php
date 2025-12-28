<div>

    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <div x-data="{ isCnpj: false }">
                <!-- Success message -->
                @if ($message = Session::get('message'))
                <div class="p-3 rounded-sm bg-primary-500 text-gray-100 mb-4">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form action="{{ route('forms.consorcio.submit') }}" method="post">
                    @csrf


                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                    <input id="name" type="text" required name="name" autocomplete="name" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('name') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('email') <span>{{ $messages }}</span> @enderror
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

                                <div class="col-span-6">
                                    <label for="consorcio" class="block text-gray-700 text-sm font-bold mb-2">Veja nossos Produtos</label>
                                    <select id="consorcio" name="consorcio" autocomplete="consorcio-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                        <option>Escolha Aqui o Teu Sonho!</option>
                                        <option>Consórcio Imóvel</option>
                                        <option>Consórcio de Moto</option>
                                        <option>Consórcio de Veículo</option>
                                        <option>Consórcio de Veículo Pesado</option>
                                        <option>Consórcio de Veículo Usado</option>
                                        <option>Consórcio Máquinas</option>
                                        <option>Formatura e Intercâmbio </option>
                                        <option>Consórcio para Festas </option>
                                        <option>Consórcio para Viagem </option>
                                        <option>Consórcio para Procedimento Estético </option>
                                        <option>Consórcio para Cirúrgia </option>
                                        <option>Consórcio Reformas</option>
                                        <option>Consórcio de Veículo Usado</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" value="Submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-lio-500">ENVIAR</button>
                        </div>
                    </div>
                </form>
                </div>

            </div>

        </div>
    </section>

</div>
