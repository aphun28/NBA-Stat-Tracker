<?php
session_start();

$playerId = $_SESSION ["playerId"];
$firstName = $_SESSION ["firstName"];
$lastName = $_SESSION ["lastName"];
$category = $_SESSION ["category"];


?>

<html>
    <head>
        <title>player Information</title>
        <?php include("../navigationBar.html");?>
    </head>
    <body>

        <table>
            <tr>
                <th colspan="2">player Information</th>
            </tr>
            <tr>
                <td>First Name: </td>
                <td><?php echo $firstName; ?></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><?php echo $lastName; ?></td>
            </tr>
            <tr>
                <td>ID: </td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Category: </td>
                <td><?php echo $category; ?></td>
            </tr>
        </table>

    </body>
</html>
