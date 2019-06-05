<?php

namespace App\Controller\DSCM;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
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
    public function view($id = null) {
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
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            //Start - Controller Code to handle file uploading
            if (!empty($this->request->data['photo']['name'])) {
                $fileName = $this->request->data['photo']['name'];
                $uploadPath = 'uploads/users/';
                $uploadFile = $uploadPath . $fileName;
                if (move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile)) {
                    $this->request->data['photo'] = $fileName;
                }
            }
            //End

            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} foi registado com sucesso.', 'Utilizador'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi registado. Por favor, tentar de novo.', 'Utilizador'));
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
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            //Start - Controller Code to handle file uploading
            if (!empty($this->request->data['photo']['name'])) {
                $fileName = $this->request->data['photo']['name'];
                $uploadPath = 'uploads/users/';
                $uploadFile = $uploadPath . $fileName;
                if (move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile)) {
                    $this->request->data['photo'] = $fileName;
                }
            }
            //End

            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} foi actualizado.', 'Utilizador'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi actualizado. Por favor, tentar de novo.', 'Utilizador'));
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O {0} foi removido.', 'Utilizador'));
        } else {
            $this->Flash->error(__('O {0} não pode ser removido. Por favor, tentar de novo.', 'Utilizador'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Logout method
     *
     * @return \Cake\Network\Response
     */
    public function logout() {

        $this->Flash->success('O saiu do sistema com sucesso.');
        return $this->redirect($this->Auth->logout());
    }

}