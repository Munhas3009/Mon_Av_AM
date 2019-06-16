<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Campanhas', 'Tratamentos']
        ]);

        $this->set('user', $user);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
        }

        return $this->redirect(['action' => 'index']);
    }
 /**
     * login method
     *
     * @return \Cake\Http\Response|void
     */
    public function login() {


        if ($this->request->is('post')) {

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                $loggedUser = $this->request->session()->read('Auth.User');

                if ($loggedUser['role_id'] === 1) {

                    return $this->redirect('/');
                } else if ($loggedUser['role_id'] === 2) {

                    return $this->redirect('/dscm/distritos');
                } else if ($loggedUser['role_id'] === 3) {

                    return $this->redirect('/medico/tratamentos');
                } elseif ($loggedUser['role_id'] === 4) {

                    return $this->redirect('/us/pacientes');
                } else {
                    return $this->redirect($this->Auth->redirectUrl('us/campanhas'));
                }
            } else {
                $this->Flash->error('Dados Invalidos, por favor tente novamente', ['key' => 'auth']);
            }
        }


//        if ($this->request->is('post')) {
//            $user = $this->Auth->identify();
//            if ($user) {
//                $this->Auth->setUser($user);
//                return $this->redirect($this->Auth->redirectUrl());
//            }
//            $this->Flash->error('Username ou palavra-passe invalido, tente novamente', ['key' => 'auth']);
//        }
    }

    /**
     * Logout method
     *
     * @return \Cake\Network\Response
     */
    public function logout() {

        $this->Flash->success('O saiu do sistema com sucesso', ['key' => 'auth']);
        return $this->redirect($this->Auth->logout());
    }

}

