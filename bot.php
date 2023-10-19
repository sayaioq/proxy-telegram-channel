<?php

error_reporting(0);
set_time_limit(0);



// ------------------ { Your Config } ------------------ //
$Config = [
    'api_token' => "Token", // put your bot token
    'admin' => [865931743, 000000, 0000000], // put id of admins
    'channel' => "Source_Home", // put username channel
    'web' => "https://Source_Home.com/MtProto" // put file address
];
$Database = [
    'dbname' => "", // put database name
    'username' => "", // database username
    'password' => "" // put database password
];
function WSBot($method, $datas = []) {
    global $Config;
    $curl = curl_init('https://api.telegram.org/bot'.$Config['api_token'].'/'.$method);
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
		      <?php
		      <?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message_id = 'MESSAGE_ID';

file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$chat_id&message_id=$message_id");
?>

$token = 'YOUR_BOT_TOKEN';
$message_id = 'MESSAGE_ID';
	<?php
$token = 'YOUR_BOT_TOKEN';
$voice_path = 'path/to/your/voice.ogg';

file_get_contents("https://api.telegram.org/bot$token/sendVoice?chat_id=$chat_id&voice=" . urlencode($voice_path));
?>


file_get_contents("https://api.telegram.org/bot$token/pinChatMessage?chat_id=$chat_id&message_id=$message_id");
?>

    ]);
    $response = json_decode(curl_exec($curl)); 
}
<?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$voice_path = 'path/to/your/voice.ogg';

$url = "https://api.telegram.org/bot$token/sendVoice";
    'chat_id' => $chat_id,
    'voice' => new CURLFile(realpath($voice_path))
);

file_get_contents($url . '?' . http_build_query($data));
?>

