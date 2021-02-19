<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Hackaton</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <header>
        <h1> Hackaton des légumes oubliés </h1>
        <h2>Une team, un concept</h2>
    </header>

    <section class="binomeSection">

    <?php

    $binomes = ['Team Panais' => ['Bagrat', 'Ben'], 'Team Cardons' => ['Abdul', 'Yang'], 'Team Rutabagas' => ['Jean-Emmanuel', 'Adam'], 'Team Raiforts' => ['Lima', 'Inès'], 'Team Scorsonères' => ['Mathieu', 'Le'], 'Team Salsifis' => ['Aymen', 'Lazare'], 'Team Capucines' => ['Juliette', 'Amina'], 'Team Pissenlits' => ['Ivan', 'Mathias', 'Gabriel'], 'Team Patissons' => ['Ida', 'Laetitia'], 'Team Ocas' => ['Harris', 'Seif'], 'Team Topinambours' => ['Claude', 'Thierry', 'Nassim']];

    $brands = ['Coca-Cola', 'Nike', 'Chanel', 'Bentley', 'Justin Bridou', 'Prada', 'Logitech', 'Tesla', 'Guiness', 'Victorinox', 'MSI', 'Razer', 'Etnies', 'Vans', 'Timberland', 'Peugeot', 'Disney', 'Paramount', 'Subway', 'Nvidia', 'Evian', 'Samsung', 'Honor', 'Lu', 'Ankama', 'Hachette', 'Netflix', 'Apple', 'Bose', 'Nicolas', 'Superdry'];

    

    foreach ($binomes as $binome) {
        $randomBrands = array_rand($brands, 2);
        $firstBrand = $brands[$randomBrands[0]];
        $secondBrand = $brands[$randomBrands[1]];
        $team = array_search($binome, $binomes);

        echo "<div class=\"binomeContainer\">";

        if ($binome[2]) {
            echo "$team ($binome[0], $binome[1] & $binome[2]) => $firstBrand & $secondBrand";
        } else {
            echo "$team ($binome[0] & $binome[1]) => $firstBrand / $secondBrand";
        } 

        echo "</div>";  
    }
    ?>
    </section>

    <script src="public/assets/js/main.js"></script>
</body>
</html>



