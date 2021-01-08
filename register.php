<?php
/*
Template Name: register
*/

?>
<?php 
session_start();
include get_theme_file_path( 'database.php' );
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_check = $_POST['password_check'];
    if($password === $password_check) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $connection = databaseConnection();
            $statement = $connection->prepare("INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password_hash')");
            $statement->execute();
            if($_SESSION['password_incorrect'] || $_SESSION['email_exists']) {
                unset($_SESSION['password_incorrect']);
                unset($_SESSION['email_exists']);
            }
            header('Location: login');
        } catch(PDOException $error) {
            $_SESSION['email_exists'] = "Dit email adres is al in gebruik";
        }
    } else {
        $_SESSION['password_incorrect'] = 'Wachtwoorden komen niet overeen met elkaar';
    }
}
?>
<?php get_header(); ?>
<div class="container-fluid">
    <form action="./" method="post" enctype="multipart/form-data" class="registreer_formulier">
            <input type="text" name="email" id="email" placeholder="Uw e-mail" required>
            <input type="text" name="username" id="username" placeholder="Uw gebruikersnaam" required>
            <input type="password" name="password" id="password" placeholder="Uw wachtwoord" required>
            <input type="password" name="password_check" id="password_check" placeholder="Wachtwoord herhalen" required>
        <button type="submit" name="register"> Registreer </button>
        
        <?php 
            if($_SESSION['password_incorrect']) {
                echo '<p id="password_incorrect">' . $_SESSION['password_incorrect'] . '</p>';
            } else if($_SESSION['email_exists']) {
                echo '<p id="email_exists">' . $_SESSION['email_exists'] . '</p>';
            }
        ?>
    </form>
</div>
<?php get_footer(); ?>