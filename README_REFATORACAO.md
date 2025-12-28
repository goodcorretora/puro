# Refatoração Completa - Endereços e Documentos Polimórficos

## ✅ Arquivos Criados/Modificados

### 1. Migration
- ✅ `database/migrations/2025_12_27_000001_make_enderecos_documentos_polymorphic.php`

### 2. Models Atualizados
- ✅ `app/Models/Endereco.php` - Adicionado `morphTo('addressable')`
- ✅ `app/Models/Documento.php` - Adicionado `morphTo('documentable')`
- ✅ `app/Models/User.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Consorcio.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Auto.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Moto.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Cartao.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Emprestimo.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Odonto.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Previdencia.php` - Adicionado `morphMany` para enderecos e documentos
- ✅ `app/Models/Ocupacional.php` - Adicionado `morphMany` para enderecos e documentos

### 3. Traits (Opcional)
- ✅ `app/Traits/HasAddress.php` - Trait para relacionamentos de endereço
- ✅ `app/Traits/HasDocument.php` - Trait para relacionamentos de documento

### 4. Controllers
- ✅ `app/Http/Controllers/EnderecoController.php` - CRUD para endereços polimórficos
- ✅ `app/Http/Controllers/DocumentoController.php` - CRUD para documentos polimórficos

### 5. Views (Componentes Blade)
- ✅ `resources/views/components/endereco-form.blade.php` - Formulário reutilizável de endereço
- ✅ `resources/views/components/documento-form.blade.php` - Formulário reutilizável de documento
- ✅ `resources/views/emails/consorcio-polymorphic.blade.php` - Template de email exemplo

### 6. Rotas
- ✅ `routes/web.php` - Adicionadas rotas para enderecos e documentos

### 7. Documentação
- ✅ `POLYMORPHIC_GUIDE.md` - Guia completo de uso
- ✅ `README_REFATORACAO.md` - Este arquivo

## 🚀 Como Executar a Refatoração

### Passo 1: Backup do Banco de Dados
```bash
# IMPORTANTE: Faça backup antes de continuar!
# PostgreSQL
pg_dump nome_do_banco > backup_$(date +%Y%m%d).sql

# MySQL
mysqldump -u usuario -p nome_do_banco > backup_$(date +%Y%m%d).sql
```

### Passo 2: Executar a Migration
```bash
php artisan migrate
```

**ATENÇÃO**: Esta migration irá:
- ❌ Remover a coluna `user_id` das tabelas `enderecos` e `documentos`
- ❌ Remover as colunas `name`, `email`, `phone_celular` de ambas as tabelas
- ✅ Adicionar colunas polimórficas `addressable_type`, `addressable_id`, `documentable_type`, `documentable_id`

### Passo 3: Migrar Dados Existentes (Se Necessário)

Se você já possui dados nas tabelas antigas, crie um comando para migrar:

```bash
php artisan make:command MigratePolymorphicData
```

Exemplo de código:

```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{User, Consorcio, Auto, Moto, Cartao, Emprestimo, Odonto, Previdencia, Ocupacional};

class MigratePolymorphicData extends Command
{
    protected $signature = 'migrate:polymorphic-data';
    protected $description = 'Migra dados antigos para relacionamentos polimórficos';

    public function handle()
    {
        $this->info('Iniciando migração de dados polimórficos...');
        
        // Verificar se ainda existem registros com user_id
        // Se sim, criar enderecos/documentos polimórficos baseados nos dados antigos
        
        // Exemplo para Consórcio
        $consorcios = Consorcio::whereNotNull('user_id')->get();
        
        foreach ($consorcios as $consorcio) {
            // Se existe dados de endereço nas colunas antigas do consórcio
            // Criar um novo endereco polimórfico
            
            // Se existe dados de documento nas colunas antigas do consórcio  
            // Criar um novo documento polimórfico
        }
        
        $this->info('Migração concluída!');
    }
}
```

### Passo 4: Atualizar Controllers de Formulários Existentes

Você precisa atualizar os controllers existentes em `app/Http/Controllers/Forms/` para usar os novos relacionamentos:

