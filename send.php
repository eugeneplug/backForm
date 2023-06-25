

<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     $to = 'yousucker8@gmail.com';
//     $subject = 'New Message from Contact Form';
//     $headers = "From: $email\r\n" .
//                "Content-Type: text/plain; charset=UTF-8\r\n";

//     $body = "Name: $name\nEmail: $email\nMessage: $message";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Сообщение отправлено";
//     } else {
//         echo "Ой, что-то пошло не так";
//     }
// }



    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);


    $name = urldecode($name);
    $tel = urldecode($tel);
    $email = urldecode($email);
    $message = urldecode($message);


    $name = trim($name);
    $tel = trim($tel);
    $email = trim($email);
    $message = trim($message);



    if (mail("yousucker8@gmail.com",
            "Новое письмо с сайта",
            "Name: ".$name."\n".
            "Number: ".$tel."\n".
            "Email: ".$email."\n".
            "Message: ".$message."\n".
            "From: no-reply@mydomain.ru \r\n")

    ) {
        echo '<script>alert("Сообщение отправлено!");</script>';
    }
    else {
        echo '<script>alert("Есть ошибки!");</script>';
    }

?>


