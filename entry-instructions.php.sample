<?php

/* ----------------------------------------------------------------------------
 * Define our strings first, then we'll return the array
 * -------------------------------------------------------------------------- */

// This is the basic outside box of the field - modify as you wish,
// but don't add any other rules in here unless you know what you're doing!
// (These rules get a slightly different version of the identifier prepended,
// otherwise they have to be written as invalid rules, and they don't get parsed)
$outerBoxCSS = <<<'EOS'
    .instructions {
        background-color: #f9fafa;
        border-radius: 2px;
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .1);
        color: #53524f;
        font-family: 'HelveticaNeue', 'Helvetica Neue', 'Helvetica', sans-serif;
        font-size: 13px;
        line-height: 16px;
        min-height: 30px;
        padding: 22px 24px 20px;
        position: relative;
    }

    .instructions:before {
        background-color: #0d78f2;
        border-radius: 2px 0 0 2px;
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 4px;
    }

EOS;
// DO NOT INDENT THE ABOVE LINE

// These rules are normal; they get the complete field identifier prepended to them
// so they will only affect Entry Instructions fields.
$mainCSS = <<<'EOM'
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

    p { max-width: 70%; }

    a { text-decoration: underline; }

EOM;
// DO NOT INDENT THE ABOVE LINE

return [
    'outerBoxCSS' => $outerBoxCSS,
    'mainCSS' => $mainCSS
];
