<div>
    @if(!isset($accepted) && !isset($declined))
    <div class="bg-gray-100 flex flex-col justify-center ">

        <div x-transition:enter-start="opacity-0 scale-90" x-transition:enter="transition duration-200 transform ease" x-transition:leave="transition duration-200 transform ease" x-transition:leave-end="opacity-0 scale-90" class="max-w-(--breakpoint-lg) mx-auto fixed bg-white inset-x-5 p-5 bottom-40 rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
            <div class="w-full">
                <span class="text-xl font-bold text-gray-900 leading-tight mb-1 lg:text-3xl block">Cookies e Privacidade</span>
                <span class="space-y-4  text-gray-800 text-base leading-8 font-medium md:mb-6">
                    Ao navegar no site, você automaticamente aceita que usemos cookies.
                    Para saber mais leia nossa
                    <a href="https://www.goodcorretora.com.br/politica-de-privacidade/" class="text-primary-600" target="_blank">Política de Privacidade</a> e
                    <a href="https://www.goodcorretora.com.br/termos-de-servicos/" class="text-primary-600" target="_blank">Termos de Serviços</a>.
                </span>
            </div>
            <div class="flex gap-4 items-center shrink-0">
                <form wire:submit="save">
                    <div class="lg:mt-8 space-x-3 flex rounded-md shadow-sm">
                        <x-button wire:click="accept" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary-600 px-5 py-3 text-base font-medium text-white hover:bg-primary-700">
                            Aceitar todos os Cookies
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @endif
</div>