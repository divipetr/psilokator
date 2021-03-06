<?php 

namespace App\Presenters;

use Nette;
use App\Model;
use Nette\Application\UI\Form;


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
    
    /** @var Model\Photo @inject*/
    public $photo;
    
    
    public function createComponentAddDogModalForm() {
        
        $form = new Form;
        $form->addText('regNr', 'Číslo známky');
        $form->addText('name', 'Jméno');
        $form->addSelect('sex_id', 'Pohlaví', $this->sex->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte pohlaví')->setRequired('Pohlaví musí být vybráno');
        $form->addSelect('breed', 'Rasa', $this->breed->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte rasu')->setRequired('Rasa musí být vybrána');
        $form->addSelect('breed2', 'Rasa 2', $this->breed->findAll()->fetchPairs('id', 'name'))->setPrompt('Vyberte rasu');
        $form->addSelect('state_id', 'Stav', $this->state->findAll()->where('id != 1')->fetchPairs('id', 'state'))->setRequired('Stav musí být vyplněn');
        $form->addUpload('photo', 'Fotografie')
                ->addCondition(Form::FILLED)
                    ->addRule(Form::IMAGE, 'Nahrejte prosím obrázkový soubor');
        $form->addText('contact', 'Kontakt')->setRequired('Kontakt musí být vyplněn');
        $form->addSubmit('submit', 'Přidat');
        $form->onSuccess[] = $this->proceedAddForm;
        
        return $form;
    } 


    public function proceedAddForm(\Nette\Application\UI\Form $form) {
        $array = $form->getValues();
        $data = $array;
        unset($array);
                
        $dogPhotoTmp = NULL;
        if (isset($data['photo'])) {
            $dogPhotoTmp = $data['photo'];
            unset($data['photo']);
        }
        
        unset($data['contact']);
        
        $image_id = NULL;
        
        if ($dogPhotoTmp->isOk()) {
            $dogPhoto = $dogPhotoTmp->toImage();
            $image_id = $this->photo->insert(array('image'=>$dogPhoto))->id;
        }
        
        if ($image_id !== NULL) {
            $data['photo_id'] = $image_id;
        }

        $this->dogService->insertDog($data);
                        
        $form->setValues(array(), TRUE);
        
        if ($this->isAjax()) {
            $this->redrawControl('addDogModalWrapper');
        } else {
            $this->redirect('this');
        }
    }
}
