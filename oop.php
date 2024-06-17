<?php
class User{
    private $name;
    private $email;
    private static $status = "Active";
    
    public function __construct($name = null,$email=null){
        $this->name=$name;
        $this->email=$email;
    }
    
    public function login(){
        return "The user {$this->name} with {$this->email} has logged in!";
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setName($name){
        $this->name=$name;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    
    public static function getStatus(){
        return User::$status;
    }
}

class Admin extends User{
    private $level;
    
    public function __construct($level,$name,$email){
        $this->level=$level;
        parent::__construct($name,$email);
    }
    
    public function getLevel(){
        return $this->level;
    }
    
    public function setLevel($level){
        $this->level =$level;
    }
    
    public function login(){
        return "The user {$this->getName()} with {$this->getEmail()} and level {$this->level} has logged in!";
    }
}

$user1 = new User();
$user1->setName("Jian");
$user1->setEmail("zjlee@gmail.com");

echo($user1->login());
echo("\n");

$user2 = new User("Emilia","catpig@gmail.com");
echo($user2->login());
echo("\n");

$admin1 = new Admin(5,"Emma","minicat@gmail.com");
echo($admin1->login());
echo("\n");
echo(Admin::getStatus());
?>
