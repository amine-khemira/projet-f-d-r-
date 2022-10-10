<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["username"];
    $pwd=$_POST["password"];
    $sql="SELECT id,fullname,username,password FROM `users` where username='{$email}' ";
    $result=mysqli_query($con,$sql);
    $item=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(!empty($item)){
        if($item["password"]==$pwd){
            session_start();
            $_SESSION["iduser"]==$item["id"];
            header("location:revision.php");
        }
    }
}
?>
 <form method="post">
     <label>username</label>
     <input name="username" type="text">
     <label>password</label>
     <input name="password" type="password">
     <button type="submit">log in</button>
 </form>
