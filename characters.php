<html>
    <head>
        <title>Personagens | Star Wars</title>
        <link rel="shortcut icon" href="./favicon.ico"/>
        <embed name="myMusic" loop="true" hidden="true" src="./music.mp3">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $url = 'https://swapi.dev/api/people';
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
                <li class="active"><a href="./characters.php">Personages</a></li>
                <li><a href="./starships.php">Naves</a></li>
                <li><a href="./vehicles.php">Veículos</a></li>
                <li><a href="./species.php">Espécies</a></li>
                <li><a href="./planets.php">Planetas</a></li>
            </ul>
            <h2>Personagens</h2>
            <div class="table-bordered">
                <table class="table">
                    <thead>
                        <td>Nome</td>
                        <td>Altura</td>
                        <td>Peso</td>
                        <td>Cor do cabelo</td>
                        <td>Cor da pele</td>
                        <td>Aniversário</td>
                        <td>Cor dos olhos</td>
                        <td>Gênero</td>
                    </thead>
                    <?php
                        foreach($resultado->results as $filme){
                            echo "<tr>";
                            echo "<td>".$filme->name."</td>";
                            echo "<td>".$filme->height." cm"."</td>";
                            echo "<td>".$filme->mass."</td>";
                            echo "<td>".$filme->hair_color."</td>";
                            echo "<td>".$filme->skin_color."</td>";
                            echo "<td>".$filme->eye_color."</td>";
                            echo "<td>".$filme->birth_year."</td>";
                            echo "<td>".$filme->gender."</td>";
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