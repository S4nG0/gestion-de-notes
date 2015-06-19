<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 18/06/15
 * Time: 16:31
 */

    Class UniteEnseignement{
        private  $idUE;
        private  $idDepartement;
        private  $nom;
        private  $code;

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