<?php
abstract class Emailer{
    protected $sender;
    protected $recipients;
    protected $subject;
    protected $body;

    function __construct($sender){
        $this->sender = $sender;
        $this->recipients = array();
    
    }

    public function addRecipients($recipient){
        array_push($this->recipients, $recipient); //一つ以上の要素を配列の最後に追加する
    }

    public function setSubject($subject){
        $this->subject = $subject;
    }

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
$sgEmailer->addRecipients("emailID@domain.com");
$sgEmailer->setSubject("Just a Test");
$sgEmailer->setBody("Hi Name, How are you?");
$sgEmailer->sendEmail();

// $sgEmailer = new SendGrid("youremail@yourdomain.com");
// $sgEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();


?>