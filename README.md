# API PHP Simples com Armazenamento em Arquivo JSON
![image](/assents/img.png)


## Introdução
Este projeto consiste em uma API PHP simples para cadastro de usuários, onde os dados são armazenados em um arquivo JSON. A API oferece endpoints para adicionar novos usuários e listar todos os usuários cadastrados.

## Estrutura do Projeto
- **index.php**: Ponto de entrada da API. Roteia as solicitações para os endpoints correspondentes e chama as funções adequadas para lidar com essas solicitações.
- **functions.php**: Contém as funções para manipular as solicitações dos endpoints.
- **data.json**: Arquivo JSON usado para armazenar os dados dos usuários.

## Endpoints da API
### Adicionar Usuário
- **Método**: POST
- **URL**: /index.php
- **Parâmetros**: nome (string), email (string)
- **Exemplo de Uso**: 
    ```
    curl -X POST -d "nome=Exemplo&email=exemplo@example.com&acao=adicionar_usuario" http://localhost/suaapi/index.php
    ```

### Listar Usuários
- **Método**: GET
- **URL**: /index.php?acao=listar_usuarios
- **Exemplo de Uso**: 
    ```
    curl http://localhost/suaapi/index.php?acao=listar_usuarios
    ```

## Teste Automatizado
O teste automatizado verifica se é possível adicionar um novo usuário à API e se a resposta é bem-sucedida.

## Como Executar o Teste
1. Instale o PHPUnit usando Composer:
    ```
    composer require --dev phpunit/phpunit
    ```
2. Execute o teste:
    ```
    vendor/bin/phpunit tests/ApiTest.php
    ```

## Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir um pull request.
