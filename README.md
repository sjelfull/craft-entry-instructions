# Entry Instructions plugin for Craft CMS 3.x

A simple fieldtype to add instructions.

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require superbig/craft-entry-instructions

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Entry Instructions.

## Using Entry Instructions

Create a new Entry Instructions field with instructions, and add it to a field layout.

You may add custom per-field CSS in the field settings; any CSS you add will be automatically scoped to the correct field.

Instructions will be parsed with Markdown.

## Overriding Global CSS

You can override the global CSS by creating a file in your `config/` directory called `entry-instructions.php` and structuring it appropriately.
A sample can be found [here (entry-instructions.php.sample)](entry-instructions.php.sample) with the current defaults; copy it and modify or delete as you wish.  

## Credits

This fieldtype is a port of [Entry Instructions](https://github.com/thomasthesecond/EntryInstructions) by Tom Cunningham.

Icon by [Ho Thi Ngoc Trinh from the Noun Project](https://thenounproject.com/term/info/538899).

Brought to you by [Superbig](https://superbig.co)
