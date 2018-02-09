<h1>This is our category page!</h1>

<div class="avatar">

    <img id="template" src="assets/images/template.PNG" alt="Avatar">

    <div id='overlay'>

        <!-- These are the items.
        TODO: give an ID to each for indentification -->
        <div class="items">

            <h2>Helmet</h2>
            <img id="helm" class="draggable drag-drop accessory" src="assets/images/helm.png" />
            <img id="helm2" class="draggable drag-drop accessory" src="assets/images/helm2.png" />
            <img id="helm3" class="draggable drag-drop accessory" src="assets/images/helm3.png" />
            <img id="helm4" class="draggable drag-drop accessory" src="assets/images/helm4.png" />

            <h2>Weapon</h2>
            <img id="mace" class="draggable drag-drop weapon" src="assets/images/mace.png" />
            <img id="piton" class="draggable drag-drop weapon" src="assets/images/piton.png" />
            <img id="scepter" class="draggable drag-drop weapon" src="assets/images/scepter.png" />
            <img id="GreatAxe" class="draggable drag-drop weapon" src="assets/images/GreatAxe.gif" />

            <h2>Armor</h2>
            <img id="body2" class="draggable drag-drop head" src="assets/images/body2.png" />
            <img id="body3" class="draggable drag-drop head" src="assets/images/body3.png" />
            <img id="body4" class="draggable drag-drop head" src="assets/images/body4.png" />
            <img id="LightChest" class="draggable drag-drop head" src="assets/images/LightChest.png" />

            <h2>Boots</h2>
            <img id="boots1" class="draggable drag-drop boots" src="assets/images/boots1.png" />
            <img id="boots2" class="draggable drag-drop boots" src="assets/images/boots2.png" />
            <img id="boots3" class="draggable drag-drop boots" src="assets/images/boots3.png" />
            <img id="boots4" class="draggable drag-drop boots" src="assets/images/boots4.png" />

        </div>

        <br/>

        <!-- Needs to edit it later -->
        <div class="slots">
            <div id="helmet" class="dropzone helmet">
                Helmet
            </div>

            <div id="armor" class="dropzone body">
                Armor
            </div>

            <div id="weapon" class="dropzone weapon">
                Weapon
            </div>

            <div id="boots" class="dropzone boots">
                Boots
            </div>
        </div>

        <!-- Needs to edit it later. -->
        <div class="accessories">
          <h3>Weight</h3>
          <div class="value">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">10-40</span>
            </div>
          </div>
          <h3>Materials</h3>
          <div class="value">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">Wooden, Copper, Titanium, Bronze</span>
            </div>
          </div>
          <h3>Name</h3>
          <div class="value">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
              <span class="sr-only">Show Names</span>
            </div>
          </div>
        
    <form class="form2" action="" method="POST">
        <input type="text" name="helmet" value="" hidden>
        <input type="text" name="Armor" value="" hidden>
        <input type="text" name="weapon" value="" hidden>
        <input type="text" name="boots" value="" hidden>
        <input type="submit" name="submit" value="submit">
    </form>

        <div class="stats">

        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
