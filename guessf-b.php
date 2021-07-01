<?php
ob_start();

$API_KEY = "1751398936:AAFX5E2yd6sBmW0bzMyKScFsSRFMKqnJ7CY"; #توكن بوتك
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $SssQs = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$SssQs";
        $SssBs = file_get_contents($url);
        return json_decode($SssBs);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$id = $message->from->id;
$data1 = $update->callback_query->message->chat->id;
$data2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$now = json_decode(file_get_contents("data/now.json"), true);
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
 $chid = file_get_contents("chid.txt");
 $chlink = file_get_contents("linkch.txt");
 $Spe = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chid&user_id=".$id);
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$username = $message->from->username;
$name = $message->from->first_name;
$text = $message->text;
$channel_id = $update->channel_post->chat->id;
$channeltext = $update->channel_post->text;
$channel_message_id = $update->channel_post->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$name = $message->from->first_name;
$user = $message->from->username;
$admin = "1721354207"; #ايديك
$tws = file_get_contents("tw.txt");
$de = file_get_contents("admin2.txt");
$ad = array("$admin","$de");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
$type       = $update->message->chat->type; 
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا قام المطور بحظرك من البوت 🚫",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}

mkdir('alsh');
include "php.php";
$from_id = $message->from->id;
$type       = $update->message->chat->type;
$gp = explode("\n",file_get_contents("group.txt"));
$pv = explode("\n",file_get_contents("alsh/Alsh.txt"));
$ch=explode("\n",file_get_contents("ch.txt"));
$sta = file_get_contents("start.txt");
#شتراك اجباري خاصه
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨🏻‍💻¦ لا تستطيع استخدام البوت الان ؛🍂'.
📬¦ عليك الأشتراك في قناة البوت اولاً ؛🕸'.
📇¦ بعد ذالك اضغط /start مجدداً. ",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>"• اضغط هنا للإشتراك ؛🍃'. ",'url'=>"$rabt"]],
]])]);return false;}
#شتراك اجباري1
$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👨🏻‍💻¦ لا تستطيع استخدام البوت الان ؛🍂'.
📬¦ عليك الأشتراك في قناة البوت اولاً ؛🕸'.
📡¦ القناة ↭ ❪ [@$op] ❫️.
📇¦ بعد ذالك اضغط /start مجدداً.
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);return false;}
#شتراك اجباري2
$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👨🏻‍💻¦ لا تستطيع استخدام البوت الان ؛🍂'.
📬¦ عليك الأشتراك في قناة البوت اولاً ؛🕸'.
📡¦ القناة ↭ ❪ [@$oop] ❫️.
📇¦ بعد ذالك اضغط /start مجدداً.
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);return false;}

$Alsh = "$Alsh"; 
$Saa = ""; #اسم قناتك
$ali = ""; #معرف قناتك بدون @
if($text == "/start" or $text == "تفعيل"){
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=@$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🚸│عذرا لٱ يمكنك استخدام البوت
🌋│عليك الاشتراك في قناة البوت اولا
💬│بعد الاشتراك اضغط /start
💡╽[اضغط هنا للإشتراك](https://$ali)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"$Saa", 'url'=>"https://t.me/$ali"]
     ],[],]])
   ]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//-------------//
$Alsh = "$Alsh";
$jaaa = ""; #اسم قناتك
$alii = ""; #معرف قناتك بدون @
if($text == "/start" or $text == "تفعيل"){
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=@$alii&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️╿اهلا بك عزيزي $name
🚸│عذرا لٱ يمكنك استخدام البوت
🌋│عليك الاشتراك في قناة البوت² اولا
💬│بعد الاشتراك اضغط /start
💡╽[اضغط هنا للإشتراك](https://$alii)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"$jaaa", 'url'=>"https://t.me/$alii"]
     ],[],]])
   ]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//------------------------------------------------//

if($text and $text != "/start"){
file_put_contents("text.txt", "$text\n",FILE_APPEND);}
if($text and $type == "private" and !in_array($from_id, $pv)){
file_put_contents("alsh/Alsh.txt", "$from_id\n",FILE_APPEND);}
if($text and $type == "supergroup" and !in_array($chat_id, $gp)) {
file_put_contents("group.txt", "$chat_id\n",FILE_APPEND);}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك $name👋🏼
في بوت تخمين حسبات الفيسبوك ⁉️
البوت الاول علي التيليجرام 🌐
فقط قم بلضغط علي تخمين حسابات 😉
مطور البوت ~ @SISSQ* 👨🏼‍🔧",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين حسابات 📮","callback_data"=>"guess"]],
                      [['text'=>"قناة البوت 📦","url"=>"t.me/GNRAILMASR"],['text'=>"المطور","url"=>"t.me/SISSQ"]]
                      ]
                   ])
                 ]);
             }

