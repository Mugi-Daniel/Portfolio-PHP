<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserData
 *
 * @author Dany L
 */
class UserData {
    public $name;
    public $email;
    public $subject;
    public $message;
   

    public function contact(){
        global $conn;
        $contact = mysqli_query($conn, "INSERT INTO contact (name,email,subject,message) VALUES ('$this->name','$this->email','$this->subject','$this->message')");
        if($contact){
            echo '<script>Your message was sent Successfully!</script>';
        }else
        {
            echo '<script>Failed try again!</script>';

        }
}
}