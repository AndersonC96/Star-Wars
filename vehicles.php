<html>
    <head>
        <title>Veículos | Star Wars</title>
        <link rel="shortcut icon" href="./favicon.ico"/>
        <embed name="myMusic" loop="true" hidden="true" src="./music.mp3">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $url = 'https://swapi.dev/api/vehicles';
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
                <li><a href="./index.php">Filmes</a></li>
                <li><a href="./characters.php">Personages</a></li>
                <li><a href="./starships.php">Naves</a></li>
                <li class="active"><a href="./vehicles.php">Veículos</a></li>
                <li><a href="./species.php">Espécies</a></li>
                <li><a href="./planets.php">Planetas</a></li>
            </ul>
            <h2>Veículos</h2>
            <div class="table-bordered">
                <table class="table">
                    <thead>
                        <td>Nome</td>
                        <td>Modelo</td>
                        <td>Fabricante</td>
                        <td>Valor</td>
                        <td>Tamanho</td>
                        <td>Velocidade</td>
                        <td>Tripulação</td>
                        <td>Passageiros</td>
                        <td>Carga</td>
                        <td>Consumíveis</td>
                        <td>Classe</td>
                    </thead>
                    <?php
                        foreach($resultado->results as $filme){
                            echo "<tr>";
                            echo "<td>".$filme->name."</td>";
                            echo "<td>".$filme->model."</td>";
                            echo "<td>".$filme->manufacturer."</td>";
                            echo "<td>".$filme->cost_in_credits."</td>";
                            echo "<td>".$filme->length."</td>";
                            echo "<td>".$filme->max_atmosphering_speed."</td>";
                            echo "<td>".$filme->crew."</td>";
                            echo "<td>".$filme->passengers."</td>";
                            echo "<td>".$filme->cargo_capacity."</td>";
                            echo "<td>".$filme->consumables."</td>";
                            echo "<td>".$filme->vehicle_class."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
                <ul class="pager">
                    <li class="previous"><a href="#">Anterior</a></li>
                    <li class="next"><a href="#">Próxima</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>