<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $numper = $_POST['numper'];
  
  $to = 'zaid_alubaidi@yahoo.com';
  $subject = 'رسالة جديدة من موقع الويب';
  $body = "اسم: $name\n\nبريد إلكتروني: $email\n\nرسالة:\n$message\n\nرقم الهاتف :$numper";
  
  if (mail($to, $subject, $body)) {
    echo 'تم إرسال البريد الإلكتروني بنجاح.';
  } else {
    echo 'حدث خطأ أثناء إرسال البريد الإلكتروني.';
  }
}
?>