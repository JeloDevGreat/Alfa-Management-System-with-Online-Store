<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alfa_management_db";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT tbl_cashtable.CashId, tbl_cashtable.CashSource, tbl_cashtable.CashOut, tbl_cashtable.CashBalance,tbl_cashin.CashAmount FROM tbl_cashtable INNER JOIN tbl_cashin ON tbl_cashtable.CashId = tbl_cashin.CashId AND tbl_cashtable.IsDeleted = 0";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cashbook</title>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <h1 class="text-center">CashTable</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><input type="checkbox" name="select_all" value="" id="select_all"></th>
                        <th>Cash Source</th>
                        <th>Cash In</th>
                        <th>Cash Out</th>
                        <th>Cash Balance</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><input type='checkbox' name='data[]' value='".$row["CashId"]."'></td>";
                                echo "<td>".$row["CashSource"]."</td>";
                                echo "<td>".$row["CashAmount"]."</td>";
                                echo "<td>".$row["CashOut"]."</td>";
                                echo "<td>".$row["CashBalance"]."</td>";
                                echo "</tr>";
                            }
                        ?>  
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><input type="submit" name="submit" value="Delete"></td>
                    </tr>
            </table>
        </form>
    </div>
</html>
<?php 
    if(isset($_POST['submit'])) {
        if(!empty($_POST['data'])) {
            $checkbox = $_POST['data'];
            foreach($checkbox as $data) {
                $sql = "UPDATE tbl_cashtable SET IsDeleted = 1 WHERE CashId = $data";
                $result = $conn->query(query: $sql);
            }
        } else {
            echo "Please select a record to delete";
        }
    }
?>