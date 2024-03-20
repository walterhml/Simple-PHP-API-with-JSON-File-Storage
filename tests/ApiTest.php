<?php

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testAdicionarUsuario()
    {
        // Simula uma requisição POST enviando dados para adicionar um novo usuário
        $data = [
            'nome' => 'João',
            'email' => 'joao@example.com',
            'acao' => 'adicionar_usuario'
        ];

        $ch = curl_init('index.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Verifica se a requisição foi bem sucedida (código de status 200) e se o usuário foi adicionado corretamente
        $this->assertEquals(200, $httpCode);
        
        // Verifica se a resposta da API contém dados do usuário
        $this->assertNotEmpty($response);

        // Verifica se o usuário foi adicionado corretamente
        $usuario = json_decode($response, true);
        $this->assertArrayHasKey('nome', $usuario);
        $this->assertArrayHasKey('email', $usuario);
        $this->assertEquals('João', $usuario['nome']);
        $this->assertEquals('joao@example.com', $usuario['email']);
    }
}