function MtProto($query) {
    $html = file_get_contents("https://t.me/s/".str_replace('@', null, $query));
    preg_match_all('#<a href="(.*?)" target="_blank" rel="noopener">#', $html, $match);
    for($i = 0; $i < count($match[1]); $i++) {
        if (strpos($match[1][$i], 'https://t.me/proxy?server=') !== false or strpos($match[1][$i], 'tg://proxy?server=') !== false) {
            $res[] = $match[1][$i];
        }
    }
    return $res;
}
function  getUserProfilePhotos($from_id) {
    global $Config;
    $url = 'https://api.telegram.org/bot'.$Config['api_token'].'/getUserProfilePhotos?user_id='.$from_id;
    $result = $result->result;
    return $result
}
function sendmessage($chat_id, $text, $mode = null, $message_id = null, $keyboard = null) {
    WSBot('sendmessage', 
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => $mode,
        'reply_to_message_id' => $message_id,
        'reply_markup' => $keyboard,
        'disable_web_page_preview' => false
    ]);
}
function forwardmessage($id, $chat_id, $message_id) {
    WSBot('ForwardMessage', [
		'chat_id' => $id,
		'from_chat_id' => $chat_id,
		'message_id'=>$message_id
	]);
}
function sendphoto($chat_id, $photo, $caption = null, $mode = null, $message_id = null, $keyboard = null){
    WSBot('sendphoto', [
        'chat_id' => $chat_id,
        'photo' => $photo,
        'caption' => $caption,
	 $next_week = strtotime("+7 days");
        'parse_mode' => $mode,
        'reply_to_message_id' => $message_id,
        'reply_markup' => $keyboard
    ]);
}
function editmessagetext($chat_id, $message_id, $text, $mode = null, $keyboard = null){
    WSBot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,
        'parse_mode' => $mode,
        'reply_markup' => $keyboard
    ]);
}
function deletemessage($chat_id, $message_id) {
    WSBot('deletemessage', [
        'chat_id' => $chat_id,
        'message_id' => $message_id
    ]);
}
function answercallbackquery($membercall, $text, $message_id) {
    WSBot('answercallbackquery', [
        'callback_query_id' => $membercall,
        'text' => $text,
        'message_id' => $message_id,
        'show_alert' => false
    ]);
}
// ------------------ { Variables } ------------------ //
$update = json_decode(file_get_contents('php://input'));
if (isset($update->message)) {
    $message = $update->message;
    $text = $message->text;
    $tc = $message->chat->type;
    $chat_id = $message->chat->id;
    $message_id = $message->message_id;
    $first_name = $message->from->first_name;
    $last_name = $message->from->last_name;
    $username = $message->from->username?:'اکانت شما بدون یوزرنیم میباشد ... !';
    $proxy = file_get_contents("channel.txt");
    $getuserprofile = getUserProfilePhotos($from_id);
}
if (isset($update->callback_query)) {
    $data = $callback_query->data;
    $tc = $callback_query->message->chat->type;
    $colors = ["red", "green", "blue"];
    foreach ($colors as $color) {
    echo "$color<br>";
    $chatid = $callback_query->message->chat->id;
    $fromid = $callback_query->from->id;
    $messageid = $callback_query->message->message_id;
    $firstname = $callback_query->from->first_name;
    $lastname = $callback_query->from->last_name
    $cusername = $callback_query->from->username;
    $membercall = $callback_query->id;
    $cproxy = file_get_contents("channel.txt");
}
// ------------------ { Connect MySQL } ------------------ //
$MySQLi = mysqli_connect('localhost', $Database['username'], $Database['password'], $Database['dbname']);
$user = mysqli_fetch_assoc(mysqli_query($MySQLi, "SELECT * FROM user WHERE id = '$from_id' LIMIT 1"));
$cuser = mysqli_fetch_assoc(mysqli_query($MySQLi, "SELECT * FROM user WHERE id = '$fromid' LIMIT 1"));
// ------------------ { Connect MySQL & Creat Table } ------------------ //
if ($MySQLi->query("select * FROM user") == false) {
    mysqli_query($MySQLi, "CREATE TABLE user (
        id bigint(10) NOT NULL PRIMARY KEY,
        step varchar(50) NOT NULL,
        account varchar(50) NOT NULL,
        code bigint(10) NOT NULL,
        member bigint(20) NOT NULL
        )"
	);
}
// ------------------ { Informations } ------------------ //
$rank = json_decode(file_get_contents('https://api.telegram.org/bot'.$Config['api_token'].'/getChatMember?chat_id=@'.$Config['channel'].'&user_id='.$from_id), true)['result']['status'];
$crank = json_decode(file_get_contents('https://api.telegram.org/bot'.$Config['api_token'].'/getChatMember?chat_id=@'.$Config['channel'].'&user_id='.$fromid), true)['result']['status'];
$usernamebot = json_decode(file_get_contents('https://api.telegram.org/bot'.$Config['api_token'].'/getMe'), true)['result']['username'];
// ------------------ { Keyboards } ------------------ //
if (in_array($from_id, $Config['admin'])) {
    $menu = json_encode(['keyboard'=>[
        [['text' => "🔓 ساخت پروکسی"], ['text' => "👤 حساب کاربری"]],
        [['text' =>"🚦راهنما"], ['text' => "👮‍♂️ پشتیبانی"], ['text' => "👥 دعوت دیگران"]],
        [['text' => "👤 مدیریت"]]
        ], 'resize_keyboard'=>true
    ]);
} else {
    $menu = json_encode(['keyboard'=>[
        [['text' => "🔓 ساخت پروکسی"], ['text' => "👤 حساب کاربری"]],
        [['text' =>"🚦راهنما"], ['text' => "👮‍♂️ پشتیبانی"], ['text' => "👥 دعوت دیگران"]],
        ], 'resize_keyboard'=>true
    ]);
}
$remove = json_encode(['remove_keyboard' => [
    ], 'remove_keyboard' => true
]);
$join = json_encode(['inline_keyboard'=>[
    [['text' => "📢 عضویت", 'url' => "t.me/".$channel]],
    [['text' => "👍 عضو شدم", 'callback_data' => "join"]],
    ]
]);
$back = json_encode(['keyboard'=>[
    [['text' => "🔙 بازگشت"]],
    ], 'resize_keyboard' => true
]);
if (in_array($from_id, $Config['admin'])) {
    $panel = json_encode(['keyboard'=>[
        [['text' => "👤 امار ربات"], ['text' => "⚙️ تنظیم ایدی کانال"]],
        [['text' => "📪 ارسال به همه"], ['text' => "📪 فوروارد به همه"]],
        [['text' => "🔙"]],
        ],'resize_keyboard' => true
    ]);
    $back_panel = json_encode(['keyboard'=>[
        [['text' => "برگشت 🔙"]],
        ],'resize_keyboard' => true
    ]);
}
// ------------------ { Start Source } ------------------ //
if (preg_match('/^\/(start)$/i', $text) or $text == "🔙") {
    sendmessage($chat_id, "سلام <code>$first_name</code> عزیز 👋🏻\n\n🔓 به ربات ساخت پروکسی خوش امدید !\n\n🌟 به وسیله این ربات شما میتوانید از فیلترینگ جلوگیری کنید و بدون استفاده از فیلتر شکن وارد تلگرام بشین\n\n🌟 برای ساخت پروکسی کافیست از دکمه '🔓 ساخت پروکسی' استفاده کنید\n\n🎖 اگر نمیدانید پروکسی چیست یا نحوه دریافت ان را نمیدانید از راهنما استفاده کنید از دکمه هایه زیر استفاده کن :\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "html", $message_id, $menu);
    if (!$user) {
        $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$from_id', 'none', '', '0', '0')");
    } else {
        $MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");
    }
}
elseif (strpos($text, "/start ") !== false){
    $start = str_replace("/start ", null, $text);
    if ($user["id"] == true) {
        sendmessage($chat_id, "سلام <code>$first_name</code> عزیز 👋🏻\n\n🔓 به ربات ساخت پروکسی خوش امدید !\n\n🌟 به وسیله این ربات شما میتوانید از فیلترینگ جلوگیری کنید و بدون استفاده از فیلتر شکن وارد تلگرام بشین\n\n🌟 برای ساخت پروکسی کافیست از دکمه '🔓 ساخت پروکسی' استفاده کنید\n\n🎖 اگر نمیدانید پروکسی چیست یا نحوه دریافت ان را نمیدانید از راهنما استفاده کنید از دکمه هایه زیر استفاده کن :\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "html", $message_id, $menu);
    } else {
        sendmessage($chat_id, "سلام <code>$first_name</code> عزیز 👋🏻\n\n🔓 به ربات ساخت پروکسی خوش امدید !\n\n🌟 به وسیله این ربات شما میتوانید از فیلترینگ جلوگیری کنید و بدون استفاده از فیلتر شکن وارد تلگرام بشین\n\n🌟 برای ساخت پروکسی کافیست از دکمه '🔓 ساخت پروکسی' استفاده کنید\n\n🎖 اگر نمیدانید پروکسی چیست یا نحوه دریافت ان را نمیدانید از راهنما استفاده کنید از دکمه هایه زیر استفاده کن :\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "html", $message_id, $menu);
        $name = str_replace(["`","*","_","[","]"], null, $first_name);
        sendmessage($start, "🌟 کاربر [$name](tg://user?id=$from_id) با استفاده از لینک دعوت شما وارد ربات شده", "MarkDown");
        $MySQLi->query("UPDATE user SET member = member + 1 WHERE id = '$start' LIMIT 1");
    }
    $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$from_id', 'none', '', '0', '0')");
}
elseif ($rank == "left") {
    sendmessage($chat_id, "💡 ابتدا باید وارد کانال زیر شوید\n\n📣 @{$Config['channel']} 📣 @{$Config['channel']}\n📣 @{$Config['channel']} 📣 @{$Config['channel']}\n\n👇 بعد از « عضویت » بعد از عضویت روی دکمه عضو شدم کلیک کنید 👇", null, $message_id, $join);
}
elseif ($text == "🔙 بازگشت") {
    sendmessage($chat_id, "🌼 به منوی اصلی ربات برگشتیم \n\n🎉 برای استفاده از ربات از دکمه های زیر استفاده کنید", null, $message_id, $menu);
    if (!$user) {
        $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$from_id', 'none', '', '0', '0')");
    } else {
        $MySQLi->query("UPDATE user SET step = 'none', code = '0' WHERE id = '$from_id' LIMIT 1");
    }
}
elseif ($text == "👮‍♂️ پشتیبانی") {
    sendmessage($chat_id, "👮🏻 همکاران ما در خدمت شما هستن !\n\n🔘 در صورت وجود نظر , ایده , گزارش مشکل , پیشنهاد , ایراد سوال , یا انتقاد میتوانید با ما در ارتباط باشید \n💬 لطفا پیام خود را به صورت فارسی و روان ارسال کنید", null, $message_id, $back);
    if (!$user) {
        $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$from_id', 'support', '', '0', '0')");
    } else {
        $MySQLi->query("UPDATE user SET step = 'support' WHERE id = '$from_id' LIMIT 1");
    }
}
elseif ($user['step'] == "support") {
    forwardmessage($Config['admin'][0], $chat_id, $message_id);
    sendmessage($chat_id, "🔖 پیام شما با موفقیت ارسال شد , در صورت لزوم پاسخ داده خواهد شد !", null, $message_id, $back);
}
elseif ($update->message && $update->message->reply_to_message && $from_id == $Config['admin'][0]) {
    if ($update->message->text) {
        sendmessage($update->message->reply_to_message->forward_from->id, "👤پاسخ پشتیبان برای شما : <code>$text</code>", "html");
        sendmessage($chat_id, "پیام شما با موفقیت ارسال شد ✔️");
    }
}
elseif ($text == "🔓 ساخت پروکسی") {
    if ($user['account'] != null) {
        $MT = MtProto($proxy);
        if(!is_null($MT)) {
            $Random = rand(1, count($MT));
            $MtProto = $MT[$Random];
            $keyboard = json_encode(['inline_keyboard'=>[
                [['text' => "🔁 بروزرسانی", 'callback_data' => "update"], ['text' => "🔘 اتصال", 'url' => $MtProto]],
                ]
            ]);
            sendmessage($chat_id, "✔️ پروکسی با موفقیت ساخته شد !\n🔁  پروکسی MTPROTO : [اتصال]($MtProto)\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "MarkDown", $message_id, $keyboard);
        } else {
            sendmessage($chat_id, "🔁 پروکسی سالم فعلا موجود نمیباشد لطفا ساعات دیگری دوباره امتحان بکنید ... !", null, $message_id);
        }
    } else {
        $code = substr(str_shuffle('0123456789'), 0, 5);
        $photo = $Config['web']."/api/?captcha=".$code;
        sendphoto($chat_id, $photo, "🔘 لطفا کدی که در تصویر بالا میبینید را با دقت زیاد آن را وارد نمایید :", null, $message_id);
        if (!$user) {
            $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$from_id', 'captcha', '', '{$code}', '0')");
        } else {
            $MySQLi->query("UPDATE user SET step = 'captcha', code = {$code} WHERE id = '$from_id' LIMIT 1");
        }
    }
}
elseif ($user['step'] == "captcha") {
    if ($text == $user['code']) {
        $MT = MtProto($proxy);
        if(!is_null($MT)) {
            $Random = rand(1, count($MT));
            $MtProto = $MT[$Random];
            $keyboard = json_encode(['inline_keyboard'=>[
                [['text' => "🔁 بروزرسانی", 'callback_data' => "update"], ['text' => "🔘 اتصال", 'url' => $MtProto]],
                ]
            ]);
            sendmessage($chat_id, "✔️ پروکسی با موفقیت ساخته شد !\n🔁  پروکسی MTPROTO : [اتصال]($MtProto)\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "MarkDown", $message_id, $keyboard);
        } else {
            sendmessage($chat_id, "🔁 پروکسی سالم فعلا موجود نمیباشد لطفا ساعات دیگری دوباره امتحان بکنید ... !");
        }
        $MySQLi->query("UPDATE user SET step = 'none', code = '0', account = 'true' WHERE id = '$from_id' LIMIT 1");
    } else {
        sendmessage($chat_id, "▪️ خطا در سیستم ... !\n🔘 کد کپچا را اشتباه وارد کرده اید , لطفا کدی که در عکس میبینید با دقت فراوان بفرستید :", null, $message_id);
    }
}
elseif ($data == "update") {
    if ($cuser['account'] != null) {
        $MT = MtProto($cproxy);
        if(!is_null($MT)) {
            editmessagetext($chatid, $messageid, "⏳ لطفا صبر کنید درحال دریافت اطلاعات از سرور ...");
            $Random = rand(1, count($MT));
            $MtProto = $MT[$Random];
            $keyboard = json_encode(['inline_keyboard'=>[
                [['text' => "🔁 بروزرسانی", 'callback_data' => "update"], ['text' => "🔘 اتصال", 'url' => $MtProto]],
                ]
            ]);
            deletemessage($chatid, $messageid);
            sendmessage($chatid, "♻️ پروکسی بروزرسانی شد برای اتصال کلیک کنید !\n🔁  پروکسی MTPROTO : [اتصال]($MtProto)\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "MarkDown", null, $keyboard);
        } else {
            sendmessage($chatid, "🔁 پروکسی سالم فعلا موجود نمیباشد لطفا ساعات دیگری دوباره امتحان بکنید ... !");
        }
    } else {
        $code = substr(str_shuffle('0123456789'), 0, 5);
        $photo = $Config['web']."/api/?captcha=".$code;
        sendphoto($chatid, $photo, "🔘 لطفا کدی که در تصویر بالا میبینید را با دقت زیاد آن را وارد نمایید :");
        if (!$cuser) {
            $MySQLi->query("INSERT INTO user (id, step, account, code, member) VALUES ('$fromid', 'captcha', '', '{$code}', '0')");
        } else {
            $MySQLi->query("UPDATE user SET step = 'captcha', code = {$code} WHERE id = '$fromid' LIMIT 1");
        }
    }
}
elseif ($cuser['step'] == "captcha") {
    if ($text == $user['code']) {
        $MT = MtProto($proxy);
        if(!is_null($MT)) {
            $Random = rand(1, count($MT));
            $MtProto = $MT[$Random];
            $keyboard = json_encode(['inline_keyboard'=>[
                [['text' => "🔁 بروزرسانی", 'callback_data' => "update"], ['text' => "🔘 اتصال", 'url' => $MtProto]],
                ]
            ]);
            sendmessage($chatid, "✔️ پروکسی با موفقیت ساخته شد !\n🔁  پروکسی MTPROTO : [اتصال]($MtProto)\n\n📢 @{$Config['channel']}\n🤖 @$usernamebot", "MarkDown", $messageid, $keyboard);
        } else {
            sendmessage($chat_id, "🔁 پروکسی سالم فعلا موجود نمیباشد لطفا ساعات دیگری دوباره امتحان بکنید ... !");
        }
        $MySQLi->query("UPDATE user SET step = 'none', code = '0', account = 'true' WHERE id = '$fromid' LIMIT 1");
    } else {
        sendmessage($chatid, "▪️ خطا در سیستم ... !\n🔘 کد کپچا را اشتباه وارد کرده اید , لطفا کدی که در عکس میبینید با دقت فراوان بفرستید :", null, $messageid);
    }
}
elseif ($text == "👤 حساب کاربری") {
    if ($user['account'] != null) {
    sendphoto($chat_id, $getuserprofile->photos[0][0]->file_id, "🖼 تصویر پروفایل شما 👆🏼👆🏼\n\n🗣 نام : <b>$first_name</b>\n🆔 شناسه : <code>$from_id</code>\n📇 یوزرنیم : @$username\n▪️ وضعیت حساب شما : تایید شده است !\n\n🌟 شما میتوانید با دعوت هر نفر به ربات از ما حمایت کنید !", "html", $message_id, $keyboard);
    } else {
        sendphoto($chat_id, $getuserprofile->photos[0][0]->file_id, "🖼 تصویر پروفایل شما 👆🏼👆🏼\n\n🗣 نام : <b>$first_name</b>\n🆔 شناسه : <code>$from_id</code>\n📇 یوزرنیم : @$username\n▪️ وضعیت حساب شما : تایید نشده است !\n\n🌟 شما میتوانید با دعوت هر نفر به ربات از ما حمایت کنید !", "html", $message_id, $keyboard);
    }
}
elseif ($text == "👥 دعوت دیگران") {
    $photo = new CURLFile('photo.jpg');
    sendphoto($chat_id, $photo, "🤖 ربات ساخت پروکسی [Free Proxy] \n\n🔓 فیلترینگ را دور بزنید و بدون استفاده از فیلترشکن وارد تلگرام بشید !\n\n🔸 بروز ترین پروکسی های MTProto و پرسرعت , تمام پروکسی ها هر ساعت به صورت خودکار بروز میشوند !\n▪️ پروکسی هارو تست کن اگر راضی نبودی رباتو پاک کن حتما از سرعت پروکسی ها خوشت میاد و همیشه از ربات استفاده میکنی !\n\n🌟 همین الان توهم واردشو پروکسی هاش عالیه !\n\nhttps://t.me/".$usernamebot."?start=".$from_id, null, $message_id);
} 
elseif ($text == "🚦راهنما") {
    sendmessage($chat_id, "🔓 پروکسی چیست !؟\n\n🌟 پراکسی سرور واسطه‌ای بین کاربر داخلی و اینترنت است. در حقیقت پراکسی درخواست کارخواه یا کلاینت را به پراکسی سرور فرستاده، پراکسی سرور محتویات بسته را بررسی می‌کند و در صورت لزوم پردازش‌های مورد نظر را روی بستهٔ دیتا انجام می‌دهد و بسته را می‌سنجد، در صورت عدم مغایرت با سیاست‌های امنیتی تنظیم شده برای شبکه به آن‌ها اجازهٔ عبور از دیوار آتش را می‌دهد و این درخواست روی شبکه ارسال می‌شود و جواب آن توسط پراکسی سرور از اینترنت دریافت و برای کلاینت ارسال می‌شود.\n🤖 این ربات ارائه دهنده Proxy برای تلگرام ! از کشور های مختلف برای دور زدن فیلترینگ است.\n\n❄️ چگونه پروکسی دریافت کنیم !؟\n\n1️⃣ ابتدا از دکمه '🔓 ساخت پروکسی' استفاده کنید\n2️⃣ پروکسی به صورت رندوم برای شما ارسال میشود !\n⚠️ حتما باید تلگرام شما به اخرین نسخه ارتفا داده شود\n🎖 تفاوت پروکسی های کشور های مختلف و ویژه در سرعت و پینگ ان ها استفاده\n3️⃣ سپس پروکسی کشور انتخاب شده برای شما ارسال میشود روی لینک پروکسی بزنید سپس 'اتصال به پروکسی' را انتخاب کنید\n❄️ تلگرام در نسخه جدیدش امکان ثبت کردین چندیدن پروکسی رو گذاشته ! شما میتوانید برای اتصال سریع تر کم ترین پینگ یا ms رو انتخاب کنید و چند پروکسی رو ذخیره کنید\n⚡️ شما میتوانید پروکسی های ساخته شده را برای دوستانتان ارسال کنید و ان هارو هم از فیلترینگ نجات دهید\n📶 ممکن است پروکسی ها بعد از مدتی فیلتر یا دچار افت سرعت شوند شما میتوانید نسبت به بروز کردن پروکسی در ربات اقدام کنید\n\n⏬ دانلود اخرین نسخه تلگرام : \n\nاندروید :\nhttps://play.google.com/store/apps/details?id=org.telegram.messenger\nآیفون / ایپد : \nhttps://itunes.apple.com/app/telegram-messenger/id686449807\n🤖 @$usernamebot", null, $message_id, $menu);
}
// ------------------ { Check Channel } ------------------ //
switch($data) {
    case 'join': {
        if($crank != "left") {
            editmessagetext($chatid, $messageid, "✋ سلام کاربر گرامی <code>$first_name</code>\n🎗 به ربات فوتبالی خوش امدید\n\n🏵 شما با استفاده از این ربات میتوانید جدول مسابقات بیشتر لیگ های معتبر کشورها و حتی میتونین اطلاعات بیشتر لیگ های معتبر کشور هارو دریافت کنید\n🏅 همچنین میتوانید اخرین خبر های ورزشی رو به صورت آنی دریافت کنید و از اخرین خبر ها باخبر شوید\n\n🚦 از این ربات میتونی اخرین رنکینگ فیفا برای تیم های ملی کشورا و دریافت کنید , و میتونی ربات رو برای دوستات بفرستی و دوستات هم به ربات بیان \n\n🤖 @$usernamebot\n🔻 از دکمه های زیر برای استفاده از ربات استفاده کن", "html");
        } else {
            answercallbackquery($membercall, "❌ هنوز داخل کانال @$channel عضو نیستید", $messageid);
        }
    }
    break;
}
// ------------------ { Panel Admin } ------------------ //
if (in_array($from_id, $Config['admin'])) {
	if (strtolower($text) == "/panel" or $text == "👤 مدیریت" or $text == "panel") {
	    sendmessage($chat_id, "👤 به منوی مدیریت ربات خود خوش امدید", null, $message_id, $panel);
	    $MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");
	}
	elseif ($text == "برگشت 🔙") {
	    sendmessage($chat_id, "🚦 به منوی مدیریت بازگشتید", null, $message_id, $panel);
		$MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");	
	}
	elseif ($text == "👤 امار ربات") {
		$users = mysqli_query($MySQLi, "select id from user");
		$alluser = mysqli_num_rows($users);
		date_default_timezone_set('Asia/Tehran');
		$time = date('h:i:s');
		$date = date('Y/m/d');
		sendmessage($chat_id, "🤖 امار شما در ساعت <code>$time</code> و تاریخ <code>$date</code> به این صورت میباشد : <code>$alluser</code> نفر 👤", "html", $message_id, $panel);
	}
	elseif ($text == "⚙️ تنظیم ایدی کانال") {
	    sendmessage($chat_id, "▪️ در این قسمت شما میتوانید ایدی کانال پروکسی رو ست کنید تا ربات به صورت خودکار از کانالی که ست کرده برای فرستادن پروکسی به کاربران استفاده کند !\n🔘 لطفا ایدی کانال را ارسال کنید ( همراه با @ یا بدون @ فرقی نمیکند ) :", null, $message_id, $back_panel);
	    $MySQLi->query("UPDATE user SET step = 'setchannel' WHERE id = '$from_id' LIMIT 1");
	}
	elseif ($user['step'] == "setchannel") {
	    $MT = MtProto($text);
	    if (!is_null($MT)) {
	        sendmessage($chat_id, "🔸 کانال با موفقیت ست شد ... !", null, $message_id, $panel);
	        file_put_contents('channel.txt', $text);
	        $MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");
	    } else {
	        sendmessage($chat_id, "🔹 خطا در سیستم ... !\n🔘 سیستم این کانال رو پشتیبانی نمیکند لطفا یک کانال دیگر ارسال نمایید ... !", null, $message_id, $back_panel);
	    }
	}
	elseif ($text == '📪 ارسال به همه' ) {
	    sendmessage($chat_id, "📌 پیام خود را ارسال کنید", null, $message_id, $back_panel);
		$MySQLi->query("UPDATE user SET step = 'sendtoall' WHERE id = '$from_id' LIMIT 1");	
	}
	elseif ($user['step'] == 'sendtoall') {
		if ($text != "برگشت 🔙") {
		    sendmessage($chat_id, "⏳ درحال ارسال لطفا صبر کنید ... !", null, $message_id, $remove);
		    sleep(1);
			$query = mysqli_query($MySQLi, "SELECT * FROM user");
			foreach($query as $value){
			    sendmessage($value['id'], $text);
			}
			sendmessage($chat_id, "پیام شما با موفقیت برای همه ارسال شد  ✔️", null, $message_id, $panel);
		}
		$MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");	
	}
	elseif ($text == '📪 فوروارد به همه') {
	    sendmessage($chat_id, "📌 پیام خود را فوروارد کنید", null, $message_id, $back_panel);
		$MySQLi->query("UPDATE user SET step = 'fortoall' WHERE id = '$from_id' LIMIT 1");	
	}
	elseif ($user['step'] == 'fortoall') {
		if ($text != "برگشت 🔙") {
		    sendmessage($chat_id, "⏳ درحال ارسال لطفا صبر کنید ... !", null, $message_id, $remove);
		    sleep(1);
			$query = mysqli_query($MySQLi, "SELECT * FROM user");
			foreach($query as $value){
			    forwardmessage($value['id'], $chat_id, $message_id);
			}
			sendmessage($chat_id, "پیام شما با موفقیت به همه فوروارد شد ✔️", null, $message_id, $panel);
		}
		$MySQLi->query("UPDATE user SET step = 'none' WHERE id = '$from_id' LIMIT 1");	
	}
}
//-----------------------------//
unlink("error_log");
?>
