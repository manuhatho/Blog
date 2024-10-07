<?php 
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'blog_dominique');
    if($conn -> connect_error) {
        die("Connexion failed:" . $conn -> connect_error);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

         // Vérifier si l'utilisateur existe déjà

        $stmt = $conn -> prepare("SELECT * FROM utilisateur WHERE email=?");
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        // Stocker le résultat pour utiliser num_rows
        $stmt -> store_result();

        // Vérifier si un utilisateur avec cet email existe déjà

        if($stmt -> num_rows == 0) {

            // on recupere l'id du role 'utilisateur'
            $name_role = 'utilisateur';
            $stmt = $conn -> prepare("SELECT id_role FROM role WHERE name_role = ? ");
            $stmt -> bind_param("s", $name_role);
            $stmt -> execute();
            $stmt -> bind_result($id_role);
            $stmt -> fetch();
            $stmt -> close();

            // inserer un nouvel utilisateur
            $stmt = $conn -> prepare("INSERT INTO utilisateur(username, email, password, id_role) VALUES(?, ?, ?, ?)");
            $stmt -> bind_param("sssi", $username, $email, $password, $id_role);

            if($stmt -> execute()) {
                echo "Inscription reussi";
            }else{
                echo "l'inscription a echoué";
            }

           

        } else{
            echo "email existe deja";
        }
        
    }

    $stmt -> close();
    $conn -> close();
?>