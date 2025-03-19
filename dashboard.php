<?php
include 'config.php';


// Supposons que l'utilisateur est connecté et que son ID est stocké dans $_SESSION['user_id']
session_start();
echo"je suis ici";

echo "ID de l'utilisateur: ";
$id = 1;

$sql = "SELECT * FROM accounts WHERE user_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Compte ID: " . $row['id'] . "<br>";
        echo "Solde: " . $row['solde'] . "<br><br>";
    }
} else {
    echo "Aucun compte trouvé.";
}
?>