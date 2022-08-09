<?php 
    if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $message=$_POST['message'];


    $mailTo="psychegameryt@gmail.com";
    $headers= "From:" .$mailFrom; 
    $txt = "You have recieved an e-mail from" .$name. ".\n\n".$message;


    mail($mailTo , $subject , $txt , $headers);
    header("Location: form.php?mailsend");
}
?>