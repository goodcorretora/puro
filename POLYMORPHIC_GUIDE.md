# Guia de Uso dos Relacionamentos Polimórficos

## Estrutura da Refatoração

As tabelas `enderecos` e `documentos` foram refatoradas para usar relacionamentos polimórficos, permitindo que pertençam a múltiplos modelos (User, Consorcio, Odonto, Previdencia, Emprestimo, Cartao, Auto, Moto, Ocupacional).

## 1. Migration

Executar a migration para converter as tabelas:

```bash
php artisan migrate
```

Isso irá:
- Remover a coluna `user_id` de ambas as tabelas
- Adicionar colunas polimórficas `addressable_type` e `addressable_id` na tabela `enderecos`
- Adicionar colunas polimórficas `documentable_type` e `documentable_id` na tabela `documentos`
- Remover campos duplicados `name`, `email`, `phone_celular`

## 2. Uso nos Models

Todos os models agora possuem os relacionamentos:

```php
// Exemplo: User, Consorcio, Auto, etc.
public function enderecos(): MorphMany
{
    return $this->morphMany(Endereco::class, 'addressable');
}

public function documentos(): MorphMany
{
    return $this->morphMany(Documento::class, 'documentable');
}
```

## 3. Uso nos Controllers

### Criar um endereço:

```php
// Para um usuário
$user = User::find(1);
$user->enderecos()->create([
    'cep' => '01234-567',
    'endereco' => 'Rua Exemplo',
    'numero' => '123',
    'cidade' => 'São Paulo',
    'estado' => 'SP',
]);

// Para um consórcio
$consorcio = Consorcio::find(1);
$consorcio->enderecos()->create([...]);
```

### Criar um documento:

```php
$user = User::find(1);
$user->documentos()->create([
    'cpf_cnpj' => '123.456.789-00',
    'datadenascimento' => '1990-01-01',
    'genero' => 'Masculino',
    'estadocivil' => 'Solteiro',
]);
```

### Buscar endereços/documentos:

```php
// Todos os endereços de um usuário
$enderecos = $user->enderecos;

// Todos os documentos de um consórcio
$documentos = $consorcio->documentos;

// Obter o modelo pai de um endereço
$endereco = Endereco::find(1);
$owner = $endereco->addressable; // Retorna User, Consorcio, Auto, etc.
```

## 4. Uso nas Views (Componentes Blade)

### Formulário de Endereço:

```blade
<form action="{{ route('enderecos.store') }}" method="POST">
    @csrf
    <x-endereco-form :model="$user" />
    <button type="submit">Salvar</button>
</form>
```

### Formulário de Documento:

```blade
<form action="{{ route('documentos.store') }}" method="POST">
    @csrf
    <x-documento-form :model="$consorcio" />
    <button type="submit">Salvar</button>
</form>
```

### Editar um endereço existente:

```blade
<form action="{{ route('enderecos.update', $endereco->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <x-endereco-form :model="$user" :endereco="$endereco" />
    <button type="submit">Atualizar</button>
</form>
```

## 5. Rotas

Adicionar ao `routes/web.php`:

```php
Route::middleware(['auth'])->group(function () {
    // Endereços
    Route::post('/enderecos', [EnderecoController::class, 'store'])->name('enderecos.store');
    Route::patch('/enderecos/{id}', [EnderecoController::class, 'update'])->name('enderecos.update');
    Route::delete('/enderecos/{id}', [EnderecoController::class, 'destroy'])->name('enderecos.destroy');
    
    // Documentos
    Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');
    Route::patch('/documentos/{id}', [DocumentoController::class, 'update'])->name('documentos.update');
    Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');
});
```

## 6. Exemplo Completo em um Controller de Formulário

```php
use App\Models\User;
use App\Models\Consorcio;

class ConsorcioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            // ... outros campos do consórcio
            
            // Campos de endereço
            'cep' => 'required|string',
            'endereco' => 'required|string',
            // ... outros campos de endereço
            
            // Campos de documento
            'cpf_cnpj' => 'required|string',
            // ... outros campos de documento
        ]);

        // Criar o consórcio
        $consorcio = Consorcio::create([
            'user_id' => auth()->id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            // ... outros campos
        ]);

        // Criar o endereço polimórfico
        $consorcio->enderecos()->create([
            'cep' => $validated['cep'],
            'endereco' => $validated['endereco'],
            'numero' => $validated['numero'] ?? null,
            'complemento' => $validated['complemento'] ?? null,
            'bairro' => $validated['bairro'] ?? null,
            'cidade' => $validated['cidade'],
            'estado' => $validated['estado'],
        ]);

        // Criar o documento polimórfico
        $consorcio->documentos()->create([
            'cpf_cnpj' => $validated['cpf_cnpj'],
            'representante' => $validated['representante'] ?? null,
            'datadenascimento' => $validated['datadenascimento'] ?? null,
            'identidade' => $validated['identidade'] ?? null,
            'orgaoexpedidor' => $validated['orgaoexpedidor'] ?? null,
            'datadeexpedicao' => $validated['datadeexpedicao'] ?? null,
            'genero' => $validated['genero'] ?? null,
            'estadocivil' => $validated['estadocivil'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Consórcio cadastrado com sucesso!');
    }
}
```

## 7. Vantagens da Refatoração

1. **Eliminação de Duplicação**: Os campos de endereço e documento não precisam mais ser duplicados em cada tabela
2. **Manutenção Simplificada**: Alterações na estrutura de endereço/documento afetam apenas uma tabela
3. **Flexibilidade**: Qualquer modelo pode ter múltiplos endereços e documentos
4. **Normalização**: Banco de dados mais organizado e normalizado
5. **Reutilização**: Componentes Blade podem ser reutilizados em qualquer formulário

## 8. Migração de Dados Existentes

Se você já tem dados nas tabelas antigas, crie um script de migração:

```php
// Em uma migration ou seeder
$consorcios = Consorcio::all();

foreach ($consorcios as $consorcio) {
    // Migrar endereço
    if ($consorcio->cep) {
        $consorcio->enderecos()->create([
            'cep' => $consorcio->cep,
            'endereco' => $consorcio->endereco,
            'numero' => $consorcio->numero,
            // ... outros campos
        ]);
    }
    
    // Migrar documento
    if ($consorcio->cpf_cnpj) {
        $consorcio->documentos()->create([
            'cpf_cnpj' => $consorcio->cpf_cnpj,
            'representante' => $consorcio->representante,
            // ... outros campos
        ]);
    }
}
```
