var images = [];

// load images elements into variables
var bg = document.getElementById("bg");
images.push(bg);

var helmet = document.getElementById("helmet");
images.push(helmet);

var chestplate = document.getElementById("chestplate");
images.push(chestplate);

var shoes = document.getElementById("shoes");
images.push(shoes);

var weapon = document.getElementById("weapon");
images.push(weapon);

// wait until all images are loaded before drawing
var loadedImages = 0;
for (var i = 0; i < images.length; ++i)
{
    if (images[i].complete)
    {
        // if image is already loaded do stuff
        loadedImages++;
        drawImages();
    }
    else
    {
        // if image is not already loaded wait until it is loaded to do stuff
        images[i].onload = function()
        {
            loadedImages++;
            drawImages();
        }
    }
}

// draws images
function drawImages()
{
    // if images are not all loaded, stop
    if (loadedImages != images.length)
    {
        return;
    }

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
        location.href = "/set/" + id;
    }
}
