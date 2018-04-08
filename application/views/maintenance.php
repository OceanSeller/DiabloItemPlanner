<table>
    <tr class="item_row">
        <th colspan="2">Categories</th>
    </tr>
    <tbody>
        <div id="all-items" class="items">
            {categories}
            <form action="/maintenance/updateCategory/{id}" method="post">
                <tr class="item_row">
                    <td><input type="text" value="{name}" name="name" id="{name}" /></td>
                    <td><button type="submit" class="customButton">Update</button></td>
                </tr>
            </form>
            {/categories}
        </div>
    </tbody>
</table>
<table>
    <tr class="item_row">
        <th colspan="6">Accessories</th>
    </tr>
    <tr class="item_row">
        <th>Name</th>
        <th>Material</th>
        <th>Weight</th>
        <th>Damage</th>
        <th>Protection</th>
    </tr>
    <tbody>
        <div id="all-items" class="items">
            {accessories}
            <form action="/maintenance/updateAccessory/{id}" method="post">
                <tr class="item_row">
                    <td><input type="text" value="{name}" name="name" id="{name}" /></td>
                    <td><input type="text" value="{naterials}" name="naterials" id="{naterials}" /></td>
                    <td><input type="text" value="{weight}" name="weight" id="{weight}" /></td>
                    <td><input type="text" value="{damage}" name="damage" id="{damage}" /></td>
                    <td><input type="text" value="{protection}" name="protection" id="{protection}" /></td>
                    <td><button type="submit" class="customButton">Update</button></td>
                </tr>
            </form>
            {/accessories}
        </div>
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
