<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Testando o Docker</title>
</head>
<body>
<h1>Teste Docker</h1>
<?php
$dbuser = 'sergio';
$dbpass = '123456';
try {
    $pdo = new PDO("mysql:host=database;dbname=teste", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM usuarios");
    $statement->execute();
    $usuarios = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Usuarios</h2>";
    echo "<ul>";
    foreach ($usuarios as $usuario) {
        echo "<li>" .$usuario->nome."</li>";
    }
    echo "</ul>";
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
</body>
</html>