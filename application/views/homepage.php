<!-- The main view of the diablo inventory will be displayed in this page -->
<div id="body">
    <div id="selectSection">
        <select id="setDropdown">
            <option>Choose a set</option>
            {sets}
            <option value="{id}">{name}</option>
            {/sets}
        </select>
        <div onclick="loadSet();" class="customButton">Show Set</div>
    </div>
    <div>
        <canvas id="inventoryCanvas">Your browser does not support the HTML5 canvas tag.</canvas>
    </div>
    <div style="display:none">
        <img id="bg" src="/assets/images/setviewerbg.png" />
        <img id="helmet" src="{helmet}" />
        <img id="chestplate" src="{chestplate}" />
        <img id="shoes" src="{shoes}" />
        <img id="weapon" src="{weapon}" />
    </div>
    
    <script src="/assets/js/setviewer.js"></script>
</div>
