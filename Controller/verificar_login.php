<?php
    session_start();
    if(!$_SESSION['email']) {
        header('Location: http://localhost/to-do-list/View/telaInicial ');
    exit();
}
?>