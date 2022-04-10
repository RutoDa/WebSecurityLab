<h1>嘉義大學 資工系</h1>
<form method="POST" action"">
    <input id="username" placeholder="Username" required="" autofocus="" type="text" name="username">
    <input id="password" placeholder="Password" required="" type="password" name="password">
    <button type="submit">登入</button>
</from>

<?php
$flag = "SQL injection 成功";
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $usename.$password;
	require_once('config.php');
	$sql = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = '$password';";
	if ($result = mysqli_query($link, $sql)) {
		if ($row = mysqli_fetch_array($result)) {
			echo $flag;
			echo "<br><br>";
			echo "<img src='./img1'>";
		} else {
		echo "登入失敗";
	}
	} else {
		echo "登入失敗";
	}
} 


/*
$sql = "SELECT * FROM `users` WHERE `username` = 'RutoDa' and `password` = 'RutoDa123';";
require_once('config.php');

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
echo $row;
 */
?>

	
