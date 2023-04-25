<?php 
 include 'connection.php';
 function total_vehicle()
{
        
    global $conn;

                $query = 'SELECT id FROM vehicles_tbl ORDER BY Id';
                $query_execute = mysqli_query($conn, $query);     
                
                $row = mysqli_num_rows($query_execute);
                echo "<p>Vehicles</p>";
                echo "<h3>$row</h3>"; 
}



?>