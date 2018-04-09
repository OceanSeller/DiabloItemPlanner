<!-- The main view of the diablo inventory will be displayed in this page -->
<div id="custom-body">
    <label for="set">Acessories
    <div class="dropdown">
      <select id="setDropdownAllAccessories">
        {accessories}
          <option value="{id}">{name}</option>
        {/accessories}
      </select>
      <div onclick="addToNewSet();" class="customButton">Save Set</div>
    </div>
    </label>
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
    <script src="/assets/js/customviewer.js"></script>
</div>
