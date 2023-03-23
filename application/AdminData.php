<?php



/**
 * Description of AdminData
 *
 * @author Dany L
 */
class AdminData {
    public $title;
    public $details;
    public $fileNameNew;
    public $email;
    public $firstname;
    public $lastname;
    public $password;


    public $data = array();
    
    public function selectBlog() {
        global $conn;
        $selectblog = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
        while ($row = mysqli_fetch_array($selectblog)){
            $datas["id"] = $row["id"];
            $datas["title"] = $row["title"];
            $datas["details"] = $row["details"];
            $datas["image"] = $row["image_name"];
            
            array_push($this->data, $datas);
        }
        
        
    
    }
    
    public function addBlog() {
        global $conn;
        $addblog = mysqli_query($conn, "INSERT INTO posts (title, details, image_name) VALUES ('$this->title', '$this->details', '$this->fileNameNew')");
        if($addblog){
            echo '<script>alert("Add Success")</script>';
            
        } else {
            echo '<script>alert("Something went wrong please try again")</script>';
        }
        
        
    }
    
    public function register() {
        global $conn;
        
        $sql = mysqli_query($conn, "INSERT INTO reg (email, firstname, lastname, password)VALUES('$this->email','$this->firstname','$this->lastname','$this->password')");
        if($sql){
            echo '<script>alert("Registration success")</script>';
        } else {
            echo '<script>alert("Something went wrong! try again.")</script>';
        }
        
    }
    }

