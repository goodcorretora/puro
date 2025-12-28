<x-layouts.app>
    <x-slot name="title">Plano de Saúde</x-slot>

    <div class="bg-gradient-to-b from-blue-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Planos de Saúde</h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">Proteção completa para você e sua família</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        Planos de saúde empresariais, individuais e odontológicos das melhores operadoras do mercado.
                        Cuide da sua saúde com qualidade e tranquilidade.
                    </p>
                </div>
            </div>
        </div>

        <!-- Planos Principais -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- Plano Empresarial -->
                <a href="{{ route('plano-de-saude-empresarial') }}" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden group">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Plano Empresarial</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>A partir de 2 vidas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Rede credenciada nacional</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Cobertura completa ANS</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Telemedicina incluída</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <span class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">Para Empresas</span>
                        </div>
                    </div>
                </a>

                <!-- Plano Individual -->
                <a href="{{ route('plano-de-saude-individual') }}" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden group">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-8 text-white">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Plano Individual</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Para você e sua família</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Opções de acomodação</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Sem carência para urgências</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Portabilidade facilitada</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <span class="inline-block bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold">Para Você</span>
                        </div>
                    </div>
                </a>

                <!-- Plano Odontológico -->
                <a href="{{ route('plano-odontologico') }}" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all overflow-hidden group">
                    <div class="bg-gradient-to-r from-teal-600 to-teal-700 p-8 text-white">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Plano Odontológico</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Sem carências</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Limpeza e prevenção</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Tratamentos ortodônticos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <span>Rede credenciada ampla</span>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <span class="inline-block bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold">Saúde Bucal</span>
                        </div>
                    </div>
                </a>

            </div>

            <!-- Operadoras Parceiras -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Principais Operadoras</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    
                    <a href="{{ route('portoseguro') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-blue-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                            <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-blue-600">Porto Seguro Saúde</h3>
                    </a>

                    <a href="{{ route('sulamerica') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-green-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-green-200 transition-colors">
                            <svg class="w-10 h-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-green-600">SulAmérica Saúde</h3>
                    </a>

                    <a href="{{ route('sulamerica-odonto') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-teal-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-teal-200 transition-colors">
                            <svg class="w-10 h-10 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-teal-600">SulAmérica Odonto</h3>
                    </a>

                    <a href="{{ route('saude-ocupacional') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-orange-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                            <svg class="w-10 h-10 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-orange-600">Saúde Ocupacional</h3>
                    </a>

                </div>
            </div>

            <!-- Benefícios -->
            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Por que escolher nossos planos?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="text-center">
                        <div class="bg-white w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Aprovação Rápida</h3>
                        <p class="text-sm text-gray-600">Contratação em até 48h</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-white w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Atendimento Personalizado</h3>
                        <p class="text-sm text-gray-600">Consultoria especializada</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-white w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Melhor Custo-Benefício</h3>
                        <p class="text-sm text-gray-600">Preços competitivos</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-white w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Suporte 24/7</h3>
                        <p class="text-sm text-gray-600">Sempre à sua disposição</p>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Proteja sua saúde agora!</h2>
                <p class="text-xl mb-8 text-blue-100">Faça uma cotação gratuita e sem compromisso</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('solicitar-plano-de-saude') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                        Solicitar Cotação
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
