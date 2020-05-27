<?php

/**
 * return 1 if number is ok
 */
function valid_phone_number($phone)
{
    $t = '/[0-9]{9}/';
    $phone = str_replace(' ', '', $phone);
    $phone = str_replace('-', '', $phone);

    return preg_match($t, $phone);
}
