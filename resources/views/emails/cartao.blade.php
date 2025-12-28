<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Cartão de Crédito</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f4f4f4;
            padding: 20px;
        }
        
        .email-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            color: #ffffff;
        }
        
        .email-header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }
        
        .email-header p {
            font-size: 16px;
            opacity: 0.95;
        }
        
        .email-body {
            padding: 40px 30px;
        }
        
        .section {
            margin-bottom: 35px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .info-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #667eea;
        }
        
        .info-label {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        
        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #212529;
            word-break: break-word;
        }
        
        .email-footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            border-top: 1px solid #e9ecef;
        }
        
        .timestamp {
            background-color: #e7e7ff;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 13px;
            color: #5a5a5a;
            margin-top: 15px;
            text-align: center;
        }
        
        @media only screen and (max-width: 600px) {
            .email-body {
                padding: 25px 20px;
            }
            
            .email-header {
                padding: 30px 20px;
            }
            
            .email-header h1 {
                font-size: 24px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>💳 Nova Solicitação de Cartão</h1>
            <p>Solicitação de Cartão de Crédito recebida com sucesso</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <!-- Dados Pessoais -->
            <div class="section">
                <h2 class="section-title">📋 Dados Pessoais</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Nome Completo</div>
                        <div class="info-value">{{ $name }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ $email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Telefone</div>
                        <div class="info-value">{{ $phone_celular }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">CPF/CNPJ</div>
                        <div class="info-value">{{ $cpf_cnpj }}</div>
                    </div>
                    @if(!empty($representante))
                    <div class="info-item">
                        <div class="info-label">Representante Legal</div>
                        <div class="info-value">{{ $representante }}</div>
                    </div>
                    @endif
                    <div class="info-item">
                        <div class="info-label">Data de Nascimento</div>
                        <div class="info-value">{{ \Carbon\Carbon::parse($datadenascimento)->format('d/m/Y') }}</div>
                    </div>
                </div>
            </div>

            <!-- Documentação -->
            <div class="section">
                <h2 class="section-title">🆔 Documentação</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Identidade (RG)</div>
                        <div class="info-value">{{ $identidade }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Órgão Expedidor</div>
                        <div class="info-value">{{ $orgaoexpedidor }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Data de Expedição</div>
                        <div class="info-value">{{ \Carbon\Carbon::parse($datadeexpedicao)->format('d/m/Y') }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Gênero</div>
                        <div class="info-value">{{ $genero }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Estado Civil</div>
                        <div class="info-value">{{ $estadocivil }}</div>
                    </div>
                </div>
            </div>

            <!-- Endereço -->
            <div class="section">
                <h2 class="section-title">📍 Endereço</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">CEP</div>
                        <div class="info-value">{{ $cep }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Endereço</div>
                        <div class="info-value">{{ $endereco }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Número</div>
                        <div class="info-value">{{ $numero }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Complemento</div>
                        <div class="info-value">{{ $complemento ?? 'Não informado' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Bairro</div>
                        <div class="info-value">{{ $bairro }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Cidade</div>
                        <div class="info-value">{{ $cidade }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Estado</div>
                        <div class="info-value">{{ $estado }}</div>
                    </div>
                </div>
            </div>

            <!-- Informações Adicionais -->
            <div class="section">
                <h2 class="section-title">💰 Informações Adicionais</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Renda Mensal</div>
                        <div class="info-value">{{ $renda }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Bandeira Desejada</div>
                        <div class="info-value">{{ $bandeira }}</div>
                    </div>
                </div>
            </div>

            <!-- Timestamp -->
            <div class="timestamp">
                📅 Solicitação recebida em {{ now()->format('d/m/Y') }} às {{ now()->format('H:i') }}
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>Este é um email automático gerado pelo sistema de solicitações.</p>
            <p style="margin-top: 10px;">© {{ date('Y') }} Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
