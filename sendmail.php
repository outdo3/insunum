<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    
    $to = "tkddlf1978@naver.com";
    $subject = "새로운 보험 문의";
    $message = "이름: $name\n연락처: $phone";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('문의가 성공적으로 전송되었습니다.'); window.close();</script>";
    } else {
        echo "<script>alert('문의 전송에 실패했습니다. 다시 시도해주세요.'); window.history.back();</script>";
    }
}
?>