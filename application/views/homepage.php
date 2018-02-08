<!-- The main view of the diablo inventory will be displayed in this page -->
<h1>This is our Home Page</h1>
<div id="body">
    <!--
	<p>What is the homepage?</p>
	<p>It should present a selector (drop-down?) to let the user chose from the available saved equipment sets.</p>
	<p>Once one is selected, the app should then present an image of a player equipped with the accessories from that set.</p>
	<p>The selector could be a stock HTML form, with the dropdown and a submit button linking to a sub-controller method</p>
	<p>which built the equipped view; or it could have some Javascript attached, to pull down the appropriate pieces through AJAX calls.</p>
	<br>
	<p>Click on this link for further details <a href="http://comp4711.jlparry.com/display/assignment/assignment1features">Reference</a> </p>
    -->
    
    <canvas id="inventoryCanvas" width="???" height="???">Your browser does not support the HTML5 canvas tag.</canvas>
    
    <!--
    <select>
        {sets}
        <option value="{setName}" onclick="getSet({setId})">{setName}</option>
        {/sets}
    </select>
    -->
    
    <script>
        var canvas = document.getElementById("inventoryCanvas");
        var ctx = canvas.getContext("2d");
        
        var images = [];
        
        var bg = new Image();
        bg.src = "assets/images/template.png";
        images.push(bg);

        var helmet = new Image();
        helmet.src = "assets/images/helm.png";
        images.push(helmet);
        
        var chestplate = new Image();
        chestplate.src = "assets/images/body2.png";
        images.push(chestplate);
        
        /*
        var shoes = new Image();
        shoes.src = "{shoesPath}";
        images.push(shoes);
        
        var weapon = new Image();
        weapon.src = "{weaponPath}";
        images.push(weapon);
        */
        
        var loadedImages = 0;
        for (var i = 0; i < images.length; ++i)
        {
            images[i].onload = function()
            {
                loadedImages++;
                if (loadedImages == images.length)
                {
                    drawImages();
                }
            }
        }
        
        function drawImages()
        {
            inventoryCanvas.width = bg.naturalWidth;
            inventoryCanvas.height = bg.naturalHeight;
            
            ctx.drawImage(bg, 0, 0);
            
            var helmScaleX = 95 / helmet.naturalHeight * helmet.naturalWidth;
            var helmScaleY = 95;
            var helmStartX = 200 + helmScaleX / 2;
            var helmStartY = 32;
            ctx.drawImage(helmet, helmStartX, helmStartY, helmScaleX, helmScaleY);
            
            var chestScaleX = 170 / chestplate.naturalHeight * chestplate.naturalWidth;;
            var chestScaleY = 170;
            var chestStartX = 187 + chestScaleX / 4;
            var chestStartY = 136;
            ctx.drawImage(chestplate, chestStartX, chestStartY, chestScaleX, chestScaleY);
        }
        
        function getSet()
        {
            // either call controller method OR make ajax call to get img paths
        }
    </script>
</div>
