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
    <style>
    #central{
        margin: 3%;
        background-color: beige;
        font-weight: bolder;
        box-shadow: 4px 5px orange;
        font-size: 40px;
        text-align: center;
    }
    </style>
    </head>
    <body>
        <img id="logo" src="reliance.png" height=140px width = 140px>
        <h1 id="main"> Welcome to Reliance Electricity
        </h1>
        <div class = "info">
            <h3>Details of Bill </h3>
            <span>Below are the rates that are applied
            for the calculation of your bill.
            Please cross check the calculations before
            submitting your bill.</span>
            <table class = "rates">
                <thead>
                        <th>S.NO</th>
                        <th align="center">UNITS CONSUMED</th>
                        <th>RATE</th>
                </thead>
                <tbody>
                    <tr>
                        <td> 1.</td>
                        <td> < 100 </td>
                        <td> Rs. 3/unit</td>
                    </tr>
                    <tr>
                        <td> 2.</td>
                        <td> Between 100 and 200 </td>
                        <td> Rs. 4/unit</td>
                    </tr><tr>
                        <td> 3.</td>
                        <td> Between 200 and 300 </td>
                        <td> Rs. 5/unit</td>
                    </tr><tr>
                        <td> 4.</td>
                        <td> >300 </td>
                        <td> Rs. 6/unit</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="user-info">
            <form action="" method="post">
            <h2> Start of the month reading </h2>
            <input type="number" name="start" placeholder="Please enter reading"><br><br>
            <h2> End of the month reading </h2>
            <input type="number" name="end" placeholder="Please enter reading">
            <input class="sub-button" type="submit" name = "submit_unit">
        </form>
        </div>
        <div id = "central">
            <span><?php echo $result_str ; ?></span>
        </div>
    </body>
</html>
