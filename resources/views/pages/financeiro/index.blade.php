<x-layouts.app>
    <x-slot name="title">Financeiro</x-slot>

    <div class="bg-gradient-to-b from-green-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-green-600 to-emerald-700 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Soluções Financeiras</h1>
                    <p class="text-xl md:text-2xl mb-8 text-green-100">Crédito e financiamento para realizar seus sonhos</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        As melhores condições do mercado para empréstimos, financiamentos e cartões de crédito.
                        Soluções personalizadas para suas necessidades.
                    </p>
                </div>
            </div>
        </div>

        <!-- Categorias de Serviços -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <!-- Empréstimos e Crédito -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Empréstimos e Crédito</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <a href="{{ route('credito-pessoal') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-green-600">Crédito Pessoal</h3>
                        </div>
                        <p class="text-gray-600">Dinheiro rápido com as melhores taxas</p>
                    </a>

                    <a href="{{ route('consignado') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-blue-600">Consignado</h3>
                        </div>
                        <p class="text-gray-600">Desconto em folha com taxas reduzidas</p>
                    </a>

                    <a href="{{ route('emprestimo-com-garantia-de-veiculo') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-purple-600">Garantia de Veículo</h3>
                        </div>
                        <p class="text-gray-600">Use seu carro como garantia</p>
                    </a>

                    <a href="{{ route('credito-com-garantia-imobiliaria') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-indigo-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-indigo-600">Garantia Imobiliária</h3>
                        </div>
                        <p class="text-gray-600">Use seu imóvel como garantia</p>
                    </a>

                    <a href="{{ route('refinanciamento') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-yellow-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-yellow-600">Refinanciamento</h3>
                        </div>
                        <p class="text-gray-600">Melhore as condições do seu empréstimo</p>
                    </a>

                    <a href="{{ route('portabilidade') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-teal-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-bold group-hover:text-teal-600">Portabilidade</h3>
                        </div>
                        <p class="text-gray-600">Transfira seu crédito para melhores taxas</p>
                    </a>

                </div>
            </div>

            <!-- Financiamentos -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Financiamentos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <a href="{{ route('financiamento-de-veiculos') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="text-center">
                            <div class="bg-blue-100 p-4 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold group-hover:text-blue-600 mb-2">Veículos</h3>
                            <p class="text-sm text-gray-600">Financie seu carro ou moto</p>
                        </div>
                    </a>

                    <a href="{{ route('financiamento-de-imoveis') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="text-center">
                            <div class="bg-green-100 p-4 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold group-hover:text-green-600 mb-2">Imóveis</h3>
                            <p class="text-sm text-gray-600">Casa própria ou investimento</p>
                        </div>
                    </a>

                    <a href="{{ route('carro-facil') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="text-center">
                            <div class="bg-orange-100 p-4 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold group-hover:text-orange-600 mb-2">Carro Fácil</h3>
                            <p class="text-sm text-gray-600">Aprovação facilitada</p>
                        </div>
                    </a>

                    <a href="{{ route('tech-facil') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="text-center">
                            <div class="bg-purple-100 p-4 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold group-hover:text-purple-600 mb-2">Tech Fácil</h3>
                            <p class="text-sm text-gray-600">Eletrônicos e tecnologia</p>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Cartões e Outros Serviços -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Cartões e Outros Serviços</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <a href="{{ route('cartao-de-credito') }}" class="bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-lg shadow-xl p-8 hover:shadow-2xl transition-all">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-2">Cartão de Crédito</h3>
                        <p class="text-blue-100">Benefícios exclusivos e programa de pontos</p>
                    </a>

                    <a href="{{ route('solucoes-para-alugar') }}" class="bg-gradient-to-br from-purple-500 to-purple-700 text-white rounded-lg shadow-xl p-8 hover:shadow-2xl transition-all">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-2">Soluções para Alugar</h3>
                        <p class="text-purple-100">Garantias e facilidades para locação</p>
                    </a>

                    <a href="{{ route('renegociacao') }}" class="bg-gradient-to-br from-red-500 to-red-700 text-white rounded-lg shadow-xl p-8 hover:shadow-2xl transition-all">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <h3 class="text-2xl font-bold mb-2">Renegociação</h3>
                        <p class="text-red-100">Regularize suas dívidas com desconto</p>
                    </a>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-green-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Precisa de crédito?</h2>
                <p class="text-xl mb-8 text-green-100">Fale com nossos especialistas e encontre a melhor solução!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('solicitar-emprestimo') }}" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-green-50 transition-colors">
                        Solicitar Empréstimo
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
