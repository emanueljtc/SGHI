<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
 	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');

/**
 * index method
 *
 * @return void
 */
		 public function login() {
			 if ($this->request->is('post')) {
					 if ($this->Auth->login()) {
							 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash(__('Su Usuario o Contraseña es Incorrecta, Verifique e Intente de Nuevo.'), 'flash/error');
			 }
			}

			public function logout() {
				$this->Session->setFlash(__('Gracias por usar Medical Master, Vuelva Pronto.'), 'flash/success');
  			$this->redirect($this->Auth->logout());
			}
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	// 	public function beforeFilter() {
	//     parent::beforeFilter();
	//     // For CakePHP 2.1 and up
	//     $this->Auth->allow();
	// }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('El Usuario no Existe'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El Usuario ha sido guardado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no ha sido guardado. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->User->id = $id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('El Usuario no Existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El Usuario fue actualizado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no fue actualizado. Por Favor, Intente de Nuevo'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('El Usuario no Existe'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuario Eliminado'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario no Eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}


	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('initDB','add');

}
	//PARA ACTUALIZAR LOS PERMISOS DEBO RECORRER DESDE EL NAVEGADOR
	//ESTA FUNCION users/initDB
	public function initDB() {
    $group = $this->User->Group;


    // Acceso al grupo de administadores
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');



    // Acceso al Grupo de Secretari@s
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
		$this->Acl->deny($group, 'controllers/People/delete');
		$this->Acl->deny($group, 'controllers/Histories/delete');
    $this->Acl->deny($group, 'controllers/Diagnostics/add');
    $this->Acl->deny($group, 'controllers/Diagnostics/delete');
    $this->Acl->deny($group, 'controllers/Prescriptions/add');
    $this->Acl->deny($group, 'controllers/Prescriptions/delete');
    $this->Acl->deny($group, 'controllers/Studies/add');
    $this->Acl->deny($group, 'controllers/Studies/delete');

		$this->Acl->allow($group, 'controllers/People/index');
		$this->Acl->allow($group, 'controllers/People/add');
		$this->Acl->allow($group, 'controllers/People/view');
		$this->Acl->allow($group, 'controllers/People/edit');
		$this->Acl->allow($group, 'controllers/Histories/index');
		$this->Acl->allow($group, 'controllers/Histories/add');
    $this->Acl->allow($group, 'controllers/Diagnostics/index');
    $this->Acl->allow($group, 'controllers/Diagnostics/view');
    $this->Acl->allow($group, 'controllers/Prescriptions/index');
    $this->Acl->allow($group, 'controllers/Prescriptions/view');
    $this->Acl->allow($group, 'controllers/Studies/index');
    $this->Acl->allow($group, 'controllers/Studies/view');
    $this->Acl->allow($group, 'controllers/Citations/');
		$this->Acl->allow($group, 'controllers/Charges/');


    // Acceso a Doctores
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    //$this->acl->deny($group, 'controllers/Users/');


    $this->Acl->deny($group, 'controllers/People/delete');
		$this->Acl->deny($group, 'controllers/Histories/delete');
		$this->Acl->deny($group, 'controllers/Antecedents/delete');
		$this->Acl->deny($group, 'controllers/Charges/');
		$this->Acl->allow($group, 'controllers/People/index');
		$this->Acl->allow($group, 'controllers/People/add');
		$this->Acl->allow($group, 'controllers/People/view');
		$this->Acl->allow($group, 'controllers/People/edit');
		$this->Acl->allow($group, 'controllers/Histories/index');
		$this->Acl->allow($group, 'controllers/Histories/add');
		$this->Acl->allow($group, 'controllers/Histories/view');
		$this->Acl->allow($group, 'controllers/Histories/edit');
		$this->Acl->allow($group, 'controllers/Antecedents/index');
		$this->Acl->allow($group, 'controllers/Antecedents/add');
		$this->Acl->allow($group, 'controllers/Antecedents/edit');
		$this->Acl->allow($group, 'controllers/Antecedents/view');
    $this->Acl->allow($group, 'controllers/Antecedents/delete');
    $this->Acl->allow($group, 'controllers/AntecedentsGinecologycals/index');
    $this->Acl->allow($group, 'controllers/AntecedentsGinecologycals/add');
    $this->Acl->allow($group, 'controllers/AntecedentsGinecologycals/edit');
    $this->Acl->allow($group, 'controllers/AntecedentsGinecologycals/view');
    $this->Acl->allow($group, 'controllers/AntecedentsGinecologycals/delete');
    $this->Acl->allow($group, 'controllers/Diagnostics');
		$this->Acl->allow($group, 'controllers/Prescriptions');
		$this->Acl->allow($group, 'controllers/Indications');
		$this->Acl->allow($group, 'controllers/Studies/index');
    $this->Acl->allow($group, 'controllers/Studies/add');
    $this->Acl->allow($group, 'controllers/Studies/view');
    $this->Acl->allow($group, 'controllers/Studies/edit');
    $this->Acl->allow($group, 'controllers/Citations/index');
    $this->Acl->allow($group, 'controllers/Citations/view');
    $this->Acl->allow($group, 'controllers/Charges/index');
		$this->Acl->allow($group, 'controllers/Charges/view');


    // allow basic users to log out
    $this->Acl->allow($group, 'controllers/users/logout');



    // si muestra este mensaje  no hubo error en obtener los nuevos permisos

    $this->Session->setFlash(__('Permisos Actualizados'), 'flash/success');
    $this->redirect(array('action' => 'index'));
    exit;
}
}
