<?php
function echo_contacts()
{
    $read = unserialize(file_get_contents('Location: contatos/dbs/contatos.bin'));

    if ($read) {
        foreach ($read as $contact) {
            echo "<div class = 'box'>
                    <h1>$contact[0]</h1>
                    <div class = 'formulary'>
                    <p class='mono'>Email</p><p class='mono'>$contact[1]</p>
                    </div>
                    <div class = 'formulary'>
                    <p class='mono'>Telefone</p><p class='mono'>$contact[2]</p>
                    </div>
                    <div class = 'formulary'>
                    <p class='mono'>Whatsapp</p><p class='mono'>$contact[3]</p>
                    </div>
                </div>";
        }
    } else {
        echo "<p>Atualmente você não tem nenhum contato salvo nessa agenda, clique em \"novo contato\" para adicionar um contato.</p>";
    }
}
