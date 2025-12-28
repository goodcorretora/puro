<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Proposta de Consórcio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4A90E2;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 0 0 5px 5px;
        }
        .section {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .section h3 {
            margin-top: 0;
            color: #4A90E2;
            border-bottom: 2px solid #4A90E2;
            padding-bottom: 5px;
        }
        .info-row {
            margin: 10px 0;
            padding: 5px 0;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nova Solicitação de Consórcio</h1>
    </div>
    
    <div class="content">
        <div class="section">
            <h3>Informações do Cliente</h3>
            <div class="info-row">
                <span class="info-label">Nome:</span> {{ $consorcio->name }}
            </div>
            <div class="info-row">
                <span class="info-label">E-mail:</span> {{ $consorcio->email }}
            </div>
            <div class="info-row">
                <span class="info-label">Telefone:</span> {{ $consorcio->phone_celular }}
            </div>
            @if($consorcio->cpf_cnpj)
            <div class="info-row">
                <span class="info-label">CPF/CNPJ:</span> {{ $consorcio->cpf_cnpj }}
            </div>
            @endif
            @if($consorcio->representante)
            <div class="info-row">
                <span class="info-label">Representante:</span> {{ $consorcio->representante }}
            </div>
            @endif
        </div>

        @if($consorcio->documentos->isNotEmpty())
        <div class="section">
            <h3>Documentação</h3>
            @foreach($consorcio->documentos as $documento)
                <div class="info-row">
                    <span class="info-label">CPF/CNPJ:</span> {{ $documento->cpf_cnpj }}
                </div>
                @if($documento->representante)
                <div class="info-row">
                    <span class="info-label">Representante:</span> {{ $documento->representante }}
                </div>
                @endif
                @if($documento->datadenascimento)
                <div class="info-row">
                    <span class="info-label">Data de Nascimento:</span> {{ \Carbon\Carbon::parse($documento->datadenascimento)->format('d/m/Y') }}
                </div>
                @endif
                @if($documento->identidade)
                <div class="info-row">
                    <span class="info-label">Identidade:</span> {{ $documento->identidade }} - {{ $documento->orgaoexpedidor }}
                </div>
                @endif
                @if($documento->genero)
                <div class="info-row">
                    <span class="info-label">Gênero:</span> {{ $documento->genero }}
                </div>
                @endif
                @if($documento->estadocivil)
                <div class="info-row">
                    <span class="info-label">Estado Civil:</span> {{ $documento->estadocivil }}
                </div>
                @endif
            @endforeach
        </div>
        @endif

        @if($consorcio->enderecos->isNotEmpty())
        <div class="section">
            <h3>Endereço</h3>
            @foreach($consorcio->enderecos as $endereco)
                <div class="info-row">
                    <span class="info-label">CEP:</span> {{ $endereco->cep }}
                </div>
                <div class="info-row">
                    <span class="info-label">Endereço:</span> {{ $endereco->endereco }}, {{ $endereco->numero }}
                </div>
                @if($endereco->complemento)
                <div class="info-row">
                    <span class="info-label">Complemento:</span> {{ $endereco->complemento }}
                </div>
                @endif
                <div class="info-row">
                    <span class="info-label">Bairro:</span> {{ $endereco->bairro }}
                </div>
                <div class="info-row">
                    <span class="info-label">Cidade/Estado:</span> {{ $endereco->cidade }} - {{ $endereco->estado }}
                </div>
            @endforeach
        </div>
        @endif

        <div class="section">
            <h3>Detalhes do Consórcio</h3>
            <div class="info-row">
                <span class="info-label">Tipo de Consórcio:</span> {{ $consorcio->consorcio }}
            </div>
            <div class="info-row">
                <span class="info-label">Data da Solicitação:</span> {{ $consorcio->created_at->format('d/m/Y H:i') }}
            </div>
        </div>
    </div>
</body>
</html>
