<?php

class PlacesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
	
    }
	
    public function showAction($placeUrlName){
	    $place = Places::findFirst("urlname ='$placeUrlName'");
	    $this->view->title = $place->name;
	    $category = Category::findFirst("id = '$place->id'");
	    $this->view->category = $category;
	    $this->view->appbar = true;
	    $this->view->place = $place;
    }
}

