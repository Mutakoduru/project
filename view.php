<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=chistar', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $pdo->query("SELECT * FROM user where id='$pid'");
    while ($user = $result->fetch()) {
        ?> 
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['firstname'] ?></td>
            <td><?php echo $user['lastname'] ?></td>
            <td><?php echo $user['gender'] ?></td>
            <td><?php echo $user['bloodgroup'] ?></td>
            <td><?php echo $user['phone'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['city'] ?></td>
        </tr>
        <?php
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}