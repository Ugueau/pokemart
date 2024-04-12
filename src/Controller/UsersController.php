<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login']);
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }


    function login()
    {
        $this->viewBuilder()->setLayout("login");
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Email ou mot de passe incorrecte');
        }
    }

    function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Card', 'action' => 'index']);
    }

    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Users');
    }
}
