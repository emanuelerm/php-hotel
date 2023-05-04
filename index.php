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

    if (isset($_GET['checkbox'])) {
        $filteredHotels = array_filter($hotels, function ($hotel) {
            return $hotel['parking'] === true;
        });
    } else {
        $filteredHotels = $hotels;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Bhootels</title>
</head>

<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <label for="checkbox">Private Parking: </label>
                        <input type="checkbox" name="checkbox" id="hotel">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12" <?php foreach($filteredHotels as $hotel) { ?>>
                    <div class="card px-3 my-3">
                        <div class="card-title">
                            <h3 class="mb-2"><?php echo $hotel['name'] ?></h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-2">Description: <?php echo $hotel['description'] ?></p>
                            <p class="mb-2">Vote: <?php echo $hotel['vote'] ?></p>
                            <p class="mb-2">Distance to center: <?php echo $hotel['distance_to_center'] ?></p>
                        </div>
                    </div <?php } ?>>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>