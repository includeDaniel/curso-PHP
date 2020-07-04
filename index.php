<?php
    session_start();

    if(empty($_SESSION))
        header("location: login.php");

    echo "Bem-vindo ".$_SESSION['email'];

?>

<div>
    <button onClick="window.location.href='logout.php'">Sair do sistema</button>
</div>
