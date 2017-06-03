<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 8:35 AM
 */
?>

<?php

echo('

<form>
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn" name="search_customer">Search</button>
    <div class="row-fluid">
    <div class="span6">
        <fieldset>
            <legend>Users</legend>
            <label>User ID</label>
            <input type="text" placeholder="User Id">
            <label>First Name</label>
            <input type="text" placeholder="First Name">
            <label>Middle Name</label>
            <input type="text" placeholder="Middle Name">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name">
            <label>Username</label>
            <input type="text" placeholder="Username">
            <label>Gender</label>
            <select>
                <option></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </fieldset>
    </div>
    <div class="span6">

        <fieldset>
        <legend>.</legend>
            <label>Password</label>
            <input type="password" placeholder="Password">
            <label>Re-Enter Password</label>
            <input type="password" placeholder="Password">
            <label>Phone No</label>
            <input type="tel" placeholder="Phone">
            <label>Email</label>
            <input type="email" placeholder="Email">
            <label>Address</label>
            <input type="text" placeholder="Address">
            <span class="help-block">Example block-level help text here.</span>
        </fieldset>
    </div>
    </div>
    <div class="span12 fc-center">
    <fieldset>
        <button type="submit" class="btn" name="delete">Delete</button>
        <button type="reset" class="btn">Reset</button>
        <button type="submit" class="btn" name="save">Save</button>
    </fieldset>
    <hr>
    </div>



</form>

');

?>