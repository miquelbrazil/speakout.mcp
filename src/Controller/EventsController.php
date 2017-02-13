<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * MobilizerEvents Controller
 *
 * @property \App\Model\Table\MobilizerEventsTable $MobilizerEvents
 */
class EventsController extends AppController {

    public function beforeFilter( Event $event ) {

        $this->viewBuilder()->layout( 'standard' );

        $this->set( 'user' , $this->Auth->user( 'username' ) );
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {

        $this->viewBuilder()->layout( 'standard' );

        $mobilizerEvents = $this->paginate($this->Events);

        $this->set(compact('mobilizerEvents'));
        $this->set('_serialize', ['mobilizerEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Mobilizer Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view( $id = null ) {

        if ( !$id ) {

            $this->set( 'event' , 'Mock Event' );

        } else {

            $mobilizerEvent = $this->MobilizerEvents->get($id, [
                'contain' => []
            ]);

            $this->set('mobilizerEvent', $mobilizerEvent);
            $this->set('_serialize', ['mobilizerEvent']);
        }

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mobilizerEvent = $this->MobilizerEvents->newEntity();
        if ($this->request->is('post')) {
            $mobilizerEvent = $this->MobilizerEvents->patchEntity($mobilizerEvent, $this->request->data);
            if ($this->MobilizerEvents->save($mobilizerEvent)) {
                $this->Flash->success(__('The mobilizer event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mobilizer event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mobilizerEvent'));
        $this->set('_serialize', ['mobilizerEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mobilizer Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mobilizerEvent = $this->MobilizerEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mobilizerEvent = $this->MobilizerEvents->patchEntity($mobilizerEvent, $this->request->data);
            if ($this->MobilizerEvents->save($mobilizerEvent)) {
                $this->Flash->success(__('The mobilizer event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mobilizer event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mobilizerEvent'));
        $this->set('_serialize', ['mobilizerEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mobilizer Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mobilizerEvent = $this->MobilizerEvents->get($id);
        if ($this->MobilizerEvents->delete($mobilizerEvent)) {
            $this->Flash->success(__('The mobilizer event has been deleted.'));
        } else {
            $this->Flash->error(__('The mobilizer event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
