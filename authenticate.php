<?php
// 正しい認証情報を設定
$valid_username = "kirasu";
$valid_password = "0415";

// フォームから送信された認証情報を取得
$user_password = $_POST["password"];

// 認証チェック
if ($user_password === $valid_password) {
    // 認証成功時にHTMLファイルを表示
    include("your_html_file.html");
} else {
    // 認証失敗時の処理（ログインフォームを表示など）
    echo "Invalid password";
}
?>
