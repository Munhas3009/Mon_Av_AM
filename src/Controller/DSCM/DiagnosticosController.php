<?php
namespace App\Controller\DSCM;

use App\Controller\AppController;

/**
 * Diagnosticos Controller
 *
 * @property \App\Model\Table\DiagnosticosTable $Diagnosticos
 *
 * @method \App\Model\Entity\Diagnostico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiagnosticosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $diagnosticos = $this->paginate($this->Diagnosticos);

        $this->set(compact('diagnosticos'));
    }

    /**
     * View method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diagnostico = $this->Diagnosticos->get($id, [
            'contain' => ['Tratamentos']
        ]);

        $this->set('diagnostico', $diagnostico);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diagnostico = $this->Diagnosticos->newEntity();
        if ($this->request->is('post')) {
            $diagnostico = $this->Diagnosticos->patchEntity($diagnostico, $this->request->getData());
            if ($this->Diagnosticos->save($diagnostico)) {
                $this->Flash->success(__('O {0} foi registado com sucesso.', 'Diagnostico'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi registado. Por favor, tente novamente.', 'Diagnostico'));
        }
        $this->set(compact('diagnostico'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diagnostico = $this->Diagnosticos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diagnostico = $this->Diagnosticos->patchEntity($diagnostico, $this->request->getData());
            if ($this->Diagnosticos->save($diagnostico)) {
                $this->Flash->success(__('O {0} foi actualizado com sucesso.', 'Diagnostico'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O {0} não foi actualizado. Por favor, tente novamente.', 'Diagnostico'));
        }
        $this->set(compact('diagnostico'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diagnostico = $this->Diagnosticos->get($id);
        if ($this->Diagnosticos->delete($diagnostico)) {
            $this->Flash->success(__('O {0} foi removido.', 'Diagnostico'));
        } else {
            $this->Flash->error(__('O {0} não foi removido. Por favor, tente novamente.', 'Diagnostico'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
