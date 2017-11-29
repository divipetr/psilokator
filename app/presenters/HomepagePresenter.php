<?php 

namespace App\Presenters;

use Nette;
use App\Model;


class HomepagePresenter extends BasePresenter
{

    /** @var Model\Breed @inject*/
    public $breed;
    
    /** @var Model\Security\CustomAuthenticator @inject*/
    public $authenticator;
    
    /** @var Model\Dog @inject */
    public $dog;
    
    /** @var Model\WebUser @inject */
    public $webuser;
    
        public function beforeRender() {
            parent::beforeRender();
            
            if (!isset($this->template->searchResult)) {
                $this->template->searchResult = [];
            }
        }
	public function renderDefault()
	{
            
            
            
		$this->template->lostPets = $this->dog->findAllLost();
                $this->template->foundPets = $this->dog->findAllFound();
                if (!isset($this->template->ajax)) {
                    $this->template->ajax = 'NE';
                }
                
	}
        
        public function createComponentFastSearch() {
            $form = new Nette\Application\UI\Form;
            $form->addText('regNr', "Číslo známky")->setAttribute('placeholder', 'Číslo známky');
            $form->addSelect('breed', "Rasa", $this->breed->findAll()->fetchPairs('id', 'name'), null)
                    ->setPrompt("Vyberte 1. rasu");
            $form->addSelect('breed2', "Rasa", $this->breed->findAll()->fetchPairs('id', 'name'), null)
                    ->setPrompt("Vyberte 2. rasu");
            $form->addSubmit('submit', "Vyhledat");
            $form->onSuccess[] = $this->handleFastSearch;
            
            return $form;
        }
        
        public function handleFastSearch(Nette\Application\UI\Form $form) {
            
            if ($this->isAjax()) {
                $data = $form->getValues();
                $dogs = $this->dog->findByParams($data);
                $this->template->searchResult = $dogs;
            }
            
            $this->redrawControl('fastSearchResult');
        }

        public function processFastSearch(Nette\Application\UI\Form $form) {
            $data = $form->getValues();
            
            
            $dog = $this->dog->findByParams($data);
            
            
            $this->flashMessage(count($dog), 'alert-success');
        }
        
        public function createComponentRegister() {
            $form = new Nette\Application\UI\Form;
            
            $form->addtext('email', "Email");
            $form->addPassword('password', "Password");
            $form->addSubmit('submit', 'Vytvořit účet');
            $form->onSuccess[] = $this->processRegisterForm;
            
            return $form;
        }
        
        public function processRegisterForm($form) {
            $data = $form->getValues();
            $data['password'] = $this->authenticator->calculateHash($data['password']);
            $this->webuser->insert($data);
            
            
            $this->redirect('this');
        }
}
