<?php

// Habilitar PDO MYSQL
// Procure arquivo 'php.ini' em php -> apache2 (linux)
// tire ';' ->de  ';extension=pdo_mysql'


include('connect.php');

// Using Prepared

// INSERT INTO

// $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

// $nome = "Suporte monitor";
// $descricao = "Ainda lacradoo sem uso";

// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":descricao", $descricao);

// $stmt->execute();


// ----------------------------

// ATUALIZANDO set 

// $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

// $id = 6;
// $nome = "livro revolucao";
// $descricao = "livro sobre revolucao do eua";

// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":descricao", $descricao);
// $stmt->bindParam(":id", $id);

// $stmt->execute();




// ----------------------------

// SELECT PDO
// fetch -> 1
// fetchAll -> all
$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($data);

echo "<br>";

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);


