<?php
session_start();
//connexion avec le serveur (APACHE)
$username = "root";
$password = "";
$hostname = "localhost";
// activer le rapport d'erreur
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);
// connect with table
$selected = mysqli_select_db($dbhandle, "projet");
//$_SERVER['REQUEST_METHOD'] est utilisé pour connaître la méthode de requête
// (par exemple GET, POST, PUT, etc.) utilisée pour accéder à la page.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Vérifiez si le mail d'utilisateur et le password sont définis
if (isset($_POST['mail']) && isset($_POST['password'])) {
// Escape special characters in username and password to prevent SQL
// injection attacks
$username = mysqli_real_escape_string($dbhandle, $_POST['mail']);
$password = mysqli_real_escape_string($dbhandle, $_POST['password']);
// Query the database to check if the user exists
$sql = "SELECT * FROM etudiant WHERE mail='$username' AND
password='$password'";
$result = mysqli_query($dbhandle, $sql);
// If the query returns one row, then the user exists and we can start a session

if (mysqli_num_rows($result) == 1) {
    $_SESSION["mail"] = $username;
    $_SESSION["password"] = $password;
    header("Location: login_success.php");
    exit;
} else {
// If the query returns zero rows, then the user doesn't exist or

// the password is wrong

echo "Invalid username or password.";
}
}
}
$dbhandle->close();
?>