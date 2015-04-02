<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $name = trim($_POST["nombre"]);
	    //$phone = trim($_POST["tel"]);
	    $email = trim($_POST["email"]);
	    $message = trim($_POST["coment"]);

	    if ($name == "" OR $email == "" OR $message == "") {
	        echo "Campos incompletos.";
	        exit;
	    }

	    foreach( $_POST as $value ){
	        if( stripos($value,'Content-Type:') !== FALSE ){
	            echo "Hay un problema con la información proporcionada.";    
	            exit;
	        }
	    }

	    if ($_POST["address"] != "") {
	        echo "La forma de contacto tiene un error.";
	        exit;
	    }

	    require_once("includes/phpmailer/class.phpmailer.php");
	    $mail = new PHPMailer();

	    if (!$mail->ValidateAddress($email)){
	        echo "Debes especificar una dirección de correo válida.";
	        exit;
	    }

	    $email_body = "";
	    $email_body = $email_body . "Nombre: " . $name . "<br>";
	    //$email_body = $email_body . "Teléfono: " . $phone . "<br>";
	    $email_body = $email_body . "Correo: " . $email . "<br>";
	    $email_body = $email_body . "Comentarios: " . $message;

	    $mail->SetFrom($email, $name);
	    $address = "sinnerei@gmail.com";
	    $mail->AddAddress($address, "Prueba");
	    $mail->Subject    = "Fruto del Sol, Formulario Web | " . $name;
	    $mail->MsgHTML($email_body);

	    if(!$mail->Send()) {
	      echo "Hubo un error al enviar el correo: " . $mail->ErrorInfo;
	      exit;
	    }

	    header("Location: contacto.php?status=thanks");
	    exit;
	}

	include 'includes/header.php';
?>
	<section class="content_area">
		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
		<div class="thanks">
		    <h3>Agradecemos su preferencia, datos correctamente enviados.</h3>
		</div>
		<?php } else { ?>
		<form method="post" action="contacto.php" class="contact_form">
			<table>
			    <tr>
			        <th class="leftie">
			            <label for="nombre">Nombre <strong>/</strong> Name</label>
			        </th>
			        <td class="rightie">
			            <input type="text" name="nombre" id="nombre" required>
			        </td>
			    </tr>
			    <tr>
			        <th class="leftie">
			            <label for="email">Correo <strong>/</strong> e-mail</label>
			        </th>
			        <td class="rightie">
			            <input type="text" name="email" id="email" required>
			        </td>
			    </tr>
			    <!-- <tr>
			        <th>
			            <label for="tel">Teléfono / Phone Number</label>
			        </th>
			        <td>
			            <input type="text" name="tel" id="tel">
			        </td>
			    </tr> -->
			    <tr>
			        <td colspan="2">
			            <textarea name="coment" id="coment" required placeholder="Envíanos tus comentarios o contáctanos para mayor información sobre ventas y distribución. / Send us your comments or contact us for more information on sales and distribution."></textarea>
			        </td>
			    </tr> 
			    <tr style="display: none;">
			        <th>
			            <label for="address">Address</label>
			        </th>
			        <td>
			            <input type="text" name="address" id="address">
			            <p>Este campo no debe ser rellenado.</p>
			        </td>
			    </tr>                   
			</table>
			<input type="submit" value="Enviar / Send" id="send">
		</form>
		<?php } ?>
	</section>
<?php include 'includes/footer.php'; ?>