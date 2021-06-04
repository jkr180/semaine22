<?php
class PersonnageDefault
{
// Attributs
private $nom;
private $prenom;
private $age;
private $sexe;

public function __construct() 
{
$this->nom;
$this->prenom;
$this->age;
$this->sexe;

} 
public function getNom()
{
    return $this->nom;
}
public function setNom($nom)
{
    return $this->nom;
}
public function getPrenom()
{
    return $this->prenom;
}
public function setPrenom($prenom)
{
    return $this->prenom;
}
public function getAge()
{
    return $this->age;
}
public function setAge($age)
{
    return $this->age;
}
public function getSexe()
{
    return $this->sexe;
}
public function setSexe($sexe)
{
    return $this->sexe;
}
}
$perso = new PersonnageDefault("Loper","Dave","18ans","masculin")
?>


