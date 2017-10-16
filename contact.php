<?php 
    define("TITLE", "Contact Me | Latimer Development");
    include('includes/header.php');

    
?>

    <div id="contact">
        <div id="contactBox">
        <h1>Get in touch with me!</h1>
        <?php
            // Check for header injections
            function has_header_injection($str){
                return preg_match("/[\r\n]/", $str);
            }
            if(isset($_POST['contact_submit'])){
                $name   = trim($_POST['name']);
                $email  = trim($_POST['email']);
                $phone  = trim($_POST['phone']);
                $msg    = $_POST['message'];
                
                // Check to see if $name or $email have header injections
                if (has_header_injection($name) || has_header_injection($email)){
                    die(); // If true, kill the script
                }
                
                if(!$name || !$email || !$msg){
                    echo "<h4 class='error'>All fields required.</h4><a href='contact.php' class='button block'>Go back and try again</a>";
                    exit;
                }
                
                // Add the recipient email to a variable
                $to = "trlatimer95@gmail.com";
                // Create a subject
                $subject = "$name sent you a message via your contact form";
                // Construct message
                $message = "Name: $name\r\n";
                $message .= "Email: $email\r\n";
                $message .= "Phone: $phone\r\n";
                $message .= "Message:\r\n$msg";
                
                // If the subscribe check was checked...
                if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'){
                    // Add a new line to the $message
                    $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
                }
                
                $message = wordwrap($message, 72);
                
                // Set the mail headers into a variable
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                $headers .= "From: $name <$email>\r\n";
                $headers .= "X-Priority: 1\r\n";
                $headers .= "X-MSMail-Priority: High\r\n\r\n";
                
                // Send the email!
                mail($to, $subject, $message, $headers);
                
        ?>
        
        <!-- Show success message after email has sent -->
        <h5>Thank for contacting Latimer Development!</h5>
        <p>Please allow 24 hours for a response.</p>
        <p><a href="/index.php" class="button block">&laquo; Go to Home Page</a></p>
        
        <?php } else { ?>
        
        <form method="post" action="" id="contact-form">
            <div id="nameBox">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name">
            </div>
            <div id="emailBox">
                <label for="email">Email</label><br>
                <input type="email" id="emailInput" name="email">
            </div>
            <div id="phoneBox">
                <label for="phone">Phone Number</label><br>
                <input type="text" id="phone" name="phone">
            </div>
            <div id="message">
                <label for="message">Send a message</label><br>
                <textarea id="message" name="message"></textarea><br>
            </div>
            <div id="checkbox">
                <input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
                <label for="subscribe">Subscribe to newsletter</label>
            </div>
            <input id="submit" type="submit" class="button next" name="contact_submit" value="Send Message">
        </form>
        
        <?php } ?>
        
        </div><!--contactBox -->
    </div><!-- contact -->

<?php include('includes/footer.php'); ?>