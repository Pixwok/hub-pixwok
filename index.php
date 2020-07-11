<?php
include('auth.php');
redirect();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" lang="fr" content="pixwok, hub, applications, app, services, réseau, web, projet, tech, communauté, serveur, hub d'applications, supervision">
    <meta name="Description" content="Hub d'applications de Pixwok. Certaines de ces applications sont pupliques et utilisables par tous.">
    <meta name="author" lang="fr" content="Pixwok">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/49177d4855.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Hub - Pixwok</title>
</head>
<body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138887128-5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-138887128-5');
	</script>

    <div id="particles-js"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

    <div class="box">
        <div class="content">
            <h1>HUB - Pixwok</h1>
            <h3>HUB des applications de Pixwok !</h3>
            <div class="app">
                <a target="blank" href="https://pixwok.fr/">
                    <div class="public">
                        blog
                    </div>
                </a>
                <a href="https://hardware.pixwok.fr/">
                    <div class="public">
                        stuff
                    </div>
                </a>
                <a href="dev.php">
                    <div class="dev">
                        documentation
                    </div>
                </a>
                <a href="https://pastebin.pixwok.fr/">
                    <div class="dev">
                        pastebin
                    </div>
                </a>
                <a target="blank" href="https://grafana.pixwok.fr/">
                    <div class="adm">
                        grafana
                    </div>
                </a>
                <a target="blank" href="https://manage-db.pixwok.fr/">
                    <div class="adm">
                        phpmyadmin
                    </div>
                </a>
                <a href="dev.php">
                    <div class="adm">
                        panel de gestion
                    </div>
                </a>
                <a href="https://share.pixwok.fr/">
                    <div class="perso">
                        Partage de Fichiers
                    </div>
                </a>
                <a href="https://project.pixwok.fr/">
                    <div class="perso">
                        Mes projets
                    </div>
                </a>
                <a  href="dev.php">
                    <div class="commu">
                        web tv
                    </div>
                </a>
                <a target="blank" href="https://discordapp.com/invite/kH5fCj">
                    <div class="commu">
                        discord
                    </div>
                </a>
                <a target="blank" href="https://discordapp.com/invite/GHU8sPj">
                    <div class="commu">
                        wailcast
                    </div>
                </a>
            </div>
            <footer>
                <a target="blank" href="https://twitter.com/pixwok"><i class="fab fa-twitter"></i></a>
                <a target="blank" href="https://www.linkedin.com/in/maxime-guillot-99ba751b0/"><i class="fab fa-linkedin"></i></a>
                <a target="blank" href="https://www.youtube.com/channel/UC807w5YO5oTvAThnOKTBPXQ?view_as=subscriber"><i class="fab fa-youtube"></i></a>
                <a target="blank" href="https://github.com/Pixwok"><i class="fab fa-github"></i></a>
                <a target="blank" href="https://www.instagram.com/pixwok/"><i class="fab fa-instagram"></i></a>
                <a target="blank" href="https://www.twitch.tv/cappixwok"><i class="fab fa-twitch"></i></a>
            </footer>
        </div>
    </div>

</body>
</html>