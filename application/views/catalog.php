<div class="avatar">
    <div id='overlay'>
       <div id="all-items" class="items">
         <?php $count = 0; ?>
         <?php foreach ($accessories as $accessory): ?>
           <div id="<?php echo $categories[$count]->name; ?>"> 
             <img class="draggable drag-drop " src="<?php echo $accessory->imagepath; ?>"/>
               <h4><?php echo $accessory->name; ?></h4>
               <p>Weight: <?php echo $accessory->weight; ?></p>
               <p>Damage: <?php echo $accessory->damage; ?></p>
               <p>Protection: <?php echo $accessory->protection; ?></p>
           </div>
         <?php endforeach; ?>
       </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
