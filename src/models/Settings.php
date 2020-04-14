<?php

namespace superbig\entryinstructions\models;

use craft\base\Model;

class Settings extends Model
{
    // This is the basic outside box of the field. 
    // (These rules get a slightly different version of the identifier prepended,
    // otherwise they have to be written as invalid rules, and they don't get parsed)
    public $outerBoxCSS = <<<'EOS'
        .instructions {
            background-color: #f9fafa;
            color: #53524f;
            font-family: 'HelveticaNeue', 'Helvetica Neue', 'Helvetica', sans-serif;
            font-size: 13px;
            line-height: 16px;
            padding: 22px 24px 20px;
            position: relative;

            border-style: solid;
            border-width: 1px;
            border-color: rgba(0, 0, 0, .1);
            border-radius: 4px 2px 2px 4px ;
            border-left-width: 4px;
            border-left-color: #0d78f2;
        }
EOS;

    // These rules are normal; they get the complete field identifier prepended to them
    // so they will only affect Entry Instructions fields.
    public $mainCSS = <<<'EOM'
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
                color: #0d78f2;
                font-family: inherit;
                font-weight: 700;
                line-height: 1;
        }

        h1,
        h2 {
                border-bottom: 1px solid rgba(0, 0, 0, .1);
                padding-bottom: 6px;
        }

        h1 { font-size: 19px; margin-bottom: 0; }
        h2 { font-size: 17px; }
        h3 { font-size: 15px; }
        h4 { font-size: 13px; }
        h5 { font-size: 11px; }
        h6 { font-size:  9px; }

        p { max-width: 100%; }

        a { text-decoration: underline; }
EOM;

    public function rules()
    {
        return [
            [['outerBoxCSS', 'mainCSS'], 'required'],
        ];
    }
}
