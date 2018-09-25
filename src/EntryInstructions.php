<?php
/**
 * Entry Instructions plugin for Craft CMS 3.x
 *
 * A simple fieldtype to add instructions
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2018 Superbig
 */

namespace superbig\entryinstructions;

use superbig\entryinstructions\fields\EntryInstructionsField as EntryInstructionsFieldField;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\services\Fields;
use craft\events\RegisterComponentTypesEvent;

use yii\base\Event;

/**
 * Class EntryInstructions
 *
 * @author    Superbig
 * @package   EntryInstructions
 * @since     2.0.0
 *
 */
class EntryInstructions extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var EntryInstructions
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function (RegisterComponentTypesEvent $event) {
                $event->types[] = EntryInstructionsFieldField::class;
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'entry-instructions',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

    protected function createSettingsModel() {
        return new \superbig\entryinstructions\models\Settings();
    }
}
