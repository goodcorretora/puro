<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Endereços e Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Seção de Documentos -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" x-data="{ showDocumentoForm: false }">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">📄 Meus Documentos</h3>
                        <button 
                            @click="showDocumentoForm = !showDocumentoForm" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            + Adicionar Documento
                        </button>
                    </div>

                    <!-- Formulário de Novo Documento -->
                    <div x-show="showDocumentoForm" class="mb-6 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold mb-4">Novo Documento</h4>
                        <form action="{{ route('documentos.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="documentable_type" value="App\Models\User">
                            <input type="hidden" name="documentable_id" value="{{ auth()->id() }}">
                            
                            <x-documento-form :model="auth()->user()" />
                            
                            <div class="mt-4 flex gap-2">
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Salvar Documento
                                </button>
                                <button type="button" @click="showDocumentoForm = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Lista de Documentos -->
                    <div class="space-y-4">
                        @forelse(auth()->user()->documentos as $documento)
                            <div class="border rounded-lg p-4 bg-white" x-data="{ editing: false }">
                                <div x-show="!editing">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <span class="text-sm text-gray-600">CPF/CNPJ:</span>
                                            <p class="font-semibold">{{ $documento->cpf_cnpj }}</p>
                                        </div>
                                        @if($documento->representante)
                                        <div>
                                            <span class="text-sm text-gray-600">Representante:</span>
                                            <p class="font-semibold">{{ $documento->representante }}</p>
                                        </div>
                                        @endif
                                        @if($documento->datadenascimento)
                                        <div>
                                            <span class="text-sm text-gray-600">Data de Nascimento:</span>
                                            <p class="font-semibold">{{ \Carbon\Carbon::parse($documento->datadenascimento)->format('d/m/Y') }}</p>
                                        </div>
                                        @endif
                                        @if($documento->genero)
                                        <div>
                                            <span class="text-sm text-gray-600">Gênero:</span>
                                            <p class="font-semibold">{{ $documento->genero }}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mt-4 flex gap-2">
                                        <button @click="editing = true" class="text-blue-600 hover:text-blue-800">Editar</button>
                                        <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Tem certeza?')" class="text-red-600 hover:text-red-800">Deletar</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Formulário de Edição -->
                                <div x-show="editing" style="display: none;">
                                    <form action="{{ route('documentos.update', $documento->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        
                                        <x-documento-form :model="auth()->user()" :documento="$documento" />
                                        
                                        <div class="mt-4 flex gap-2">
                                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                Salvar Alterações
                                            </button>
                                            <button type="button" @click="editing = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                Cancelar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-8">Nenhum documento cadastrado ainda.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Seção de Endereços -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" x-data="{ showEnderecoForm: false }">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">🏠 Meus Endereços</h3>
                        <button 
                            @click="showEnderecoForm = !showEnderecoForm" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            + Adicionar Endereço
                        </button>
                    </div>

                    <!-- Formulário de Novo Endereço -->
                    <div x-show="showEnderecoForm" class="mb-6 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold mb-4">Novo Endereço</h4>
                        <form action="{{ route('enderecos.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="addressable_type" value="App\Models\User">
                            <input type="hidden" name="addressable_id" value="{{ auth()->id() }}">
                            
                            <x-endereco-form :model="auth()->user()" />
                            
                            <div class="mt-4 flex gap-2">
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Salvar Endereço
                                </button>
                                <button type="button" @click="showEnderecoForm = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Lista de Endereços -->
                    <div class="space-y-4">
                        @forelse(auth()->user()->enderecos as $endereco)
                            <div class="border rounded-lg p-4 bg-white" x-data="{ editing: false }">
                                <div x-show="!editing">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <span class="text-sm text-gray-600">CEP:</span>
                                            <p class="font-semibold">{{ $endereco->cep }}</p>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-600">Endereço:</span>
                                            <p class="font-semibold">{{ $endereco->endereco }}, {{ $endereco->numero }}</p>
                                        </div>
                                        @if($endereco->complemento)
                                        <div>
                                            <span class="text-sm text-gray-600">Complemento:</span>
                                            <p class="font-semibold">{{ $endereco->complemento }}</p>
                                        </div>
                                        @endif
                                        <div>
                                            <span class="text-sm text-gray-600">Cidade/Estado:</span>
                                            <p class="font-semibold">{{ $endereco->cidade }} - {{ $endereco->estado }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex gap-2">
                                        <button @click="editing = true" class="text-blue-600 hover:text-blue-800">Editar</button>
                                        <form action="{{ route('enderecos.destroy', $endereco->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Tem certeza?')" class="text-red-600 hover:text-red-800">Deletar</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Formulário de Edição -->
                                <div x-show="editing" style="display: none;">
                                    <form action="{{ route('enderecos.update', $endereco->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        
                                        <x-endereco-form :model="auth()->user()" :endereco="$endereco" />
                                        
                                        <div class="mt-4 flex gap-2">
                                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                Salvar Alterações
                                            </button>
                                            <button type="button" @click="editing = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                Cancelar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-8">Nenhum endereço cadastrado ainda.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
