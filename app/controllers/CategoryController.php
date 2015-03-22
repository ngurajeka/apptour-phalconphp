<?php

class CategoryController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->title = "Kategori";
    	$this->view->categories = Category::find();
    	$this->view->appbar = true;
    }

    public function showAction($categoryUrlName)
    {
    	$category = Category::findFirst("urlname = '$categoryUrlName'");
    	$this->view->title = $category->name;
    	$this->view->category = $category;
    	$this->view->appbar = true;
    	$this->view->places = Places::find("category = '$category->id'");
    }

}

