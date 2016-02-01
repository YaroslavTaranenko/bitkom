<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Baskets Controller
 *
 * @property \App\Model\Table\BasketsTable $Baskets */
class BasketsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products', 'ProductPrices', 'Orders']
        ];
        $this->set('baskets', $this->paginate($this->Baskets));
        $this->set('_serialize', ['baskets']);
    }

    /**
     * View method
     *
     * @param string|null $id Basket id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $basket = $this->Baskets->get($id, [
            'contain' => ['Users', 'Products', 'ProductPrices', 'Orders']
        ]);
        $this->set('basket', $basket);
        $this->set('_serialize', ['basket']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $basket = $this->Baskets->newEntity();
        if ($this->request->is('post')) {
            $basket = $this->Baskets->patchEntity($basket, $this->request->data);
            if ($this->Baskets->save($basket)) {
                $this->Flash->success(__('The basket has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The basket could not be saved. Please, try again.'));
            }
        }
        $users = $this->Baskets->Users->find('list', ['limit' => 200]);
        $products = $this->Baskets->Products->find('list', ['limit' => 200]);
        $productPrices = $this->Baskets->ProductPrices->find('list', ['limit' => 200]);
        $orders = $this->Baskets->Orders->find('list', ['limit' => 200]);
        $this->set(compact('basket', 'users', 'products', 'productPrices', 'orders'));
        $this->set('_serialize', ['basket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Basket id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $basket = $this->Baskets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $basket = $this->Baskets->patchEntity($basket, $this->request->data);
            if ($this->Baskets->save($basket)) {
                $this->Flash->success(__('The basket has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The basket could not be saved. Please, try again.'));
            }
        }
        $users = $this->Baskets->Users->find('list', ['limit' => 200]);
        $products = $this->Baskets->Products->find('list', ['limit' => 200]);
        $productPrices = $this->Baskets->ProductPrices->find('list', ['limit' => 200]);
        $orders = $this->Baskets->Orders->find('list', ['limit' => 200]);
        $this->set(compact('basket', 'users', 'products', 'productPrices', 'orders'));
        $this->set('_serialize', ['basket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Basket id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $basket = $this->Baskets->get($id);
        if ($this->Baskets->delete($basket)) {
            $this->Flash->success(__('The basket has been deleted.'));
        } else {
            $this->Flash->error(__('The basket could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
