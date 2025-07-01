<?php
class SkinGiantBomb extends SkinTemplate {
    public $skinname = 'giantbomb';
    public $stylename = 'GiantBomb';
    public $template = 'GiantBombTemplate';
    public $useHeadElement = true;

    public function initPage( OutputPage $out ) {
        parent::initPage( $out );
    
        $out->addModules( [ 'skins.giantbomb' ] );
    }
}