<?php $prevCategory = -1; ?>
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
        <?php 
            foreach($accessories as $accessory) {
                if ($accessory->category != $prevCategory) {
                    $prevCategory = $accessory->category;
                ?>
                      <tr class="item_row">
                          <th colspan="5" class="categoryTableHeading"><?php print($categories[$prevCategory]->name); ?></th>
                      </tr>
                    <?php $prevCategory = $accessory->category;
                }?>
                <tr class="item_row">
                  <td><img src="<?php echo $accessory->imagepath; ?>"/></td>
                  <td><h4><?php echo $accessory->name; ?></h4></td>
                  <td><p><?php echo $accessory->weight; ?></p></td>
                  <td><p><?php echo $accessory->damage; ?></p></td>
                  <td><p><?php echo $accessory->protection; ?></p></td>
                </tr>
        <?php } ?>
    </div>
</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
