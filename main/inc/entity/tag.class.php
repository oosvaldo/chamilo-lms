<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class Tag extends \Entity
{
    /**
     * @return \Entity\Repository\TagRepository
     */
     public static function repository(){
        return \Entity\Repository\TagRepository::instance();
    }

    /**
     * @return \Entity\Tag
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $tag
     */
    protected $tag;

    /**
     * @var integer $field_id
     */
    protected $field_id;

    /**
     * @var integer $count
     */
    protected $count;


    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set tag
     *
     * @param string $value
     * @return Tag
     */
    public function set_tag($value)
    {
        $this->tag = $value;
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function get_tag()
    {
        return $this->tag;
    }

    /**
     * Set field_id
     *
     * @param integer $value
     * @return Tag
     */
    public function set_field_id($value)
    {
        $this->field_id = $value;
        return $this;
    }

    /**
     * Get field_id
     *
     * @return integer 
     */
    public function get_field_id()
    {
        return $this->field_id;
    }

    /**
     * Set count
     *
     * @param integer $value
     * @return Tag
     */
    public function set_count($value)
    {
        $this->count = $value;
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function get_count()
    {
        return $this->count;
    }
}