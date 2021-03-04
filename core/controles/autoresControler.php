<?php
require '/core/Model/DatabaseConnector.php';

$sql = $dbPdo->query(" SELECT id, nome, email, created_at FROM tbautores");

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $valores) {
        echo "<h3>ID: " . $valores['id'] . "</h3>";
        echo "<h3>ID: " . $valores['nome'] . "</h3>";
        echo "<h3>ID: " . $valores['email'] . "</h3>";
        echo "<h3>ID: " . $valores['created_at'] . "</h3><hr>";
    }
} else {
    echo "Sem Resquistros";
}
