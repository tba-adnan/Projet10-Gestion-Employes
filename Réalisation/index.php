<?php
    include 'config.php';
    include 'userHandler.php';
    $userHandler = new UserAdd(); $data = $userHandler->getAlluserss($conn);
?>


<!DOCTYPE html>
<html lang="en">

<body>
    <!--  -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="css/costum.css" </link> 
        <title></title>
    </head>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">off</h4>
                <span class="text-muted">off</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <!--  -->
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Matricule : </th>
                    <th scope="col">Nom : </th>
                    <th scope="col">Prénom : </th>
                    <th>Date de naissance : </th>
                    <th>Département : </th>
                    <th>Salaire : </th>
                    <th>fonction : </th>
                    <th>photo : </th>
            </thead>
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
                    <a class="btn btn-success" href="edit.php?id=<?php echo $person['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $person['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
<a class="btn btn-primary" href="insert.php">Add Entries</a>
<a class="btn btn-dark" href="search.php">Chercher</a>
</html>