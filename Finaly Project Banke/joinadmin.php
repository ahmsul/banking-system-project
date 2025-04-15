<?php
session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
        <style>
            body{
                margin: 10px;
            }
        

        </style>
        <meta charset="UTF-8">
        <title>مرحبا بكم في صفحة الادمن</title>
        <link rel="stylesheet" type="text/css" href="banke.css">
    </head>
    <body>
        
        <table border="1">
            <th>id</th><th>acc_id</th><th>funds</th><th>block</th>
<?php
$conn = mysqli_connect("localhost","root","","bank");
        $result= mysqli_query($conn,"SELECT * FROM info;") or die("لايمكن الاستعلام ");
            mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['acc_id']."</td>";
                    echo "<td>".$row['funds']."</td>";
                    
                    echo "<td><a href=block.php?id=".$row['id'].">block</a></td>";
                }
                echo "</tr>"; 
                ?> <th>id</th><th>username</th><th>name</th><th>mobile</th><th>block</th> <?php
                $conn = mysqli_connect("localhost","root","","bank");
                $result= mysqli_query($conn,"SELECT * FROM users;") or die("لايمكن الاستعلام ");
            mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['mobile']."</td>";
                    //echo "<td>".$r['mobile']."</td>";
                    
                    echo "<td><a href=block.php?id=".$row['id'].">block</a></td>";
                }
                echo "</tr>"; 
                
                ?> <th>id</th><th>accounts</th><th>funds</th><th>block</th> <?php
                $conn = mysqli_connect("localhost","root","","bank");
                $result= mysqli_query($conn,"SELECT * FROM commercial_accounts;") or die("لايمكن الاستعلام ");
            mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($result)){
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['acc_id_b']."</td>";
                    echo "<td>".$row['funds']."</td>";
                    
                    echo "<td><a href=block.php?id=".$row['id'].">block</a></td>";
                }
                echo "</tr>"; 


                
            
            ?>
            </table>
    </body>
</html>