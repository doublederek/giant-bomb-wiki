<aside id="filter-sidebar">
    <h2>Filter Results</h2>
    <select id="filter-letters">
        <option value="all">All letters</option>
        <option value="#">#</option>
        <?php foreach (range('A', 'Z') as $letter): ?>
            <option value="<?php echo $letter; ?>"><?php echo $letter; ?></option>
        <?php endforeach; ?>
    </select>
    <select id="filter-sort-by"></select>
    <hr />
    <h2>Style of Game</h2>
    <select id="filter-platforms"></select>
    <select id="filter-genres"></select>
    <select id="filter-themes"></select>
    <select id="filter-average-score"></select>
    <select id="filter-ratings"></select>
    <select id="filter-regions"></select>
    <hr />
    <h2>Made by / during this time</h2>
    <label for="filter-developer">DEVELOPER</label>
    <input type="text" id="gb-by-developer" placeholder="Search!" />
    <label for="filter-publisher">PUBLISHER</label>
    <input type="text" id="gb-by-publisher" placeholder="Search!" />
    <label for="filter-date-from">FROM</label>
    <input type="date" id="gb-from" />
    <label for="filter-date-to">TO</label>
    <input type="date" id="gb-to" />
    <hr />
    <h2>With these features</h2>
    <label>SINGLE PLAYER FEATURES</label>
    <select id="filter-single-player-features" multiple></select>
    <label>MULTIPLAYER FEATURES</label>
    <select id="filter-multiplayer-features" multiple></select>
    <label>SCREEN RESOLUTION</label>
    <select id="filter-screen-resolution" multiple></select>
    <div id="widescreen-checkbox-container">
        <input type="checkbox" id="filter-widescreen" name="filter-widescreen" value="widescreen">
        <label for="filter-widescreen"> WIDESCREEN SUPPORT</label>
    </div>
    <button>Return matching games</button>
</aside>