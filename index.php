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
    <title>PHP Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>PHP Hotels</h1>

<?php foreach ($hotels as $hotel) {
    # Stampa a schermo semplice dei dati

#    echo '<h2>' . $hotel['name'] . '</h2>';
#    echo '<p>Description: ' . $hotel['description'] . '</p>';
#    echo '<p>Parking: ' . ($hotel['parking'] ? 'Yes' : 'No') . '</p>';
#    echo '<p>Vote: ' . $hotel['vote'] . '</p>';
#    echo '<p>Distance to center: ' . $hotel['distance_to_center'] . ' ' . 'km' . '</p>';
#    echo '<hr>';
} ?> 


<div class="container sm">
<form class="mb-4">
  <div class="form-group">
    <label for="parking">Parking</label>
    <select class="form-control" id="parking">
      <option value="">All</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select>
  </div>
  <div class="form-group">
    <label for="vote">Vote</label>
    <input type="number" class="form-control" id="vote" value="" min="0" max="5">
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
</div>


<!-- Stampa con tabella bootstrap -->
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
            echo '<tr>';
            echo '<td>' . $hotel['name'] . '</td>';
            echo '<td>' . $hotel['description'] . '</td>';
            echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
            echo '<td>' . $hotel['vote'] . '</td>';
            echo '<td>' . $hotel['distance_to_center'] . ' ' . 'km' . '</td>';
            echo '</tr>';
        } ?>
    </tbody>
</table>
    
    
</body>
</html>