if($text == "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $srta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك $name👋🏼
في بوت تخمين حسبات الفيسبوك ⁉️
البوت الاول علي التيليجرام 🌐
فقط قم بلضغط علي تخمين حسابات 😉
مطور البوت ~ @SISSQ* 👨🏼‍🔧",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين حسابات 📮","callback_data"=>"guess"]],
                      [['text'=>"قناة البوت 📦","url"=>"t.me/GNRAILMASR"],['text'=>"المطور","url"=>"t.me/SISSQ"]]
                      ]
                   ])
                 ]);
             }

$bot = file_get_contents("com.txt");
if($text == "/start" and in_array($chat_id,$ad)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️ ⁞ آهلآ بگ عزيزي » $name
👨🏻‍✈️ ⁞ آنتهہ آلمـطـور آلآسـآسـي للبوت
⚜️ ⁞ تسـتطـيع آلتحگمـ بگل آوآمـر آلبوت
🔗 ⁞ عن طـريق آلآزرآر آلشـفآفهہ آلتي في آلآسـفل
💻 ⁞ [للمـزيد مـن آلمـعلومـآت](https://t.me/SISSQ)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تعين ستارت ♻️","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل 💬","callback_data"=>"utws"],["text"=>"تعطيل التواصل 💤","callback_data"=>"ntws"]],
[["text"=>"حظر عضو 👞","callback_data"=>"bn"],["text"=>"الغاء حظر عضو 🙇‍♂️","callback_data"=>"unbn"]],
[["text"=>"اضافة ادمن ➕","callback_data"=>"admin"],["text"=>"تنزيل ادمن ➖","callback_data"=>"unadmin"]],
[["text"=>"قسم الاشتراك الاجباري 🚸","callback_data"=>"chh"],["text"=>"قسم الاذاعه 🗣️","callback_data"=>"bcc"]],
[["text"=>"تفعيل اشعار الدخول 🚶🏽‍♂️","callback_data"=>"on"],["text"=>"تعطيل اشعار الدخول 🚷","callback_data"=>"off"]],
[["text"=>"للإستفسار اضغط هنا ⁉️",'url'=>'t.me/SISSQ']],
]])
]);   
unlink("com.txt");
}
#رجوع
if($data == "bk" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
🙋🏼‍♂️ ⁞ آهلآ بگ عزيزي مـجددآ
👨🏻‍✈️ ⁞ آنتهہ آلمـطـور آلآسـآسـي للبوت
⚜️ ⁞ تسـتطـيع آلتحگمـ بگل آوآمـر آلبوت
🔗 ⁞ عن طـريق آلآزرآر آلشـفآفهہ آلتي في آلآسـفل
💻 ⁞ [للمـزيد مـن آلمـعلومـآت](https://t.me/SISSQ)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تعين ستارت ♻️","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل 💬","callback_data"=>"utws"],["text"=>"تعطيل التواصل 💤","callback_data"=>"ntws"]],
[["text"=>"حظر عضو 👞","callback_data"=>"bn"],["text"=>"الغاء حظر عضو 🙇‍♂️","callback_data"=>"unbn"]],
[["text"=>"اضافة ادمن ➕","callback_data"=>"admin"],["text"=>"تنزيل ادمن ➖","callback_data"=>"unadmin"]],
[["text"=>"قسم الاشتراك الاجباري 🚸","callback_data"=>"chh"]],
[["text"=>"قسم الاذاعه 🗣️","callback_data"=>"bcc"],['text'=>"إحصائياتي 📂","callback_data"=>"ehsaeyat"]],
[["text"=>"تفعيل اشعار الدخول 🚶🏽‍♂️","callback_data"=>"on"],["text"=>"تعطيل اشعار الدخول 🚷","callback_data"=>"off"]],
[["text"=>"للإستفسار اضغط هنا ⁉️",'url'=>'t.me/SISSQ']],
]])
]);   
unlink("com.txt");
}
#تفعيل اشعار دخول
if($data == "on" and in_array($chat_id2,$ad)){
file_put_contents("onn.txt","on");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📡╽تم تفعيل اشعار الدخول بنجاح
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
#تعطيل اشعار دخول
if($data == "off" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📡╽تم تعطيل اشعار الدخول بنجاح
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink('onn.txt');
}
#حذف آدمن
if($data == "unadmin" and $chat_id2 == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🙍‍♂️╽تم تنزيل العضو ادمن بنجاح
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink('admin2.txt');
}
#قسم الاذاعه
if($data == "bcc" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💡╽الان اختر نوع الاذاعه
✓",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"اذاعه رسالة 💌","callback_data"=>"bc"],["text"=>"اذاعه بلتوجيه 🔀","callback_data"=>"for"]],
[["text"=>"اذاعة ازرار شفافه 💠","callback_data"=>"inln"]],
[["text"=>"اذاعه بلميديا 📦","callback_data"=>"med"]],
[['text'=>"اذاعه بالتثبيت 📌","callback_data"=>"inpin"]],
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
#قسم شتراك اجباري
if($data == "chh" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💡╽الان اختر الامر لأقوم بتنفيذه
✓",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"قناة عامه 👾","callback_data"=>"add2"]],[["text"=>"قناة عامه² 🔖","callback_data"=>"add1"]],
[["text"=>"قناة خاصه ♦️","callback_data"=>"add"]],
[["text"=>"حذف قنوات الاشتراك الاجباري 🗑️","callback_data"=>"remch"]],
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
#الاحصائيات
if($data == "ehsaeyat"){
$tkzk = explode("\n",file_get_contents("text.txt"));
$meb = explode("\n",file_get_contents("alsh/Alsh.txt"));
$band = explode("\n",file_get_contents("blocklist.txt"));
$tx = explode("\n",file_get_contents("text.txt"));
$admn = file_get_contents("admin2.txt");
$gpp = explode("\n",file_get_contents("group.txt"));
$mem = count($meb)-1;
$zktex = count($tkzk)-1;
$bnn = count($band)-1;
$ts = count($tx)-1;
$grup = count($gpp)-1;
$oop = file_get_contents("chc.txt");
$op = file_get_contents("ch.txt");
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
if($text == "/mem" and in_array($chat_id,$ad)  ){
 date_default_timezone_set("Asia/Baghdad");
$getMe = bot('getMe')->result;
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
$time = date('h:i');
$date = date('y/m/d');
$userbot = "{$getMe->username}";
$userb = strtoupper($userbot);
if ($sppedtime == 3  or $sppedtime < 3) {
$f = "سريع";}
if ($sppedtime == 9 or $sppedtime > 9 ) {
$f = "متوسط";}
if ($sppedtime == 10 or $sppedtime > 10) {
$f = " بطئ"; }
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي » $name
🧟‍♂️│إليك احصائيات بوتك
👨‍💼│عدد مستخدمين البوت هو ❪ *$mem* ❫
🙇‍♂️│عدد المستخدمين المحظورين هو ❪ *$bnn* ❫
👮‍♂️│الادمن الثاني للبوت هو ❪ $admin ❫
📡│قنات الاشتراك الاجباري¹ ❪ @$oop ❫
📡│قنات الاشتراك الاجباري² ❪ @$op ❫
📡│قنات الاشتراك الاجباري الخاصه ❪ $all ❫
🏃‍♂️│سرعة البوت ❪ $f ❫
📆╽الوقف الان ❪ $date $time ❫
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 
#رساله ستارت
if($data == "start" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","start");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📥╽ارسل الي الان كليشة ستارت
🛠️",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "start" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("start.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️اهلا بك عزيزي $name
📤╽تم حفظ كليشة ستارت بنجاح
✓",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink("com.txt");
}
#تفعيل تواصل
if($data == "utws" and in_array($chat_id2,$ad)  ){
file_put_contents("tw.txt","on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💬╽تم تفعيل التواصل بنجاح
✓",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 
#تعطيل تواصل
if($data == "ntws" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💬╽تم تعطيل التواصل بنجاح
✓",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   

unlink("tw.txt");
} 

if($text and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $chat_id != $admin and $tws == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
#اضافه ادمن
if($data == "admin" and $chat_id2 == $admin){
file_put_contents("com.txt","ad");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان ارسل ايدي العضو
💡╽مثال » 909679859
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "ad" and $text != "/start" and $chat_id == $admin){
file_put_contents("admin2.txt",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🙍‍♂️│العضو » $admin
👮‍♂️╽تم رفعه ادمن بنجاح
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
👨🏻‍✈️╽قام المطور برفعك ادمن
✓",
'parse_mode'=>'MarkDown',
]);
unlink("com.txt");
}
#حظر
if($data == "bn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان ارسل ايدي العضو
💡╽مثال » 909679859
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "bn" and $text != "/start" and in_array($chat_id,$ad)  ){
$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📛╽تم حظر العضو بنجاح
✓",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
👨🏻‍✈️╽قام المطور بحظرك من البوت
📛",
]);
unlink("com.txt");
}
#الغاء حظر
$listt = file_get_contents("blocklist.txt");
if($data == "unbn" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان ارسل ايدي العضو
💡╽مثال » 909679859
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "unbn" and $text != "/start" and in_array($chat_id,$ad)  ){
$newlist = str_replace($text,"",$listt);
file_put_contents("blocklist.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🙅‍♂️╽تم الغاء حظر العضو بنجاح
✓",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
👨🏻‍✈️│قام المطور بإلغاء الحظر عنك
🙅‍♂️",
]);
unlink("com.txt");
}
#شتراك اجباري1
if($data == "add2" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","ab");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان قم بأرسال معرف قناتك
💡╽مثال » `IVIYIX`
🛠️",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 

if($bot == "ab" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("chc.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📤│تم حفظ قنات الاشتراك الاجباري بنجاح
👮‍♂️╽الان قم برفع البوت ادمن بلقناه
✓",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink("com.txt");
} 
#شـترآك اجباري1
if($data == "add1" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","al");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان قم بأرسال معرف قناتك
💡╽مثال » `IVIYIX`
🛠️",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 

if($bot == "al" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("ch.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📤│تم حفظ قنات الاشتراك الاجباري بنجاح
👮‍♂️╽الان قم برفع البوت ادمن بلقناه
✓",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink("com.txt");
} 
#شتراك خاص
if($data == "add"  and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","vv");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💭│الان قم بأرسال ايدي قناتك
💡│مثال » -1001415862390
🖇️╽او سوي توجيه من قناتك الي البوت
🛠️",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 

if($bot == "vv" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("com.txt","alo");
file_put_contents("id.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📥│تم حفظ ايدي قناتك
💬╽الان ارسل رابط القناه
✓",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 
if($bot == "alo" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("rabt.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
📥│تم حفظ معلومات قناتك
👮‍♂️╽الان عليك رفع البوت ادمن بلقناه
✓",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink("com.txt");
} 
#حذف قنوات
if($data == "remch" and in_array($chat_id2,$ad)  ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🗑️╽تم حذف قنوات الاشتراك الاجباري
✓",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
}
#اذاعه
if($data == "bc" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💬│ارسل رسالتك الان
💭╽و سوف يتم ارساله الي ❪ *$mem* ❫ مستخدم
✓",
'parse_mode'=>'markdown',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and in_array($chat_id,$ad)  ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
$tx = file_get_contents("alh.txt");
if($data == "inln" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","sn");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🔘│حسنا يمكنك الان ارسال رساله شفافه
⚠️╽ملاحظه البوت يدعم الماركدون
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sn" and $text != "/start" and in_array($chat_id,$ad)  ){
file_put_contents("alh.txt","$text");
file_put_contents("com.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🍃│حسنا عزيزي الان يمكنك استخدام النشر
💡│مثال » النص = الرابط
💡╽مثال اخر » النص = الرابط + النص = الرابط
✓",
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);   
} 
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($bot == "snn" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
unlink("com.txt");
unlink("alh.txt");
}
if($data == "for" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","fd");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🖇️│ارسل الان التوجيه
👥╽سوف يتم ارساله الي ❪ *$mem* ❫
✓",
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);
}
if($bot == "fd" and $text != "/start" and in_array($chat_id,$ad)  ){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("com.txt");
 }
 }
 if($data == "med" and in_array($chat_id2,$ad)  ){
file_put_contents("com.txt","mide");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
💬│حسنا الان ارسل احد الميديا
💡╽مثال » صوره•فيديو•ملصق•ملف•متحركه•ملف صوتي
✓",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"القائمة الرئيسية 📮","callback_data"=>"bk"]],
]])
]);
}
#اذاعه ب ميديا
 if($message->video and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 $ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendvideo',['chat_id'=>$aly,'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا عزيزي $name
⛱╽ تم نشر الفيديو", ]); }unlink("com.txt"); }
if($message->document and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('Senddocument',['chat_id'=>$aly,'document'=>$message->document->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا عزيزي $name
⛱╽ تم نشر الملف او المتحرڪة", ]); }unlink("com.txt"); }
 if($message->audio and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
 	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
 bot('sendaudio',[    'chat_id'=>$aly,    'audio'=>$message->audio->file_id,    'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
 ]); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا عزيزي $name
⛱╽ تم نشر الاغنية", ]); }unlink("com.txt"); }
if($message->photo and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendPhoto',[      'chat_id'=>$aly,      'photo'=>$message->photo[0]->file_id,      'caption'=>$message->caption,      'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
    ]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا عزيزي $name
⛱╽ تم نشر الصورة", ]); }unlink("com.txt"); }
if($message->voice and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendvoice',[     'chat_id'=>$aly,      'voice'=>$message->voice->file_id,     'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
      ]);      bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا بك عزيزي $name
⛱╽ تم نشر الاغنية", ]); }unlink("com.txt"); }
      if($message->sticker and $bot == "mide" and in_array($chat_id,$ad)   and $text != "/start"){
      	$ali = fopen( "alsh/Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendsticker',['chat_id'=>$aly,'sticker'=>$message->sticker->file_id
]);bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"🙋🏻‍♂╿اهلا عزيزي $name
⛱╽ تم نشر الملصق", ]); }unlink("com.txt"); }


#الاشعار
$gg = file_get_contents("onn.txt");
if($gg == "on" and $chat_id != $admin and !$data and !$channel_id){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"🙋🏼‍♂️╿اهلا بك عزيزي $name
🐝╽تم دخول شخص جديد الي البوت
--  --  --  --  -ـ-  --  --  -- --
👤╿اسمه » [$name](tg://user?id=$chat_id)
🌋│معرفه » [@$user](tg://user?id=$chat_id)
🎫╽ايديه » `[$chat_id](tg://user?id=$chat_id)`
--  --  --  --  -ـ-  --  --  --  --
👥│عدد المشتركين الان هو ❪ *$mem* ❫

",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
} 



if($data == 'back'){
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'text'=>"*اهلا بك مجددا 👋🏼
في بوت تخمين حسبات الفيسبوك ⁉️
البوت الاول علي التيليجرام 🌐
فقط قم بلضغط علي تخمين حسابات 😉
مطور البوت ~ @SISSQ* 👨🏼‍🔧",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين حسابات 📮","callback_data"=>"guess"]],
                      [['text'=>"قناة البوت 📦","url"=>"t.me/GNRAILMASR"],['text'=>"المطور 👨🏼‍🔧","url"=>"t.me/SISSQ"]]
                      ]
                   ])
                 ]);
             }
if($data == "guess"){
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'text'=>"اختر الدوله 🌐
للتخمين 💡",
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"مصر 🇪🇬","callback_data"=>"gegypt"],['text'=>"العراق 🇮🇶","callback_data"=>"giraq"]],
                      [['text'=>"السعوديه 🇸🇦","callback_data"=>"gksa"],['text'=>"الهند 🇮🇳","callback_data"=>"gindia"]],
                      [['text'=>"ليبيا 🇱🇾","callback_data"=>"glibya"],['text'=>"المغرب 🇲🇦","callback_data"=>"gmorocco"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                   ])
             ]);
       }
if($data == "gegypt"){
$egypt = substr(str_shuffle('5924302429252949192624192825409362836351946420544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `+201163$egypt`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *egypt*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"gegypt"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ] 
                   ])
              ]);
        }
