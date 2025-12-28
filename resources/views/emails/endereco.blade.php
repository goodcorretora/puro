<x-mail::message>
# Nova Solicitação de Endereço

Olá,

Você recebeu uma nova solicitação relacionada a endereço:

**Informações do Cliente:**
- Nome: {{ $name ?? 'N/A' }}
- Email: {{ $email ?? 'N/A' }}
- CEP: {{ $cep ?? 'N/A' }}
- Endereço: {{ $endereco ?? 'N/A' }}
- Número: {{ $numero ?? 'N/A' }}
- Complemento: {{ $complemento ?? 'N/A' }}

Acesse o dashboard para mais detalhes.

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
