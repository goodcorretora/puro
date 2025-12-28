<div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative w-auto h-auto">
    <!-- Modal com formulário para aceitar termos -->
    <div x-show="modalOpen" class="fixed top-0 left-0 z-[9999] flex items-center justify-center w-screen h-screen" x-cloak>
        <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-white backdrop-blur-xs bg-opacity-70"></div>
        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95" class="relative w-full py-6 bg-white border shadow-lg px-7 border-neutral-200 sm:max-w-lg sm:rounded-lg z-[10000]">
            <div class="flex items-center justify-between pb-3">
                <h3 class="text-lg font-semibold">Seja Bem-Vindo(a)</h3>
                <button @click="modalOpen=false" class="inline-flex items-center justify-center p-2 rounded-md text-secondary-700 hover:text-primary-600 focus:outline-hidden focus:text-primary-600 transition duration-150 ease-in-out">
                    <svg class="h-8 w-8 font-bold" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="relative w-auto pb-8">
                <form method="POST" action="{{ route('forms.aceite-wa.accept') }}" class="flex flex-col gap-4">
                    @csrf
                    <label class="flex items-start">
                        <input type="checkbox" name="aceito" id="aceito" value="1" required class="mt-1">
                        <span class="ml-2 text-lg">
                            Eu aceito os
                            <a href="{{ route('termos-de-servicos') }}" class="underline text-primary-600 hover:bg-primary-50">Termos de Serviços</a> e 
                            <a href="{{ route('politica-de-privacidade') }}" class="underline text-primary-600 hover:bg-primary-50">Política de Privacidade</a>.
                        </span>
                    </label>
                    <div class="flex gap-3">
                        <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 mt-4 text-lg font-medium transition-colors border rounded-md focus:outline-hidden focus:ring-2 focus:ring-primary-300 focus:ring-offset-2">Cancelar</button>
                        <button type="submit" class="inline-flex items-center justify-center h-10 px-4 py-3 mt-4 text-lg font-medium text-white transition-colors border border-transparent rounded-md focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 bg-primary-700 hover:bg-primary-700">Aceitar e Abrir WhatsApp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ícone do WhatsApp para abrir modal -->
    <i @click="modalOpen=true" class="fa-brands fa-whatsapp text-primary-600 fa-4x inline mr-0.5 cursor-pointer"></i>
</div>
