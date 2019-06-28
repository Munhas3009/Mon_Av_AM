<?php

namespace App\Controller\US;

use App\Controller\AppController;

/**
 * Campanhas Controller
 *
 * @property \App\Model\Table\CampanhasTable $Campanhas
 *
 * @method \App\Model\Entity\Campanha[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampanhasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Unidades', 'Users']
        ];
        $campanhas = $this->paginate($this->Campanhas);

        $this->set(compact('campanhas'));
    }

    /**
     * View method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $campanha = $this->Campanhas->get($id, [
            'contain' => ['Unidades', 'Users']
        ]);

//configurando o nosso plugin pdf dentro da nossa function view
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'landscape',
                'filename' => 'Campanha_' . $id . '.pdf'
            ]
        ]);

        $this->set('campanha', $campanha);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $campanha = $this->Campanhas->newEntity();
        if ($this->request->is('post')) {
            $campanha = $this->Campanhas->patchEntity($campanha, $this->request->getData());
            if ($this->Campanhas->save($campanha)) {
                $this->Flash->success(__('A {0} foi registada com sucesso.', 'Campanha'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi registada. Por favor, tente novamente.', 'Campanha'));
        }
        $unidades = $this->Campanhas->Unidades->find('list', ['limit' => 200]);
        $users = $this->Campanhas->Users->find('list', ['limit' => 200]);
        $this->set(compact('campanha', 'unidades', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $campanha = $this->Campanhas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campanha = $this->Campanhas->patchEntity($campanha, $this->request->getData());
            if ($this->Campanhas->save($campanha)) {
                $this->Flash->success(__('A {0} foi actualizada com sucesso.', 'Campanha'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A {0} não foi actualizada. Por favor, tente novamente.', 'Campanha'));
        }
        $unidades = $this->Campanhas->Unidades->find('list', ['limit' => 200]);
        $users = $this->Campanhas->Users->find('list', ['limit' => 200]);
        $this->set(compact('campanha', 'unidades', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $campanha = $this->Campanhas->get($id);
        if ($this->Campanhas->delete($campanha)) {
            $this->Flash->success(__('A {0} foi removida.', 'Campanha'));
        } else {
            $this->Flash->error(__('A {0} não foi removida. Por favor, tente novamente.', 'Campanha'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Export method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function export() {

        $this->setResponse($this->getResponse()->withDownload('campanhas.csv'));

        $_header = array('ID', 'US', 'Utilizador', 'Descricao', 'Nº de dose', 'US', 'BM',
            'ACS', 'Idade', 'MPP', 'Comentario', 'Registado', 'Actualizado');

        $data = $this->Campanhas->find('all');
        $_serialize = 'data';

        $this->viewBuilder()->setClassName('CsvView.Csv');
        $this->set(compact('data', '_header', '_serialize'));
    }

}
