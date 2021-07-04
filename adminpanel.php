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
            're𝐒𝐢𝐳e_keyboard'=>false,
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
'text'=>"<b>⛔️𝐁𝐥𝐨𝐤𝐝𝐚𝐧 𝐂𝐡𝐢𝐪𝐢𝐬𝐡𝐧𝐢 𝐈𝐬𝐭𝐚𝐬𝐚𝐧𝐠𝐢𝐳, <a href='tg:user?id=$admin'>𝐀𝐝𝐦𝐢𝐧</a> 𝐁𝐢𝐥𝐚𝐧 𝐁𝐨𝐠‘𝐥𝐚𝐧𝐢𝐧𝐠 ⬇️</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍💻𝐀𝐝𝐦𝐢𝐧", "url"=>"https://t.me/StudioUlmasSHox"]],
]
])
]);return false;}

if($type=="private"){
if($sd=="🚫 𝐁𝐥𝐨𝐜𝐤 𝐐𝐢𝐥𝐢𝐬𝐡" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"⛔𝐁𝐥𝐨𝐜𝐤 𝐐𝐢𝐥𝐢𝐧𝐚𝐝𝐢𝐠𝐚𝐧 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐧𝐢 🆔️ 𝐫𝐚𝐪𝐚𝐦𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠",
'reply_markup'=>$rpl,
]);
}
}

if($reply=="⛔𝐁𝐥𝐨𝐜𝐤 𝐐𝐢𝐥𝐢𝐧𝐚𝐝𝐢𝐠𝐚𝐧 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐧𝐢 🆔️ 𝐫𝐚𝐪𝐚𝐦𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠"){
file_put_contents("ban.txt","$blocks\n$sd");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$sd](tg://user?id=$sd) *𝐁𝐥𝐨𝐜𝐤𝐥𝐚𝐧𝐝𝐢!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$sd,
        'text'=>"<b>😡𝐒𝐢𝐳 𝐁𝐨𝐭 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🚫𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐬𝐢𝐳!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}

if($type=="private"){
if($sd == "✅ 𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐎𝐥𝐢𝐬𝐡" and $cid==$admin){
  bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "⛔𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐎𝐥𝐢𝐧𝐚𝐝𝐢𝐠𝐚𝐧 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐧𝐢 🆔️ 𝐫𝐚𝐪𝐚𝐦𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠" ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       
       if($reply == "⛔𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐎𝐥𝐢𝐧𝐚𝐝𝐢𝐠𝐚𝐧 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐧𝐢 🆔️ 𝐫𝐚𝐪𝐚𝐦𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠"){  
$fayl = file_get_contents("ban.txt");
$fayl2 = "$sd";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("ban.txt","$fayl3");
$fayl = file_get_contents("ban.txt");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$sd](tg://user?id=$sd)  𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐨𝐥𝐢𝐧𝐝𝐢" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$sd,
       'text' => "🤚𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦  
➖➖➖➖➖➖➖➖➖➖➖➖
𝐒𝐢𝐳 [𝐀𝐝𝐦𝐢𝐧𝐢𝐦𝐢𝐳](tg://user?id=$admin) 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 ⛔️𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐎𝐥𝐢𝐧𝐝𝐢𝐧𝐠𝐢𝐳!" ,
       'parse_mode'=>'markdown', 
       ]);
}


     
     
if($type=="private"){
if($sd=="👤 𝐔𝐬𝐞𝐫𝐠𝐚 𝐗𝐚𝐛𝐚𝐫" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👤𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐠𝐚 𝐗𝐚𝐛𝐚𝐫 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡!       𝐍𝐚𝐦𝐮𝐧𝐚: 🆔️+𝐒𝐦𝐬",
'reply_markup'=>$rpl,
]);
}}

if($reply=="👤𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐠𝐚 𝐗𝐚𝐛𝐚𝐫 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡!       𝐍𝐚𝐦𝐮𝐧𝐚: 🆔️+𝐒𝐦𝐬"){
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
    'text'=>"[𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢](tg://user?id=$l1) 𝐠𝐚 𝐗𝐚𝐛𝐚𝐫𝐢𝐧𝐠𝐢𝐳 𝐲𝐮𝐛𝐨𝐫𝐢𝐥𝐝𝐢!✅",
    'parse_mode'=>'markdown',
'reply_markup'=>$panel,
]);
}

if($sd=="🗃 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 𝐊𝐨𝐝𝐢"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}
if($tx == "🗃 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 𝐊𝐨𝐝𝐢"){
     bot('sendMessage',[
     'chat_id'=>$Light_Bloger,
     'text'=>"*⤴️ 𝐌𝐚𝐧𝐚 𝐀𝐝𝐦𝐢𝐧 𝐉𝐚𝐧𝐨𝐛𝐥𝐚𝐫𝐢
➖➖➖➖➖➖➖➖➖➖➖➖
💾 @$robot 𝐧𝐢 𝐎𝐫𝐢𝐠𝐢𝐧𝐚𝐥 🗃𝐏𝐡𝐩 𝐊𝐨𝐝𝐥𝐚𝐫𝐢
➖➖➖➖➖➖➖➖➖➖➖➖*", 
     'parse_mode'=>'markdown',
     ]);
}
?>