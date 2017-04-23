

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>



                    <form class="flexp contact-form" action="" method="post">
                        <input type="text" placeholder="Your Name" name="name">
                        <input type="text" placeholder="Mobile Number" name="mobile">
                        <textarea rows="4" cols="50" placeholder="Tell us how can we help..." name="messagetext"></textarea>
                        <input type="submit" name="submit" value="submit">
                    </form>

</body>
</html> 

<?php 
if(isset($_POST['submit'])){
    $to = "amanrathi@live.com"; // this is your Email address
    $from = $_POST['info@clubhitz.in']; // this is the sender's Email address
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $messagetext = $_POST['messagetext'];
    $subject = "Form submission on clubhitz.in";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $mobile . " wrote the following:" . "\n\n" . $messagetext;

    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
