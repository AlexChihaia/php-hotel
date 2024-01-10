<?php
$parking_input = $_GET['parking'] ?? 'no';
$vote_input = $_GET['vote'] ?? 'none';

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
    <title>PHP Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>PHP Hotels</h1>

    <?php foreach ($hotels as $hotel) {
        # Stampa a schermo semplice dei dati

        #    echo '<h2>' . $hotel['name'] . '</h2>';
        #    echo '<p>Description: ' . $hotel['description'] . '</p>';
        #    echo '<p>Parking: ' . ($hotel['parking'] ?? 'Yes' : 'No') . '</p>';
        #    echo '<p>Vote: ' . $hotel['vote'] . '</p>';
        #    echo '<p>Distance to center: ' . $hotel['distance_to_center'] . ' ' . 'km' . '</p>';
        #    echo '<hr>';
    } ?>


    <div class="container d-flex justify-content-center ">
        <form action="index.php" method="GET" class="mb-4 col-10">
            <label for="parking">Parking</label>
            <select name='parking' class="form-control mb-3">
                <option value="no" selected>All</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <label for="vote">Vote</label>
            <select name="vote" class="form-control mb-5">
                <option value="none" selected>Minimum</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>


    <!-- Stampa con tabella bootstrap -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel) {
                    if (($parking_input === 'no' || ($parking_input === 'yes' && $hotel['parking'] === true)) && ($vote_input === 'none' || $hotel['vote'] >= $vote_input)) {
                        echo '<tr>';
                        foreach ($hotel as $info) {
                            if ($info === true) {
                                echo "<td>Yes</td>";
                            } elseif ($info === false) {
                                echo "<td>No</td>";
                            } else {
                                echo "<td>$info</td>";
                            };
                        };
                        echo '</tr>';
                    };
                };
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>