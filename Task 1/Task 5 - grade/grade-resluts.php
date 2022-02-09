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

$numberStatus1 = $_POST["PhysicsNumber"];
$numberStatus2 = $_POST["ChemistryNumber"];
$numberStatus3 = $_POST["BiologyNumber"];
$numberStatus4 = $_POST["MathematicsNumber"];
$numberStatus5 = $_POST["ComputerNumber"];


$message1 = $numberStatus1 + $numberStatus2 + $numberStatus3 + $numberStatus4 + $numberStatus5;
$message2 = ($message1 * 100) / 250;

if ($message2 >= 90 && $message2 <= 100) {
    $message3 = "Grade A";
} elseif ($message2 >= 80 && $message2 < 90) {
    $message3 = "Grade B";
} elseif ($message2 >= 70 && $message2 < 80) {
    $message3 = "Grade C";
} elseif ($message2 >= 60 && $message2 < 70) {
    $message3 = "Grade D";
} elseif ($message2 >= 40 && $message2 < 60) {
    $message3 = "Grade E";
} else {
    $message3 = "Grade F";
}

if ($message1 > 250) {
    echo "You Enter Wrong Marks!! Back and Edit It";
    die;
}




?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="alert alert-success" role="alert">
                    <h1 class="text-dark"> Your Sum Is: <?php echo $message1 ?> <br> and Your percentage Is: <?php echo $message2 ?>% ==> <?php echo $message3 ?>
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