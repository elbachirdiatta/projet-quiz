<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?=PATH_PUBLIC."css".DIRECTORY_SEPARATOR."style.css"?>" media="screen" type="text/css" />
    <title>page de connexion</title>
    
</head>
<body style='background-image:url(<?=PATH_PUBLIC.'img'.DIRECTORY_SEPARATOR.'bg.jpg'?>);'>
    <form action="<?=WEB_ROOT?>" method="POST" >
     <input type="hidden" name="controller" value="securite">
     <input type="hidden" name="action" value="connexion">

        <div class="form">
        <h1>LOGIN FORM </h1>
        </div>
        <div class=inputs>

        <input type="email" placeholder=" email" name="login" >
        
        <input type="password"  placeholder="password"  name="password">

        <div align="center">
            <button type="submit">Connexion</button>
            <a href="#"><span>s'incrire pour jouer?</span></a>

        </div>


        </div>


    </form>
    <script src="<?=PATH_public."js/script.js"?></script>
</body>
</html>