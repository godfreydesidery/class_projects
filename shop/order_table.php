<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 5:53 PM
 */ ?>
<?php
echo('

<legend>Order List</legend>
<table class="table table-bordered">
    <thead class="success">
        <td>S#</td>
        <td>Customer</td>
        <td>Contacts</td>
        <td>Order Date</td>
        <td>Status</td>
        <td>View</td>
        </thead>
    <tr class="success">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="index.php?page=order_details&order_no=#"><label class="badge badge-default">Order Details</label></a></td>
    </tr>
</table>

');
?>