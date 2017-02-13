<?php
//Вызов ajax signup
if($_GET['action'] == 'signup'){

mysql_connect('127.0.0.1','root','rf-ntn');  
mysql_select_db('galeri');

//Подчищаем данные
$email = mysql_real_escape_string($_POST['signup-email']);

//Проверяем адрес email
if(empty($email)){
$status = "error";
$message = "Вы не ввели адрес email!";
}
else if(!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', $email)){ //validate email address - check if is a valid email address
$status = "error";
$message = "Вы ввели неправильный адрес email!";
}
else {
$existingSignup = mysql_query("SELECT * FROM signups WHERE signup_email_address='$email'");   
if(mysql_num_rows($existingSignup) < 1){

$date = date('Y-m-d');
$time = date('H:i:s');

$insertSignup = mysql_query("INSERT INTO signups (signup_email_address, signup_date, signup_time) VALUES ('$email','$date','$time')");
if($insertSignup){ //если вставка прошла успешно
	$status = "success";
	$message = "Вы подписаны!";	
}
else { //если вставка прошла неудачно
	$status = "error";
	$message = "Ой! Произошла техническая ошибка!";	
}
}
else { //если пользователь уже подписан
$status = "error";
$message = "Данный адрес уже зарегистрирован!";
}
}

//возвращаем ответ json
$data = array(
'status' => $status,
'message' => $message
);

echo json_encode($data);
exit;
}
?>