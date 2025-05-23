<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$sql = "insert into contactform (name, mail, age, comments) values (?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindvalue(1,$_POST['name']);
$stmt->bindvalue(2,$_POST['mail']);
$stmt->bindvalue(3,$_POST['age']);
$stmt->bindvalue(4,$_POST['comments']);

$stmt->execute();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>３営業日以内に担当者からご連絡差し上げます。</p>
    </div>
</body>
</html>