<?php

class Synergy_Weblog_IndexController extends Mage_Core_Controller_Front_Action {        

public function testModelAction() {
    $params = $this->getRequest()->getParams();
    $blogpost = Mage::getModel('weblog/blogpost');
    echo("Loading the blogpost with an ID of ".$params['id']);
    $blogpost->load($params['id']);     
    $data = $blogpost->getData();
    var_dump($data);    
}
    
    
	
	public function indexAction() {

        echo 'Hello Index!';

    }

	public function goodbyeAction() {
	    echo 'Goodbye World!';
	}
	
	public function paramsAction() {
	    echo '<dl>';            
	    foreach($this->getRequest()->getParams() as $key=>$value) {
	        echo '<dt><strong>Param: </strong>'.$key.'</dt>';
	        echo '<dt><strong>Value: </strong>'.$value.'</dt>';
	    }
	    echo '</dl>';
	}
}