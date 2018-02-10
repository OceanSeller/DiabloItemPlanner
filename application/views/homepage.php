<!-- The main view of the diablo inventory will be displayed in this page -->
<h1>This is our Home Page</h1>
<div id="body">
    <div>
        <select id="setDropdown">
            <option>Choose a set</option>
            {sets}
            <option value="{id}">{id}</option>
            {/sets}
        </select>
        <button onclick="loadSet()">Show Set</button>
    </div>
    <div>
        <canvas id="inventoryCanvas">Your browser does not support the HTML5 canvas tag.</canvas>
    </div>
    
    <script>
        var images = [];
        
        var bg = new Image();
        bg.src = "/assets/images/template.png";
        images.push(bg);

        var helmet = new Image();
        helmet.src = "{helmet}";
        images.push(helmet);
        console.log(helmet.src);
        
        var chestplate = new Image();
        chestplate.src = "{chestplate}";
        images.push(chestplate);
        console.log(chestplate.src);
        
        var shoes = new Image();
        shoes.src = "{shoes}";
        images.push(shoes);
        console.log(shoes.src);
        
        var weapon = new Image();
        weapon.src = "{weapon}";
        images.push(weapon);
        console.log(weapon.src);
        
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
        
        function drawImages()
        {
            var canvas = document.getElementById("inventoryCanvas");
            var ctx = canvas.getContext("2d");
            
            inventoryCanvas.width = bg.naturalWidth;
            inventoryCanvas.height = bg.naturalHeight;
            
            ctx.drawImage(bg, 0, 0);
            
            var helmScaleX = 95 / helmet.naturalHeight * helmet.naturalWidth;
            var helmScaleY = 95;
            var helmStartX = 200 + 95 / 2 - helmScaleX / 2;
            var helmStartY = 32;
            ctx.drawImage(helmet, helmStartX, helmStartY, helmScaleX, helmScaleY);
            
            var chestScaleX = 170 / chestplate.naturalHeight * chestplate.naturalWidth;
            var chestScaleY = 170;
            var chestStartX = 187 + 120 / 2 - chestScaleX / 2;
            var chestStartY = 136;
            ctx.drawImage(chestplate, chestStartX, chestStartY, chestScaleX, chestScaleY);
            
            var shoeScaleX = 128 / shoes.naturalHeight * shoes.naturalWidth;
            var shoeScaleY = 128;
            var shoeStartX = 200 + 96 / 2 - shoeScaleX / 2;
            var shoeStartY = 510;
            ctx.drawImage(shoes, shoeStartX, shoeStartY, shoeScaleX, shoeScaleY);
            
            var weaponScaleX = 190 / weapon.naturalHeight * weapon.naturalWidth;
            var weaponScaleY = 190;
            var weaponStartX = 38 + 95 / 2 - weaponScaleX / 2;
            var weaponStartY = 448;
            ctx.drawImage(weapon, weaponStartX, weaponStartY, weaponScaleX, weaponScaleY);
        }
        
        function loadSet()
        {
            var setDropdown = document.getElementById("setDropdown");
            if (setDropdown.options[setDropdown.selectedIndex].hasAttribute('value'))
            {
                var id = setDropdown.options[setDropdown.selectedIndex].value;
                location.replace("/set/" + id);
            }
        }
    </script>
</div>
