<?php

class Dog{

    //private $id= 33;
    private $owner;
    //private $email;
    private $breed;


//----------This grabs the user's info (password and name)----------
    public function __construct($owner, $breed){
        $this->breed = $breed;
        $this->owner = $owner;
    }

//----------This allows to echo that the user is authenticated----------
    public function register(){
        echo 'User Registered' . '<br />';
    }

//----------This allows to echo the user and password----------
    public function login(){

        $this->auth_user();

    }

//----------This grabs the user's info and spits in into a string----------
    public function auth_user(){
        echo $this->owner. ', is authenticated!'. '<br />';
        echo $this->breed. ', this is the user\'s password.';
    }

//----------I don't know what this does...----------
    /*      public function __destruct(){
              //echo 'Destructor Called';
          }
    */

}

//----------This creates the info that is grabbed and used for basically everything----------
$User = new Dog('Gavin', '12345');


//----------Need to call the functions to actually work----------
$User->register();

$User->login();

