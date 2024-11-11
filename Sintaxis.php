<?php
    $name = "vic1";
    $isDev = true;
    $age = 17;
    $isOld = $age >31;

    var_dump( $name ); 
    var_dump( $isDev );
    var_dump( $age );
    $output = "'hola web php, $name $age";
    define('URL', 'https://e7.pngegg.com/pngimages/476/159/png-clipart-pokemon-pikachu-pikachu-pokemon-games-pokemon-thumbnail.png');
    const NAME = "vic";
    $outputAge = match(true){
        $age <2 => "eres un bebé",
        $age <11 => "eres un niño",
        $age <19 => "eres un adolecente",
        default =>" ya le debes al sat",
    };

    $bestLanguages = ["php", "swift", "java", "javascript"];
    $person = [
        "name" =>"vic",
        "age" => 30,
        "isDev" => true,
        "languages" => ["php", "java", "swift"]
    ];
    /*
    $outputAge = $isOld
    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';
    */
/*
    if ($isOld) {
        echo"<h2> viejo</h2>";
    }else{
        echo "<h2> no viejo</h2>";
    }*/
?>
<!-- forma de usar if como sistema de plantillas para poner mas html dentro 
 
<?php if($isOld): ?>
    <h2> viejo</h2>
<?php elseif($isDev) : ?>
    <h2> no eres viejo pero eres desarrollador viejo</h2>
<?php else : ?>
    <h2> no eres viejo ni dev, felicidades!</h2>
<?php endif; ?>



!-->
<ul>
<?php foreach($bestLanguages as $key => $language) : ?>
    <li><?= $key." ". $language ?></li>
<?php endforeach; ?>

</ul>

<h2> <?= $outputAge ?></h2>
<h1>
    <?= NAME ?><br>
</h1> 
<h2>
    <?= 'es desarrollador? '.$isDev;?>
</h2>
<img src="<?= URL ?>" alt="phplogo" width="200">


    <style>
    :root {
        color-scheme: light dark;

    }
    body {
        display: grid;
        place-content: center;

    }
    </style>