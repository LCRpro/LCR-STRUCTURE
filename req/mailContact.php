<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 
require '../config/config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $recaptchaSecretKey = '6LcVvsspAAAAACqL9Nii8Q_Dc9M1_CWuH_LKT3nY'; 
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaData = [
        'secret' => $recaptchaSecretKey,
        'response' => $recaptchaResponse
    ];

    $recaptchaOptions = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($recaptchaData)
        ]
    ];

    $recaptchaContext = stream_context_create($recaptchaOptions);
    $recaptchaResult = file_get_contents($recaptchaUrl, false, $recaptchaContext);
    $recaptchaResultJson = json_decode($recaptchaResult);

    if (!$recaptchaResultJson->success) {
        echo json_encode(array('success' => false, 'message' => 'Veuillez cocher le reCAPTCHA.'));
        return;
    }

    // Le reCAPTCHA a été cochée, continuer avec le traitement du formulaire

    $email = $_POST['email']; 
    $message = $_POST['message']; 

    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();                                      
        $mail->Host       = MAIL_HOST;                       
        $mail->SMTPAuth   = true;                             
        $mail->Username   = MAIL_USERNAME;                   
        $mail->Password   = MAIL_PASSWORD;                    
        $mail->SMTPSecure = MAIL_ENCRYPTION;                 
        $mail->Port       = MAIL_PORT;                        

        $mail->setFrom(MAIL_USERNAME, NOM_ENTREPRISE);
        $mail->addAddress('cariou.liam@orange.fr');  

        $mail->isHTML(true);                                 
        $mail->Subject = 'Nouveau message de ' . $email;     
        $mail->Body    = 'Email: ' . $email . '<br>Message: ' . $message; 
        $mail->AltBody =  'Email: ' . $email . "\r\n" . 'Message: ' . $message; 

        $mail->send();
        echo json_encode(array('success' => true, 'message' => 'Le message a été envoyé avec succès'));
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array('success' => false, 'message' => "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}"));
    }
}
?>
