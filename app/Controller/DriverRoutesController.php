<?php
App::uses('AppController', 'Controller');
/**
 * DriverRoutes Controller
 *
 * @property DriverRoute $DriverRoute
 * @property PaginatorComponent $Paginator
 */
class DriverRoutesController extends AppController {

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
		$this->DriverRoute->recursive = 0;
		$this->set('driverRoutes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DriverRoute->exists($id)) {
			throw new NotFoundException(__('Invalid driver route'));
		}
		$options = array('conditions' => array('DriverRoute.' . $this->DriverRoute->primaryKey => $id));
		$this->set('driverRoute', $this->DriverRoute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DriverRoute->create();
			if ($this->DriverRoute->save($this->request->data)) {
				$this->Session->setFlash(__('The driver route has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver route could not be saved. Please, try again.'));
			}
		}
		$routes = $this->DriverRoute->Route->find('list');
		$drivers = $this->DriverRoute->Driver->find('list');
		$this->set(compact('routes', 'drivers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DriverRoute->exists($id)) {
			throw new NotFoundException(__('Invalid driver route'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DriverRoute->save($this->request->data)) {
				$this->Session->setFlash(__('The driver route has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver route could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DriverRoute.' . $this->DriverRoute->primaryKey => $id));
			$this->request->data = $this->DriverRoute->find('first', $options);
		}
		$routes = $this->DriverRoute->Route->find('list');
		$drivers = $this->DriverRoute->Driver->find('list');
		$this->set(compact('routes', 'drivers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DriverRoute->id = $id;
		if (!$this->DriverRoute->exists()) {
			throw new NotFoundException(__('Invalid driver route'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DriverRoute->delete()) {
			$this->Session->setFlash(__('The driver route has been deleted.'));
		} else {
			$this->Session->setFlash(__('The driver route could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
