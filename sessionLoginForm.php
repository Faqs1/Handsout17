<?php 
include 'koneksi.php';

$username =$_POST['username'];
$password = $_POST['password'];

$query ="SELECT * FROM user WHERE  username ='$username', AND passsword ='$password";
$result =mysqli_query($connect,$query);
$fechResult =mysqli_fetch_assoc($result);
$rowcount =mysqli_num_rows($result);

if($rowcount>0){
    session_start();
    $_SESSION['usermame']=$username;
    $_SESSION['status']= $login;
}
if($fetchResult['role']=='admin'){
    echo 'Anda berhasil Login';
    echo "<a href'adminDashboard.html'>Admin</a>";
}elseif($fetchResult['row']=='user'){
    echo "Anda Berhasil Login";
    echo "<a href='userDashboard.html'>User Dashboard</a>";
}else{
    echo "Anda Gagal Login";
    echo "<a href='loginFrom.html'>Login From</a>";
}
mysqli_close($connect);

?>