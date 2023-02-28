<html>
    <head>
        <title>Filmes | Star Wars</title>
        <link rel="shortcut icon" href="./favicon.png"/>
        <embed name="myMusic" loop="true" hidden="true" src="./music.mp3">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $url = 'https://swapi.dev/api/films';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $resultado = json_decode(curl_exec($ch));
            //var_dump ($resultado);
            /*foreach($resultado->results as $filme){
                echo "Diretor: " . $filme->director . "<br>";
                echo "Filme: Episódio " . $filme->episode_id . "<br>";
                echo "Sequência de abertura: " . $filme->opening_crawl . "<br>";
            }*/
        ?>
        <div class="container">
            <ul class="nav nav-tabs">
                <li><b href="./index.php">Home</b></li>
                <li class="active"><a href="./movies.php">Filmes</a></li>
                <li><b href="./characters.php">Personages</b></li>
                <li><b href="./starships.php">Naves</b></li>
                <li><b href="./vehicles.php">Veículos</b></li>
                <li><b href="./species.php">Espécies</b></li>
                <li><b href="./planets.php">Planetas</b></li>
            </ul>
            <h2>Filmes</h2>
            <div class="table-bordered">
                <table class="table">
                    <thead>
                        <td>Filme</td>
                        <td>Lançamento</td>
                        <td>Produtor</td>
                        <td>Sequência de abertura</td>
                    </thead>
                    <?php
                        foreach($resultado->results as $filme){
                            echo "<tr>";
                            echo "<td>"."Episódio "."$filme->episode_id: ".$filme->title."</td>";
                            echo "<td>".date("d/m/Y", strtotime($filme->release_date))."</td>";
                            echo "<td>".$filme->producer."</td>";
                            echo "<td>".$filme->opening_crawl."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>