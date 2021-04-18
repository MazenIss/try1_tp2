<?php
include_once 'personnes.php';
include_once 'Repository.php';


class PersonnesRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('personnes');
    }

}
