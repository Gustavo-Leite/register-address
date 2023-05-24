<?php

if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['submit'])) {

  $dbHost = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "db-address";

  $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connection Failed: " . mysqli_connect_errno());
  if (
    isset($_POST['txtNome'])
    && isset($_POST['txtCep'])
    && isset($_POST['txtLogradouro'])
    && isset($_POST['numero'])
    && isset($_POST['txtBairro'])
    && isset($_POST['txtCidade'])
    && isset($_POST['txtUf'])
  ) {
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    $sql = "INSERT INTO address-table(nome, cep, logradouro, numero, bairro, cidade, uf) VALUES ('$nome','$cep','$logradouro','$numero','$bairro','$cidade','$uf')";

    $query = mysqli_query($conn, $sql);
    if ($query) {
      echo 'Entry Successfull';
    } else {
      echo 'Error Occurred';
    }
    mysqli_close($conn);
  }
}
?>