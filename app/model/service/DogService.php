<?php

namespace App\Model;

use Nette;

class DogService extends \Nette\Object {
    
   /** @var Dog */
    public $dog;
    
    /** @var DogBreed */
    public $dogBreed;
        
   
    public function __construct(Dog $dog, DogBreed $dogBreed) {
        $this->dog = $dog;
        $this->dogBreed = $dogBreed;
    }
    
    public function insertDog($data) {
                
        $breedArray = array($data['breed'], $data['breed2']);
        unset($data['breed']);
        unset($data['breed2']);
                
        $insertedDog = $this->dog->insert($data);
        
        if (empty($insertedDog->name)) {
            $id = $insertedDog->id;
            $name = $insertedDog->state->state == 'Ztracen' ? 'Ztracenec #'.$id : 'Nalezenec #'.$id;
            $insertedDog->update(array('name' => $name));
        }
        
        foreach ($breedArray as $breed) {
            if (!empty($breed)) {
                $this->dogBreed->insert(array('dog_id'=>$insertedDog->id, 'breed_id'=>$breed));
            }
        }
                
    }
    
}

