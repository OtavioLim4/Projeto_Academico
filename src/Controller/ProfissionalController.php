<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profissional Controller
 *
 * @property \App\Model\Table\ProfissionalTable $Profissional
 * @method \App\Model\Entity\Profissional[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfissionalController extends AppController
{


    public function isAuthorized($user){
        return true;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $profissional = $this->paginate($this->Profissional);

        $this->set(compact('profissional'));
    }

    /**
     * View method
     *
     * @param string|null $id Profissional id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profissional = $this->Profissional->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('profissional'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profissional = $this->Profissional->newEmptyEntity();
        if ($this->request->is('post')) {
            $profissional = $this->Profissional->patchEntity($profissional, $this->request->getData());
            if ($this->Profissional->save($profissional)) {
                $this->Flash->success(__('The profissional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profissional could not be saved. Please, try again.'));
        }
        $users = $this->Profissional->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('profissional', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profissional id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profissional = $this->Profissional->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profissional = $this->Profissional->patchEntity($profissional, $this->request->getData());
            if ($this->Profissional->save($profissional)) {
                $this->Flash->success(__('The profissional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profissional could not be saved. Please, try again.'));
        }
        $users = $this->Profissional->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('profissional', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profissional id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profissional = $this->Profissional->get($id);
        if ($this->Profissional->delete($profissional)) {
            $this->Flash->success(__('The profissional has been deleted.'));
        } else {
            $this->Flash->error(__('The profissional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
