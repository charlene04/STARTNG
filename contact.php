<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $to = 'charlesugbana04@gmail.com';
    $subject = "New Message"
    $body = '<html>
                <body>
                    <h2> '.$title.'</h2>
                    <hr>
                    <p>Name<br>'.$name.'</p>
                    <p>Email<br>'.$email.'</p>
                    <p>Message<br>'.$message.'</p>
                </body>
                <html>';
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "NIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset= utf-8";

    $send= mail($to, $title, $body, $headers);
    if($send){
        echo '<br>';
        echo "Thanks for contacting me. I will get back to you shortly.";
    } else "error";
}

}
?>