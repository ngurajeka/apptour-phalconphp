<?php

class Places extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $category;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $images;

    /**
     *
     * @var string
     */
    public $urlname;

    /**
     *
     * @var integer
     */
    public $gallery;

    /**
     *
     * @var string
     */
    public $longitude;

    /**
     *
     * @var string
     */
    public $latitude;

    /**
     *
     * @var string
     */
    public $added_date;

    /**
     *
     * @var string
     */
    public $added_time;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'category' => 'category', 
            'name' => 'name', 
            'address' => 'address', 
            'description' => 'description', 
            'images' => 'images', 
            'urlname' => 'urlname', 
            'gallery' => 'gallery', 
            'longitude' => 'longitude', 
            'latitude' => 'latitude', 
            'added_date' => 'added_date', 
            'added_time' => 'added_time'
        );
    }

}
