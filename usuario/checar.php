<?php
    $cont = 0;
    $posicao = 0;
    while (isset($_POST['proce0'.$cont+1.''])) {
        $procedimentos[$posicao] = $_POST['proce0'.$cont+1.''];
        $cont += 1;
        $posicao += 1;
    }

    if($cont > 0 && $posicao > 0){
        session_start();
        $_SESSION['procedimentos'] = $procedimentos;
        $_SESSION['qtd_procedimentos'] = $cont;
        header('Location: checkout.php');
    }else{
        header('Location: procedimentos.php?enviar_procedimentos=erro');
    }

?>