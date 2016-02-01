<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlockProperties Controller
 *
 * @property \App\Model\Table\BlockPropertiesTable $BlockProperties */
class BlockPropertiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Blocks']
        ];
        $this->set('blockProperties', $this->paginate($this->BlockProperties));
        $this->set('_serialize', ['blockProperties']);
    }

    /**
     * View method
     *
     * @param string|null $id Block Property id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blockProperty = $this->BlockProperties->get($id, [
            'contain' => ['Blocks']
        ]);
        $this->set('blockProperty', $blockProperty);
        $this->set('_serialize', ['blockProperty']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blockProperty = $this->BlockProperties->newEntity();
        if ($this->request->is('post')) {
            $blockProperty = $this->BlockProperties->patchEntity($blockProperty, $this->request->data);
            if ($this->BlockProperties->save($blockProperty)) {
                $this->Flash->success(__('The block property has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The block property could not be saved. Please, try again.'));
            }
        }
        $blocks = $this->BlockProperties->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('blockProperty', 'blocks'));
        $this->set('_serialize', ['blockProperty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Block Property id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blockProperty = $this->BlockProperties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blockProperty = $this->BlockProperties->patchEntity($blockProperty, $this->request->data);
            if ($this->BlockProperties->save($blockProperty)) {
                $this->Flash->success(__('The block property has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The block property could not be saved. Please, try again.'));
            }
        }
        $blocks = $this->BlockProperties->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('blockProperty', 'blocks'));
        $this->set('_serialize', ['blockProperty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Block Property id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blockProperty = $this->BlockProperties->get($id);
        if ($this->BlockProperties->delete($blockProperty)) {
            $this->Flash->success(__('The block property has been deleted.'));
        } else {
            $this->Flash->error(__('The block property could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
