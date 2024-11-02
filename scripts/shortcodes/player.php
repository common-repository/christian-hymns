<?php
include_once( CHRISTIAN_HYMNS_DIR .'ChristianHymns_ShortCodeLoader.php');
class ChristianHymnsPagesPlayer extends ChristianHymns_ShortCodeLoader {
    /**
     * @param  $atts shortcode inputs
     * @return string shortcode content
     */
    public function handleShortcode($atts) {
        $content = "";
        require_once(CHRISTIAN_HYMNS_DIR. '/scripts/pages/player.php' );
        return $content;
    }
}
?>