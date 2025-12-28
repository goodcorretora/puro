<div>

    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('success'))
                <div class="p-3 rounded-sm bg-primary-500 text-white mb-4">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form action="{{ route('forms.contato.submit') }}" method="post">
                    @csrf


                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                    <input wire:model.live="name" id="name" type="text" required name="name" value="{{ old('name') }}" autocomplete="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input wire:model.live="email" id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('email') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Mobile Phone Number -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
                                    <input wire:model.live="phone_celular" id="phone_celular" type="text" required name="phone_celular" autocomplete="phone_celular" x-mask="(99) 99999 99 99" placeholder="Celular" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('phone_celular') <span>{{ $messages }}</span> @enderror
                                </div>

                                <!-- Fixed Phone Number (optional) -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_fixo" class="block text-gray-700 text-sm font-bold mb-2">Fixo</label>
                                    <input wire:model.live="phone_fixo" id="phone_fixo" type="text" name="phone_fixo" autocomplete="phone_fixo" x-mask="(99) 9999 99 99" placeholder="Fixo" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('phone_fixo') <span>{{ $messages }}</span> @enderror
                                </div>


                                <div class="col-span-6">
                                    <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                                    <input wire:model.live="subject" type="text" name="subject" id="subject" autocomplete="subject" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2"> Mensagem </label>
                                    <div class="mt-1">
                                        <textarea wire:model.live="message" id="message" name="message" rows="3" class="shadow-xs focus:ring-primary-600 focus:border-primary-600 mt-1 block w-full sm:text-base border border-gray-300 rounded-md" placeholder="Deixa aqui sua mensagem"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" value="Submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">ENVIAR</button>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </section>

</div>