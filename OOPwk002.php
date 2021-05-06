<?php

use Emailer as GlobalEmailer;

abstract class Emailer{
    protected $sender;
    protected $recipients;
    protected $subject;
    protected $body;

    function __construct($sender){
        $this->sender = $sender;
        $this->recipients = array();
    
    }
}

class AddRecipients extends Emailer{
    public function addRecipients($recipient){
        array_push($this->recipients, $recipient);
        $obj = new SetSubject;
        return $obj;        
    }
}

class SetSubject extends Emailer{
    public function setSubject($subject){
        $this->subject = $subject;
    }
}

class SetBody extends Emailer{
    public function setBody($body){
        $this->body = $body;
    }   
}

class SendGrid extends Emailer{
    public function sendEmail(){
        foreach ($this->recipients as $recipient) {
            $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
            echo "SendGrid successfully sent to {$recipient}\n";
            echo "Sender: $this->sender\n";
            echo "Subject: $this->subject\n";
            echo "Content: $this->body\n";
        }
    }
}

$sgEmailer = new SendGrid("youremail@yourdomain.com");
$sgEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();

?>