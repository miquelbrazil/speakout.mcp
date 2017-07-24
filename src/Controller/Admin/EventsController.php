<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\FrozenTime;
use Cake\Utility\Text;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeFilter( Event $event ) {
        parent::beforeFilter( $event );
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {

        $events = $this->Events->find()
            ->contain([ 'Users' ])
            ->order([
                'Events.date' => 'desc'
            ])
            ->all();

        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view( $id = null ) {
        $event = $this->Events->get($id, [
            'contain' => [ 'Users', 'Media' ]
        ]);

        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }
}
