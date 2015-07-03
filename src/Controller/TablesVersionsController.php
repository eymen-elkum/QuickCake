<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TablesVersions Controller
 *
 * @property \App\Model\Table\TablesVersionsTable $TablesVersions
 */
class TablesVersionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tablesVersions', $this->paginate($this->TablesVersions));
        $this->set('_serialize', ['tablesVersions']);
    }

    /**
     * View method
     *
     * @param string|null $id Tables Version id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablesVersion = $this->TablesVersions->get($id, [
            'contain' => []
        ]);
        $this->set('tablesVersion', $tablesVersion);
        $this->set('_serialize', ['tablesVersion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablesVersion = $this->TablesVersions->newEntity();
        if ($this->request->is('post')) {
            $tablesVersion = $this->TablesVersions->patchEntity($tablesVersion, $this->request->data);
            if ($this->TablesVersions->save($tablesVersion)) {
                $this->Flash->success(__('The tables version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tables version could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tablesVersion'));
        $this->set('_serialize', ['tablesVersion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tables Version id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablesVersion = $this->TablesVersions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablesVersion = $this->TablesVersions->patchEntity($tablesVersion, $this->request->data);
            if ($this->TablesVersions->save($tablesVersion)) {
                $this->Flash->success(__('The tables version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tables version could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tablesVersion'));
        $this->set('_serialize', ['tablesVersion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tables Version id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablesVersion = $this->TablesVersions->get($id);
        if ($this->TablesVersions->delete($tablesVersion)) {
            $this->Flash->success(__('The tables version has been deleted.'));
        } else {
            $this->Flash->error(__('The tables version could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
