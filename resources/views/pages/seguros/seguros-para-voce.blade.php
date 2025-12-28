<x-layouts.app>
    <x-slot name="title">Seguros para Você</x-slot>

    <div class="bg-gradient-to-b from-red-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-red-600 to-orange-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Seguros para Você</h1>
                    <p class="text-xl md:text-2xl mb-8 text-red-100">Proteja o que é mais importante</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        Seguros completos para proteger você, sua família e seus bens.
                        Tranquilidade e segurança em todas as situações da vida.
                    </p>
                </div>
            </div>
        </div>

        <!-- Seguros Principais -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <!-- Destaque Principal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                
                <!-- Seguro Auto -->
                <a href="{{ route('seguro-auto') }}" class="group bg-gradient-to-br from-blue-600 to-blue-800 text-white rounded-xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all">
                    <div class="p-8">
                        <svg class="w-20 h-20 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h2 class="text-3xl font-bold mb-4">Seguro Auto</h2>
                        <p class="text-blue-100 mb-6">Proteção completa para seu veículo com as melhores coberturas do mercado</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Cobertura contra roubo e furto
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Assistência 24 horas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Carro reserva
                            </li>
                        </ul>
                        <span class="inline-block bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold group-hover:bg-blue-50 transition-colors">
                            Faça sua Cotação →
                        </span>
                    </div>
                </a>

                <!-- Seguro Residencial -->
                <a href="{{ route('seguro-residencial') }}" class="group bg-gradient-to-br from-green-600 to-green-800 text-white rounded-xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all">
                    <div class="p-8">
                        <svg class="w-20 h-20 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <h2 class="text-3xl font-bold mb-4">Seguro Residencial</h2>
                        <p class="text-green-100 mb-6">Seu lar protegido contra imprevistos com tranquilidade total</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Proteção contra incêndio e roubo
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Cobertura de conteúdo
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                Responsabilidade civil
                            </li>
                        </ul>
                        <span class="inline-block bg-white text-green-600 px-6 py-2 rounded-lg font-semibold group-hover:bg-green-50 transition-colors">
                            Faça sua Cotação →
                        </span>
                    </div>
                </a>

            </div>

            <!-- Outros Seguros -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                
                <!-- Seguro Viagem -->
                <a href="{{ route('seguro-viagem') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-purple-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-purple-600">Seguro Viagem</h3>
                    <p class="text-gray-600 mb-4">Viaje com segurança para qualquer destino</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Assistência médica internacional</li>
                        <li>• Extravio de bagagem</li>
                        <li>• Cancelamento de viagem</li>
                    </ul>
                </a>

                <!-- Seguro Vida -->
                <a href="{{ route('seguro-vida') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-red-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-red-600">Seguro Vida</h3>
                    <p class="text-gray-600 mb-4">Proteção para quem você ama</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Morte natural ou acidental</li>
                        <li>• Invalidez permanente</li>
                        <li>• Doenças graves</li>
                    </ul>
                </a>

                <!-- Seguro Moto -->
                <a href="{{ route('seguro-moto') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-orange-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-orange-600">Seguro Moto</h3>
                    <p class="text-gray-600 mb-4">Sua moto sempre protegida</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Cobertura completa</li>
                        <li>• Assistência 24h</li>
                        <li>• Proteção de equipamentos</li>
                    </ul>
                </a>

                <!-- Seguro Bike -->
                <a href="{{ route('seguro-bike') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-yellow-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-yellow-600">Seguro Bike</h3>
                    <p class="text-gray-600 mb-4">Pedale com tranquilidade</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Roubo e furto</li>
                        <li>• Acidentes pessoais</li>
                        <li>• Danos à bicicleta</li>
                    </ul>
                </a>

                <!-- Seguro Celular -->
                <a href="{{ route('seguro-celular') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-indigo-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600">Seguro Celular</h3>
                    <p class="text-gray-600 mb-4">Proteção para seu smartphone</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Quebra de tela</li>
                        <li>• Roubo qualificado</li>
                        <li>• Oxidação e danos elétricos</li>
                    </ul>
                </a>

                <!-- Seguro Fiança -->
                <a href="{{ route('seguro-fianca') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                    <div class="bg-teal-100 p-4 rounded-lg mb-4 inline-block">
                        <svg class="w-12 h-12 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-teal-600">Seguro Fiança</h3>
                    <p class="text-gray-600 mb-4">Alugue sem fiador ou caução</p>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>• Substitui o fiador</li>
                        <li>• Aprovação rápida</li>
                        <li>• Sem imobilizar capital</li>
                    </ul>
                </a>

            </div>

            <!-- Seguros Especializados -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Seguros Especializados</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <a href="{{ route('plano-saude-pets') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-pink-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-pink-200 transition-colors">
                            <svg class="w-10 h-10 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-pink-600">Seguro Pet</h3>
                        <p class="text-sm text-gray-600 mt-2">Saúde do seu amigo</p>
                    </a>

                    <a href="{{ route('seguro-para-equipamentos-portateis') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-cyan-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-cyan-200 transition-colors">
                            <svg class="w-10 h-10 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-cyan-600">Equipamentos Portáteis</h3>
                        <p class="text-sm text-gray-600 mt-2">Notebooks e tablets</p>
                    </a>

                    <a href="{{ route('seguro-vida') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-gray-200 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-gray-300 transition-colors">
                            <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-gray-600">Seguro Funeral</h3>
                        <p class="text-sm text-gray-600 mt-2">Amparo à família</p>
                    </a>

                    <a href="{{ route('protecao-planejada') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all text-center group">
                        <div class="bg-red-100 w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-red-200 transition-colors">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 group-hover:text-red-600">Acidentes Pessoais</h3>
                        <p class="text-sm text-gray-600 mt-2">Proteção 24h</p>
                    </a>

                </div>
            </div>

            <!-- Por que contratar -->
            <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Por que contratar com a gente?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="text-center">
                        <div class="bg-white w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Melhores Seguradoras</h3>
                        <p class="text-gray-600">Trabalhamos com as principais seguradoras do Brasil</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-white w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Melhor Preço</h3>
                        <p class="text-gray-600">Cotamos em diversas seguradoras para você economizar</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-white w-20 h-20 rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2">Atendimento Personalizado</h3>
                        <p class="text-gray-600">Suporte completo em todo o processo</p>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-red-600 to-orange-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Proteja o que é importante para você!</h2>
                <p class="text-xl mb-8 text-red-100">Faça uma cotação gratuita e sem compromisso</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contato') }}" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-50 transition-colors">
                        Cotar Seguro
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
