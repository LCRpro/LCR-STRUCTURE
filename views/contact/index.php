<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Contact</title>
</head>
<body>
    <h1>Page de Contact</h1>
    <form id="contactForm" action="#" method="POST">
    <input type="email" id="email" name="email" placeholder="Votre email"><br>
        <span id="emailError" class="error"></span><br> 
        
        <textarea id="message" name="message" placeholder="Votre message"></textarea><br>
        <span id="messageError" class="error"></span><br> 
        <div class="g-recaptcha" data-sitekey="6Lc62sUpAAAAAAMcGVygRxv8qNhDgm7EBdSRtg-K"></div><br>

<button type="submit">Envoyer</button>
<div id="loader" style="display: none;">Loading...</div>
</form>
<div id="itsok"></div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>



    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .success {
    color: green;
}

.error {
    color: red;
}

    </style>
    <script src="../../assets/js/contact.js"></script>
</body>
</html>

