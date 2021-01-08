<?php
/*
Template Name: login
*/

?>
<?php
session_start();
include get_theme_file_path( 'database.php' );
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = databaseConnection();
    $statement = $connection->prepare("SELECT username, password FROM users WHERE username='$username'");
    $statement->execute();
    $result = $statement->fetchAll();

    if($result[0]['username'] == $_POST['username'] && password_verify($_POST['password'], $result[0]['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['loggedin'] = true;
        if($_SESSION['login_error']) {
            unset($_SESSION['login_error']);
        }
        header("Location: home");
    } else {
        $_SESSION['login_error'] = "Email en/of wachtwoord is onjuist";
    }
}
?>
<?php get_header(); ?>
<div class="introform">
    <div class="container-fluid">
        <form action="./" method="post" enctype="multipart/form-data" class="login_formulier">
                <input type="text" class="inputTxt" name="username" id="username" placeholder="Uw gebruikersnaam" required>
                <input type="password" class="inputTxt" name="password" id="password" placeholder="Uw Gekozen Wachtwoord" required>
            <button type="submit" class="btn intro-btn" name="login"> Inloggen </button>
            <?php 
                if($_SESSION['login_error']) {
                    echo '<p id="login_error">' . $_SESSION['login_error'] . '</p>'; 
                }
            ?>
        </form>
        <form method="get" action="register">
            <button class="btn intro-btn negative" type="submit">Registreren</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>