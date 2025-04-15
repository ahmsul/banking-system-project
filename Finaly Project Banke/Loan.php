<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="banke.css"/>
        <meta charset="UTF-8">
        <title>loan || قروض </title>
    </head>
    <body>
        <center>
        <form action="" class="form" method="POST">
        <div class="Group">
            <label for="ty_b">التبرعات</label>
            <input placeholder="نوع القرض" id="ty_b" type="text" name="ty_b">
        </div>
        <div class="Group">
            <label for="amount">المبلغ</label>
            <input id="amount" type="text" name="amount">
        </div>
        <div class="Group">
            <button class="btn" name="btn">انهاء</button>
        </div>
</form>
        <?php
        if(isset($_SESSION['id'])){
            $id=$_SESSION['id'];
        $conn= mysqli_connect("localhost","root","","bank") or die("فشل ");
        if(isset($_POST['btn'])){
            $type=$_POST['ty_b'];
            $amount=$_POST['amount'];
            mysqli_query($conn, "UPDATE info SET funds = funds + '$amount' where id=$id");
            echo '<h2> نجحت العملية </h2>';
            mysqli_close($conn);
        }}
        ?>
    </body>
</html>
