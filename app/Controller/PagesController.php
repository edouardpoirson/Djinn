<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	public $uses = array('Post');
	
	function menu(){
		$pages = $this->Post->find('all', array(
		'conditions'	=> array('type' => 'page','online' => 1),
		'field'		=> array('id', 'slug', 'name')
		));
		return $pages;
	}
	
	function show($id = null, $slug = null){
            if (!$id)
                throw new NotFoundException('Aucune page ne correspond à cet ID');
            
            $page = $this->Post->find('first', array(
                'conditions'    => array('id' => $id)
            ));
            if(empty($page))
                throw new NotFoundException('Aucune page ne correspond à cet ID');
            if($slug != $page['Post']['slug'])
                $this->redirect($page['Post']['link'], 301);
            $d['page'] = current($page);
            $this->set($d);
        }
        
        function admin_index(){
            
        }
}
