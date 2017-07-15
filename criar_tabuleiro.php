<?php

    $tabuleiro = array();
    $linha0 = array(" ", "B", " ", "B", " ", "B", " ", "B");
    $linha1 = array("B", " ", "B", " ", "B", " ", "B", " ");
    $linha2 = $linha0;
    $linha3 = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $linha4 = $linha3;
    $linha5 = array("P", " ", "P", " ", "P", " ", "P", " ");
    $linha6 = array(" ", "P", " ", "P", " ", "P", " ", "P");
    $linha7 = $linha5;

    $tabuleiro = array(
        $linha0, $linha1, $linha2, $linha3,
        $linha4, $linha5, $linha6, $linha7
    );

    file_put_contents('tabuleiro.json', json_encode($tabuleiro));

?>