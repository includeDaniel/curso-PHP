<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.1.0.min.js" ></script>
    <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include 'contato.class.php';
        $contato = new Contato();
        $contato->adicionar('Danielzcomputacao@gmail.com', 'Juresvaldo Junior')
    ?>
    <div class="container text-center">
        <div class="navbar navbar-expand-lg navbar-brand">
            <h1>Contatos</h1>
        </div>    
        <hr>
        <a href="adicionar.php" class="btn btn-success">Adicionar</a>
        <br><br>
        <table class="table table-striped table-bordered table-responsive-lg table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>    
            <tbody>
                <?php
                    $lista = $contato->getAll();
                    foreach ($lista as $item):    
                ?>
                <tr>
                    <td> <?php echo $item['id']; ?></td>
                    <td> <?php echo $item['nome']; ?></td>
                    <td> <?php echo $item['email']; ?></td>
                    <td>
                        <a class="btn btn-info" href="editar.php?id=<?php echo $item['id']?>">Editar</a>
                        <a class="btn btn-danger" href="excluir.php?id=<?php echo $item['id']?>">Excluir</a>
                    </td>   
                </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>
    </div>    
</body>
</html>
