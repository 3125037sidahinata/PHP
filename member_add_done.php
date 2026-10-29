<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
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

print '下記の内容で登録しました<bry>';
print '氏名:';
print $name;
print 'パスワード:';
print $pass;
print 'メールアドレス:';
print $email;
print '住所:';
print $adress;

?>
</body>
</html>