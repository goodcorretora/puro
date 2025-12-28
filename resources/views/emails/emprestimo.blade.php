<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Solicitação de Empréstimo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #4F46E5;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            background-color: #f8f9fa;
            color: #4F46E5;
            padding: 10px 15px;
            font-size: 16px;
            font-weight: bold;
            border-left: 4px solid #4F46E5;
            margin-bottom: 15px;
        }
        .info-row {
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #495057;
            display: inline-block;
            width: 180px;
        }
        .value {
            color: #212529;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e9ecef;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
        .highlight {
            background-color: #fff3cd;
            padding: 2px 6px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📋 Nova Solicitação de Empréstimo</h1>
        </div>

        <div class="section">
            <div class="section-title">Informações Pessoais</div>
            <div class="info-row">
                <span class="label">Nome:</span>
                <span class="value">{{ $name ?? 'N/A' }}</span>
            </div>
            <div class="info-row">
                <span class="label">Email:</span>
                <span class="value">{{ $email ?? 'N/A' }}</span>
            </div>
            <div class="info-row">
                <span class="label">Telefone Celular:</span>
                <span class="value">{{ $phone_celular ?? 'N/A' }}</span>
            </div>
            <div class="info-row">
                <span class="label">CPF/CNPJ:</span>
                <span class="value highlight">{{ $cpf_cnpj ?? 'N/A' }}</span>
            </div>
            @if(!empty($representante))
            <div class="info-row">
                <span class="label">Representante (PJ):</span>
                <span class="value">{{ $representante }}</span>
            </div>
            @endif
        </div>

        @if(!empty($datadenascimento) || !empty($identidade) || !empty($orgaoexpedidor) || !empty($datadeexpedicao) || !empty($genero) || !empty($estadocivil))
        <div class="section">
            <div class="section-title">Documentos e Informações Adicionais</div>
            @if(!empty($datadenascimento))
            <div class="info-row">
                <span class="label">Data de Nascimento:</span>
                <span class="value">{{ \Carbon\Carbon::parse($datadenascimento)->format('d/m/Y') }}</span>
            </div>
            @endif
            @if(!empty($identidade))
            <div class="info-row">
                <span class="label">Identidade:</span>
                <span class="value">{{ $identidade }}</span>
            </div>
            @endif
            @if(!empty($orgaoexpedidor))
            <div class="info-row">
                <span class="label">Órgão Expedidor:</span>
                <span class="value">{{ $orgaoexpedidor }}</span>
            </div>
            @endif
            @if(!empty($datadeexpedicao))
            <div class="info-row">
                <span class="label">Data de Expedição:</span>
                <span class="value">{{ \Carbon\Carbon::parse($datadeexpedicao)->format('d/m/Y') }}</span>
            </div>
            @endif
            @if(!empty($genero))
            <div class="info-row">
                <span class="label">Gênero:</span>
                <span class="value">{{ $genero }}</span>
            </div>
            @endif
            @if(!empty($estadocivil))
            <div class="info-row">
                <span class="label">Estado Civil:</span>
                <span class="value">{{ $estadocivil }}</span>
            </div>
            @endif
        </div>
        @endif

        @if(!empty($cep) || !empty($endereco) || !empty($numero) || !empty($bairro) || !empty($cidade) || !empty($estado))
        <div class="section">
            <div class="section-title">Endereço</div>
            @if(!empty($cep))
            <div class="info-row">
                <span class="label">CEP:</span>
                <span class="value">{{ $cep }}</span>
            </div>
            @endif
            @if(!empty($endereco))
            <div class="info-row">
                <span class="label">Endereço:</span>
                <span class="value">{{ $endereco }}@if(!empty($numero)), {{ $numero }}@endif</span>
            </div>
            @endif
            @if(!empty($complemento))
            <div class="info-row">
                <span class="label">Complemento:</span>
                <span class="value">{{ $complemento }}</span>
            </div>
            @endif
            @if(!empty($bairro))
            <div class="info-row">
                <span class="label">Bairro:</span>
                <span class="value">{{ $bairro }}</span>
            </div>
            @endif
            @if(!empty($cidade))
            <div class="info-row">
                <span class="label">Cidade/Estado:</span>
                <span class="value">{{ $cidade }}@if(!empty($estado)) - {{ $estado }}@endif</span>
            </div>
            @endif
        </div>
        @endif

        <div class="section">
            <div class="section-title">Produto Solicitado</div>
            <div class="info-row">
                <span class="label">Produto Escolhido:</span>
                <span class="value highlight"><strong>{{ $escolha ?? 'N/A' }}</strong></span>
            </div>
        </div>

        <div class="footer">
            <p>Esta solicitação foi recebida em {{ now()->format('d/m/Y \à\s H:i') }}</p>
            <p><strong>{{ config('app.name') }}</strong></p>
            <p style="font-size: 12px; color: #999;">Este é um e-mail automático, por favor não responda.</p>
        </div>
    </div>
</body>
</html>
