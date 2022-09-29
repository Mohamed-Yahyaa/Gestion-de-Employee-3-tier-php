<?php
 include 'Student.php';
 include 'Connection.php';
class GestionStudent{


    
    public function AddStudent($student){

        $lastName = $student->getLastName();
        $firstName = $student->getFirstName();
        $dateOfBirth = $student->getDateOfBirth();
        // requête SQL
        $insertRow="INSERT INTO Employee(LastName, FirstName, DateOfBirth) 
                                VALUES('$LastName', '$FirstName', '$DateOfBirth')";

        mysqli_query(getConnection(), $insertRow);
    }

    

    public function GetStudent(){
        $SelctRow = 'SELECT id, LastName, FirstName, DateOfBirth FROM Employee';
        $query = mysqli_query(getConnection() ,$SelctRow);
        $student_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($student_data as $value_Data) {
            $student = new Employe();
            $student->setId($value_Data['id']);
            $student->setLastName($value_Data['LastName']);
            $student->setFirstName ($value_Data['FirstName']);
            $student->setDateOfBirth ($value_Data['DateOfBirth']);
            array_push($TableData, $student);
        }
          return $TableData;
    }

// pour afficher dans input
    public function RechercherParId($id){
        $SelectRowId = "SELECT * FROM Employee WHERE id= $id";
        $result = mysqli_query(getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $student_data = mysqli_fetch_assoc($result);
        $student = new Employe();
        $student->setId($student_data['id']);
        $student->setLastName($student_data['LastName']);
        $student->setFirstName($student_data['FirstName']);
        $student->setDateOfBirth ($student_data['DateOfBirth']);
        
        return $student;
    }

    // public function Supprimer($id){
    //     $RowDelet = "DELETE FROM personnes WHERE id= '$id'";
    //     mysqli_query(getConnection(), $RowDelet);
    // }

    // public function Modifier($id,$nom,$prenom,$date_de_naissance){
    //     // Requête SQL
    //     $RowUpdate = "UPDATE personnes SET 
    //     Nom='$nom', Prenom='$prenom', Date_de_naissance='$date_de_naissance'
    //     WHERE id=$id";

    //     mysqli_query(getConnection(),$RowUpdate);

    // }

}
?>