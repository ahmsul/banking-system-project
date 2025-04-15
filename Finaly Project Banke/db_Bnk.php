<?php

$conn =mysqli_connect('localhost','root','') OR die('لم يتم الاتصال قاعدة بيانات ');
        echo "<h2>تم الاتصال بقاعدة البيانات</h2>";
        mysqli_query($conn,'CREATE DATABASE bank')  OR die("لم يتم انشاء قاعدة بيانت");
        echo "<h2>تم انشاء قاعدة بيانات </h2>";
        mysqli_select_db($conn,'bank');
        echo "<h2>تم اختيار قاعدة البيانات</h2>";
        $sql= "CREATE TABLE users ("
        . "id int primary key,"
        . "username varchar (30) unique not null,"
        . "mobile int not null,"
        . "name varchar (30) not null,"
        . "password varchar(40) not null );";
mysqli_query($conn, $sql) or die("فشل انشا جدول ");
echo '<h2>نجح انشاء جدول المستخدمين </h2>';
$sql= "CREATE TABLE info ("
        ."acc_id int (30) primary key ,"
        ."funds  int (10) not null,"
        . "id int ,"
        ."FOREIGN KEY (id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE );";
        mysqli_query($conn, $sql);
        echo '<h2>نجح انشاء جدول المعلومات </h2>';

        $sql = "CREATE TABLE commercial_accounts ("
        . "acc_id_b int(30) primary key ,"
        . "id int,"
        . "funds int(10) not null,"
        . "FOREIGN KEY (id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE"
        . ");";
  mysqli_query($conn, $sql) or die("فشل انشاء جدول الحسابات التجارية");
  echo '<h2>تم انشاء جدول الحسابات التجارية </h2>';

        
             
        
$sql = "insert into users (id, password) "
. "values ('1','" . sha1('123')."');";
        mysqli_query($conn, $sql) or die('لم يتم اضافة بيانات الجدول ');
        echo "<h2>تم اضافة بيانات الجدول </h2>"; 
        $sql = "insert into users (id ,username, password,mobile)
        values ('10','ahmed','". sha1('123')."','55');";
        mysqli_query($conn, $sql) or die('لم يتم اضافة بيانات الجدول ');
        echo "<h2>تم اضافة بيانات الجدول </h2>"; 
$sql = "insert into info (acc_id, funds)
        values ('10','5000');";
        mysqli_query($conn, $sql) or die('لم يتم اضافة بيانات الجدول ');
        echo "<h2>تم اضافة بيانات الجدول </h2>"; 

mysqli_close($conn);



/*



$conn =mysqli_connect('localhost','root','') OR die('لم يتم الاتصال قاعدة بيانات ');
        echo "<h2>تم الاتصال بقاعدة البيانات</h2>";
        mysqli_query($conn,'CREATE DATABASE bank')  OR die("لم يتم انشاء قاعدة بيانت");
        echo "<h2>تم انشاء قاعدة بيانات </h2>";
        mysqli_select_db($conn,'bank');
        echo "<h2>تم اختيار قاعدة البيانات</h2>";
        $sql= "CREATE TABLE users ("
        . "id int primary key,"
        . "username varchar (30) unique not null,"
        . "mobile int not null,"
        . "password varchar(40) not null );";
mysqli_query($conn, $sql) or die("فشل انشا جدول ");
echo '<h2>نجح انشاء جدول المستخدمين </h2>';
$sql= "CREATE TABLE info ("
        ."name varchar (30) not null,"
        . "iban int primary key,"
        . "funds  int (10),"
        . " FOREIGN KEY (iban) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE );";
         
        mysqli_query($conn, $sql);
        echo '<h2>نجح انشاء جدول المعلومات </h2>';
        
        
$sql = "insert into users (id,username, password) "
. "values ('1','root','" . sha1('123')."');";
        mysqli_query($conn, $sql) or die('لم يتم اضافة بيانات الجدول ');
        echo "<h2>تم اضافة بيانات الجدول </h2>"; 

mysqli_close($conn);
*/

