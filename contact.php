<?php
if(isset($_POST["submit"])){
$to      = 'info@om-kol.hr';
$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$email= $_POST["email"];
$msg="Name : ".$name."\r\nEmail : ".$email."\r\nSubject : ".$subject."\r\nMessage : ".$message;

$headers = array(
    'From' =>$name."<kontakt@om-kol.hr>",
    'Reply-To' =>$email,
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $msg, $headers);
}
echo "<script>alert('Vaš upit je uspješno poslan!');window.location.href='index.html'</script>";
?>