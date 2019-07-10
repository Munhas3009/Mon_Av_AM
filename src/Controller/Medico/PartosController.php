<?php
namespace App\Controller\Medico;

use App\Controller\AppController;

/**
 * Partos Controller
 *
 * @property \App\Model\Table\PartosTable $Partos
 *
 * @method \App\Model\Entity\Parto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Unidades', 'Users', 'Pacientes']
        ];
        $partos = $this->paginate($this->Partos);

        $this->set(compact('partos'));
    }

    /**
     * View method
     *
     * @param string|null $id Parto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parto = $this->Partos->get($id, [
            'contain' => ['Unidades', 'Users', 'Pacientes']
        ]);

        $this->set('parto', $parto);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parto = $this->Partos->newEntity();
        if ($this->request->is('post')) {
            $parto = $this->Partos->patchEntity($parto, $this->request->getData());
            if ($this->Partos->save($parto)) {
                $this->Flash->success(__('O {0} foi registado com sucesso.', 'Parto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi registado. Por favor, tente novamente.', 'Parto'));
        }
        $unidades = $this->Partos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Partos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Partos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('parto', 'unidades', 'users', 'pacientes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Parto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parto = $this->Partos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parto = $this->Partos->patchEntity($parto, $this->request->getData());
            if ($this->Partos->save($parto)) {
                $this->Flash->success(__('O {0} foi actualizado com sucesso.', 'Parto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi actualizado. Por favor, tente novamente.', 'Parto'));
        }
        $unidades = $this->Partos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Partos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Partos->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('parto', 'unidades', 'users', 'pacientes'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Parto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parto = $this->Partos->get($id);
        if ($this->Partos->delete($parto)) {
            $this->Flash->success(__('O {0} foi removido.', 'Parto'));
        } else {
            $this->Flash->error(__('O {0} não foi removido. Por favor, tente novamente.', 'Parto'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
