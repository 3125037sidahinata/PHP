<!doctype html">
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録</title>
</head>
<body>
  <?php
 $name=$_POST['name'];
 $pass=$_POST['pass'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$name= htmlspecialchars($name);
$pass= htmlspecialchars($pass);
$email= htmlspecialchars($email);
$adress= htmlspecialchars($adress);
if($name=='')
{
print '会員名が入力されていません。<br>';
}
else
{
print 'ようこそ';
print $name;
print '様';
print '<br>';
}
if($pass=='')
{
print 'パスワードが入力されていません。<br>';
}
else
{
print 'パスワード:';
print $pass;
print '<br>';
}

if($email=='')
{
print 'メールアドレスが入力されていません。<br>';
}
else {
print 'メールアドレス:';
print $email;
print '<br>';
}
if($adress=='')
{
print '住所入力されていません。<br>';
}
else
{
print '住所[';
print $adress;
print '] <br>';
}
if($name==''||$pass==''||$email==''||$adress=='')
{
print'<form>';
print'<input type="button" onclick="history.back()" value="戻る">';
print'</form>';
}
else
{
print'<form method="post" action="member_add_done.php">';
print'<input name="name" type="hidden" value="'.$name.'">';
print'<input name="pass" type="hidden" value="'.$pass.'">';
print'<input name="email" type="hidden" value="'.$email.'">';
print'<input name="adress" type="hidden" value="'.$adress.'">';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="OK">';
print'</form>';
}
?>
</body>
</html>