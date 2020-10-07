<!DOCTYPE html>
<html>

<h1> Pokemon type simulator</h1>

<h3>Select the type of your Pokemon and check which types of opponents it can handle best!</h3>


<form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label>Type of Pokemon:</label>
    <select name="type">
        <option value="none" selected disabled hidden>
            Select type
        </option>
        <option name="fire">Fire</option>
        <option name="water">Water</option>
        <option name="grass">Grass</option>
        <option name="bug">Bug</option>
        <option name="rock">Rock</option>
    </select><br><br>
    <input type="submit" name="verzenden">
</form>
</html>