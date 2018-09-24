<?php
/**
 * Entry Instructions plugin for Craft CMS 3.x
 *
 * A simple fieldtype to add instructions
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2018 Superbig
 */

namespace superbig\entryinstructions\fields;

use superbig\entryinstructions\EntryInstructions;
use superbig\entryinstructions\assetbundles\entryinstructionsfieldfield\EntryInstructionsFieldFieldAsset;

use Craft;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\helpers\Db;
use yii\db\Schema;
use craft\helpers\Json;

/**
 * @author    Superbig
 * @package   EntryInstructions
 * @since     2.0.0
 */
class EntryInstructionsField extends Field
{
    // Public Properties
    // =========================================================================
    
    public $fieldCustomCss = '';

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName (): string
    {
        return Craft::t('entry-instructions', 'Entry Instructions');
    }


    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate(
            'entry-instructions/_components/fields/EntryInstructionsField_settings',
            [
                'field' => $this,
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getInputHtml ($value, ElementInterface $element = null): string
    {
        // Get our id and namespace
        $id           = Craft::$app->getView()->formatInputId($this->handle);
        $namespacedId = Craft::$app->getView()->namespaceInputId($id);

        // Render the input template
        return Craft::$app->getView()->renderTemplate(
            'entry-instructions/_components/fields/EntryInstructionsField_input',
            [
                'name'         => $this->handle,
                'value'        => $value,
                'field'        => $this,
                'id'           => $id,
                'namespacedId' => $namespacedId,
                'customCSS'    => $this->getAndParseCSS($id)
            ]
        );
    }

    private function getAndParseCSS($id) {
        $settings = $this->getSettings();
        $CssParser = new \Sabberworm\CSS\Parser($settings['fieldCustomCss']);
        $parsedCss = $CssParser->parse();
        foreach($parsedCss->getAllDeclarationBlocks() as $oBlock) {
            foreach($oBlock->getSelectors() as $oSelector) {
                //Loop over all selector parts (the comma-separated strings in a selector) and prepend the id
                $oSelector->setSelector("#fields-{$id}-field .heading .instructions ".$oSelector->getSelector());
            }
        }
        return $parsedCss->render();
    }
}
