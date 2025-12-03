<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel EX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-4">
        PHP Hotel
    </h1>

    <div class="container">
        <div class="my-3">
            <h4 class="text-center my-2">
                Trova l'hotel che fa per te!
            </h4>
            <form action="" class="d-flex flex-column gap-3" method="GET">
                <div>
                    <label for="">
                        Hotel con parcheggio
                    </label>
                    <input type="checkbox" name="parking" id="">
            <?php
            $parking = isset($_GET["parking"]);
            ?>
                </div>
                <button type="submit" class="btn btn-primary w-25">
                    Cerca
                </button>
            </form>
        </div>
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                        <?php
                            foreach($hotels[0] as $key => $value) {
                                echo "<th scope='col'>" .
                                ucfirst($key) . 
                                "</th>";
                            }
                        ?>
                </tr>
            </thead>
            <tbody>
            <?php
                if ($parking) foreach($hotels as $hotel) {
                            echo "<tr>";
                            foreach($hotel as $key => $value) {
                                if($hotel["parking"] === true) {
                                    echo "<td>$value</td>";
                                }
                            };
                            echo "</tr>";
                        } else {
                            foreach($hotels as $hotel) {
                                echo "<tr>";
                                foreach($hotel as $key => $value) {
                                    echo "<td>$value</td>";
                                };
                                echo "</tr>";
                            }
                        }
            ?>
            </tbody>
        </table>
    </div>

    <?php

    

?>
</body>
</html>