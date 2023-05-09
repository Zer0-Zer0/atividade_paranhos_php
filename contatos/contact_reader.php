<?php
function echo_contacts()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenda_contatos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM contato";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        while ($row = $result->fetch_assoc()) {
            $nome = $row['nome'];
            $email = $row['email'];
            $fone = $row['fone'];

            echo "Nome: " . $nome . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Telefone: " . $fone . "<br>";
            echo "<br>";
        }
    }

    $conn->close();
}
