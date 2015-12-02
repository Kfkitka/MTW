<?php
/**
 Admin Page Framework v3.5.6 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class SeamlessDonationsAdminPageFramework_FieldType_export extends SeamlessDonationsAdminPageFramework_FieldType_submit {
    public $aFieldTypeSlugs = array('export',);
    protected $aDefaultKeys = array('data' => null, 'format' => 'json', 'file_name' => null, 'attributes' => array('class' => 'button button-primary',),);
    protected function setUp() {
    }
    protected function getScripts() {
        return "";
    }
    protected function getStyles() {
        return "";
    }
    protected function getField($aField) {
        if (isset($aField['data'])) {
            $this->setTransient(md5("{$aField['class_name']}_{$aField['input_id']}"), $aField['data'], 60 * 2);
        }
        $aField['attributes']['name'] = "__export[submit][{$aField['input_id']}]";
        $aField['file_name'] = $aField['file_name'] ? $aField['file_name'] : $this->_generateExportFileName($aField['option_key'] ? $aField['option_key'] : $aField['class_name'], $aField['format']);
        $aField['label'] = $aField['label'] ? $aField['label'] : $this->oMsg->get('export');
        return parent::getField($aField);
    }
    protected function _getExtraInputFields(&$aField) {
        $_aAttributes = array('type' => 'hidden');
        return "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][input_id]", 'value' => $aField['input_id'],) + $_aAttributes) . "/>" . "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][field_id]", 'value' => $aField['field_id'],) + $_aAttributes) . "/>" . "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][section_id]", 'value' => isset($aField['section_id']) && $aField['section_id'] != '_default' ? $aField['section_id'] : '',) + $_aAttributes) . "/>" . "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][file_name]", 'value' => $aField['file_name'],) + $_aAttributes) . "/>" . "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][format]", 'value' => $aField['format'],) + $_aAttributes) . "/>" . "<input " . $this->generateAttributes(array('name' => "__export[{$aField['input_id']}][transient]", 'value' => isset($aField['data']),) + $_aAttributes) . "/>";
    }
    private function _generateExportFileName($sOptionKey, $sExportFormat = 'json') {
        switch (trim(strtolower($sExportFormat))) {
            case 'text':
                $sExt = "txt";
            break;
            case 'json':
                $sExt = "json";
            break;
            case 'array':
            default:
                $sExt = "txt";
            break;
        }
        return $sOptionKey . '_' . date("Ymd") . '.' . $sExt;
    }
}