<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="nav">
    {menudata}
    <li><a href="{link}"><div class="customListItem">{name}</div></a></li>
    {/menudata}
    <form action="" method="post">
        <select name="userRole" onchange="this.form.submit()">
            <option <?php if ($_SESSION["userRole"] == "Guest") echo "selected";?>>Guest</option>
            <option <?php if ($_SESSION["userRole"] == "User") echo "selected";?>>User</option>
            <option <?php if ($_SESSION["userRole"] == "Admin") echo "selected";?>>Admin</option>
        </select>
    </form>
</ul>
