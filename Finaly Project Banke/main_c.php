<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="banke.css"/>
    </head>
    <body>

    <center>
         <img src="lo1.jpeg">
        <form action="" method="POST">
        <div class="trn">
            <h2>ايداع الي الحساب الرئيسي </h2>
            
            <button name="but">
                CLECK HERE
            </button>
        </div>
        </form>
          
        <?php
        if (isset($_SESSION['id'])) {
            $conn = mysqli_connect("localhost", "root", "", "bank") or die("فشل الاتاصل بقاعدة البيانات");

            $id = $_SESSION['id'];

            $result = mysqli_query($conn,"SELECT * FROM commercial_accounts where id='$id' ;") or die("فشل تنفيذ جملة الاستعلام");

 
        
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class=card><h3>" . $row['id'] . "</h3>";
                echo "<p>" . $row['acc_id_b'] . '  '.'account'.  "</p>";
                echo "<h3 class=m>" . $row['funds'] . 'SR' . "</h3>";
        }
        if(isset($_POST['but'])){
            header("location:Deposit.php");
        }}
        
        ?>
    </center>
    </body>
</html>
