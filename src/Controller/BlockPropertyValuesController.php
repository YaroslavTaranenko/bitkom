<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlockPropertyValues Controller
 *
 * @property \App\Model\Table\BlockPropertyValuesTable $BlockPropertyValues */
class BlockPropertyValuesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BlockProperties', 'Products']
        ];
        $this->set('blockPropertyValues', $this->paginate($this->BlockPropertyValues));
        $this->set('_serialize', ['blockPropertyValues']);
    }

    /**
     * View method
     *
     * @param string|null $id Block Property Value id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blockPropertyValue = $this->BlockPropertyValues->get($id, [
            'contain' => ['BlockProperties', 'Products']
        ]);
        $this->set('blockPropertyValue', $blockPropertyValue);
        $this->set('_serialize', ['blockPropertyValue']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blockPropertyValue = $this->BlockPropertyValues->newEntity();
        if ($this->request->is('post')) {
            $blockPropertyValue = $this->BlockPropertyValues->patchEntity($blockPropertyValue, $this->request->data);
            if ($this->BlockPropertyValues->save($blockPropertyValue)) {
                $this->Flash->success(__('The block property value has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The block property value could not be saved. Please, try again.'));
            }
        }
        $blockProperties = $this->BlockPropertyValues->BlockProperties->find('list', ['limit' => 200]);
        $products = $this->BlockPropertyValues->Products->find('list', ['limit' => 200]);
        $this->set(compact('blockPropertyValue', 'blockProperties', 'products'));
        $this->set('_serialize', ['blockPropertyValue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Block Property Value id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blockPropertyValue = $this->BlockPropertyValues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blockPropertyValue = $this->BlockPropertyValues->patchEntity($blockPropertyValue, $this->request->data);
            if ($this->BlockPropertyValues->save($blockPropertyValue)) {
                $this->Flash->success(__('The block property value has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The block property value could not be saved. Please, try again.'));
            }
        }
        $blockProperties = $this->BlockPropertyValues->BlockProperties->find('list', ['limit' => 200]);
        $products = $this->BlockPropertyValues->Products->find('list', ['limit' => 200]);
        $this->set(compact('blockPropertyValue', 'blockProperties', 'products'));
        $this->set('_serialize', ['blockPropertyValue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Block Property Value id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blockPropertyValue = $this->BlockPropertyValues->get($id);
        if ($this->BlockPropertyValues->delete($blockPropertyValue)) {
            $this->Flash->success(__('The block property value has been deleted.'));
        } else {
            $this->Flash->error(__('The block property value could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
