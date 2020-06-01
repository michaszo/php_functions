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

/**
 * zrwaca numer telefonu gdy jest poprawny
 */
function valid_phone_number($phone)
{
    $phone = str_replace([' ', '-'], '', $phone);
    if (preg_match('/[0-9]{9}/', $phone)) {
        return $phone;
    } else {
        return 0;
    }
}

/**
 * zrwaca mail gdy jest poprawny
 */
function valid_mail($mail)
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return $mail;
    } else {
        return 0;
    }

}

function save_name($name)
{
    return str_replace([' ', '-', '<', '>', '/', '0'], '', $name);
}



$currentTime = (new DateTime('now'));
$startTime = new DateTime('10:50');
$endTime = (new DateTime('21:30'));

// if (1 === 0):
if ($currentTime < $startTime || $currentTime > $endTime):
