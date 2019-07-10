<?php

namespace App\Controller\Medico;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\Database\Expression\QueryExpression;

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
            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('A {0} foi registada com sucesso.', 'Consulta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi registada. Por favor, tente novamente.', 'Consulta'));
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
                $this->Flash->success(__('A {0} foi actualizada com sucesso.', 'Consulta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi actualizada. Por favor, tente novamente.', 'Consulta'));
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
            $this->Flash->success(__('A {0} foi removida.', 'Consulta'));
        } else {
            $this->Flash->error(__('A {0} não foi removida. Por favor, tente novamente.', 'Consulta'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function countTratam($tratamentos = null) {

        $tratamentos = $this->Tratamentos->find()->where(['diagnostico_id' == 1])->count();
        ;
        //$tratamentos->select(['count' => $tratamentos->func()->count('*')]);
    }
    
    
    public function chartsTratam() {
        $this->paginate = [
            'contain' => ['Unidades', 'Users', 'Especialidades', 'Pacientes', 'Diagnosticos']
        ];
        $tratamentos = $this->paginate($this->Tratamentos);

        $this->set(compact('tratamentos'));
    }

}
