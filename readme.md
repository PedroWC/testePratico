
# Teste Prático
Este é um projeto simples de CRUD baseado em PHP com auxílio do Framework Laravel que envia requisições à API da 'Unigran Capital'.

## Pré-requisitos
- PHP versão 5.6.4
- Laravel versão 5.4
- WAMPserver 3.2.3

## Instalação e Configuração

### 1. Instalar Dependências
No diretório raiz do projeto, execute:
```bash
composer install
```

### 2. Configurar o Arquivo `.env`
Copie o arquivo `.env.example` para `.env` e ajuste as configurações conforme necessário:
```bash
cp .env.example .env
```

### 3. Gerar a Chave da Aplicação
Gere uma chave única para o aplicativo Laravel:
```bash
php artisan key:generate
```

A chave gerada deve ser adicionada ao arquivo .env

### 4. Migrar o Banco de Dados
Execute as migrações para configurar o banco de dados:
```bash
php artisan migrate
```
Antes de migrar certifique-se que foi adicionado ao banco uma base de dados com o mesmo nome configurado na variável DB_DATABASE no arquivo .env

## Testes

### 5. Executar o Servidor de Desenvolvimento
Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```