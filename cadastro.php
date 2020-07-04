<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.1.0.min.js" ></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container-fluid">
        <div class="navbar navbar-expand-lg navbar-light"style="background-color:lightblue">
                <div class="navbar-brand">
                    <h1>Cadastre-se<h1>
                    <h6><a  class="btn disabled" href="#">Rápido e fácil</a><h6>
                </div>
                <div class="navbar-nav">
                    <a class="navbar-item nav-link" href="Home.php">Home</a> 
                    <a class="navbar-item nav-link " href="login.php">Login</a>
                    <a class="navbar-item nav-link active" href="cadastro.php">Cadastre-se</a>
                </div>
            </div>
            <?php
                $dsn ="mysql:dbname=sistema-login;host=localhost";
                $dbuser ="root";
                $dbpass = "";

                if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
                    $email = addslashes($_POST['email']);
                    $senha = md5(addslashes($_POST['senha']));   
                    try {

                        $pdo = new PDO($dsn, $dbuser, $dbpass);
                        $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
                        $sql = $pdo->prepare($sql);
                        $sql->bindValue(':email', $email, PDO::PARAM_STR);
                        $sql->bindValue(':senha', $senha, PDO::PARAM_STR);
                        if($sql->execute()){
                            header("location: login.php");
                        }else{
                            
                            echo 
                                '<div class="alert alert-danger" role="alert">
                                    Não foi possível cadastrar o novo usuário no sistema, tente novamente    
                                </div>';
                            
                        }

                    } catch(PDOexception $e) {
                        echo "falhou".$e->getMessage();
                    }

                }
            ?>
            <form method="POST" class="form-group form-inline">
                    <input class="form-control w-50"type="email" name="email" placeholder="Email" /><br/><br/>
                    <input class="form-control w-50" type="password" name="senha" placeholder="Senha" /><br/><br/>
                    <input class="btn btn-primary" type="submit" name="cadastrar" value="Cadastrar" id="cadstrar" /><br/><br/>

            </form>
        </div>
    </body>
</html>    