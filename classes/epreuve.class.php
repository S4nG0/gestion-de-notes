<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 18/06/15
 * Time: 16:39
 */

    Class Epreuve {
        private  $id;
        private  $libelle;
        private  $date;
        private  $coef;

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
        public function getDate()
        {
            return $this->date;
        }

        /**
         * @param mixed $date
         */
        public function setDate($date)
        {
            $this->date = $date;
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
        public function getLibelle()
        {
            return $this->libelle;
        }

        /**
         * @param mixed $libelle
         */
        public function setLibelle($libelle)
        {
            $this->libelle = $libelle;
        }
    }