**ANTES:**
```php
public function store(Request $request)
{
    $consorcio = Consorcio::create([
        'user_id' => auth()->id(),
        'name' => $request->name,
        'email' => $request->email,
        'cep' => $request->cep,
        'endereco' => $request->endereco,
        // ... outros campos
    ]);
}
```

**DEPOIS:**
```php
public function store(Request $request)
{
    // Criar o registro principal
    $consorcio = Consorcio::create([
        'user_id' => auth()->id(),
        'name' => $request->name,
        'email' => $request->email,
        'phone_celular' => $request->phone_celular,
        'cpf_cnpj' => $request->cpf_cnpj,
        'representante' => $request->representante,
        'consorcio' => $request->consorcio,
    ]);

    // Criar endereço polimórfico se fornecido
    if ($request->filled('cep')) {
        $consorcio->enderecos()->create([
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);
    }

    // Criar documento polimórfico se fornecido
    if ($request->filled('cpf_cnpj')) {
        $consorcio->documentos()->create([
            'cpf_cnpj' => $request->cpf_cnpj,
            'representante' => $request->representante,
            'datadenascimento' => $request->datadenascimento,
            'identidade' => $request->identidade,
            'orgaoexpedidor' => $request->orgaoexpedidor,
            'datadeexpedicao' => $request->datadeexpedicao,
            'genero' => $request->genero,
            'estadocivil' => $request->estadocivil,
        ]);
    }

    // Enviar email
    Mail::to('email@destino.com')->send(new ConsorcioMail($consorcio));
}
```

### Passo 5: Atualizar Templates de Email

Os emails agora devem usar os relacionamentos:

**ANTES:**
```blade
<p>CEP: {{ $consorcio->cep }}</p>
<p>Endereço: {{ $consorcio->endereco }}</p>
```

**DEPOIS:**
```blade
@if($consorcio->enderecos->isNotEmpty())
    @foreach($consorcio->enderecos as $endereco)
        <p>CEP: {{ $endereco->cep }}</p>
        <p>Endereço: {{ $endereco->endereco }}, {{ $endereco->numero }}</p>
    @endforeach
@endif
```

### Passo 6: Atualizar Formulários

Use os novos componentes Blade nos formulários:

```blade
<form action="{{ route('forms.consorcio.store') }}" method="POST">
    @csrf
    
    <!-- Campos específicos do consórcio -->
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="E-mail">
    
    <!-- Componente de endereço -->
    <x-endereco-form :model="new App\Models\Consorcio()" />
    
    <!-- Componente de documento -->
    <x-documento-form :model="new App\Models\Consorcio()" />
    
    <button type="submit">Enviar</button>
</form>
```

## 📋 Checklist de Refatoração

- [ ] Backup do banco de dados
- [ ] Executar migration
- [ ] Migrar dados existentes (se houver)
- [ ] Atualizar controllers de formulários (Forms/*.php)
- [ ] Atualizar templates de email
- [ ] Atualizar formulários para usar componentes
- [ ] Testar criação de novos registros
- [ ] Testar envio de emails
- [ ] Validar dados migrados

## ⚠️ Possíveis Problemas

### 1. Dados Existentes Perdidos
**Solução**: Execute o comando de migração de dados antes da migration

### 2. Emails Quebrando
**Solução**: Atualize os templates para usar `$model->enderecos` e `$model->documentos`

### 3. Foreign Keys
**Solução**: A migration já trata a remoção das foreign keys antigas

## 📚 Leitura Adicional

- [Documentação Laravel - Polymorphic Relationships](https://laravel.com/docs/11.x/eloquent-relationships#polymorphic-relationships)
- `POLYMORPHIC_GUIDE.md` - Guia completo de uso dos relacionamentos

## 🎯 Benefícios da Refatoração

✅ Eliminação de redundância de dados  
✅ Estrutura mais normalizada  
✅ Componentes reutilizáveis  
✅ Fácil manutenção  
✅ Flexibilidade para adicionar novos tipos  
✅ Redução de código duplicado  
