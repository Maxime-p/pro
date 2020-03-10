<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('src/vue/head.php'); ?>
</head>
<body>

    <?php require_once('src/vue/sidebar.php');  ?>
    <div class='container flex-col flex-alignit-center'>
        <?php 
        require_once('src/vue/main.php'); 
        require_once('src/vue/discover.php');
        require_once('src/vue/project.php');
        require_once('src/vue/contact.php');
        ?>
    </div>
    <a id="gotop" href="#top"><img src="asset/img/arrow.svg"></a>

    <footer><p>2019 &copy; pro.maxime-p.fr | All rights reserved</p></footer>

    <div id="particles-js"></div>
    <script src="asset/module/particles.min.js"></script>
    <script>
    particlesJS.load('particles-js', 'asset/module/particlesjs-config.json', function() {
        console.log('callback - particles.js config loaded');
    });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="asset/js/scroll.js"></script>
</body>
</html>