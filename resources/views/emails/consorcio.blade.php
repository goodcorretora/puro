<x-email-layout 
    icon="🏠" 
    heading="Nova Solicitação de Consórcio"
    subheading="Solicitação de Consórcio recebida com sucesso">
    
    <x-email-section icon="📋" title="Dados Pessoais">
        <x-email-info label="Nome Completo" :value="$consorcio->name ?? $name ?? 'N/A'" />
        <x-email-info label="Email" :value="$consorcio->email ?? $email ?? 'N/A'" />
        <x-email-info label="Telefone" :value="$consorcio->phone_celular ?? $phone_celular ?? 'N/A'" />
        <x-email-info label="CPF/CNPJ" :value="$consorcio->cpf_cnpj ?? $cpf_cnpj ?? 'N/A'" />
        @if(isset($consorcio) && $consorcio->representante || !empty($representante))
        <x-email-info label="Representante Legal" :value="$consorcio->representante ?? $representante ?? 'N/A'" />
        @endif
    </x-email-section>

    <x-email-section icon="🏦" title="Informações do Consórcio">
        <x-email-info label="Tipo de Consórcio" :value="$consorcio->consorcio ?? $consorcio ?? 'N/A'" />
    </x-email-section>

</x-email-layout>
