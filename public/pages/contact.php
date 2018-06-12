<?php
if(isset($_POST["submit"])){
    $error = [];
    if(isset($_POST["name"]) && strlen($_POST["name"])===0){
        $error[] = "Vous n'avez pas envoyé votre nom";
    }

    if(isset($_POST["email"]) && strlen($_POST["email"])===0){
        $error[] = "Vous n'avez pas envoyé votre email";
    }
    if(isset($_POST["sujet"]) && strlen($_POST["sujet"])===0){
        $error[] = "Vous n'avez pas envoyé votre sujet";
    }
    if(isset($_POST["message"]) && strlen($_POST["message"])===0){
        $error[] = "Vous n'avez pas envoyé de message";
    }
    if(sizeof($error)===0){
        header('location:../index.html');
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Asbl - la maison du 1002 pattes">
    <meta name="keywords" content="ASBL,1002 pattes, aide, Bastogne, neuropsychologue, psychologue, psychothérapeute,logopède, psychomotricien, autisme, jeunesse, soutien, famille, adolescent, assuétude, santé, psychique, communication, difficulté">
    <meta name="author" content="Gilles Delmotte">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bundle.css">
    <link rel="icon" type="image/png" href="../assets/images/logo.png" />

    <title>Contact - La maison du 1002 pattes</title>
</head>
    <body>
    <div itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="address" content="Rue du neufchateau, 73 6600 Bastogne">
        <meta itemprop="brand" content="Nous recevons des enfants, des adolescent et des familles en difficultés">
        <meta itemprop="telephone" content="061/46.60.08">
        <meta itemprop="email" content="secretariat@1002pattes.be">
        <meta itemprop="sponsor" content="euromillions, joker+, lotto, winforlife">
        <meta itemprop="Member" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Gwénaèlle Melchior">
        <meta itemprop="colleague" content="Charline Leriche, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="Neuropsychologue">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Charline Leriche">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="Neuropsychologue">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Amandine Piron">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="Neuropsychologue">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Laure Baillieux">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="psychologue">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Sandrine Meurisse">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Laure Baillieux, Emilie Leriche, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="Logopède">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Emilie Leriche">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Catherine Godfroid, Laura Mespouille">
        <meta itemprop="JobTitle" content="Logopède">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Catherine Godfroid">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Laura Mespouille">
        <meta itemprop="JobTitle" content="psychomotricienne">
    </div>
    <div itemscope itemtype="http://schema.org/person">
        <meta itemprop="familyName" content="Laura Mespouill">
        <meta itemprop="colleague" content="Gwénaèlle Melchior, Charline Leriche, Amandine Piron, Laure Baillieux, Sandrine Meurisse, Emilie Leriche, Catherine Godfroid">
        <meta itemprop="JobTitle" content="psychologue">
    </div>
        <header class="head">
            <div class="head__logoMainNav">
            <img src="../assets/images/logo.png" alt="logo de la maison 1002 pattes" class="head__logo">
            <input id="burger" type="checkbox" class="checkbox"/>
            <label for="burger" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <nav class="head__mainNav mainNav">
                <h2 class="mainNav__title hidden">Navigation principale</h2>
                <a href="../index.html" class="mainNav__link" title="aller sur la page d'accueil">Accueil</a>
                <a href="./equipe.html" class="mainNav__link" title="aller sur la paéquipe">Équipe</a>
                <a href="./aides.html" class="mainNav__link" title="aller sur la page vous aider">Vous aidez&nbsp;?</a>
                <a href="./partenaires.html" class="mainNav__link" title="aller sur la page partenaires">Partenaires</a>
                <a href="#" class="mainNav__link check" title="aller sur la page contact">Contact</a>
                <a href="#" class="mainNav__link button don">Faire un don</a>
            </nav>
            <div class="head__don">
                <a href="#" class="exitDon" title="fermé la fenêtre des don"><span class="hidden">exit</span><i class="fas fa-times"></i></a>
                <p>Tous vos don seront utiliser pour améliorier votre confort au seins de notre asbl</p>
                <p class="thank">Merci&nbsp;!</p>
                <p class="number">185/645123/45456</p>
            </div>
            </div>
            <div class="head__ban__contact">
                <div>
                    <h1 class="ban__title hidden">Maison du 1002 pattes - Contact</h1>
                </div>
            </div>
        </header>
        <section class="contact">
            <h2 class="contact__title" id="ancre">Contactez-nous</h2>

            <form action="#ancre" method="post" class="contact__form">
                <div class="errors" id="errors">
                    <?php if(isset($error) && sizeof($error)>0): ?>
                        <ul>
                            <?php foreach($error as $e): ?>
                                <li><p><i class="fas fa-exclamation">&nbsp;</i><?= $e ?></p></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="email" class="email" >
                        Email&nbsp;:
                    </label>
                    <input type="email" class="input__email" id="email" name="email" value="<?= @$_POST["email"] ?>">
                </div>
                <div>
                    <label for="nom" class="nom">
                        Nom&nbsp;:
                    </label>
                    <input type="text" class="input__nom" id="nom" name="name" value="<?= @$_POST["name"] ?>">
                </div>
                <div>
                    <label for="sujet" class="sujet">
                        sujet&nbsp;:
                    </label>
                    <input type="text" class="input__sujet" id="sujet" name="sujet" value="<?= @$_POST["sujet"] ?>">
                </div>
                <div>
                    <label for="message" class="message">
                        Messages&nbsp;:
                    </label>
                    <textarea name="message" id="message" cols="30" rows="10"><?= @$_POST["message"] ?></textarea>
                </div>

                <input type="submit" value="Envoyer" name="submit"><i class="fas fa-long-arrow-alt-right fleche"></i>
            </form>
        </section>
        <section class="infos">
            <div class="infos__img">
                <img src="../assets/images/ext.jpg" alt="photo du batiment de la maison du 1002 pattes">
                <img src="../assets/images/ext2.jpg" alt="photo du batiment de la maison du 1002 pattes">
            </div>
            <div class="infos__contact">
                <h2 class="infos__title">informations</h2>
                <p class="infos__desc toto">Rue du neufchateau, 73 6600 Bastogne</p>
                <p class="infos__desc">061/46.60.08</p>
                <p class="infos__desc" id="mail"><a href="mailto:secretariat@1002pattes.be">secretariat@1002pattes.be</a></p>
            </div>
        </section>
        <section class="redirect">
            <h2 class="redirect__title hidden">Accueil</h2>
            <p class="redirect__desc">
                Si vous voulez en savoir un peux plus sur notre asbl, n'hésiter pas a consulter notre page d'accueil
            </p>
            <a href="../index.html" class="redirect__link button" title="aller sur la page d'accueil">Accueil</a>
        </section>
        <footer class="footer">
            <div class="footer__copyright">© website designed by Gilles Delmotte</div>
            <div class="footer__sponsor">
                <img src="../assets/images/euromillion.png" alt="logo de notre sponsor euro millions">
                <img src="../assets/images/joker.png" alt="logo de notre sponsor joker+">
                <img src="../assets/images/lotto.png" alt="logo de notre sponsor lotto">
                <img src="../assets/images/winforlife.png" alt="logo de notre sponsor win for life">
            </div>
        </footer>
    <script src="../assets/js/bundle.js"></script>

    </body>
</html>