<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 9:30 PM
 */
?>
<?php
echo('
<legend>Users List</legend>
    <table class="table table-bordered">
        <thead class="success">
            <td>S#</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Address</td>
            <td>Status</td>
            <td>Edit</td>
        </thead>
        <tr class="success">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="index.php?page=user_form&user_id=#"><label class="badge">Edit</label> </a></td>
        </tr>
    </table>
');?>