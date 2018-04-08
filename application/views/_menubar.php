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
            <option>User Role</option>
            <option>Guest</option>
            <option>User</option>
            <option>Admin</option>
        </select>
    </form>
</ul>
