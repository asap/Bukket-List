<?php
class BukketListsController extends AppController {
    public $name = 'BukketLists';
    public $helpers = array('Html', 'Form');
		public $components = array('Session');
		
		public function index() {
		        $this->set('bukket_lists', $this->BukketList->find('all'));
		    }
		
		public function view($id = null) {
		        $this->BukketList->id = $id;
		        $this->set('bukket_lists', $this->BukketList->read());
		    }
		
    public function add() {
        if ($this->request->is('post')) { //changed the bukket_list to post because the method we are doing is a post - was.
            if ($this->BukketList->save($this->request->data)) {
            	$this->request->data;
                $this->Session->setFlash('Your Bukket List has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Bukket List.');
            }
        }
    }

		public function edit($id = null) {
		    $this->BukketList->id = $id;
		    if ($this->request->is('get')) {
		        $this->request->data = $this->BukketList->read();
		    } else {
		        if ($this->BukketList->save($this->request->data)) {
		            $this->Session->setFlash('Your post has been updated.');
		            $this->redirect(array('action' => 'index'));
		        } else {
		            $this->Session->setFlash('Unable to update your Bukket List.');
		        }
		    }
			}
			
			public function delete($id) {
			    if ($this->request->is('get')) {
			        throw new MethodNotAllowedException();
			    }
			    if ($this->BukketList->delete($id)) {
			        $this->Session->setFlash('The bucket list with id: ' . $id . ' has been deleted.');
			        $this->redirect(array('action' => 'index'));
			    }
			}
}