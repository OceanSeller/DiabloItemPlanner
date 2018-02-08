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

            <h2>Body</h2>
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

        <!-- These are the slots for the items -->
        <div class="slots">
            <div id="helmet" class="dropzone helmet">
                Helmet
            </div>

            <div id="body" class="dropzone body">
                Body
            </div>

            <div id="weapon" class="dropzone weapon">
                Weapon
            </div>

            <div id="boots" class="dropzone boots">
                Boots
            </div>
        </div>

    <form action="" method="POST">
        <input type="text" name="helmet" value="" hidden>
        <input type="text" name="body" value="" hidden>
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
