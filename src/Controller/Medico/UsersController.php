<?php
namespace App\Controller\Medico;

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
                
                if ($loggedUser['role_id'] == 1) {

                    return $this->redirect('/');
                    
                } else if ($loggedUser['role_id'] == 2) {

                    return $this->redirect('/dscm/distritos');
                    
                } else if ($loggedUser['role_id'] == 3) {

                    return $this->redirect('/medico/tratamentos');
                                        
                } elseif ($loggedUser['role_id'] == 4) {

                    return $this->redirect('/us/pacientes');
                    
                } else {
                    return $this->redirect($this->Auth->redirectUrl('/us/campanhas'));
                }
            } else {
                $this->Flash->error('Dados Invalidos, por favor tente novamente', ['key' => 'auth']);
            }
        }
    }
}
