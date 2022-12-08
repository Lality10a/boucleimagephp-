<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle image</title>
    <style>
        body {
            background-color: #333;
            margin: 0;
        }

        section {
            display: flex;
            justify-content: space-between;
        }

        .conteneur {
            width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            min-height: 1000px;
        }

        h2 { border-bottom: 1px solid; padding: 20px 0; margin: 20px 0; }
        img {
            max-width: 19%;
        }
    </style>
</head>

<body>
    <?php
    // EXERCICES :
    //------------
    // 01 : Récupérez 5 images sur le web (de même extension) et les renommer de cette manière :
    // image1.jpg | image2.jpg | image3.jpg | image4.jpg | image5.jpg
    // 02 : affichez une des 5 images avec un echo et un img src
    // 03 : affichez 5 fois la même image toujours avec un echo et un img src (indice : une boucle)
    // 04 : essayez d'afficher les 5 différentes images toujours avec un echo et un img src. (indice : une boucle ...)
    ?>
    <div class="conteneur">
        <h2>02 : affichez une des 5 images</h2>
        <section>
            <?php
            echo '<img src="img/image1.jpg">';
            ?>
        </section>
        <h2>03 : affichez 5 fois la même image</h2>
        <section>
            <?php
                for($i = 0; $i < 5; $i++) {
                    echo '<img src="img/image1.jpg">';
                }
            ?>
        </section>
        <h2>04 : affichez les 5 différentes images</h2>
        <section>
            <?php
                for($i = 1; $i <= 5; $i++) {
                    echo '<img src="img/image' . $i . '.jpg">';
                }
            ?>
        </section>
    </div>

</body>

</html>