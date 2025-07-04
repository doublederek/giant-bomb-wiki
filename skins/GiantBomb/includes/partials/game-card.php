<?php
if (!isset($gameData) || !is_array($gameData)) return;
$index = isset($index) ? intval($index) : 0;
?>
<div 
    class="game-card-base"
    id="game-card-<?php echo $index + 1; ?>"
    style="background-image: url('<?php echo $gameData['img']; ?>');"
>
    
    <div class="info-continer">
        <div class="game-title-and-date">
            <h2 class="highlight"><?php echo $gameData['title']; ?></h2>
            <h4><?php echo $gameData['date']; ?></h4>
        </div>
        <p><?php echo $gameData['desc']; ?></p>
    </div>
</div>
