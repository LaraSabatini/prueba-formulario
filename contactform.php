<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $mailFrom = $_POST["mail"];
  $message = $_POST["message"];

  $mailTo = "ojoconlacolilla@ecohouse.org.ar";
  $headers = "De: ".$mailFrom;
  $txt = "Has recibido un mail de ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>