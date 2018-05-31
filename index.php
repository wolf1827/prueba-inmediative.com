<?php 
        $jsonDbString = file_get_contents("./db.json");
        $jsonDb= json_decode($jsonDbString);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $jsonDb->title; ?></title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"></link>
    <link rel="stylesheet" type="text/css" href="./assets/libs/owl/owl.carousel.min.css"></link>
    <link rel="stylesheet" type="text/css" href="./assets/libs/owl/owl.theme.default.min.css"></link>
</head>
<body>
    
    <header>
        <nav class="menu">
            <h3>
                <?php echo $jsonDb->title; ?>
            </h3>
            <ul>
                <?php foreach($jsonDb->menu as $menu): ?>
                    <li>
                        <a href="<?php echo $menu->href; ?>"><?php echo $menu->title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>    
    <section class="section-content">
        <article class="section-destacada">
            <div>
                <h2><?php echo $jsonDb->jumbotron->title; ?></h2>
                <p>
                    <?php echo $jsonDb->jumbotron->subtitle; ?>
                </p>
                <button>Descargar</button>
            </div>
            <div>
                <div></div>
            </div>
        </article>
    </section>  
    <section class="section-content">
        <div class="section-aurora-and-moment">
            <article>
                <h2><?php echo $jsonDb->box->title; ?></h2>
                <p>
                    <?php echo $jsonDb->box->text; ?>
                </p>
            </article>
            <article>
                <h2>Moment</h2>
                <ul>
                    <?php foreach($jsonDb->moment as $moment):?>
                        <li><?php echo $moment; ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>    
        </div>
        
    </section>   
    <section class="section-content">
        <div class="section-slider owl-carousel">
            <?php foreach($jsonDb->slide as $slide): ?>
                <div>
                    <img src="<?php echo $slide; ?>" alt="imagen">
                </div>
            <?php endforeach; ?> 
        </div>
    </section>   
    <footer>
        <h4>Gracias por la oportunidad :)</h4>
    </footer>
    <script src="./assets/libs/jquery/jquery.js"></script>
    <script src="./assets/libs/owl/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>