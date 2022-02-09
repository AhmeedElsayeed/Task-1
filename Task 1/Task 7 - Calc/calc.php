<!DOCTYPE html>

<head>
    <title> Calculator Program </title>
</head>



<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="calc-results.php" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <!-- <p>
                <input readonly="readonly" name="result" value=" <?php echo $result; ?>"> <b>Result</b>
            </p> -->
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
</body>

</html>