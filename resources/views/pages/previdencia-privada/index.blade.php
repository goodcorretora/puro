<x-layouts.app>
    <x-slot name="title">Previdência Privada</x-slot>

    <div class="bg-gradient-to-b from-indigo-50 to-white">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Previdência Privada</h1>
                    <p class="text-xl md:text-2xl mb-8 text-indigo-100">Planeje seu futuro com segurança e tranquilidade</p>
                    <p class="text-lg max-w-3xl mx-auto">
                        Invista no seu amanhã com planos de previdência privada que garantem rentabilidade,
                        segurança e benefícios fiscais. Construa seu patrimônio e garanta uma aposentadoria tranquila.
                    </p>
                </div>
            </div>
        </div>

        <!-- Tipos de Previdência -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                
                <!-- Previdência Empresarial -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-8 text-white">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h2 class="text-3xl font-bold mb-2">Previdência Empresarial</h2>
                        <p class="text-blue-100">Benefício estratégico para sua empresa</p>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Retenção de talentos:</strong>
                                    <span class="text-gray-600"> Atraia e mantenha os melhores profissionais</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Benefícios fiscais:</strong>
                                    <span class="text-gray-600"> Deduções no imposto de renda</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Flexibilidade:</strong>
                                    <span class="text-gray-600"> Contribuições ajustáveis ao orçamento</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Gestão profissional:</strong>
                                    <span class="text-gray-600"> Administração especializada</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('previdencia-privada-empresarial') }}" class="block w-full bg-blue-600 text-white text-center px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Previdência Individual -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-8 text-white">
                        <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <h2 class="text-3xl font-bold mb-2">Previdência Individual</h2>
                        <p class="text-purple-100">Seu futuro nas suas mãos</p>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Autonomia total:</strong>
                                    <span class="text-gray-600"> Você decide quando e quanto investir</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Isenção de IR:</strong>
                                    <span class="text-gray-600"> Na sucessão patrimonial</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Portabilidade:</strong>
                                    <span class="text-gray-600"> Mude de plano sem perder rentabilidade</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                                <div>
                                    <strong class="text-gray-900">Diversificação:</strong>
                                    <span class="text-gray-600"> Múltiplos perfis de investimento</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('previdencia-privada-individual') }}" class="block w-full bg-purple-600 text-white text-center px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Planos Especiais -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Planos Especiais</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Previdência Infantil -->
                    <a href="{{ route('previdencia-privada-infantil') }}" class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                        <div class="bg-yellow-100 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-yellow-600">Previdência Infantil</h3>
                        <p class="text-gray-600 mb-4">Garanta o futuro dos seus filhos desde cedo. Ideal para educação e primeiros investimentos.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Investimento de longo prazo
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Contribuições flexíveis
                            </li>
                        </ul>
                    </a>

                    <!-- Porto Previdência -->
                    <a href="{{ route('porto-previdencia') }}" class="group bg-gradient-to-br from-blue-600 to-blue-800 text-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                        <div class="bg-white/20 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Porto Previdência</h3>
                        <p class="text-blue-100 mb-4">Tradição e segurança de uma das maiores seguradoras do país.</p>
                        <ul class="space-y-2 text-sm text-blue-100">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Gestão profissional
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Diversas opções de fundos
                            </li>
                        </ul>
                    </a>

                    <!-- Proteção Planejada -->
                    <a href="{{ route('protecao-planejada') }}" class="group bg-gradient-to-br from-green-600 to-green-800 text-white rounded-lg shadow-lg hover:shadow-xl transition-all p-6">
                        <div class="bg-white/20 p-4 rounded-lg mb-4 inline-block">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Proteção Planejada</h3>
                        <p class="text-green-100 mb-4">Combine previdência com proteção familiar em um único plano.</p>
                        <ul class="space-y-2 text-sm text-green-100">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Previdência + Seguro
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Cobertura completa
                            </li>
                        </ul>
                    </a>

                </div>
            </div>

            <!-- Vantagens -->
            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Vantagens da Previdência Privada</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="flex items-start">
                        <div class="bg-indigo-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Benefícios Fiscais</h3>
                            <p class="text-gray-600 text-sm">Deduza até 12% da renda bruta anual no IR com plano PGBL</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-purple-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Proteção Patrimonial</h3>
                            <p class="text-gray-600 text-sm">Recursos protegidos de penhora e não entram em inventário</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-blue-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Rentabilidade</h3>
                            <p class="text-gray-600 text-sm">Gestão profissional com potencial de retorno superior à poupança</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-green-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Portabilidade</h3>
                            <p class="text-gray-600 text-sm">Transfira seus recursos entre planos sem custo e sem tributação</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-yellow-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Flexibilidade</h3>
                            <p class="text-gray-600 text-sm">Ajuste aportes conforme sua realidade financeira</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-red-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Sucessão Facilitada</h3>
                            <p class="text-gray-600 text-sm">Beneficiários recebem rapidamente, sem burocracia</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Comece a planejar seu futuro hoje!</h2>
                <p class="text-xl mb-8 text-indigo-100">Fale com nossos especialistas e descubra o melhor plano para você</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('solicitar-previdencia-privada') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition-colors">
                        Fazer Simulação
                    </a>
                    <a href="{{ route('contato') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition-colors">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
