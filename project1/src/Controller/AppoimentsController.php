<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appoiments Controller
 *
 * @property \App\Model\Table\AppoimentsTable $Appoiments
 */
class AppoimentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Doctors']
        ];
        $appoiments = $this->paginate($this->Appoiments);

        $this->set(compact('appoiments'));
        $this->set('_serialize', ['appoiments']);
    }

    /**
     * View method
     *
     * @param string|null $id Appoiment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appoiment = $this->Appoiments->get($id, [
            'contain' => ['Patients', 'Doctors']
        ]);

        $this->set('appoiment', $appoiment);
        $this->set('_serialize', ['appoiment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appoiment = $this->Appoiments->newEntity();
        if ($this->request->is('post')) {
            $appoiment = $this->Appoiments->patchEntity($appoiment, $this->request->data);
            if ($this->Appoiments->save($appoiment)) {
                $this->Flash->success(__('The appoiment has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The appoiment could not be saved. Please, try again.'));
            }
        }
        $patients = $this->Appoiments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoiments->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoiment', 'patients', 'doctors'));
        $this->set('_serialize', ['appoiment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Appoiment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appoiment = $this->Appoiments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appoiment = $this->Appoiments->patchEntity($appoiment, $this->request->data);
            if ($this->Appoiments->save($appoiment)) {
                $this->Flash->success(__('The appoiment has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The appoiment could not be saved. Please, try again.'));
            }
        }
        $patients = $this->Appoiments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoiments->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoiment', 'patients', 'doctors'));
        $this->set('_serialize', ['appoiment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Appoiment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appoiment = $this->Appoiments->get($id);
        if ($this->Appoiments->delete($appoiment)) {
            $this->Flash->success(__('The appoiment has been deleted.'));
        } else {
            $this->Flash->error(__('The appoiment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
