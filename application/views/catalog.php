<table>
<tbody>
  <div id="all-items" class="items">
    <?php foreach ($accessories as $accessory): ?>
        <tr class="item_row">
          <td><img class="draggable drag-drop " src="<?php echo $accessory->imagepath; ?>"/></td>
          <td><h4><?php echo $accessory->name; ?></h4></td>
          <td><p>&nbsp;Weight: <?php echo $accessory->weight; ?></p></td>
          <td><p>&nbsp;&nbsp;Damage: <?php echo $accessory->damage; ?></p></td>
          <td><p>&nbsp;&nbsp;Protection: <?php echo $accessory->protection; ?></p></td>
        </tr>
      </div>
    <?php endforeach; ?>
  </div>
</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
