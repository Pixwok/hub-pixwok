<?php
include('connexion.php');
$erreur = null;
if (isset($_POST['connect'])) {
    $login = htmlspecialchars($_POST['login']);
    $mdp = hash('sha256', $_POST['passwd']);
    $requete = "SELECT * FROM compte WHERE login='".$login."' AND passwd='".$mdp."'";
    $res = $connexion->query($requete);
    $data = $res->fetchALL(PDO::FETCH_ASSOC);
    //var_dump($connexion->errorInfo());

    if (count($data) === 1) {
        session_start();
        $_SESSION['login'] = $_POST['login'];
        header('location: index.php'); //Redirection
        exit();
    } else {
        $erreur = "Login ou mot de passe incorect."; //Message afficher en cas d'erreur de saisie
    }
}
include('auth.php');
if (connecte()) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Hub - Login</title>
</head>
<body>
    <main>
        <h2>Connexion</h2>
        <form action="login.php" method="POST">
            <input type="text" name="login" id="login" placeholder="Login">
            <input type="password" name="passwd" id="passwd" placeholder="Password">
            <?php if ($erreur):?>
            <div id="nomatch"><p><?=$erreur?></p></div>
            <?php endif;?>
            <input id="bouton" type="submit" name="connect" value="Connexion">
        </form>
    </main>
</body>
</html>