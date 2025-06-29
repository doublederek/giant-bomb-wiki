<?php

class GiantBombTemplate extends \BaseTemplate {
    public function execute() {
        echo $this->get('headelement');
        include __DIR__ . '/views/partials/header.php';
?>
        <div id="giantbomb-wrapper">
            <div id="gb-main-layout">
                <?php include __DIR__ . '/views/main-template.php'; ?>
                <?php include __DIR__ . '/views/partials/filter-sidebar.php'; ?>
            </div>
            <footer>
                <?php include __DIR__ . '/views/partials/footer.php'; ?>
            </footer>
        </div>
        <?php
    }
} 