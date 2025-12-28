<x-layouts.app>
    <x-slot name="title">Consórcio</x-slot>

    <div class="bg-gradient-to-b from-blue-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Consórcio</h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">Realize seus sonhos sem juros!</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        O consórcio é uma forma inteligente de conquistar bens e serviços sem pagar juros. 
                        Planeje seu futuro com flexibilidade e segurança.
                    </p>
                </div>
            </div>
        </div>

        <!-- Serviços de Consórcio -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nossos Consórcios</h2>
                <p class="text-lg text-gray-600">Escolha o consórcio ideal para realizar seus objetivos</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Consórcio de Veículos -->
                <a href="{{ route('consorcio-de-veiculos') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Consórcio de Veículos</h3>
                        <p class="text-gray-600 mb-4">Conquiste seu carro novo ou usado sem pagar juros. Parcelas que cabem no seu bolso.</p>
                        <span class="text-blue-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio de Motos -->
                <a href="{{ route('consorcio-de-motos') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors">Consórcio de Motos</h3>
                        <p class="text-gray-600 mb-4">Realize o sonho da moto própria com parcelas acessíveis e sem juros.</p>
                        <span class="text-red-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio de Imóveis -->
                <a href="{{ route('consorcio-de-imoveis') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Consórcio de Imóveis</h3>
                        <p class="text-gray-600 mb-4">Casa própria ou investimento imobiliário sem juros. Planeje seu patrimônio.</p>
                        <span class="text-green-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio de Bike -->
                <a href="{{ route('consorcio-de-bike') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors">Consórcio de Bike</h3>
                        <p class="text-gray-600 mb-4">Sua bike dos sonhos com parcelas que cabem no seu orçamento.</p>
                        <span class="text-orange-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio Sustentável -->
                <a href="{{ route('consorcio-sustentavel-de-placas-solares') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-teal-600 transition-colors">Consórcio Sustentável</h3>
                        <p class="text-gray-600 mb-4">Energia solar para sua casa ou empresa. Economia e sustentabilidade.</p>
                        <span class="text-teal-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio de Serviços -->
                <a href="{{ route('consorcio-de-servicos') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">Consórcio de Serviços</h3>
                        <p class="text-gray-600 mb-4">Viagens, formaturas, festas e muito mais. Realize seus projetos!</p>
                        <span class="text-purple-600 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

                <!-- Consórcio de Veículos Pesados -->
                <a href="{{ route('consorcio-de-veiculos-pesados') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-gray-700 transition-colors">Máquinas Agrícolas e Veículos Pesados</h3>
                        <p class="text-gray-600 mb-4">Equipamentos para agronegócio e transporte. Invista no seu negócio.</p>
                        <span class="text-gray-700 font-semibold group-hover:underline">Saiba mais →</span>
                    </div>
                </a>

            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-blue-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Pronto para começar seu consórcio?</h2>
                <p class="text-xl mb-8 text-blue-100">Fale com nossos especialistas e descubra a melhor opção para você!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('solicitar-consorcio') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                        Solicitar Consórcio
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
