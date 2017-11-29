<?php

namespace App\Model;

class Dog extends Base {
    protected $tableName = 'dog';
    
    /**@var DogBreed @inject*/
    public $dogBreed;
    
    
    public function findByParams($data) {
               
        $regNr = $data['regNr'];
        
        if (!empty($regNr)) {
            $dogByNr = $this->findByRegNr($regNr);
            
            if ($dogByNr) {
                return $dogByNr;
            }
        } else {
            //select * from dog where id in (select distinct dog_id from dog_has_bredd where breed_id X or Y)
            $dogs = $this->getTable();
            $result = array();
            foreach ($dogs as $dog) {
                foreach ($dog->related('dog_has_breed') as $dogBreed) {
                    if ($dogBreed->breed->id == $data['breed'] || $dogBreed->breed->id == $data['breed2']) {
                        array_push($result, $dogBreed->dog);
                    }
                }
            }
            
            return $result;
        }
        
        return null;
    }
    
    public function findByRegNr($regNr) {
        return $this->findBy(array('regNr'=>$regNr))->fetchAll();
    }
    
    public function findByIds($ids) {
        return $this->findAll()->where('id IN ?', $ids)->fetchAll();
    }
        
    public function findAllFound() {
        return $this->findAll()->where(array('state_id'=>3))->fetchAll();
    }
    
    public function findAllLost() {
        return $this->findAll()->where(array('state_id'=>2))->fetchAll();
    }
}
