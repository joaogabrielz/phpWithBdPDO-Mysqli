<?php
include('connect.php');

// SELECT 

//$sql = "SELECT * FROM itens";
// $result = $conn->query($sql);

// print_r($result);
// $conn->close();


// -------------------------
// CREATE/DROP TABLE


//$sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100), idade INTEGER)";
//$sql = "DROP TABLE teste";

//$conn->query($sql);
//$conn->close();

// ---------------------------
// INSERT INTO
// $table = "itens";
// $nome = "xicara";
// $descricao = "é uma xicara de porcelana";

// $sql = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
// $conn->query($sql);
// $conn->close();


// ---------------------------
// SELECT , fetch_assoc: TRANSFORMAR RESULT EM UM ARRAY
// $q = "SELECT * FROM itens";

// $result = $conn->query($q);
// $conn->close();

// // UM RESULTADO
// $iten = $result->fetch_assoc();

// // TODOS RESULTADOS
// $itens = $result->fetch_all();
// print_r($itens);



//------------------------------------
// Prepared: + SECURITY, PERFORMACE
// Prepare -> bind_param -> execute
// Statment - stmt
// Prevent SQL INJECTION!

// $nome = "Suporte de microfone";
// $descricao = "O suporte é novo e foi fbricando na china";

// $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

// $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double
// $stmt->execute();

// $stmt->close();
// $conn->close();


// ----
// SELECT ALL FROM TABLE NAO necessario 'Prepared'
// -----




// ----------------------------------
// Selecionando dados com WHERE com PREPARED
// $id = 4;

// $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
// $stmt->bind_param("i", $id);
// $stmt->execute();

// $result = $stmt->get_result();
// $data = $result->fetch_all();

// print_r($data);
// $stmt->close();
//$conn->close();


// ---------------------------------------------
// Resgatando apenas uma linha, Fetch_row , getresult

// $id = 6;
// $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
// $stmt->bind_param("i", $id);
// $stmt->execute();

// $result = $stmt->get_result();
// $item = $result->fetch_row();

// print_r($item);
// $conn->close();

// --------------------------------------------------------
// Atualizando dados com Prepared
//SET

// $id = 7;
// $nome = "Sofa Cama";
// $descricao = "Sofa camacom madeira importada";

// $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
// $stmt->bind_param("ssi", $nome, $descricao, $id);
// $stmt->execute();

// if($stmt->error){
//   echo "Erro: " . $stmt->error;
// }

// $result = $stmt->get_result();

// print_r($result);
// $conn->close();




// --------------------------------------------------------
// DELETEANDO DADOS COM STMT E MYSQLi
// DELETE

// $nome = "Teste";

// $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");
// $stmt->bind_param("s", $nome);
// $stmt->execute();

// $conn->close();