<?php 

namespace App\Presenters;

use Nette;
use App\Model;


/**
 * Base presenter for all application presenters.
 */
class BasePresenter extends Nette\Application\UI\Presenter
{
    
    /** @var Model\Breed @inject*/
    public $breed;
    
    /** @var Model\Sex @inject*/
    public $sex;
    
    /** @var Model\State @inject*/
    public $state;
    
    /** @var Model\DogService @inject*/
    public $dogService;
    
    
    public function createComponentAddDogModalForm() {
        
        $form = new \Nette\Application\UI\Form;
        $form->addText('regNr', 'Číslo známky');
        $form->addText('name', 'Jméno');
        $form->addSelect('sex_id', 'Pohlaví', $this->sex->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte pohlaví')->setRequired('Pohlaví musí být vybráno');
        $form->addSelect('breed', 'Rasa', $this->breed->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte rasu')->setRequired('Rasa musí být vybrána');
        $form->addSelect('breed2', 'Rasa 2', $this->breed->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte rasu');
        $form->addSelect('state_id', 'Stav', $this->state->findAll()->where('id != 1')->fetchPairs('id', 'state'))->setRequired('Stav musí být vyplněn');
        $form->addSubmit('submit', 'Přidat');
        $form->onSuccess[] = $this->proceedAddForm;
        
        return $form;
    } 


    public function proceedAddForm(\Nette\Application\UI\Form $form) {
        $array = $form->getValues();
        $data = $array;
        unset($array);
        
        $this->dogService->insertDog($data);
        
        $form->setValues(array(), TRUE);
        
        if ($this->isAjax()) {
            $this->redrawControl('addDogModalWrapper');
        } else {
            $this->redirect('this');
        }
    }
}
