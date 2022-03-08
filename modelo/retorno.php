<?php
$NOME = $_REQUEST['NOME'];
$ANIMAL = $_REQUEST['ANIMAL'];

if (empty($NOME)){
    $dados = array(
        "tipo" => "error",
        "mensagem" => "Existe(em) campo(s) a ser(em) preenchido(s)."
    );
} else {

    switch($ANIMAL){
        case '1' : $dados = array(
            "tipo" => "cachorro.jpg",
            "mensagem" => "Seja bem-vindo, $NOME, sabemos que o seu animal favorito é o cachorro"
        );
        break;

        case '2' : $dados = array(
            "tipo" => "gato.jpeg",
            "mensagem" => "Seja bem-vindo, $NOME, sabemos que o seu animal favorito é o Gato"
        );
        break;

        case '3' : $dados = array(
            "tipo" => "peixe.jpg",
            "mensagem" => "Seja bem-vindo, $NOME , sabemos que o seu animal favorito é o Peixe"
        );
        break;
    }
}

echo json_encode($dados);