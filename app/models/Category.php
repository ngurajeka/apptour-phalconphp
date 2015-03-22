<?php

class Category extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $icon;

    /**
     *
     * @var string
     */
    public $urlname;

    /**
     *
     * @var integer
     */
    public $total;

    /**
     *
     * @var string
     */
    public $lastimages;

    /**
     *
     * @var string
     */
    public $updated;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'description' => 'description', 
            'icon' => 'icon', 
            'urlname' => 'urlname', 
            'total' => 'total', 
            'lastimages' => 'lastimages', 
            'updated' => 'updated'
        );
    }

}
