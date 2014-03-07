<?php
App::uses('AppController', 'Controller');
/**
 * Coaches Controller
 *
 * @property Coach $Coach
 * @property PaginatorComponent $Paginator
 */
class CoachesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Coach->recursive = 0;
		$this->set('coaches', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coach->exists($id)) {
			throw new NotFoundException(__('Invalid coach'));
		}
		$options = array('conditions' => array('Coach.' . $this->Coach->primaryKey => $id));
		$this->set('coach', $this->Coach->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coach->create();
			if ($this->Coach->save($this->request->data)) {
				$this->Session->setFlash(__('The coach has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coach could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Coach->exists($id)) {
			throw new NotFoundException(__('Invalid coach'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coach->save($this->request->data)) {
				$this->Session->setFlash(__('The coach has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coach could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coach.' . $this->Coach->primaryKey => $id));
			$this->request->data = $this->Coach->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Coach->id = $id;
		if (!$this->Coach->exists()) {
			throw new NotFoundException(__('Invalid coach'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coach->delete()) {
			$this->Session->setFlash(__('The coach has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coach could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
