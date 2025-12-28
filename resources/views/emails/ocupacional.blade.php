<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nova Solicitação de Saúde Ocupacional</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #0066cc;">Nova Solicitação de Saúde Ocupacional</h2>
        
        <p>Olá,</p>
        
        <p>Você recebeu uma nova solicitação de saúde ocupacional:</p>
        
        <h3>Informações da Empresa:</h3>
        <ul>
            <li><strong>Nome da Empresa:</strong> {{ $ocupacional->name ?? $name ?? 'N/A' }}</li>
            <li><strong>Representante:</strong> {{ $ocupacional->representante ?? $representante ?? 'N/A' }}</li>
            <li><strong>Email:</strong> {{ $ocupacional->email ?? $email ?? 'N/A' }}</li>
            <li><strong>Telefone Celular:</strong> {{ $ocupacional->phone_celular ?? $phone_celular ?? 'N/A' }}</li>
            <li><strong>Telefone Fixo:</strong> {{ $ocupacional->phone_fixo ?? $phone_fixo ?? 'N/A' }}</li>
            <li><strong>CNPJ:</strong> {{ $ocupacional->cnpj ?? $cnpj ?? 'N/A' }}</li>
            <li><strong>Número de Funcionários:</strong> {{ $ocupacional->funcionarios ?? $funcionarios ?? 'N/A' }}</li>
        </ul>
        
        @if(isset($ocupacional) && $ocupacional->enderecos->isNotEmpty())
        <h3>Endereço:</h3>
        @foreach($ocupacional->enderecos as $endereco)
        <ul>
            <li><strong>CEP:</strong> {{ $endereco->cep ?? 'N/A' }}</li>
            <li><strong>Endereço:</strong> {{ $endereco->endereco ?? 'N/A' }}</li>
            <li><strong>Número:</strong> {{ $endereco->numero ?? 'N/A' }}</li>
            <li><strong>Complemento:</strong> {{ $endereco->complemento ?? 'N/A' }}</li>
            <li><strong>Bairro:</strong> {{ $endereco->bairro ?? 'N/A' }}</li>
            <li><strong>Cidade:</strong> {{ $endereco->cidade ?? 'N/A' }}</li>
            <li><strong>Estado:</strong> {{ $endereco->estado ?? 'N/A' }}</li>
        </ul>
        @endforeach
        @elseif(isset($cep))
        <h3>Endereço:</h3>
        <ul>
            <li><strong>CEP:</strong> {{ $cep ?? 'N/A' }}</li>
            <li><strong>Endereço:</strong> {{ $endereco ?? 'N/A' }}</li>
            <li><strong>Número:</strong> {{ $numero ?? 'N/A' }}</li>
            <li><strong>Complemento:</strong> {{ $complemento ?? 'N/A' }}</li>
            <li><strong>Bairro:</strong> {{ $bairro ?? 'N/A' }}</li>
            <li><strong>Cidade:</strong> {{ $cidade ?? 'N/A' }}</li>
            <li><strong>Estado:</strong> {{ $estado ?? 'N/A' }}</li>
        </ul>
        @endif
        
        <h3>Serviços Selecionados:</h3>
        <ul>
            @if(isset($ocupacional) && $ocupacional->ocupacional || !empty($ocupacional))
                <li>Saúde Ocupacional</li>
            @endif
            @if(isset($ocupacional) && $ocupacional->seguranca || !empty($seguranca))
                <li>Segurança do Trabalho</li>
            @endif
            @if(isset($ocupacional) && $ocupacional->ergonomico || !empty($ergonomico))
                <li>Ergonômico</li>
            @endif
            @if(isset($ocupacional) && $ocupacional->ambulatorio || !empty($ambulatorio))
                <li>Ambulatório</li>
            @endif
            @if(isset($ocupacional) && $ocupacional->pericia || !empty($pericia))
                <li>Perícia</li>
            @endif
            @if(isset($ocupacional) && $ocupacional->promocao || !empty($promocao))
                <li>Promoção da Saúde</li>
            @endif
        </ul>
        
        <p style="margin-top: 20px;">Obrigado,<br>{{ config('app.name') }}</p>
    </div>
</body>
</html>
