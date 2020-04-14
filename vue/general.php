<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('vue/head.php'); ?>
</head>
<body>

    <?php require_once('vue/sidebar.php');  ?>
    <div class='container flex-col flex-alignit-center'>
        <?php
        require_once('vue/main.php');
        require_once('vue/discover.php');
        require_once('vue/project.php');
        require_once('vue/contact.php');
        ?>
    </div>
    <a id="gotop" href="#top"><img src="asset/img/arrow.svg"></a>

    <footer><p><?php echo $footer; ?></p></footer>

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