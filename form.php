<?php
error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT & ~E_DEPRECATED);
//
$mail_sys = "taketorimonogatari64@gmail.com";	// 管理者のメールアドレス
$from_name = "サンプル株式会社";	// メール送信者の表示
$from_mail = "taketorimonogatari64@gmail.com";	// メール送信者のメールアドレス（返信先）
$user_mail = "item2";	// 利用者にメールを送る場合のメールアドレス項目
//---
$title = "お問い合わせフォーム";
$subject = "お問い合わせ有難うございます\n";
$body = "お問い合わせ有難うございます。
以下の内容で承りました。
\n";
$subject_sys = "お問い合わせがありました\n";
$body_sys = "\n";
$footer = "\n------------
サンプル株式会社
http://〜〜〜〜〜.com/
------------
";
//------------------------------------------------
eval(gzinflate(base64_decode('
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
')));