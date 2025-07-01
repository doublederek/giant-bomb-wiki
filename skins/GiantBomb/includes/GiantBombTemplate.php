<?php
class GiantBombTemplate extends \BaseTemplate {
    public function execute() {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <?php echo $this->get('headelement'); ?>
                <link rel="stylesheet" href="/skins/GiantBomb/dist/app.css">
            </head>
            <body>
                <div id="app"></div>
                <script type="module" src="/skins/GiantBomb/dist/app.js"></script>
                <?php echo $this->get('trailelement'); ?>
            </body>
        </html>
        <?php
    }
}