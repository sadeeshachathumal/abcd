<?php
include ("connection.php");

$rs = Database::search("SELECT * FROM `user` WHERE `user_type_id`='2'");

$row = $rs->num_rows;

for ($i = 0; $i < $row; $i++) {
    $data = $rs->fetch_assoc();
    ?>
    <tr>
        <th scope="row"><?php echo ($data["id"]); ?></th>
        <td><?php echo ($data["fname"]); ?></td>
        <td><?php echo ($data["lname"]); ?></td>
        <td><?php echo ($data["email"]); ?></td>
        <td><?php echo ($data["mobile"]); ?></td>
        <td><?php
        if ($data["status"] == 1) {
            echo ("Active");
        } else {
            echo ("Inactive");
        }
        ?></td>
    </tr>
    <?php
}

?>