<?php
/* Aqui programaremos futuramente
os recursos de login/logout e verificação
de permissão de acesso dos usuários */

/* VERIFICANDO SE NNÃO EXISTE UMA SESSÃO EM FUNCIONAMENTO */
if(!isset($_SESSION)){
    session_start();
}

function verificaAcesso(){
    /* Se NÃO EXISTE uma variavel de sessão ao id de usuario logado */ 
    if(!isset($_SESSION['id'])){
        /* Então siginifica que ele NÃO ESTA LOGADO , portanto apague qualquer resquicio de sessão e force o usuario a ir para o login.php*/
        session_destroy();
        header("location:../login.php");
        die();
    }
}


/* Usado na pagina login.php */
function login(int $id, string $nome, string $email, string $tipo){
    /* Criando variaveis de Sessão ao logar */
    $_SESSION['id'] =$id;
    $_SESSION['nome'] =$nome;
    $_SESSION['email'] =$email;
    $_SESSION['tipo'] =$tipo;

}

/* Usado nas paginas administrativas quando clicamos em Sair*/
function logout(){
    session_start();
    session_destroy();
    header("location:../login.php?logout");
    die();

}
