<?php
    // include "Database/GestionStudent.php";
    include ("business/StudentManager.php");
    // Trouver tous les employés depuis la base de données 
    $gestionStudent = new StudentFunction();
    $data = $StudentFunction->GetAllStudent();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des employés</title>
</head>
<body>
    <div>
        <a href="ajouter.php">Ajouter un employé</a>
        <table>
            <tr>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Date Of Birth</th>
                <th></th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getLastName() ?></td>
                <td><?= $value->getFirstName() ?></td>
                <td><?= $value->getDateOfBirth() ?></td>
                <td>
                    <a href="editer.php?id=<?php echo $value->getId() ?>">Éditer</a>
                    <a href="supprimer.php?id=<?php echo $value->getId() ?>">Supprime</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>