<form method="POST">
	Qual seu nome?<br/>
	<input type="text" name="nome" /><br/>
	<input type="submit" value="Enviar" />
</form>

<?php
if(!empty($_POST['nome'])) {
	echo "Ola, ".$_POST['nome'];
}
?>