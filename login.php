<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.1.0.min.js" ></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container-fluid">    
            <?php
                session_start();
                if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
                    $email = addslashes($_POST['email']);
                    $senha = md5(addslashes($_POST['senha']));
                    $dsn ="mysql:dbname=sistema-login;host=localhost";
                    $dbuser ="root";
                    $dbpass ="";
                    try{
                        $db = new PDO($dsn, $dbuser, $dbpass);
                        $sql = $db ->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

                        if($sql -> rowCount() > 0){
                            $user = $sql -> fetch();
                            $_SESSION['id'] = $user['id'];
                            $_SESSION['email'] = $user['email'];
                            header("location: index.php");
                        }else{
                            echo 
                                '<div class="alert alert-danger" role="alert">
                                   Usuário não cadastrado   
                                </div>';
                        }
                    } catch(PDOException $e) {
                        echo "falhou ".$e->getMessage();
                    }
                }
            ?>
            <div class="navbar navbar-expand-lg navbar-light"style="background-color:lightblue">
                <div class="navbar-brand">
                    <h1>Pagina de Login<h1>
                </div>
                <div class="navbar-nav">
                    <a class="navbar-item nav-link" href="Home.php">Home</a> 
                    <a class="navbar-item nav-link active" href="login.php">Login</a>
                    <a class="navbar-item nav-link" href="cadastro.php">Cadastre-se</a>
                </div>    
            </div>
            <form method="POST" class="form-group">
                    <input class="form-control w-50"type="email" name="email" placeholder="Email" /><br/><br/>
                    <input class="form-control w-50" type="password" name="senha" placeholder="Senha" /><br/><br/>
                    <input class="btn btn-primary" type="submit" name="Entrar" value="Entrar"/><br/><br/>
            </form>
        </div>
    </body>
</html>
