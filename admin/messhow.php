<?php
include('../connect.php');
  
// SQL query to select data from database
$sql = "SELECT * FROM contact ORDER BY date DESC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Messages</title>
    <!-- CSS FOR STYLING THE PAGE -->
    
</head>
  
<body>
    <section>
        <h1>Users Message</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['message'];?></td>
                <td><?php echo $rows['date'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>