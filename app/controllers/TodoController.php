<?php

namespace controllers;

use Ubiquity\utils\http\URequest;
use models\TodoItem;
use services\TodoSessionLoader;

/**
 * Controller TodoController
 *
 * @property \Ajax\php\ubiquity\JsUtils $jquery
 */
class TodoController extends ControllerBase {

	/**
	 *
	 * @autowired
	 * @var TodoSessionLoader
	 */
	private $loader;
	/**
	 *
	 * @param \services\TodoSessionLoader $loader
	 */
	public function setLoader($loader) {
		$this->loader = $loader;
	}
	private function displayItems() {
		$items = $this->loader->all ();
		$dt = $this->jquery->semantic ()->dataTable ( 'dtItems', TodoItem::class, $items );
		$dt->setFields ( [ 
				'caption'
		] );
		$bt = $dt->addDeleteButton ();
		/*
		 * $dt->setValueFunction ( 'caption', function ($va, $instance) {
		 * $lbl = new HtmlLabel ( '', $v );
		 * $lbl->addIcon ( 'user' );
		 * $lbl->setProperty ( 'data-truc', $instance->getcaption () );
		 * } );
		 * $dt->fieldAsLabel ( 'caption', 'tag' );
		 * $dt->setIdentifier ( 'getcaption' );
		 */
		$dt->setEdition ();
		$this->jquery->getOnClick ( '._delete', 'delete', '#response', [ 
				'hasLoader' => 'internal',
				'attr' => 'data-ajax'
		] );
	}

	/**
	 *
	 * @param string $id
	 * @get('delete/{id}')
	 */
	public function delete(string $id) {
		$this->loader->remove ( $id );
		$msg = $this->jquery->semantic ()->htmlMessage ( '', 'Item supprimé' );
		$this->_index ( $msg );
	}

	/**
	 *
	 * @route('_default')
	 */
	public function index() {
		$this->_index ();
	}

	/**
	 *
	 * @get("add")
	 */
	public function add() {
		$this->jquery->postFormOnClick ( '#btValidate', '/add', 'frmItem', 'body', [ 
				'hasLoader' => 'internal'
		] );
		if (URequest::isAjax ()) {
			$this->jquery->renderView ( 'TodoController/add.html' );
		} else {
			$this->_index ( $this->jquery->renderView ( 'TodoController/add.html', [ ], true ) );
		}
	}

	/**
	 *
	 * @post("add")
	 */
	public function submit() {
		$item = new TodoItem ();
		$item->setCaption ( URequest::post ( 'caption', 'no caption' ) );
		$this->loader->add ( $item );
		$msg = $this->jquery->semantic ()->htmlMessage ( '', 'Item ajouté' );
		$this->_index ( $msg );
	}
	private function _index($response = '') {
		$this->jquery->getHref ( 'a', '', [ 
				'hasLoader' => 'internal'
		] );
		$this->displayItems ();

		$this->jquery->renderView ( 'TodoController/index.html', [ 
				'response' => $response
		] );
	}

	/**
	 *
	 * @get("clear")
	 */
	public function clear() {
		$this->loader->clear ();
		$msg = $this->jquery->semantic ()->htmlMessage ( 'clearMsg', 'Liste d\'items vidée', 'info' );
		$msg->addIcon ( 'info' );
		$this->_index ( $msg );
	}
}








