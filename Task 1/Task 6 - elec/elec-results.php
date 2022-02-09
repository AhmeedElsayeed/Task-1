<?php
#app
// user -> enter Grade Marls 5 inputs 
##
// Know The Grade Rate
if (!$_POST) {
    echo "Error 405 Method Not Allowed";
    die;
    // throw new Exception("Method Not Allowed",405);
}

$elecUsageCost = $_POST["elecUsage"];
// $varUsage = $price * 20 / 100;
if ($elecUsageCost > 0 && $elecUsageCost <= 50) {
    $price = 0.50 * $elecUsageCost;
    $totalprice = $price + ($price * 20 / 100);
} elseif ($elecUsageCost > 50 && $elecUsageCost <= 150) {
    $price = 0.75 * $elecUsageCost;
    $totalprice = $price + ($price * 20 / 100);
} elseif ($elecUsageCost > 150 && $elecUsageCost <= 250) {
    $price = 1.20 * $elecUsageCost;
    $totalprice = $price + ($price * 20 / 100);
} else {
    $price = 1.50 * $elecUsageCost;
    $totalprice = $price + ($price * 20 / 100);
}


// $elecUsageCostFull = ($elecUsageCost * 20 / 100) + $elecUsageCost;




?>
<!doctype html>
<html lang="en">

<head>
    <title>Elec Usage Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-10 offset-1">
                <div class="alert alert-success" role="alert">
                    <h1 class="text-danger"> Your Recit Valus is : <?php echo $totalprice ?>
                        <br> GO PAY NOW OR WE WILL CUT THE ELECTREC!!
                    </h1>
                </div>
            </div>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>