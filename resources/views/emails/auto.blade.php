<x-email-layout 
    icon="🚗" 
    heading="Nova Solicitação de Seguro Auto"
    subheading="Solicitação de Cotação de Seguro Auto recebida com sucesso">
    
    <x-email-section icon="📋" title="Dados Pessoais">
        <x-email-info label="Nome Completo" :value="$name" />
        <x-email-info label="Email" :value="$email" />
        <x-email-info label="Telefone" :value="$phone_celular" />
        <x-email-info label="CPF/CNPJ" :value="$cpf_cnpj" />
    </x-email-section>

    <x-email-section icon="🚗" title="Informações do Veículo">
        @if(!empty($placa))
        <x-email-info label="Placa" :value="$placa" />
        @endif
        <x-email-info label="Modelo" :value="$modelo ?? 'Não informado'" />
        <x-email-info label="Ano" :value="$ano ?? 'Não informado'" />
        <x-email-info label="Ano de Fabricação" :value="$ano_fabricacao ?? 'Não informado'" />
        <x-email-info label="Zero KM">
            {{ !empty($zero_km) && $zero_km ? 'Sim' : 'Não' }}
        </x-email-info>
    </x-email-section>

    <x-email-section icon="📍" title="Uso e Localização">
        <x-email-info label="Tipo de Uso" :value="$uso ?? 'Não informado'" />
        <x-email-info label="Localização" :value="$localizacao ?? 'Não informado'" />
    </x-email-section>

    @if(!empty($eCondutorPrincipal) || !empty($cpf_condutor))
    <x-email-section icon="👤" title="Condutor Principal">
        <x-email-info label="É o Condutor Principal?" :value="$eCondutorPrincipal ?? 'Não informado'" />
        @if(!empty($cpf_condutor))
        <x-email-info label="CPF do Condutor" :value="$cpf_condutor" />
        @endif
    </x-email-section>
    @endif

</x-email-layout>
