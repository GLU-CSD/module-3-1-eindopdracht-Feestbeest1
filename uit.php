<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


// require 'vendor/autoload.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST["name"]);
//     $email = htmlspecialchars($_POST["email"]);
//     $phone = htmlspecialchars($_POST["phone"]);
//     $message = htmlspecialchars($_POST["message"]);
    
//     $mail = new PHPMailer(true);

//     try {
//         // Server settings
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com'; // Pas aan voor je provider
//         $mail->SMTPAuth = true;
//         $mail->Username = 'jouw-email@gmail.com'; // Vul hier jouw e-mailadres in
//         $mail->Password = 'jouw-wachtwoord'; // Gebruik een app-wachtwoord!
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//         $mail->Port = 587;
//         $to = "jouw-email@domein.com";


//         // Ontvanger
//         $mail->setFrom($email, $name);
//         $mail->addAddress('jouw-email@gmail.com'); 

//         // Inhoud
//         $mail->isHTML(false);
//         $mail->Subject = "Nieuw contactformulier bericht van $name";
//         $mail->Body    = "Naam: $name\nE-mail: $email\nTelefoon: $phone\n\nBericht:\n$message";

//         $mail->send();
//         echo "Bericht succesvol verzonden!";
//     } catch (Exception $e) {
//         echo "Fout bij verzenden: {$mail->ErrorInfo}";
//     }
    
// }

// phpinfo()
// ?>
