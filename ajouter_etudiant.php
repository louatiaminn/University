<?php
// Get the form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$mdp = $_POST['password'];
$cin = $_POST['cin'];
if ($_FILES['photo']['error'] == 0 && $_FILES['photo']['size'] > 0) {
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
} else {
    $photo = null;
}
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "projet");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the form data into the "etudiant" table
$sql = "INSERT INTO etudiant (nom, prenom, mail, password, cin, photo) VALUES ('$nom', '$prenom', '$mail', '$mdp', '$cin', '$photo')";

if (mysqli_query($conn, $sql)) {
    echo "Inscription effectuée avec succès!";
} else {
    echo "Échec lors de l'inscription!" . mysqli_error($conn);
}

mysqli_close($conn);
header("Refresh:2; url=index.html");
?>
          