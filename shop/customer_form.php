<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 3:47 AM
 */
?>

<?php
echo('

<form>
<div class="row-fluid">

    <div class="span6">
        <legend>Customers</legend>
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn" name="search_customer">Search</button>
        <fieldset>
            <label>Customer ID</label>
            <input type="text" placeholder="Customer Id">
            <label>First Name</label>
            <input type="text" placeholder="First Name">
            <label>Middle Name</label>
            <input type="text" placeholder="Middle Name">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name">
            <label>Gender</label>
            <select>
                <option></option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </fieldset>
    </div>
    <div class="span6">
    <legend>.</legend>
        <fieldset>
            <label>Company</label>
            <input type="text" placeholder="Company/Organization">
            <label>Phone No</label>
            <input type="tel" placeholder="Phone">
            <label>Email</label>
            <input type="email" placeholder="Email">
            <label>Address</label>
            <input type="text" placeholder="Address">
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
