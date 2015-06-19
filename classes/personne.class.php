<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 18/06/15
 * Time: 16:27
 */

    Class Personne{
        private  $idPersonne;
        private  $idDepartement;
        private  $idPromotion;
        private  $nom;
        private  $prenom;
        private  $adresse;
        private  $code_postal;
        private  $ville;
        private  $statut;
        private  $pseudo;
        private  $password;

        /**
         * @return mixed
         */
        public function getCp()
        {
            return $this->cp;
        }

        /**
         * @param mixed $cp
         */
        public function setCp($cp)
        {
            $this->cp = $cp;
        }

        /**
         * @return mixed
         */
        public function getAdresse()
        {
            return $this->adresse;
        }

        /**
         * @param mixed $adresse
         */
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
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
        public function getMdp()
        {
            return $this->mdp;
        }

        /**
         * @param mixed $mdp
         */
        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
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

        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getVille()
        {
            return $this->ville;
        }

        /**
         * @param mixed $ville
         */
        public function setVille($ville)
        {
            $this->ville = $ville;
        }

        /**
         * @return mixed
         */
        public function getPseudo()
        {
            return $this->pseudo;
        }

        /**
         * @param mixed $pseudo
         */
        public function setPseudo($pseudo)
        {
            $this->pseudo = $pseudo;
        }
    }
