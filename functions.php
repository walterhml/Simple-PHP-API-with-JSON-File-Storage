<?php

function adicionarUsuario($nome, $email) {
    $usuarios = json_decode(file_get_contents('data.json'), true);
    $usuario = ['nome' => $nome, 'email' => $email];
    $usuarios[] = $usuario;
    file_get_contents('data.json', json_encode($usuarios));

    return $usuario;

}


function listaUsuarios(){
    $usuarios = json_decode(file_get_contents('data.json'), true);
    return $usuarios;





}



















?>