









<?php if (isset($_POST[ 'submit'])) {
    //getting the form value and defining the mail address and and the message subject 
    $to='yourmail@mail.com' ;
    
    $subject = 'Feedback from website' ; 
    
    $name = $_POST[ 'name']; 
    
    $email = $_POST[ 'email']; 
    
    $msg = $_POST[ 'msg']; 
    
    
    //Setting up the meassage 
    
    $message = 'Name: ' . $name . "\r\n\r\n"; 
    
    $message .= 'Email: ' . $email . "\r\n\r\n"; 
    
    $message .= 'msg: ' . $msg . "\r\n\r\n"; 
    
    
    //setting up the headers 
    
    $headers = 'From:' .$name . "<$email>" . "\r\n" . "Cc: website" . "\r\n"; 
    
    $success = mail($to, $subject, $message, $headers); 

    

} 

?>