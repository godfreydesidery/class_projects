<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 2:49 AM
 */ ?>
<?php echo('

<form method="post">
    <legend>Categories</legend>
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn" name="search_category">Search</button>
    <fieldset>

        <label>Category ID</label>
        <input type="text" placeholder="Category Id">
        <label>Category Name</label>
        <input type="text" placeholder="Category Name">
        <label>Description</label>
        <textarea placeholder="Category Description"></textarea>
        <span class="help-block">Example block-level help text here.</span>
        <button type="submit" class="btn" name="delete">Delete</button>
        <button type="reset" class="btn">Reset</button>
        <button type="submit" class="btn" name="save">Save</button>
    </fieldset>
</form>

');?>
