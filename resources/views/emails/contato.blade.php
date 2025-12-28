<x-email-layout 
    icon="📧" 
    heading="Novo Contato Recebido"
    subheading="Mensagem de contato recebida com sucesso">
    
    <x-email-section icon="📋" title="Informações do Remetente">
        <x-email-info label="Nome" :value="$name" />
        <x-email-info label="Email" :value="$email" />
        <x-email-info label="Telefone" :value="$phone_celular" />
    </x-email-section>

    <x-email-section icon="💬" title="Mensagem">
        <div class="info-item" style="grid-column: 1 / -1;">
            <div class="info-label">Conteúdo da Mensagem</div>
            <div class="info-value" style="white-space: pre-wrap;">{{ $mensagem }}</div>
        </div>
    </x-email-section>

</x-email-layout>
