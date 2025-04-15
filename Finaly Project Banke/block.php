
<?php    
    
    $id= $_GET['id'];
    $conn = mysqli_connect('localhost','root','','bank') or die("لا يمكن الاتصال بقاعدة البيانات");
    mysqli_query($conn, "DELETE FROM info WHERE id=$id;")or die("لا يمكن حذف المستخدم");
    mysqli_query($conn, "DELETE FROM users WHERE id=$id;")or die("لا يمكن حذف المستخدم");
    mysqli_query($conn, "DELETE FROM commercial_accounts WHERE id=$id;")or die("لا يمكن حذف المستخدم");
    mysqli_close($conn);
    header("Location:joinadmin.php");  

    



