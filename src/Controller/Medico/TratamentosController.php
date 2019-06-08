<?php

namespace App\Controller\Medico;

use App\Controller\AppController;

/**
 * Tratamentos Controller
 *
 * @property \App\Model\Table\TratamentosTable $Tratamentos
 *
 * @method \App\Model\Entity\Tratamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TratamentosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Unidades', 'Users', 'Especialidades', 'Pacientes', 'Diagnosticos']
        ];
        $tratamentos = $this->paginate($this->Tratamentos);

        $this->set(compact('tratamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => ['Unidades', 'Users', 'Especialidades', 'Pacientes', 'Diagnosticos']
        ]);

        $this->set('tratamento', $tratamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $tratamento = $this->Tratamentos->newEntity();
        if ($this->request->is('post')) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());

            // Added this line
            $tratamento->user_id = $this->Auth->user('id');

            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('O {0} foi registado com sucesso.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi registado. Por favor, tente de novo.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $especialidades = $this->Tratamentos->Especialidades->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'especialidades', 'pacientes', 'diagnosticos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());
            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('O {0} foi actualizado com sucesso.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi actualizado. Por favor, tente de novo.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $especialidades = $this->Tratamentos->Especialidades->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'especialidades', 'pacientes', 'diagnosticos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $tratamento = $this->Tratamentos->get($id);
        if ($this->Tratamentos->delete($tratamento)) {
            $this->Flash->success(__('O {0} foi removido.', 'Tratamento'));
        } else {
            $this->Flash->error(__('O {0} não pode ser removido. Por favor, tentar de novo.', 'Tratamento'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user) {
// All registered users can add tratamentos
// Prior to 3.4.0 $this->request->param('action') was used.
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
// The owner of an tratamentos can edit and delete it
// Prior to 3.4.0 $this->request->param('action') was used.
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
// Prior to 3.4.0 $this->request->params('pass.0')
            $tratamentoId = (int) $this->request->getParam('pass.0');
            if ($this->Tratamentos->isOwnedBy($tratamentoId, $user['id'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

}
