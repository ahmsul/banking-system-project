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
    <link rel="stylesheet" href="banke.css">
</head>

<body>
    <center>
       
                <div class="con">
        <header>
        

        <ul>
        <li><a href="logout.php">تسجيل خروج</a></li>
        <li><a href="account.php">فتح حساب تجاري </a></li>
        <li><a href="main_c.php">عرض الحساب التجاري </a></li>
        <li><a href="Deposit_to.php">ايداع الي الحساب التجاري </a></li>
        <li><a href="about.php">about</a></li>

        </header>
                    </div>
         <img src="lo1.jpeg">

        <div class="trn">
            <h2>تحويل</h2>
            <form action="" method="POST">
                <button name="but">
                    CLECK HERE
                </button>
                <div class="don">
                    <h2>تبرعات</h2>
                    <button name="but_don">
                        CLECK HERE
                    </button>
                    <div class="loan">
                        <h2>قروض </h2> 
                        <button name="loan">
                        CLECK HERE
                        </button>
                        
                    </div>

                </div>
            </form>
        </div>
        <?php
        if (isset($_SESSION['id'])) {
            $conn = mysqli_connect("localhost", "root", "", "bank") or die("فشل الاتاصل بقاعدة البيانات");

            $id = $_SESSION['id'];

            $result = mysqli_query($conn,"SELECT * FROM info where id='$id' ;") or die("فشل تنفيذ جملة الاستعلام");

 
        
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class=card><h3>" . $row['id'] . "</h3>";
                echo "<p>" . $row['acc_id'] . 'iban' . "</p>";
                echo "<h3 class=m>" . $row['funds'] . 'SR' . "</h3>";
            }
            
            if (isset($_POST['but'])) {
                header("location:Transfer.php");
            }
            if (isset($_POST['but_don'])) {
                header("location:Donations.php");
            }if (isset($_POST['loan'])){
                header("location:loan.php");
            }

            mysqli_close($conn);
        } if (isset($_POST['logout'])){
            session_unset();
            session_destroy();
            header("location:index.php"); 
            
        }
        
        if (isset($_POST['acc'])){
            header("location:new_account.php");
        }
             
            
        ?>

    </center>

</body>
</html>