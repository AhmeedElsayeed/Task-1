<?php
#app
// user -> enter 3 Numbers 
##
// calc The mini and max numbers with If 
if (!$_POST) {
    echo "Error 405 Method Not Allowed";
    die;
    // throw new Exception("Method Not Allowed",405);
}

$number1 = $_POST["firstNumber"];
$number2 = $_POST["secondNumber"];
$number3 = $_POST["thirdNumber"];
## The Max Is :
if ($number1 > $number2 && $number1 > $number3) {
    $message = "The Max Number Is : $number1";
} elseif ($number2 > $number3) {
    $message = "The Max Number Is : $number2";
} else {
    $message = "The Max Number Is : $number3";
}
## The Min Is :

if ($number1 < $number2 && $number1 < $number3) {
    $message2 = "The Min Number Is : $number1";
} elseif ($number2 < $number3) {
    $message2 = "The Min Number Is : $number2";
} else {
    $message2 = "The Min Number Is : $number3";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Max-Min Results</title>
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
                    <h1 class="text-dark"> The Max Number is <?php echo $message ?>
                    </h1>
                </div>
            </div>
            <div class="col-6 offset-3">
                <div class="alert alert-success" role="alert">
                    <h1 class="text-dark"> The Min Number is <?php echo $message2 ?>
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