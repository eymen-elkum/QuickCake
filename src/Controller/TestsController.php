<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tests Controller
 *
 * @property \App\Model\Table\TestsTable $Tests
 */
class TestsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 4,
            'contain' => ['ParentTests']
        ];
        $this->set('tests', $this->paginate($this->Tests));
        $this->set('_serialize', ['tests']);
    }

    /**
     * View method
     *
     * @param string|null $id Test id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => ['ParentTests', 'ChildTests']
        ]);
        $this->set('test', $test);
        $this->set('_serialize', ['test']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $test = $this->Tests->newEntity();
        if ($this->request->is('post')) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success('The test has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The test could not be saved. Please, try again.');
            }
        }
        $parentTests = $this->Tests->ParentTests->find('list', ['limit' => 200]);
        $this->set(compact('test', 'parentTests'));
        $this->set('_serialize', ['test']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Test id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success('The test has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The test could not be saved. Please, try again.');
            }
        }
        $parentTests = $this->Tests->ParentTests->find('list', ['limit' => 200]);
        $this->set(compact('test', 'parentTests'));
        $this->set('_serialize', ['test']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Test id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $test = $this->Tests->get($id);
        if ($this->Tests->delete($test)) {
            $this->Flash->success('The test has been deleted.');
        } else {
            $this->Flash->error('The test could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
