<?php

$damas = json_decode(file_get_contents('php://input'));
$StudioUlmasSHox = $damas->message;
$cid = $StudioUlmasSHox->chat->id;
$sd = $StudioUlmasSHox->text;
$bass=$StudioUlmasSHox->text;
$type = $StudioUlmasSHox->chat->type;
$name = $StudioUlmasSHox->from->first_name;
$user = $StudioUlmasSHox->from->username;
$uid = $StudioUlmasSHox->from->id;
$reply = $StudioUlmasSHox->reply_to_message->text;
$mid = $StudioUlmasSHox->message_id;
$repname = $StudioUlmasSHox->reply_to_message->from->first_name;
$id = $StudioUlmasSHox->reply_to_message->from->id;
$forwardchat= $StudioUlmasSHox->forward_from_chat;
$data = $StudioUlmasSHox->contact;
$cdata = $damas->callback_query->data;
$cqid = $damas->callback_query->id;
$callcid = $damas->callback_query->message->chat->id;
$callmid = $damas->callback_query->message->message_id;
$nomer = $StudioUlmasSHox->contact->phone_number;
//Yangi odam id si

$soat = date('H:i:s',strtotime('0 hour')); 
$kun = date('d',strtotime('0 hour'));
$yil = date('Y',strtotime('0 hour'));
$edit = $damas->edited_message;
$ecid = $edit->chat->id;
$emid = $edit->message_id;
$etext = $edit->text;
 $edname = $edit->from->first_name;
$edid = $edit ->from->id;
mkdir("nm");

$rpl = json_encode([
            'reππ’π³e_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
$bot="$robot";



if($bass=="/panelchammani"){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"Admin Marhamat Kerakli Menuni Tanlang ",
'reply_markup'=>$panel,
]);
} 

$blocks=file_get_contents("ban.txt");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>βοΈππ₯π¨π€πππ§ ππ‘π’πͺπ’π¬π‘π§π’ ππ¬π­ππ¬ππ§π π’π³, <a href='tg:user?id=$admin'>πππ¦π’π§</a> ππ’π₯ππ§ ππ¨π βπ₯ππ§π’π§π  β¬οΈ</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"π¨βπ»πππ¦π’π§", "url"=>"https://t.me/StudioUlmasSHox"]],
]
])
]);return false;}

if($type=="private"){
if($sd=="π« ππ₯π¨ππ€ ππ’π₯π’π¬π‘" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"βππ₯π¨ππ€ ππ’π₯π’π§πππ’π ππ§ ππ¨π²πππ₯ππ§π?π―ππ‘π’π§π’ ποΈ π«ππͺππ¦π’π§π’ ππ?ππ¨π«π’π§π ",
'reply_markup'=>$rpl,
]);
}
}

if($reply=="βππ₯π¨ππ€ ππ’π₯π’π§πππ’π ππ§ ππ¨π²πππ₯ππ§π?π―ππ‘π’π§π’ ποΈ π«ππͺππ¦π’π§π’ ππ?ππ¨π«π’π§π "){
file_put_contents("ban.txt","$blocks\n$sd");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"β[$sd](tg://user?id=$sd) *ππ₯π¨ππ€π₯ππ§ππ’!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$sd,
        'text'=>"<b>π‘ππ’π³ ππ¨π­ ππ¨π¦π¨π§π’πππ§ π«ππ₯π¨ππ€πππ¬π’π³!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}

if($type=="private"){
if($sd == "β ππ₯π¨ππ€πππ§ ππ₯π’π¬π‘" and $cid==$admin){
  bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "βππ₯π¨ππ€πππ§ ππ₯π’π§πππ’π ππ§ ππ¨π²πππ₯ππ§π?π―ππ‘π’π§π’ ποΈ π«ππͺππ¦π’π§π’ ππ?ππ¨π«π’π§π " ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       
       if($reply == "βππ₯π¨ππ€πππ§ ππ₯π’π§πππ’π ππ§ ππ¨π²πππ₯ππ§π?π―ππ‘π’π§π’ ποΈ π«ππͺππ¦π’π§π’ ππ?ππ¨π«π’π§π "){  
$fayl = file_get_contents("ban.txt");
$fayl2 = "$sd";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("ban.txt","$fayl3");
$fayl = file_get_contents("ban.txt");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$sd](tg://user?id=$sd)  ππ₯π¨ππ€πππ§ π¨π₯π’π§ππ’" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$sd,
       'text' => "π€ππ¬π¬ππ₯π¨π¦π? ππ₯ππ²π€π?π¦  
ββββββββββββ
ππ’π³ [πππ¦π’π§π’π¦π’π³](tg://user?id=$admin) ππ¨π¦π¨π§π’πππ§ βοΈππ₯π¨ππ€πππ§ ππ₯π’π§ππ’π§π π’π³!" ,
       'parse_mode'=>'markdown', 
       ]);
}


     
     
if($type=="private"){
if($sd=="π€ ππ¬ππ«π π πππππ«" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"π€ππ¨π²πππ₯ππ§π?π―ππ‘π’π π πππππ« ππ?ππ¨π«π’π¬π‘!       πππ¦π?π§π: ποΈ+ππ¦π¬",
'reply_markup'=>$rpl,
]);
}}

if($reply=="π€ππ¨π²πππ₯ππ§π?π―ππ‘π’π π πππππ« ππ?ππ¨π«π’π¬π‘!       πππ¦π?π§π: ποΈ+ππ¦π¬"){
$l=explode("+",$sd);
$l1=$l[0];
$l2=$l[1];
$okuserr=bot('sendMessage',[
'chat_id'=>$l1,
'text'=>$l2,
'reply_markup'=>$uz,
]);
}
if($okuserr){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"[ππ¨π²πππ₯ππ§π?π―ππ‘π’](tg://user?id=$l1) π π πππππ«π’π§π π’π³ π²π?ππ¨π«π’π₯ππ’!β",
    'parse_mode'=>'markdown',
'reply_markup'=>$panel,
]);
}

if($sd=="π ππ¨π­π’π¦π’π³ ππ¨ππ’"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}
if($tx == "π ππ¨π­π’π¦π’π³ ππ¨ππ’"){
     bot('sendMessage',[
     'chat_id'=>$Light_Bloger,
     'text'=>"*β€΄οΈ πππ§π πππ¦π’π§ πππ§π¨ππ₯ππ«π’
ββββββββββββ
πΎ @$robot π§π’ ππ«π’π π’π§ππ₯ πππ‘π© ππ¨ππ₯ππ«π’
ββββββββββββ*", 
     'parse_mode'=>'markdown',
     ]);
}
?>