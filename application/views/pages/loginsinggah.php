<?php 

$this->session->set_userdata('user',$user);

// session_start();
// $_SESSION['user'] = $user;

// $user = $_POST['username'];
// $pass = $_POST['password'];

// $_SESSION['username'] = $user;
// $_SESSION['password'] = $pass;

// $cekdata = mysql_query("select * from login where username= '$_POST[username]' and password = '$_POST[password]' and status='INACTIVE'");
// $ceklagi = mysql_num_rows($cekdata);

// $query = mysql_query("select * from login where user= '$_POST[username]' and pass = '$_POST[password]'");
// 		$rows = mysql_num_rows($query);
// 			if ($rows == 1) {
// 				if($ceklagi==1){
// 					$loginstatus = mysql_query("update login set status ='ACTIVE' where user= '$_POST[username]' and pass = '$_POST[password]'  ");
// 					header("Location:penyisihan.php");}
// 				else{
// 				echo "<script language=\"Javascript\">\n";
// 				echo "window.confirm('Username dan password anda sudah digunakan');";
// 				echo "window.location.href ='index.php';";
// 				echo "</script>";
				
// 				}
// 			}
// 			else{
// 				echo "<script language=\"Javascript\">\n";
// 				echo "window.confirm('Anda tidak terdaftar');";
// 				echo "window.location.href ='index.php';";
// 				echo "</script>";
// 			}
?>