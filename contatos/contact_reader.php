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

            echo '
            <div class="box">
                <h1>' . $nome . '</h1>
                <div class="flex-row">
                <p>e-mail</p>
                    <p>' . $email . '</p>
                </div>
                <div class="flex-row">
                <p>N° telefone</p>
                    <p>' . "(" . substr($fone, 0, 2) . ") " . substr($fone, 2, 5) . "-" . substr($fone, 7) . '</p>
                </div>
            </div>';
        }
    }

    $conn->close();
}
