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
            <th scope="col">Actions</th>
            
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
                <td>
                    <a href="update.php?id=<?php echo $user['usersId'] ?>"
                        class="btn btn-outline-primary btn-sm">edit</a>
                    <form action="delete.php" method="POST" class='delete-form'>
                        <input type="hidden" name="id" value="<?php echo $user['usersId'] ?>">
                        <button 
                            type="submit" 
                            class="btn btn-outline-danger btn-sm"
                        >
                            delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>