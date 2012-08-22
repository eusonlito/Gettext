<?php
/**
* phpCan - http://idc.anavallasuiza.com/
*
* phpCan is released under the GNU Affero GPL version 3
*
* More information at license.txt
*/

/*
 * function __ ($text, [$args = null])
 *
 * return string
 */
function __ ($text, $args = null)
{
    global $Gettext;

    $text = $Gettext->translate($text);

    if (is_null($args)) {
        return $text;
    } elseif (is_array($args)) {
        return vsprintf($text, $args);
    } else {
        $args = func_get_args();

        array_shift($args);

        return vsprintf($text, $args);
    }
}

/*
 * function __e ($text)
 *
 * echo string
 */
function __e ($text, $args = null)
{
    if (count(func_get_args()) > 2) {
        $args = func_get_args();

        array_shift($args);
    }

    echo __($text, $args);
}
