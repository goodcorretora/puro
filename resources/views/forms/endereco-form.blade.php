<div class="container mx-auto mt-8">

    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('success'))
                <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4">
                    <span>{{ $message }}</span>
                </div>
                @endif


                <!-- Success message -->
                @if (session()->has('message'))
                <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4 ">
                    <span>{{ session('message') }}</span>
                </div>
                @endif

                <form method="POST" action="{{ route('forms.endereco.submit') }}">
                    @csrf
                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Campos do formulário -->
                                <div class="mb-4 col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                                    <input wire:model.live="name" type="text" id="name" name="name" autocomplete="name" class="form-input mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span>{{ $messages }}</span> @enderror
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                    <input wire:model.live="email" type="text" id="email" autocomplete="email" email="email" class="form-input mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('email') <span>{{ $messages }}</span> @enderror
                                </div>

                                <div class="inline col-span-6 sm:col-span-1">
                                    <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP</label>
                                    <input wire:model.live.debounce.150ms="cep" type="text" name="cep" id="cep" autocomplete="cep" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('cep') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                    <div class="mt-2 flex items-center gap-x-3">
                                        <button type="button" wire:click="buscarCep" wire:loading.attr="disabled" class="bg-primary-600 text-white px-4 py-2 rounded-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-3">
                                    <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço</label>
                                    <input wire:model.live="endereco" type="text" name="endereco" id="endereco" autocomplete="endereco" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número</label>
                                    <input wire:model.live="numero" type="text" name="numero" id="numero" autocomplete="numero" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="complemento" class="block text-gray-700 text-sm font-bold mb-2">Complemento</label>
                                    <input wire:model.live="complemento" type="text" name="complemento" id="complemento" autocomplete="complemento" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro</label>
                                    <input wire:model.live="bairro" type="text" name="bairro" id="bairro" autocomplete="bairro" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade</label>
                                    <input wire:model.live="cidade" type="text" name="cidade" id="cidade" autocomplete="cidade" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                    <input wire:model.live="estado" type="text" name="estado" id="estado" autocomplete="estado" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>
                        </div>
                        <!-- ... -->
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-400 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>