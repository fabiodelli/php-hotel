<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione ',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione ',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione ',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione ',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione ',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $features = ["Name","Description","Parking","Vote","Distance to center"]

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>



<table class="table table-bordered">
  <thead>
    <tr>
        <?php foreach ($features as $feature) {?>
            <th><?php echo $feature; ?></th>
        <?php } ?>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach ($hotels as $hotel) {
    
    echo "<tr>";
    echo "<td>{$hotel['name']}</td>";
    echo "<td>{$hotel['description']}</td>";
    if ($hotel['parking'] == false) {
      echo "<td><i class='fa-solid fa-x'></i></td>";
    }
    else {
      echo "<td><i class='fa-solid fa-check'></i></td>";
    }
    echo "<td>{$hotel['vote']}</td>";
    echo "<td>{$hotel['distance_to_center']}</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
  </tbody>
</table>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

