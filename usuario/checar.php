<?php
    //Marco consegui fazer uma área de chekout dinâmica!!!
    $limite = count($_POST);
    $cont = 1;
    $qtd_procedimentos = 0;
    $posicao = 0;
    while (isset($_POST['proce0'.$cont.'']) || !isset($_POST['proce0'.$cont.''])) {
        if (!isset($_POST['proce0'.$cont.''])) {
            if($cont > $limite){
                break 1;
            }else{
                $cont += 1;
                continue 1;
            }
        }else{
            $procedimentos[$posicao] = $_POST['proce0'.$cont.''];
            $qtd_procedimentos += 1;
            $cont += 1;
            $posicao += 1;
        }
    }

    if($qtd_procedimentos > 0 && $posicao > 0){
        session_start();
        $_SESSION['procedimentos'] = $procedimentos;
        $_SESSION['qtd_procedimentos'] = $qtd_procedimentos;
        header('Location: checkout.php');
    }else{
        header('Location: procedimentos.php?enviar_procedimentos=erro');
    }

?>