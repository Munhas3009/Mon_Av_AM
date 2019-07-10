<?php
namespace App\Controller\DSCM;

use App\Controller\AppController;

/**
 * Classificacaos Controller
 *
 * @property \App\Model\Table\ClassificacaosTable $Classificacaos
 *
 * @method \App\Model\Entity\Classificacao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassificacaosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $classificacaos = $this->paginate($this->Classificacaos);

        $this->set(compact('classificacaos'));
    }

    /**
     * View method
     *
     * @param string|null $id Classificacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classificacao = $this->Classificacaos->get($id, [
            'contain' => ['Unidades']
        ]);

        $this->set('classificacao', $classificacao);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classificacao = $this->Classificacaos->newEntity();
        if ($this->request->is('post')) {
            $classificacao = $this->Classificacaos->patchEntity($classificacao, $this->request->getData());
            if ($this->Classificacaos->save($classificacao)) {
                $this->Flash->success(__('A {0} foi registada com sucesso.', 'Classificação'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi registada. Por favor, tente novamente.', 'Classificação'));
        }
        $this->set(compact('classificacao'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Classificacao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classificacao = $this->Classificacaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classificacao = $this->Classificacaos->patchEntity($classificacao, $this->request->getData());
            if ($this->Classificacaos->save($classificacao)) {
                $this->Flash->success(__('A {0} actualizada com sucesso.', 'Classificação'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi actualizada. Por favor, tente novamente.', 'Classificação'));
        }
        $this->set(compact('classificacao'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Classificacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classificacao = $this->Classificacaos->get($id);
        if ($this->Classificacaos->delete($classificacao)) {
            $this->Flash->success(__('A {0} foi removida.', 'Classificação'));
        } else {
            $this->Flash->error(__('A {0} não foi removida. Por favor, tente novamente.', 'Classificação'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
