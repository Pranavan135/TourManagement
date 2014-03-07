<?php
App::uses('AppController', 'Controller');
/**
 * RouteTowns Controller
 *
 * @property RouteTown $RouteTown
 * @property PaginatorComponent $Paginator
 */
class RouteTownsController extends AppController {

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
		$this->RouteTown->recursive = 0;
		$this->set('routeTowns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RouteTown->exists($id)) {
			throw new NotFoundException(__('Invalid route town'));
		}
		$options = array('conditions' => array('RouteTown.' . $this->RouteTown->primaryKey => $id));
		$this->set('routeTown', $this->RouteTown->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RouteTown->create();
			if ($this->RouteTown->save($this->request->data)) {
				$this->Session->setFlash(__('The route town has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route town could not be saved. Please, try again.'));
			}
		}
		$routes = $this->RouteTown->Route->find('list');
		$towns = $this->RouteTown->Town->find('list');
		$this->set(compact('routes', 'towns'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RouteTown->exists($id)) {
			throw new NotFoundException(__('Invalid route town'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RouteTown->save($this->request->data)) {
				$this->Session->setFlash(__('The route town has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route town could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RouteTown.' . $this->RouteTown->primaryKey => $id));
			$this->request->data = $this->RouteTown->find('first', $options);
		}
		$routes = $this->RouteTown->Route->find('list');
		$towns = $this->RouteTown->Town->find('list');
		$this->set(compact('routes', 'towns'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RouteTown->id = $id;
		if (!$this->RouteTown->exists()) {
			throw new NotFoundException(__('Invalid route town'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RouteTown->delete()) {
			$this->Session->setFlash(__('The route town has been deleted.'));
		} else {
			$this->Session->setFlash(__('The route town could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
