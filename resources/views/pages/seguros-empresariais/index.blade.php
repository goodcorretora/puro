<x-layouts.app>
    <x-slot name="title">Seguros para Empresas</x-slot>

    <div class="bg-gradient-to-b from-slate-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-slate-700 to-slate-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Seguros para Empresas</h1>
                    <p class="text-xl md:text-2xl mb-8 text-slate-200">Proteja seu negócio e garanta a continuidade operacional</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        Soluções corporativas completas para proteger patrimônio, funcionários e operações.
                        Coberturas especializadas para cada tipo de negócio.
                    </p>
                </div>
            </div>
        </div>

        <!-- Seguros Principais -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <!-- Categorias Principais -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- Seguro Auto Empresarial -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-6 text-white">
                        <svg class="w-16 h-16 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Frota Empresarial</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Proteção completa para veículos comerciais e frotas</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Gestão centralizada de apólices
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Assistência 24h especializada
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Descontos para frotas
                            </li>
                        </ul>
                        <a href="{{ route('seguro-auto-para-empresas') }}" class="mt-6 block w-full bg-blue-600 text-white text-center px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Saiba Mais
                        </a>
                    </div>
                </div>

                <!-- Seguro Condomínio -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden">
                    <div class="bg-gradient-to-r from-green-600 to-green-700 p-6 text-white">
                        <svg class="w-16 h-16 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Condomínio</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Proteção completa para edifícios comerciais e residenciais</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Incêndio e danos elétricos
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Responsabilidade civil
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Equipamentos e áreas comuns
                            </li>
                        </ul>
                        <a href="{{ route('seguro-condominio') }}" class="mt-6 block w-full bg-green-600 text-white text-center px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition-colors">
                            Saiba Mais
                        </a>
                    </div>
                </div>

                <!-- Seguro Eventos -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-6 text-white">
                        <svg class="w-16 h-16 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Eventos</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Cobertura para shows, feiras e eventos corporativos</p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Cancelamento de evento
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Responsabilidade civil
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Equipamentos e estrutura
                            </li>
                        </ul>
                        <a href="{{ route('eventos') }}" class="mt-6 block w-full bg-purple-600 text-white text-center px-4 py-2 rounded-lg font-semibold hover:bg-purple-700 transition-colors">
                            Saiba Mais
                        </a>
                    </div>
                </div>

            </div>

            <!-- Seguros Especializados -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Seguros Especializados</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Máquinas e Equipamentos -->
                    <a href="{{ route('maquinas-e-equipamentos') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-orange-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-orange-600">Máquinas e Equipamentos</h3>
                        <p class="text-sm text-gray-600">Proteção para maquinário industrial</p>
                    </a>

                    <!-- Caminhão -->
                    <a href="{{ route('seguro-para-caminhoes') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-red-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-red-600">Caminhão</h3>
                        <p class="text-sm text-gray-600">Cobertura para veículos pesados</p>
                    </a>

                    <!-- Cargas -->
                    <a href="{{ route('seguro-para-cargas') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-indigo-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-indigo-600">Transporte de Cargas</h3>
                        <p class="text-sm text-gray-600">Proteção durante o transporte</p>
                    </a>

                    <!-- Responsabilidade Civil -->
                    <a href="{{ route('seguro-responsabilidade-civil') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-teal-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-teal-600">RC Empresarial</h3>
                        <p class="text-sm text-gray-600">Responsabilidade civil geral</p>
                    </a>

                    <!-- Agrícola -->
                    <a href="{{ route('seguro-para-agronegocios') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-green-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-green-600">Agrícola</h3>
                        <p class="text-sm text-gray-600">Proteção para plantações</p>
                    </a>

                    <!-- Garantia e Performance -->
                    <a href="{{ route('seguro-de-vida-para-empresas') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-yellow-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-yellow-600">Garantia</h3>
                        <p class="text-sm text-gray-600">Licitações e contratos</p>
                    </a>

                    <!-- Risco de Engenharia -->
                    <a href="{{ route('seguro-responsabilidade-civil') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-blue-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-blue-600">Risco de Engenharia</h3>
                        <p class="text-sm text-gray-600">Obras e construções</p>
                    </a>

                    <!-- Cyber Risk -->
                    <a href="{{ route('seguro-para-empresas') }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all p-6">
                        <div class="bg-purple-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-purple-600">Cyber Risk</h3>
                        <p class="text-sm text-gray-600">Segurança digital</p>
                    </a>

                </div>
            </div>

            <!-- Benefícios para Empresas -->
            <div class="bg-gradient-to-r from-slate-100 to-slate-200 rounded-2xl p-8 md:p-12 mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Vantagens para sua Empresa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Gestão Simplificada</h3>
                            <p class="text-gray-600 text-sm">Portal exclusivo para gerenciar todas as apólices</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Economia em Escala</h3>
                            <p class="text-gray-600 text-sm">Descontos progressivos para múltiplas apólices</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Assessoria Especializada</h3>
                            <p class="text-gray-600 text-sm">Consultoria dedicada ao seu segmento</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Atendimento Ágil</h3>
                            <p class="text-gray-600 text-sm">Suporte prioritário para sinistros</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Relatórios Detalhados</h3>
                            <p class="text-gray-600 text-sm">Análise de riscos e sinistralidade</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-slate-700 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Soluções Personalizadas</h3>
                            <p class="text-gray-600 text-sm">Coberturas adequadas ao seu negócio</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-slate-700 to-slate-900 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Proteja seu negócio com seguros empresariais!</h2>
                <p class="text-xl mb-8 text-slate-200">Fale com nossos especialistas corporativos</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contato') }}" class="bg-white text-slate-800 px-8 py-3 rounded-lg font-semibold hover:bg-slate-100 transition-colors">
                        Solicitar Cotação
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-slate-800 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
