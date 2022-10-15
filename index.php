<?php

// این همون توکنیه که توی پنل ایتا یار بهت میدن
$token = 'bot69995:cdfab05f-aaf8-4143-b9ed-dbe715f46c3f';

// اینم همون چت ایدیه، میتونی ایدی خودی کانالو بدون ات ساین بزاری ولی اینجوری بیتره
$chatid = 8217208;

// این  رو تغییر بدی میتونی هشتگ یا متن بزاری
$text = '#حجاب';

$curl = curl_init();


for($i = 0; $i < 720; $i++){
	$date = time() + (2 * $i) * 60;
	curl_setopt($curl, CURLOPT_URL, 'https://eitaayar.ir/api/' . $token . '/sendMessage');

	curl_setopt_array($curl, [
		CURLOPT_POST => TRUE,
		CURLOPT_POSTFIELDS => [
			'chat_id' => $chatid, 
			'title' => 'test', 
			'text' => $text,
			'date' => $date,
			'viewCountForDelete' => 200,
		],
		CURLOPT_RETURNTRANSFER => true
	]);
	echo $i . ' : ' .curl_exec($curl) . "\n";
}

curl_close($curl);
