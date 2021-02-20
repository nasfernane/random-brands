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
    <div class=mainWrap>
        <header>
            <h1>Hackaton des légumes oubliés </h1>
            <h2>Une team, un concept</h2>
        </header>

        <section class="binomeSection">
        

        <?php

        // définition des binomes
        $binomes = ['Team Panais' => ['Bagrat', 'Ben'], 'Team Cardons' => ['Abdul', 'Yang'], 'Team Rutabagas' => ['Jean-Emmanuel', 'Adam'], 'Team Raiforts' => ['Lima', 'Inès'], 'Team Scorsonères' => ['Mathieu', 'Le'], 'Team Salsifis' => ['Aymen', 'Lazare'], 'Team Capucines' => ['Juliette', 'Amina'], 'Team Pissenlits' => ['Ivan', 'Mathias', 'Gabriel'], 'Team Patissons' => ['Ida', 'Laetitia'], 'Team Ocas' => ['Harris', 'Seif'], 'Team Topinambours' => ['Claude', 'Thierry', 'Nassim']];

        // définition des marques
        $brands = ['Coca-Cola', 'Nike', 'Chanel', 'Bentley', 'Prada', 'Logitech', 'Tesla', 'Guiness', 'Victorinox', 'MSI', 'Etnies', 'Vans', 'Timberland', 'Peugeot', 'Disney', 'Paramount', 'Subway', 'Nvidia', 'Evian', 'Samsung', 'Honor', 'Lu', 'Ankama', 'Hachette', 'Netflix', 'Apple', 'Bose', 'Nicolas', 'Superdry', 'Valrhona', 'Facebook', 'Opquast', 'Mc Donald’s', 'Ikea', 'Zara', 'Kleenex', 'Heinz', 'Saupiquet', 'Bitcoin', 'Tinder', 'Instagram', 'Space X', 'Swatch', 'Fagor', 'Steak ’n Shake', 'Sephora', 'BFM TV', 'LIDL', 'Labeyrie', 'Ebay', 'Michelin', 'Boeing', 'Just Eat', 'Uber', 'Moulinex', 'Cochonou', 'Tefal', 'Porsche', 'Doctissimo', 'Biogaran', 'Oxford', 'Opinel', 'Thermomix', 'Dyson', 'Tamagotchi', 'PlayStation', 'Jack Daniels'];

        // pour chaque binome
        foreach ($binomes as $binome) {
            // récupération des variables
            $randomBrands = array_rand($brands, 2);
            $firstBrand = $brands[$randomBrands[0]];
            $secondBrand = $brands[$randomBrands[1]];
            $team = array_search($binome, $binomes);

            // conteneur binome
            echo "<div class=\"binomeContainer\">";

            if ($binome[2]) {
                echo "
                <div class=\"binome\">$team ($binome[0], $binome[1] & $binome[2]) =></div> 
                <div class=\"brand\">
                    <div class=\"brand__first\">
                        <div class=\"brandLogo\" data-logo=\"$firstBrand\"></div>$firstBrand
                    </div>
                    <div class=\"brand__second\">
                        <div class=\"brandLogo\" data-logo=\"$secondBrand\"></div>$secondBrand
                    </div>
                </div>";
            } else {
                echo "
                <div class=\"binome\">$team ($binome[0] & $binome[1]) =></div>
                <div class=\"brand\">
                    <div class=\"brand__first\">
                        <div class=\"brandLogo\" data-logo=\"$firstBrand\"></div>$firstBrand
                    </div>
                    <div class=\"brand__second\">
                        <div class=\"brandLogo\" data-logo=\"$secondBrand\"></div>$secondBrand
                    </div>
                </div>";
            } 

            echo "</div>";  
        }
        ?>
        </section>
    </div>

    <script src="public/assets/js/main.js"></script>
</body>
</html>



