<?php
    $host = '127.0.0.1';
    $db = 'oficina_db';
    $user = 'root';
    $pass = '';

    try{
        $pdo = new PDO("mysql:host=$host;port=3308;dbname=$db;charset=utf8, $user,$pass");
        $pdo->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION)

    }catch(PDOException $e){

        die("Erro na conexão: " . $e->getMessage());
        
    }
?><?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = S_POST['nome'];
        $email = S_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$nome, $email]);

        header("Location: index.php");
        exit;
    }

    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD com PHP</title>
</head>
<body>
<h2>Adicionar Novo Usuário (Create)</h2>
<form>
Nome: <input type="text" name="nome" required>
Email: <input type="email" name="email" required>
<button type="submit">Salvar</button>
</form>
<hr>
<h2>Usuários Cadastrados (Read)</h2>
<table border="1">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>";
echo "<td>" . htmlspecialchars($row['id']) . "</td>";
echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
echo "<td>" . htmlspecialchars($row['email']) . "</td>";
echo "<td>";
echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
echo "</td>";
echo "</tr>";
}
?>
</table>

</body>
</html><?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = S_POST['nome'];
        $email = S_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$nome, $email]);

        header("Location: index.php");
        exit;
    }

    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD com PHP</title>
</head>
<body>
<h2>Adicionar Novo Usuário (Create)</h2>
<form>
Nome: <input type="text" name="nome" required>
Email: <input type="email" name="email" required>
<button type="submit">Salvar</button>
</form>
<hr>
<h2>Usuários Cadastrados (Read)</h2>
<table boorder="1">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>";
echo "<td>" . htmlspecialchars($row['id']) . "</td>";
echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
echo "<td>" . htmlspecialchars($row['email']) . "</td>";
echo "<td>";
echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
echo "</td>";
echo "</tr>";
}
?>
</table>

</body>
</html><?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = S_POST['nome'];
        $email = S_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$nome, $email]);

        header("Location: index.php");
        exit;
    }

    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD com PHP</title>
</head>
<body>
<h2>Adicionar Novo Usuário (Create)</h2>
<form>
Nome: <input type="text" name="nome" required>
Email: <input type="email" name="email" required>
<button type="submit">Salvar</button>
</form>
<hr>
<h2>Usuários Cadastrados (Read)</h2>
<table border="1">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>";
echo "<td>" . htmlspecialchars($row['id']) . "</td>";
echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
echo "<td>" . htmlspecialchars($row['email']) . "</td>";
echo "<td>";
echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
echo "</td>";
echo "</tr>";
}
?>
</table>

</body>
</html><?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = S_POST['nome'];
        $email = S_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$nome, $email]);

        header("Location: index.php");
        exit;
    }

    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD com PHP</title>
</head>
<body>
<h2>Adicionar Novo Usuário (Create)</h2>
<form>
Nome: <input type="text" name="nome" required>
Email: <input type="email" name="email" required>
<button type="submit">Salvar</button>
</form>
<hr>
<h2>Usuários Cadastrados (Read)</h2>
<table border="1">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>";
echo "<td>" . htmlspecialchars($row['id']) . "</td>";
echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
echo "<td>" . htmlspecialchars($row['email']) . "</td>";
echo "<td>";
echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
echo "</td>";
echo "</tr>";
}
?>
</table>

</body>
</html>