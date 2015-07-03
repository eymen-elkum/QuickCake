<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Photos Controller
 *
 * @property \App\Model\Table\PhotosTable $Photos
 */
class PhotosController extends AppController
{

    /**
     * Index method
     *
     * @param null $contentId
     */
    public function index($contentId = null)
    {
        $this->paginate = [
            'contain' => ['Contents']
        ];

        if (!empty($contentId)) {
            $this->paginate['conditions'] = ['content_id' => $contentId];
        }

        $this->set('photos', $this->paginate($this->Photos));
        $this->set('contentId', $contentId);
        $this->set('_serialize', ['photos']);
    }

    /**
     * Add method
     ** @param null $contentId
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($contentId = null)
    {
        $photo = $this->Photos->newEntity();
        if ($this->request->is('post')) {
            $photos = $this->request->data('photos');
            foreach ($photos as $p) {
                $this->request->data['photo'] = $p;
                $photo                        = $this->Photos->newEntity();
                $photo                        = $this->Photos->patchEntity($photo, $this->request->data);
                if ($this->Photos->save($photo)) {
                    $this->Flash->success('The photo has been saved.');
                } else {
                    $this->Flash->error('The photo could not be saved. Please, try again.');
                }
            }

            return $this->redirect(['action' => 'index', $contentId]);
        }

        if (empty($contentId)) {
            $this->Flash->error(__('Select the content first!'));

            return $this->redirect(['controller' => 'contents']);
        }
        $contents = $this->Photos->Contents->find('list', ['limit' => 200]);
        $this->set(compact('photo', 'contents', 'contentId'));
        $this->set('_serialize', ['photo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null, $contentId = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photos->get($id);
        if ($this->Photos->delete($photo)) {
            $this->Flash->success('The photo has been deleted.');
        } else {
            $this->Flash->error('The photo could not be deleted. Please, try again.');
        }

        return $this->redirect(['action' => 'index', $contentId]);
    }
}
