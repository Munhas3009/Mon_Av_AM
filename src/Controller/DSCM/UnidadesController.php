<?php

namespace App\Controller\DSCM;

use App\Controller\AppController;

/**
 * Unidades Controller
 *
 * @property \App\Model\Table\UnidadesTable $Unidades
 *
 * @method \App\Model\Entity\Unidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Classificacaos', 'Distritos']
        ];
        $unidades = $this->paginate($this->Unidades);

        $this->set(compact('unidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $unidade = $this->Unidades->get($id, [
            'contain' => ['Classificacaos', 'Distritos', 'Campanhas', 'Tratamentos']
        ]);

        $this->set('unidade', $unidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $unidade = $this->Unidades->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->getData());
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
        }
        $classificacaos = $this->Unidades->Classificacaos->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'classificacaos', 'distritos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->getData());
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
        }
        $classificacaos = $this->Unidades->Classificacaos->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'classificacaos', 'distritos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Unidades->get($id);
        if ($this->Unidades->delete($unidade)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Unidade'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Unidade'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Campanhas method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function campanhas() {

        $this->setResponse($this->getResponse()->withDownload('campanhas.csv'));

        $_header = array('ID', 'US', 'Utilizador', 'Descricao', 'Nº de dose', 'Aplicada na US', 'Aplicada por BM',
            'Aplicada por ACS', 'Interv_idade', 'Mulheres pos parto', 'Comentario', 'Registado', 'Actualizado');

//        $data = $this->Campanhas->find('all');
        $_serialize = 'data';

        $this->viewBuilder()->setClassName('CsvView.Csv');
        $this->set(compact('data', '_header', '_serialize'));
    }

    /**
     * Tratamentos method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function tratamentos() {

        $this->setResponse($this->getResponse()->withDownload('tratamentos.csv'));

        $_header = array('ID', 'Especialidade', 'Estado', 'Diagnostico', 'Tratamento', 'Vacinacao', 'Registado', 'Actualizado');

//        $data = $this->Unidades->find();
        $_serialize = 'data';

        $this->viewBuilder()->setClassName('CsvView.Csv');
        $this->set(compact('data', '_header', '_serialize'));
    }

}
