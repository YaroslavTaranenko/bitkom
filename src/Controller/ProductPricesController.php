<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductPrices Controller
 *
 * @property \App\Model\Table\ProductPricesTable $ProductPrices */
class ProductPricesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'UserGroups']
        ];
        $this->set('productPrices', $this->paginate($this->ProductPrices));
        $this->set('_serialize', ['productPrices']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Price id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productPrice = $this->ProductPrices->get($id, [
            'contain' => ['Products', 'UserGroups', 'Baskets']
        ]);
        $this->set('productPrice', $productPrice);
        $this->set('_serialize', ['productPrice']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productPrice = $this->ProductPrices->newEntity();
        if ($this->request->is('post')) {
            $productPrice = $this->ProductPrices->patchEntity($productPrice, $this->request->data);
            if ($this->ProductPrices->save($productPrice)) {
                $this->Flash->success(__('The product price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product price could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductPrices->Products->find('list', ['limit' => 200]);
        $userGroups = $this->ProductPrices->UserGroups->find('list', ['limit' => 200]);
        $this->set(compact('productPrice', 'products', 'userGroups'));
        $this->set('_serialize', ['productPrice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Price id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productPrice = $this->ProductPrices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productPrice = $this->ProductPrices->patchEntity($productPrice, $this->request->data);
            if ($this->ProductPrices->save($productPrice)) {
                $this->Flash->success(__('The product price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product price could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductPrices->Products->find('list', ['limit' => 200]);
        $userGroups = $this->ProductPrices->UserGroups->find('list', ['limit' => 200]);
        $this->set(compact('productPrice', 'products', 'userGroups'));
        $this->set('_serialize', ['productPrice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Price id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productPrice = $this->ProductPrices->get($id);
        if ($this->ProductPrices->delete($productPrice)) {
            $this->Flash->success(__('The product price has been deleted.'));
        } else {
            $this->Flash->error(__('The product price could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
