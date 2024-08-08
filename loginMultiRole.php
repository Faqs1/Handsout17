<?php 
include "koneksi.php";

$username =$_POST['username'];
$password =$_POST['password'];

$query ="select *from user where username='$username' and password = '$password' ";
$result=mysqli_query($connect,$query);
$fechResult=mysqli_fetch_assoc($result);

if($fechResult['role']=='admin'){
    echo 'Anda berhasil Login';
    echo "<a href='adminDashboarad.html> Admin</a>";
}elseif($fechResult['role']=='user'){
    echo "Anda Berhasil Login";
    echo "<a href='userDashboard.html> user Dashboard</a>";
}else{
    echo "Anda Gagal Login";
    echo "<a href='loginFrom.html'> Login Form  </a>";  

}
mysqli_close($connect);
?>