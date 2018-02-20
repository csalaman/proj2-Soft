<?php
/**
 * User: csalaman
 * Date: 2/19/2018
 * Time: 5:33 PM
 */

/* Implements the order form */




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

<div class="container">
    <h1 class="text-center">Order Request Form</h1>

        <form action="processRequest.php" method="POST">

            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" class="input-control" id="name" name = "name" placeholder="E.g., John Doe" pattern="^[A-Za-Z]*" style="display:table-cell; width:100%">
            </div><br>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" class="input-control" id="email" name="emails" placeholder="E.g., johndoe@email" style="display:table-cell; width:100%" >
            </div><br>

            <div class="form-group">
                <label for="phone">Cell Phone:</label><br>
                <input type="text" id="phone" class="input-control" name = "phone" placeholder="E.g., (555)555-5555" style="display:table-cell; width:100%"  pattern="[\(]\d{3}[\)]\d{3}[\-]\d{4}" required>
            </div><br>

            <div class="form-group" >
                <label for="shipping">Shipping Method:</label><br>

                <input type="radio" id="radio" value="UPSS" name="rad">
                <label for="radio">UPSS</label>

                <input type="radio" id="radio" value="FedEXC" name="rad">
                <label for="radio">FedEXC</label>

                <input type="radio" id="radio" value="USMAIL" name="rad">
                <label for="radio">USMAIL</label>

                <input type="radio" id="radio" value="Other" name="rad">
                <label for="radio">Other</label>

            </div><br>

            <div class="form-group ">
                <label for="software_opts">Softwares:</label><br>
                <select multiple class="form-control" id="software_opts" name="software_opts[]">
                    <?php

                    include('softwares.php');
                    foreach($softwares as $key => $val){
                        echo "<option value='$key|$val' ".">".$key." ($".$val.")"."</option>";
                    }

                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="textarea">Order Specification:</label>
                <textarea class="form-control" id="textarea" name="specs" rows="3"></textarea>
            </div>

        <input type="submit" class="btn-lg"  placeholder="Submit Request" style="display:table-cell; width:100%"><br><br>
        <input type="reset" class = "btn-lg" placeholder="Reset Fields" style="display:table-cell; width:100%">
        </form>

</div>

<!-- jQuery (needed for Bootstrap's JS plugins) -->
<script src="bootstrap/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
