<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;
use Cake\View\JsonView;

class APIController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['catalog', 'card']);
    }
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function catalog()
    {
        $cardModel = TableRegistry::getTableLocator()->get('Card');
        $catalog = $cardModel->find('all')->all();

        // Utiliser la méthode `set()` pour définir les données
        $this->set(compact('catalog'));

        // Définir le type de réponse comme JSON
        $this->response = $this->response->withType('application/json');

        // Renvoyer les données au format JSON
        $this->response = $this->response->withStringBody(json_encode(compact('catalog')));
        return $this->response;
    }


    public function card($id)
    {
        $cardModel = TableRegistry::getTableLocator()->get('Card');
        $card = $cardModel->get($id);

        // Utiliser la méthode `set()` pour définir les données
        $this->set(compact('card'));

        // Définir le type de réponse comme JSON
        $this->response = $this->response->withType('application/json');

        // Renvoyer les données au format JSON
        $this->response = $this->response->withStringBody(json_encode(compact('card')));
        return $this->response;
    }
}
