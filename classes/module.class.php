<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 18/06/15
 * Time: 16:36
 */

   Class Module{
       private  $idModule;
       private  $nom;
       private  $code;
       private  $coefficient;
       private  $idUE;

       /**
        * @return mixed
        */
       public function getCoef()
       {
           return $this->coef;
       }

       /**
        * @param mixed $coef
        */
       public function setCoef($coef)
       {
           $this->coef = $coef;
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
       public function getNom()
       {
           return $this->nom;
       }

       /**
        * @param mixed $nom
        */
       public function setNom($nom)
       {
           $this->nom = $nom;
       }
   }