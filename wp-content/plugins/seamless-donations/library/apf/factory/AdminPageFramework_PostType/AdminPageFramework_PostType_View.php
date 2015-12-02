<?php
/**
 Admin Page Framework v3.5.6 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class SeamlessDonationsAdminPageFramework_PostType_View extends SeamlessDonationsAdminPageFramework_PostType_Model {
    function __construct($oProp) {
        parent::__construct($oProp);
        if ($this->_isInThePage()) {
            add_action('restrict_manage_posts', array($this, '_replyToAddAuthorTableFilter'));
            add_action('restrict_manage_posts', array($this, '_replyToAddTaxonomyTableFilter'));
            add_filter('parse_query', array($this, '_replyToGetTableFilterQueryForTaxonomies'));
            add_action('admin_head', array($this, '_replyToPrintStyle'));
        }
        add_action('the_content', array($this, '_replyToFilterPostTypeContent'));
    }
    public function _replyToAddAuthorTableFilter() {
        if (!$this->oProp->bEnableAuthorTableFileter) {
            return;
        }
        if (!(isset($_GET['post_type']) && post_type_exists($_GET['post_type']) && in_array(strtolower($_GET['post_type']), array($this->oProp->sPostType)))) {
            return;
        }
        wp_dropdown_users(array('show_option_all' => 'Show all Authors', 'show_option_none' => false, 'name' => 'author', 'selected' => !empty($_GET['author']) ? $_GET['author'] : 0, 'include_selected' => false));
    }
    public function _replyToAddTaxonomyTableFilter() {
        if ($GLOBALS['typenow'] != $this->oProp->sPostType) {
            return;
        }
        $oPostCount = wp_count_posts($this->oProp->sPostType);
        if ($oPostCount->publish + $oPostCount->future + $oPostCount->draft + $oPostCount->pending + $oPostCount->private + $oPostCount->trash == 0) {
            return;
        }
        foreach (get_object_taxonomies($GLOBALS['typenow']) as $sTaxonomySulg) {
            if (!in_array($sTaxonomySulg, $this->oProp->aTaxonomyTableFilters)) continue;
            $oTaxonomy = get_taxonomy($sTaxonomySulg);
            if (wp_count_terms($oTaxonomy->name) == 0) continue;
            wp_dropdown_categories(array('show_option_all' => $this->oMsg->get('show_all') . ' ' . $oTaxonomy->label, 'taxonomy' => $sTaxonomySulg, 'name' => $oTaxonomy->name, 'orderby' => 'name', 'selected' => intval(isset($_GET[$sTaxonomySulg])), 'hierarchical' => $oTaxonomy->hierarchical, 'show_count' => true, 'hide_empty' => false, 'hide_if_empty' => false, 'echo' => true,));
        }
    }
    public function _replyToGetTableFilterQueryForTaxonomies($oQuery = null) {
        if ('edit.php' != $this->oProp->sPageNow) {
            return $oQuery;
        }
        if (!isset($GLOBALS['typenow'])) {
            return $oQuery;
        }
        foreach (get_object_taxonomies($GLOBALS['typenow']) as $sTaxonomySlug) {
            if (!in_array($sTaxonomySlug, $this->oProp->aTaxonomyTableFilters)) {
                continue;
            }
            $sVar = & $oQuery->query_vars[$sTaxonomySlug];
            if (!isset($sVar)) {
                continue;
            }
            $oTerm = get_term_by('id', $sVar, $sTaxonomySlug);
            if (is_object($oTerm)) {
                $sVar = $oTerm->slug;
            }
        }
        return $oQuery;
    }
    public function _replyToPrintStyle() {
        if ($this->oUtil->getCurrentPostType() !== $this->oProp->sPostType) {
            return;
        }
        if (isset($this->oProp->aPostTypeArgs['screen_icon']) && $this->oProp->aPostTypeArgs['screen_icon']) {
            $this->oProp->sStyle.= $this->_getStylesForPostTypeScreenIcon($this->oProp->aPostTypeArgs['screen_icon']);
        }
        $this->oProp->sStyle = $this->oUtil->addAndApplyFilters($this, "style_{$this->oProp->sClassName}", $this->oProp->sStyle);
        if (!empty($this->oProp->sStyle)) {
            echo "<style type='text/css' id='admin-page-framework-style-post-type'>" . $this->oProp->sStyle . "</style>";
        }
    }
    private function _getStylesForPostTypeScreenIcon($sSRC) {
        $sNone = 'none';
        $sSRC = $this->oUtil->resolveSRC($sSRC);
        return <<<CSSRULES
#post-body-content {
    margin-bottom: 10px;
}
#edit-slug-box {
    display: {$sNone};
}
#icon-edit.icon32.icon32-posts-{$this->oProp->sPostType} {
    background: url('{$sSRC}') no-repeat;
    background-size: 32px 32px;
}     
CSSRULES;
        
    }
    public function content($sContent) {
        return $sContent;
    }
    public function _replyToFilterPostTypeContent($sContent) {
        if (!is_singular()) {
            return $sContent;
        }
        if (!is_main_query()) {
            return $sContent;
        }
        global $post;
        if ($this->oProp->sPostType !== $post->post_type) {
            return $sContent;
        }
        return $this->oUtil->addAndApplyFilters($this, "content_{$this->oProp->sClassName}", $this->content($sContent));
    }
}