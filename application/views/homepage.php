<!-- The main view of the diablo inventory will be displayed in this page -->
<h1>This is our Home Page</h1>
<div id="body">
    <div>
        <select id="setDropdown">
            <option>Choose a set</option>
            {sets}
            <option value="{id}">{name}</option>
            {/sets}
        </select>
        <div onclick="loadSet()" class="customButton">Show Set</div>

    </div>
    <div>
        <canvas id="inventoryCanvas">Your browser does not support the HTML5 canvas tag.</canvas>
    </div>
    
    <script>
        var images = [];
        
        // load images into elements
        var bg = new Image();
        bg.src = "/assets/images/template.png";
        images.push(bg);

        var helmet = new Image();
        helmet.src = "{helmet}";
        images.push(helmet);
        
        var chestplate = new Image();
        chestplate.src = "{chestplate}";
        images.push(chestplate);
        
        var shoes = new Image();
        shoes.src = "{shoes}";
        images.push(shoes);
        
        var weapon = new Image();
        weapon.src = "{weapon}";
        images.push(weapon);
        
        // wait until all images are loaded before drawing
        var loadedImages = 0;
        for (var i = 0; i < images.length; ++i)
        {
            images[i].onload = function()
            {
                if (++loadedImages == images.length)
                {
                    drawImages();
                }
            }
        }
        
        // draws images, called after all images are ready to be drawn
        function drawImages()
        {
            var canvas = document.getElementById("inventoryCanvas");
            var ctx = canvas.getContext("2d");
            
            // init canvas width
            inventoryCanvas.width = bg.naturalWidth;
            inventoryCanvas.height = bg.naturalHeight;
            // draw bg
            ctx.drawImage(bg, 0, 0);
            
            // draw helm
            var helmScaleX = 95 / helmet.naturalHeight * helmet.naturalWidth;
            var helmScaleY = 95;
            var helmStartX = 200 + 95 / 2 - helmScaleX / 2;
            var helmStartY = 32;
            ctx.drawImage(helmet, helmStartX, helmStartY, helmScaleX, helmScaleY);
            
            // draw chest
            var chestScaleX = 170 / chestplate.naturalHeight * chestplate.naturalWidth;
            var chestScaleY = 170;
            var chestStartX = 187 + 120 / 2 - chestScaleX / 2;
            var chestStartY = 136;
            ctx.drawImage(chestplate, chestStartX, chestStartY, chestScaleX, chestScaleY);
            
            // draw shoes
            var shoeScaleX = 128 / shoes.naturalHeight * shoes.naturalWidth;
            var shoeScaleY = 128;
            var shoeStartX = 200 + 96 / 2 - shoeScaleX / 2;
            var shoeStartY = 510;
            ctx.drawImage(shoes, shoeStartX, shoeStartY, shoeScaleX, shoeScaleY);
            
            // draw weapon
            var weaponScaleX = 190 / weapon.naturalHeight * weapon.naturalWidth;
            var weaponScaleY = 190;
            var weaponStartX = 38 + 95 / 2 - weaponScaleX / 2;
            var weaponStartY = 448;
            ctx.drawImage(weapon, weaponStartX, weaponStartY, weaponScaleX, weaponScaleY);
        }
        
        // load page of user's selected set in the dropdown
        function loadSet()
        {
            var setDropdown = document.getElementById("setDropdown");
            // don't allow redirect if no valid id is selected
            if (setDropdown.options[setDropdown.selectedIndex].hasAttribute('value'))
            {
                var id = setDropdown.options[setDropdown.selectedIndex].value;
                location.replace("/set/" + id);
            }
        }
    </script>
</div>
