<div>
    <div>
        <hr />
        64 Games
        <hr />
    </div>
    <div class="game-grid">
        <?php
        $games = array();
        for ($i = 1; $i <= 64; $i++) {
            $games[] = array(
                'title' => "Tekken 2",
                'date' => '🇯🇵 August 3, 1995',
                'img' => 'https://www.giantbomb.com/a/uploads/square_small/16/164924/3375794-6525538345-sIUqS.png',
                'platforms' => ['ARC', 'PS1', '+5 more'],
                'desc' => "The sequel to Namco's original 3D fighting game adds new characters and a variety of new moves and unique attacks."
            );
        }
        foreach ($games as $game) {
            include __DIR__ . '/../partials/game-card.php';
        }
        ?>
    </div>
</div>