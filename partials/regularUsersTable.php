<?php 

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$users = getAllUsers($conn);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>            
        </tr>
    </thead>
    <tbody>
    
        <?php foreach ($users as $i => $user):  ?>      
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>
                <td><?php echo $user['usersId'] ?></td>
                <td><?php echo $user['usersName'] ?></td>
                <td><?php echo $user['usersEmail'] ?></td>
                <td><?php echo $user['usersUsertype'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>