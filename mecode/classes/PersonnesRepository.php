<?php
include_once 'personnes.php';
include_once 'Repository.php';


class PersonnesRepository extends Repository
{   private $nom;
    private $prenom;
    private $age;
    private $section;
    public function __construct($nom = '', $prenom = '', $age = 0, $section = '')
    {   parent::__construct('personnes');
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->section = $section;

    }

}
