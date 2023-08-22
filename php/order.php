<?php

$headers = 'Content-type: text/plain; charset="utf-8"';

$uswername = $_POST['username'];
$uswermail = $_POST['usermail'];
$uswerphone = $_POST['userphone'];
$uswertelegram = $_POST['usertelegram'];

$headers = 'MiME-Version: 1.0 . "\r\n"';
$headers = 'Content-type: text/html; charset="utf-8"';

$to ='vvwarning@gmail.com';
$subject = 'Заявка с сайта';
$message = "
<html>
<table>
<tr>
<td>Имя</td>
<td>$username</td>
</tr>
<tr>
<td>email</td>
<td>$usermail</td>
</tr>
<tr>
<td>Телефон</td>
<td>$userphone</td>
</tr>
<tr>
<td>Телеграм</td>
<td>$usertelegram</td>
</tr>
</table>
</html>
";

//$to - кому
//$subject - тема письма
//$message - тело письма
//$headers - спец заголовок, не трогать
mail($to, $subject, $message, $headers);

echo 'отправка формы';
// header("Location: http://vvwarning.beget.tech/dev/form/success.html")


?>

<script>
   window.location.href="http://vvwarning.beget.tech/dev/form/success.html";
</script>