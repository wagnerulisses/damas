<?php

if (! file_exists('tabuleiro.json')) {
    echo "Erro Arquivo Inexisten";
    exit;
}

$tabuleiro = json_decode(file_get_contents('tabuleiro.json'), true);

?>
<style>
    table td{
        text-align: center;
        border: 1px solid #666;
    }
</style>
<table>
    <?php foreach($tabuleiro as $linha) : ?>
    <tr>
        <?php foreach ($linha as $coluna) :?>
            <td width="50" height="50"><?=$coluna?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>
