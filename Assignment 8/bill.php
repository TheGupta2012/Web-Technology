<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href='style.css'>
        <title>Electricity Bills</title>
        <?php
        $result = $result_str = '';
        if(isset($_POST['submit_unit'])){
            $s = $_POST['start'];
            $e = $_POST['end'];
            $units = $e - $s;
            if($units>0 && !empty($units)){
                $result = calculate($units);
                $result_str = "Total amount for " . $units . ' units - ' . $result;
            }
        }

        // <!-- To calculate bill -->

function calculate($units){
    $first = 3;
    $second = 4;
    $third = 5;
    $fourth = 6;

    if($units <= 100) {
        $bill = $units * $first;
    }
    else if($units > 100 && $units <= 200) {
        $temp = 100 * $first;
        $remaining_units = $units - 100;
        $bill = $temp + ($remaining_units * $second);
    }
    else if($units > 200 && $units <= 300) {
        $temp = (100 * $first) + (100 * $second);
        $remaining_units = $units - 200;
        $bill = $temp + ($remaining_units * $third);
    }
    else {
        $temp = (100 * $first) + (100 * $second) + (100 * $third);
        $remaining_units = $units - 300;
        $bill = $temp + ($remaining_units * $fourth);
    }

    return number_format((float)$bill,2, '.','');
}

?>
    </head>
    <body>
        <div class = "central">
            <?php echo "<br> RESULT :- " . $result_str; ?>
        </div>
    </body>
</html>
