<table>
        <tr class="item_row">
          <th>Image</th>
          <th>Name</th>
          <th>Weight</th>
          <th>Damage</th>
          <th>Protection</th>
        </tr>
<tbody>
  <div id="all-items" class="items">
    {accessories}
        <tr class="item_row">
          <td><img class="draggable drag-drop " src="{imagepath}"/></td>
          <td><h4>{name}</h4></td>
          <td><p>{weight}</p></td>
          <td><p>{damage}</p></td>
          <td><p>{protection}</p></td>
        </tr>
      </div>
    {/accessories}
  </div>
</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
