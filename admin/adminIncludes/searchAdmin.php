<?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insert();
                break;
        }
    }


    function insert() {

    $query3 = "SELECT * FROM customer where customerFirstName = $searchFood1";
    $fms1 = mysqli_query($connection, $query3);
    if($fms1){
        while ($fm = mysqli_fetch_assoc($fms1)) {
            echo "<tr>";
            echo "<td>{$fm['customerId']}</td>";
            echo "<td>{$fm['customerFirstName']}</td>";
            echo "<td>{$fm['customerLastName']}</td>";
            echo "<td>{$fm['customerEmail']}</td>";
            echo "<td>{$fm['customerContactNo']}</td>";
            echo "<td>{$fm['customerPassword']}</td>";
            echo "<td><a href=\"adminUserDetail.php\">Edit</a></td>";
            echo "</tr>";
        }   
    }
        exit;
    }
?>
