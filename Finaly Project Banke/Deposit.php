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
        <form action="" method="POST" class="form">
            <div class="Group">
                <label for="IBAN">Account</label>
                <input placeholder="Account number " id="account" type="text" name="account">
                
            </div>
            <div class="Group">
                <label for="amount">Amount</label>
                <input id="amount" type="text" name="amount">
            </div>
            <div class="Group">
                <button class="btn" name="but_t">Transfer</button>
            </div>
        </form>
    
        </center>
    <?php
    if(isset($_SESSION['id'])){
        
        $id = $_SESSION['id'];
        $conn = mysqli_connect("localhost", "root", "", "bank") or die("فشل الاتصال بقاعدة البيانات");
        
        if(isset($_POST['but_t'])){
            $account_id = $_POST['account'];
         
            $amount = $_POST['amount'];
            $result = mysqli_query($conn, "SELECT funds from commercial_accounts where id='$id';");            
            if(mysqli_num_rows($result)!=0){
                $row =mysqli_fetch_assoc($result);
                $funds = $row['funds'];  
            }else{
                die("لا يمنكن استرداد معلومات الحساب");
            }
            if($amount <= $funds){
               // $from = $funds - $amount;
               // $to = $funds + $amount;
                $sql = "UPDATE info SET funds = funds + '$amount' WHERE acc_id = '$account_id' ;";
                mysqli_query($conn, $sql);

                $sql = "UPDATE commercial_accounts SET funds = funds -'$amount' WHERE id= '$id' ;";
                mysqli_query($conn, $sql);

                echo "<h2>تمت عملية التحويل بنجاح</h2>";
            } else {  
                echo '<h2>لايوجد رصيد كافي للعملية </h2>';
            //اضافة زر رجوع الي الصفحة الرئسية  
            
            
            
            
            mysqli_close($conn);
            }
        }
     }
    ?>
</body>
</html>