<aside id="gb-sidebar">
    <h2>Filter Results</h2>
    <select id="gb-filter-letter">
        <option value="all">All letters</option>
        <option value="#">#</option>
        <?php foreach (range('A', 'Z') as $letter): ?>
            <option value="<?php echo $letter; ?>"><?php echo $letter; ?></option>
        <?php endforeach; ?>
    </select>
    <select id="gb-sort-by">
        <option value="" disabled selected>Sort by</option>
        <option value="alphabetical">Alphabetical</option>
        <option value="release-date">Release Date</option>
        <option value="recent-edits">Recent Edits</option>
        <option value="new-additions">New Additions</option>
    </select>
    <hr />
    <h2>Style of Game</h2>
    <select id="gb-platforms">
        <option value="" disabled selected>All platforms</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <select id="gb-genres">
        <option value="" disabled selected>All genres</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <select id="gb-themes">
        <option value="" disabled selected>All themes</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <select id="gb-average-score">
        <option value="" disabled selected>Minimum average score</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <select id="gb-rating-board-value">
        <option value="" disabled selected>Rating board value</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <select id="gb-regions">
        <option value="" disabled selected>All regions</option>
        <option value="alphabetical">Alphabetical</option>
    </select>
    <hr />
    <h2>Made by / during this time</h2>
    <label for="gb-made-by">DEVELOPER</label>
    <input type="text" id="gb-by-developer" placeholder="Search!" />
    <label for="gb-made-by">PUBLISHER</label>
    <input type="text" id="gb-by-publisher" placeholder="Search!" />
    <label for="gb-made-by">FROM</label>
    <input type="date" id="gb-from" />
    <label for="gb-made-by">TO</label>
    <input type="date" id="gb-to" />
    <hr />
</aside>