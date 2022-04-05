<?php 

	$name = $_POST['nama'];
	$nohandphone = $_POST['nohp'];
	$keahlian = $_POST['skill'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];


	$email_from = 'ajiraudyaaprilla97@gmail.com';

	$email_subject = "Biodata Calon Pengirim CV";

	$email_body ="username : $name.\n".
				 "user nohandphone : $nohandphone.\n".
				 "user keahlian : $keahlian.\n".
				 "user email : $email.\n".
				 "user pesan : $pesan.\n";



	$to = "aji.aprilla@mail.unpas.ac.id";

	$headers = "from: $email_from \r\n";

	$headers .= "Reply-To: $email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("location: index.html");




 ?>