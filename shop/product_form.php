<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 3:11 AM
 */
?>

<?php
echo('

<form method="post">
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn" name="search_product">Search</button>
    <div class="row-fluid">
    <div class="span6">
        <fieldset>
            <legend>Products</legend>
            <label>Select Category</label>
            <select name="">
                <option></option>
            </select>
            <label>Product ID</label>
            <input type="text" placeholder="Product Id">
            <label>Bar Code</label>
            <input type="text" placeholder="Bar Code">
        </fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend>.</legend>
            <label>Product Name</label>
            <input type="text" placeholder="Product Name">
            <label>Description</label>
            <textarea placeholder="Product Description"></textarea>
            <label>Unit Price</label>
            <input type="text" placeholder="Price">
            <span class="help-block">Example block-level help text here.</span>

        </fieldset>
    </div>
    <div class="span12">
        <button type="submit" class="btn" name="delete">Delete</button>
        <button type="reset" class="btn">Reset</button>
        <button type="submit" class="btn" name="save">Save</button>
    </div>
    </div>


</form>

');
?>

