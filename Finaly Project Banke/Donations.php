<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="banke.css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form action="" class="form" method="POST">
        <div class="Group">
            <label for="don">التبرعات</label>
            <input placeholder="اسم مركز التبرع" id="don" type="text" name="name">
        </div>
        <div class="Group">
            <label for="amount">المبلغ</label>
            <input id="amount" type="text" name="amount">
        </div>
        <div class="Group">
            <button class="btn" name="btn">تبرع</button>
        </div>
</form>
    </center>
        
        <?php
        $id =$_SESSION['id'];
        if(isset($_POST['btn'])){
            $name =$_POST['name'];
            $amount =$_POST['amount'];
            $conn= mysqli_connect("localhost","root","","bank")or die('فشل الاتصال بقاعدة البيانات ');
            $funds= mysqli_query($conn, "SELECT funds from info where id='$id';");
            $row=mysqli_fetch_assoc($funds);
            $balance=$row['funds'];
            if($amount <= $balance){
                
           
            $sql = "UPDATE info SET funds = funds - '$amount' WHERE id= '$id'";
            mysqli_query($conn, $sql);
            echo '<h2>شكرا لي تبرعك لي مؤسسة '.$name.'</h2>';
            mysqli_close($conn);
        } else {
          echo "<h2>لايوجد رصيد كافي </h2>";
    
        }}
        ?>
    </body>
</html>
