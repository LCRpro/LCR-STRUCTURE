document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Afficher le loader
    var loader = document.getElementById('loader');
    loader.style.display = 'block';

    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (email.trim() === '') {
        document.getElementById('emailError').textContent = 'Veuillez entrer votre adresse email.';
        // Cacher le loader
        loader.style.display = 'none';
        return;
    }

    if (message.trim() === '') {
        document.getElementById('messageError').textContent = 'Veuillez entrer votre message.';
        // Cacher le loader
        loader.style.display = 'none';
        return;
    }

    var formData = new FormData(this);
    fetch('../../req/mailContact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        var messageDiv = document.getElementById('itsok');
        if (data.success) {
            messageDiv.textContent = "Message envoyé avec succès !";
            messageDiv.classList.remove('error');
            messageDiv.classList.add('success');
        } else {
            messageDiv.textContent = "Erreur lors de l'envoi du message : ";
            messageDiv.classList.remove('success');
            messageDiv.classList.add('error');
        }
        // Cacher le loader après avoir reçu la réponse
        loader.style.display = 'none';
    })
    .catch(error => {
        var messageDiv = document.getElementById('itsok');
        messageDiv.textContent = 'Erreur: ' + error;
        messageDiv.classList.remove('success');
        messageDiv.classList.add('error');
        // Cacher le loader en cas d'erreur
        loader.style.display = 'none';
    });
});
