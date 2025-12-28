<x-email-layout 
    icon="💰" 
    heading="Nova Solicitação de Previdência Privada"
    subheading="Solicitação de Previdência Privada recebida com sucesso">
    
    <x-email-section icon="📋" title="Dados Pessoais">
        <x-email-info label="Nome Completo" :value="$name" />
        <x-email-info label="Email" :value="$email" />
        <x-email-info label="Telefone" :value="$phone_celular" />
        <x-email-info label="CPF/CNPJ" :value="$cpf_cnpj" />
        @if(!empty($representante))
        <x-email-info label="Representante Legal" :value="$representante" />
        @endif
    </x-email-section>

    <x-email-section icon="📊" title="Informações do Plano">
        <x-email-info label="Plano Escolhido" :value="$previdencia" />
    </x-email-section>

</x-email-layout>
