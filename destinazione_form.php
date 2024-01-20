<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    // Configura o destinatário do e-mail
    $to = 'patyfrances33@gmail.com'; 

    // Configura o assunto e o corpo do e-mail
    $subject = 'Messaggio dal sito web';
    $body = "Hai ricevuto un nuovo messaggio dal sito web:\n\nNome: $nome\nEmail: $email\nMessaggio:\n$messaggio";

    // Envia o e-mail
    if (mail($to, $subject, $body)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio.";
    }
} else {
    // Caso não seja uma solicitação POST
    echo "Metodo di richiesta non valido.";
}
?>