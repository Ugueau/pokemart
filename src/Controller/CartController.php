<?php
namespace App\Controller;

use App\Model\Cart;
use Cake\Event\EventInterface;

class CartController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['addToCart', 'index', 'clearCart']);
    }
    public function addToCart($productId, $quantity)
    {
        // Créer une instance du panier
        if($this->getRequest()->getSession()->read('Cart') == null) {
            $cart = new Cart();
        }else{
            $cart = $this->getRequest()->getSession()->read('Cart');
        }

        // Ajouter le produit au panier
        $cart->addItem($productId, $quantity);

        // Stocker le panier en session
        $this->getRequest()->getSession()->write('Cart', $cart);

        // Rediriger vers la page de confirmation d'ajout au panier
        return $this->redirect(['controller' => 'Card','action' => 'index']);
    }

    public function index()
    {
        // Récupérer le panier en session
        $cart = $this->getRequest()->getSession()->read('Cart');

        // Transmettre le panier à la vue
        $this->set(compact('cart'));
    }

    public function clearCart(){
        $cart = $this->getRequest()->getSession()->read('Cart');
        $cart->clear();
        return $this->redirect(['controller' => 'Cart', 'action' => 'index']);
    }
}
