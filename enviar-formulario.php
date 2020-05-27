<?php
if(isset($_POST["email"]) && empty($_POST["email"]) == false )
{
    if(isset($_POST["senha"]) && !empty($_POST["senha"]))
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        echo "meu email é: ".$email;
        echo "<br/>";
        echo "minha senha é ".$senha;
    }    
};
?>
<hr/>
<form method="POST">
E-mail:<br/>
<input type="email" name="email"/>
</br>
Senha:<br/>
<input type="password" name="senha"/>
<br/><br/>
<input type="submit" value="Enviar Dados"/>
</form>