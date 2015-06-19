<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/06/15
 * Time: 18:39
 */

class Notes {
    private $idEpreuve;
    private $idPersonne;
    private $note;

    public function Notes(){

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


}