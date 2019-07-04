<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Products Controller
 *
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    private $Products;
    public function initialize()
    {
        parent::initialize();  
        $this->Products = TableRegistry::getTableLocator()->get('Products');     
    }

    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    public function view($id = null)
    {
        $product = $this->Products->get($id);

        $this->set(compact('product'));
    }

    public function add()
    {   
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {

            $request = $this->request->getData();
            $validation = $this->Products->newEntity($request);
            if($validation->getErrors()){
                
            } 
            $request['user_id'] = $this->Auth->user('id');
            $product = $this->Products->patchEntity($product, $request);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    public function edit($id = null)
    {
        $product = $this->Products->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // public function validationDefault(Validator $validator)
    // {
    //     $validator
    //         ->notEmpty('name',  __('You need to provide a name'))
    //         ->notEmpty('price',  __('You need to provide a price'))
    //         ->notEmpty('quantity',  __('You need to provide a quantity'))
    //         ->notEmpty('body',  __('You need to provide a body'));

    //     return $validator;
    // }
}
