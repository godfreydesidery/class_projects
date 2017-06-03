<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 7:42 PM
 */
?>
<?php

echo('

<form method="post">
<div class="row-fluid">
    <div class="span6">
        <legend>New/Edit/Delete Order</legend>
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn" name="search_product">Search</button>
        <fieldset>
            <label>Order No</label>
            <input type="text" placeholder="Order No">
            <label>Customer No</label>
            <input type="text" placeholder="Customer No">
            <button type="submit" class="btn" name="save">Place Order</button>
        </fieldset>
    </div>

    <div class="span6">
    <legend>.</legend>
        <fieldset>
            <label>Select Product @Price(Tsh.)</label>
            <select>
                <option>Product 1@Price</option>
            </select>
            <label>Quantity</label>
            <input type="number">
            <span class="help-block">Example block-level help text here.</span>
            <button type="submit" class="btn" name="add">Add Product</button>
        </fieldset>
    </div>
</div>

</form>
<legend>Product List</legend>
<table class="table table-bordered">
    <thead class="success">
    <td>Product</td>
    <td>Product Code</td>
    <td>Quantity</td>
    <td>Total</td>
    <td>Edit</td>
    </thead>
    <tr class="success">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a><label class="badge">Edit</label></a></td>
    </tr>
</table>

');

?>