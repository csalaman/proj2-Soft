<?php
/**
 * User: csalaman
 * Date: 2/19/2018
 * Time: 5:34 PM
 */

/* Processes the information provided through the order form and displays the confirmation */
function addRow($data_arr){

    $total = 0;
    foreach ($data_arr as $i => $data){
        echo "<tr>";
        echo "<td>".(explode("|",$data))[0]."</td>";
        echo "<td>$".(explode("|",$data))[1]."</td>";
        echo "</tr>";
        $total = $total + (explode("|",$data))[1];
    }
    echo "<tr bgcolor='#F7D1EB'>";
    echo "<td>Total</td>";
    echo "<td>$".$total."</td>";
    echo "</tr>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Order Request Form</title>
</head>
<body>
    <div class="container col-lg-4">
        <h1 >Order Confirmation</h1>
        <div class="list-group" >
            <?php
                echo "<Strong>Name:</Strong>".$_POST["name"]."<br>";
                echo "<Strong>Email:</Strong>".$_POST["emails"]."<br>";
                echo "<Strong>Phone:</Strong>".$_POST["phone"]."<br>";
                echo "<Strong>Shipping Method:</Strong>".$_POST["rad"]."<br>";
            ?>
        </div>
        <div class="container ">
            <table class="table">
                <thead class="table-bordered">
                <tr>
                    <th scope="col">Software</th>
                    <th scope="col">Cost</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    addRow($_POST["software_opts"]);
                ?>
                </tbody>

            </table>
        </div>
        <div class="container">
            <strong>Order Specifications:</strong>
            <?php
                echo "<p>".$_POST["specs"]."</p>";
            ?>
        </div>

    </div>

<!-- jQuery (needed for Bootstrap's JS plugins) -->
<script src="bootstrap/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

