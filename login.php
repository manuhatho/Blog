<?php 
session_start();

$conn = new mysqli("localhost", "root", "", "blog_dominique");
if ($conn->connect_error) {
    die("Connexion Failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparer la requête pour récupérer l'utilisateur avec l'email fourni
    $stmt = $conn->prepare("SELECT id_user, username, password FROM utilisateur WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    // Stocker les résultats
    $stmt->store_result(); 
    // Récupérer les données
    $stmt->bind_result($user_id, $username, $hashed_password);
    
    // Vérifier si un utilisateur avec cet email existe
    if ($stmt->num_rows == 1) {
        // L'utilisateur existe, on récupère les données
        $stmt->fetch(); // Récupérer les valeurs dans les variables

        // Vérifier le mot de passe
        if (password_verify($password, $hashed_password)) {
            // Mot de passe correct
            $_SESSION['id_user'] = $user_id; // Corrected variable
            $_SESSION['username'] = $username; // Corrected variable

            header("Location: home.php");
            exit();
        } else {
            echo "Mot de passe incorrect.";
            exit();
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }
    $stmt->close();
}

$conn->close();
?>
