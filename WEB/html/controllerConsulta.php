<?php
    if(isset($_POST['email'])) {

    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
    $email_to = "rmperegrina@gmail.com";
    $email_subject = "Contacto desde el sitio web RISK ADVENTURE";
    $email_from=$_POST['email'];
    // Aquí se deberían validar los datos ingresados por el usuario</bold>
    if(!isset($_POST['nombre']) ||
    !isset($_POST['email']) ||
    !isset($_POST['asunto']) ||
    !isset($_POST['comentario'])) {

    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Asunto: " . $_POST['asunto'] . "\n";
    $email_message .= "Comentarios: " . $_POST['comentario'] . "\n";



    // Ahora se envía el e-mail usando la función mail() de PHP</bold>
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    
            
        echo"<script type='text/javascript'>
        alert('Sus datos de consulta se han enviado correctamente');
        
        </script>";
    
    
    }
?>
