<?php
class GiantBombTemplate extends BaseTemplate {
    public function execute() {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <?php echo $this->get('headelement'); ?>
            </head>
            <body>
                <div id="giantbomb-wrapper">
                    <div id="gb-main-layout">
                        <?php include __DIR__ . '/views/landing-page.php'; ?>
                        <?php include __DIR__ . '/partials/filter-sidebar.php'; ?>
                    </div>
                </div>
                <?php echo $this->get('trailelement'); ?>
            </body>
        </html>
        <?php
    }
}