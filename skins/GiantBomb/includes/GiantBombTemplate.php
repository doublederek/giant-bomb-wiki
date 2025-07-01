<?php
class GiantBombTemplate extends \BaseTemplate {
    public function execute() {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <?php echo $this->get('headelement'); ?>
            </head>
            <body>
                <h1>Giant Bomb Wiki</h1>
                <div
                    data-vue-component="VueButton"
                    data-label="Click Me">
                </div>

                <?php echo $this->get('trailelement'); ?>
                
            </body>
        </html>
        <?php
    }
}