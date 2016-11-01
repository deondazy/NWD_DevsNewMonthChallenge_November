<?php
function parseNames($string)
{
    $regex = '|(@)((\w)+)|';

    if (is_array($string)) {
        $string = "<a href='#{$string[2]}' title='{$string[2]}'>{$string[2]}</a>";
    }

    return preg_replace_callback($regex, 'parseNames', $string);
}
