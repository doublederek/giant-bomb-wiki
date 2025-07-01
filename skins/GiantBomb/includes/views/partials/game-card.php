<div class="game-container">
    <img src="<?php echo $game['img']; ?>" />
    <h3><?php echo $game['title']; ?></h3>
    <h4><?php echo $game['date']; ?></h4>
    <?php foreach ($game['platforms'] as $platform): ?>
        <span class="badge"><?php echo $platform; ?></span>
    <?php endforeach; ?>
    <p><?php echo $game['desc']; ?></p>
</div>