<?php

namespace App\Model\Security;

use Nette\Security as NS;

class CustomAuthenticator implements NS\IAuthenticator {
    
    public $webusers;
    
    private $salt;
    
    public function __construct($webusers, $salt) {
        $this->webusers = $webusers;
        $this->salt = $salt;
    }
    
    public function authenticate(array $credentials) {
        list($email, $password) = $credentials;
        
        $row = $this->webusers->findOneBy(array('email'=> $email));
        
        if (!$row) {
            throw new NS\AuthenticationException('Uživatel nebyl nalezen');
        }
        
        if (!NS\Passwords::verify($password, $row->password)) {
            throw new NS\AuthenticationException('Zadané heslo není správné');
        }
        
        $sql = $this->webusers->roles($row->id);
        $roles = $sql->fetchPairs();
        
        return new NS\Identity($row->id, $roles, ['email'=>$row->email]);
    }
    
    public function calculateHash($password) {
        return NS\Passwords::hash($password, array('salt'=>$this->salt));
    }
    
    public function generatePassword() {
        return substr(md5(uniqid(mt_rand(), true)), 0, 10);
    }

}
