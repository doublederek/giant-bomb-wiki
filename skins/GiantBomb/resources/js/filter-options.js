// Options for each sidebar filter
const filterOptions = {
  'filter-letters': [
    { value: 'all', text: 'All letters', selected: true },
    { value: '#', text: '#' },
    ...Array.from({ length: 26 }, (_, i) => {
      const letter = String.fromCharCode(65 + i);
      return { value: letter, text: letter };
    }),
  ],
  'filter-sort-by': [
    { value: '', text: 'Sort by', disabled: true, selected: true },
    { value: 'alphabetical', text: 'Alphabetical' },
    { value: 'release-date', text: 'Release Date' },
    { value: 'recent-edits', text: 'Recent Edits' },
    { value: 'new-additions', text: 'New Additions' },
  ],
  'filter-platforms': [
    { value: '', text: 'All platforms', disabled: true, selected: true },
    // Add platform options from DB here
  ],
  'filter-genres': [
    { value: '', text: 'All genres', disabled: true, selected: true },
    // Add genre options from DB here
  ],
  'filter-themes': [
    { value: '', text: 'All themes', disabled: true, selected: true },
    // Add theme options from DB here
  ],
  'filter-average-score': [
    { value: '', text: 'Minimum average score', disabled: true, selected: true },
    { value: '0', text: 'no stars' },
    { value: '1', text: '1 star' },
    { value: '2', text: '2 stars' },
    { value: '3', text: '3 stars' },
    { value: '4', text: '4 stars' },
    { value: '5', text: '5 stars' },
  ],
  'filter-ratings': [
    { value: '', text: 'Rating board value', disabled: true, selected: true },
    // Add rating options from DB here
  ],
  'filter-regions': [
    { value: '', text: 'All regions', disabled: true, selected: true },
    { value: 'us', text: 'United States' },
    { value: 'uk', text: 'United Kingdom' },
    { value: 'jp', text: 'Japan' },
    { value: 'au', text: 'Australia' },
  ],
  'filter-single-player-features': [
    { value: 'camera-support', text: 'Camera support' },
    { value: 'driving-wheel', text: 'Driving wheel (native)' },
    { value: 'flightstick', text: 'Flightstick (native)' },
    { value: 'head-tracking', text: 'Head Tracking (native)' },
    { value: 'motion-control', text: 'Motion control' },
    { value: 'pc-gamepad', text: 'PC gamepad (native)' },
    { value: 'voice-control', text: 'Voice control' },
  ],
  'filter-multiplayer-features': [
    { value: 'async-multiplayer', text: 'Asynchronous multiplayer' },
    { value: 'lan-co-op', text: 'LAN co-op' },
    { value: 'lan-competitive', text: 'LAN competitive' },
    { value: 'local-co-op', text: 'Local co-op' },
    { value: 'local-competitive', text: 'Local commpetitive' },
    { value: 'local-splitscreen', text: 'Local splitscreen' },
    { value: 'online-co-op', text: 'Online co-op' },
    { value: 'online-competitive', text: 'Online commpetitive' },
    { value: 'online-splitscreen', text: 'Online splitscreen' },
    { value: 'pass-and-play', text: 'Pass and play' },
    { value: 'voice-chat', text: 'Voice chat' },
  ],
  'filter-screen-resolution': [
    { value: '1080p', text: '1080p' },
    { value: '1080i', text: '1080i' },
    { value: '720p', text: '720p' },
    { value: '480p', text: '480p' },
    { value: 'pc-cga', text: 'PC CGA 320x200' },
    { value: 'pc-ega', text: 'PC EGA 640x350' },
    { value: 'pc-vga', text: 'PC VGA 640x480' },
    { value: 'pc-wvga', text: 'PC WVGA 768x480' },
    { value: 'pc-svga', text: 'PC SVGA 800x600' },
    { value: 'pc-1024x768', text: 'PC 1024x768' },
    { value: 'pc-1440x900', text: 'PC 1440x900' },
    { value: 'pc-1600x1200', text: 'PC 1600x1200' },
    { value: 'pc-2560x1440', text: 'PC 2560x1440' },
    { value: 'pc-2560-1600', text: 'PC 2560x1600' },
    { value: 'other-pc', text: 'Other PC resolution' },
    { value: 'other-console', text: 'Other Console resolution' },
  ],
};

function populateSelect(id, options) {
  const select = document.getElementById(id);
  if (!select) return;
  select.innerHTML = '';
  options.forEach(opt => {
    const option = document.createElement('option');
    option.value = opt.value;
    option.textContent = opt.text;
    if (opt.disabled) option.disabled = true;
    if (opt.selected) option.selected = true;
    select.appendChild(option);
  });
}

Object.entries(filterOptions).forEach(([id, options]) => {
    populateSelect(id, options);
});
