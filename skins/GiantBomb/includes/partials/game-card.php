<?php
require_once __DIR__ . '/../helpers.php';

if (!isset($gameData) || !is_array($gameData)) return;
$index = isset($index) ? intval($index) : 0;
?>
<div 
    class="game-card-base"
    id="game-card-<?php echo h($index + 1); ?>"
    style="background-image: url('<?php echo h($gameData['img']); ?>');"
>
    
    <div class="info-continer">
        <div class="game-title-and-date">
            <h2 class="highlight"><?php echo h($gameData['title']); ?></h2>
            <h4><?php echo h($gameData['date']); ?></h4>
        </div>
        <p><?php echo h($gameData['desc']); ?></p>
    </div>
</div>
