<!DOCTYPE html>
<?php
session_start();


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="banke.css"/>
    </head>
    <body>
        
        <center>
        <form action="" class="form" method="POST">
        <div class="Group">
            <label for="name">حساب جديد </label>
            <input placeholder="اسم الحساب" id="name" type="text" name="name">
        </div>
        <div class="Group">
            <label for="iban">رقم الحساب</label>
            <input id="iban" type="text" name="account">
        </div>
        <div class="Group">
            <button class="btn" name="btn">انشاء</button>
        </div>
</form>
            
        <?php
        if(isset($_POST['btn'])){
        $id=$_SESSION['id'];
        $conn= mysqli_connect("localhost","root","","bank") or die("فشل الاتصال بقاعدة البيانات ");
        $name=$_POST['name'];
        $account_id_b=$_POST['account'];
        $sql= "insert into commercial_accounts (id , acc_id_b ) values ('$id','$account_id_b');";
        mysqli_query($conn, $sql) or die ("حدث خطا ");
        echo '<h2>تم انشاء حساب </h2>';
        
        }
        ?>
    </body>
</html>
