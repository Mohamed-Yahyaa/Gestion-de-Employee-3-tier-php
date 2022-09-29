<?php


include("Database/GestionStudent.php");
class StudentFunction{
    private $gestionStudent = null;


    public function __construct(){
        $this->gestionStudent = new GestionStudent();
    } 
    

    public function GetAllStudent(){
       
        return $this->gestionStudent->afficher();
    }
    public function AddStudent($student){
       
        return $this->gestionStudent->Ajouter($student);
    }
    // public function EditEmploye($id){
       
    //     return $gestionEmploye->RechercherParId($id);
    // }

}
?>