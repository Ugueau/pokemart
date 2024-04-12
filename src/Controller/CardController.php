<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

use Intervention\Image\ImageManagerStatic as Image;

/**
 * Card Controller
 *
 * @property \App\Model\Table\CardTable $Card
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardController extends AppController
{
    public $paginate = [
        'limit' => 18
    ];

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index', 'showDetails']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $card = $this->Card->find();
        $conditions["price"] = 1000000;
        $conditions["rarity_index"] = 0;
        $conditions["element"] = "%%";
        $conditions["type"] = "%%";


        if (!empty($this->getRequest()->getQuery())) {
            if ($this->getRequest()->getQuery("type") != "") {

                switch ($this->getRequest()->getQuery("type")) {
                    case 0:
                        $type = "trainer";
                        break;
                    case 1:
                        $type = "pokemon";
                        break;
                    case 2:
                        $type = "energy";
                        break;
                    default:
                        $type = "";
                        break;
                }
                $conditions["type"] = "%" . $type . "%";
            }
            if (!empty($this->getRequest()->getQuery("element"))) {

                $conditions["element"] = "%" . $this->getRequest()->getQuery("element") . "%";
            }
            if ($this->getRequest()->getQuery("rarity") != "") {

                $conditions["rarity_index"] = $this->getRequest()->getQuery("rarity") + 1;
            }
            if (!empty($this->getRequest()->getQuery("price"))) {
                $conditions["price"] = $this->getRequest()->getQuery("price");
            }
        }
        $this->set('card', $this->paginate($this->Card->find()->where([
            "type LIKE " => $conditions["type"],
            "name LIKE " => $conditions["element"],
            "rarity_index >=" => $conditions["rarity_index"],
            "price <=" => $conditions["price"]])
        )
        );
    }

    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $card = $this->Card->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('card'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $card = $this->Card->newEmptyEntity();
        if ($this->request->is('post')) {
            $card->type = $this->request->getData("type");
            $card->name = $this->request->getData("name");
            $card->hp = $this->request->getData("hp");
            $card->pokemon_type = $this->request->getData("pokemon_type");
            $card->level = $this->request->getData("level");
            $card->description = $this->request->getData("description");
            $card->weakness = $this->request->getData("weakness");
            $card->resistance = $this->request->getData("resistance");
            $card->retreat_cost = $this->request->getData("retreat_cost");
            $card->rarity_index = $this->request->getData("rarity_index");
            $card->origin_country = $this->request->getData("origin_country");
            $card->copies = $this->request->getData("copies");
            $card->price = $this->request->getData("price");
            //$card->image_url = $this->request->getData("image_url");

            if ($this->Card->save($card)) {
                $file = $this->request->getData("image_url");

                $destinationPath = WWW_ROOT . 'img' . DS . 'cards' . DS . $card->id.".jpg";

                $file->moveTo($destinationPath);

                $img = Image::make($destinationPath);
                $img->resize(310, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save($destinationPath);

                ///
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }
        $this->set(compact('card'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $card = $this->Card->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Card->patchEntity($card, $this->request->getData());
            if ($this->Card->save($card)) {
                $this->Flash->success(__('The card has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card could not be saved. Please, try again.'));
        }
        $this->set(compact('card'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $card = $this->Card->get($id);
        if ($this->Card->delete($card)) {
            $this->Flash->success(__('The card has been deleted.'));
        } else {
            $this->Flash->error(__('The card could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function showDetails($card_id)
    {
        $card = $this->Card->get($card_id);
        $this->set(compact('card'));
    }
}
