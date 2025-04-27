<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Educacional Controller
 *
 * @property \App\Model\Table\EducacionalTable $Educacional
 * @method \App\Model\Entity\Educacional[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducacionalController extends AppController
{
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
        $educacional = $this->paginate($this->Educacional);

        $this->set(compact('educacional'));
    }

    /**
     * View method
     *
     * @param string|null $id Educacional id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educacional = $this->Educacional->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('educacional'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educacional = $this->Educacional->newEmptyEntity();
        if ($this->request->is('post')) {
            $educacional = $this->Educacional->patchEntity($educacional, $this->request->getData());
            if ($this->Educacional->save($educacional)) {
                $this->Flash->success(__('The educacional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educacional could not be saved. Please, try again.'));
        }
        $users = $this->Educacional->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('educacional', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Educacional id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educacional = $this->Educacional->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educacional = $this->Educacional->patchEntity($educacional, $this->request->getData());
            if ($this->Educacional->save($educacional)) {
                $this->Flash->success(__('The educacional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educacional could not be saved. Please, try again.'));
        }
        $users = $this->Educacional->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('educacional', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Educacional id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educacional = $this->Educacional->get($id);
        if ($this->Educacional->delete($educacional)) {
            $this->Flash->success(__('The educacional has been deleted.'));
        } else {
            $this->Flash->error(__('The educacional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
