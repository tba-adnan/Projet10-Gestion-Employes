<?php
    include 'config.php';
    include 'userHandler.php';
    $userHandler = new UserAdd(); $data = $userHandler->getAlluserss($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div>
        <table>
            <tr>
               <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Département</th>
                <th>Salaire</th>
                <th>fonction</th>
                <th>photo</th> 
            </tr>

            <?php
                    foreach($data as $person){
            ?>

            <tr>
                <td><?= $person['id']?></td>
                <td><?= $person['fname']?></td>
                <td><?= $person['lname']?></td>
                <td><?= $person['bdate']?></td>
                <td><?= $person['dep']?></td>
                <td><?= $person['salary']?></td>
                <td><?= $person['func']?></td>
                <td><?= $person['picture']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $person['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $person['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
<a href="insert.php">add Entries</a>
</html>