<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    public $name;
    public $email;
    public $password;
 // constructor is a method that runs when an object is created
 public function __construct($name,$email,$password){
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
 }
 
    
    function set_name($name){
        $this->name=$name;

    }

    function get_name(){
        return $this->name;
    }

}
$user1 = new User('Moayad','Moayad@gmail.com','12345');


// echo $user1->name;



// inheritence 

class Employee extends User{
    public function __construct($name,$email,$password,$title)
    {
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }
    public function get_titile(){
        return $this->title;
    }
}

$employee1 = new Employee('Moayad','Moayad@gmail.com','6546','Manager');

echo $employee1->get_titile();