if($data == "giraq"){
$iraq = substr(str_shuffle('592430242925881407098826222237152932262836283420544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `07718$iraq`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *iraq*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"giraq"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                  ])
]);
}
if($data == "gksa"){
$ksa = substr(str_shuffle('592430242925294648927252223383629251925320544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `+966508$ksa`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *saudi*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"gksa"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                  ])
            ]);
       }
if($data == "gindia"){
$india = substr(str_shuffle('59243024292529464892629351938262446060881142251925320544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `+880 1817$india`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *india*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"gindia"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                  ])
            ]);
       }
if($data == "glibya"){
$libya = substr(str_shuffle('5924302429246653468799561124455294648251925320544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `+966508$libya`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *libya*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"glibya"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                  ])
            ]);
       }
if($data == "gmorocco"){
$morocco = substr(str_shuffle('59243024292529464827253920192524398251925320544935'),1,6);
bot('editMessageText',[
'chat_id'=>$chat_id,
'text'=>"𝒇𝒂𝒄𝒆𝒃𝒐𝒐𝒌 𝒂𝒄𝒄𝒖𝒐𝒏𝒕\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n.📱. 𝒑𝒉𝒐𝒏𝒆 » `+212 650$morocco`\n.📟. 𝒑𝒂𝒔𝒔 » `1122334455`\n.🌐. 𝒄𝒐𝒖𝒏𝒕𝒓𝒚 » *morocco*\n╌╌╌╌╌╌╌╌╌╌╌╌╌\n𝒃𝒚 » @SISSQ - @GNRAILMASR",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                      [['text'=>"تخمين مره اخرا ♻️","callback_data"=>"gmorocco"]],
                      [['text'=>"رجوع 🔙","callback_data"=>"back"]]
                      ]
                  ])
            ]);
       }
       
       
}