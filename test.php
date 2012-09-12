<?php

// Check Bubble Babble encoding / decoding

require 'bubble_babble.php';

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);

$tests = array(
    '' => 'xexax',
    'abcd' => 'ximek-domek-gyxox',
    'asdf' => 'ximel-finek-koxex',
    '0123456789' => 'xesaf-casef-fytef-hutif-lovof-nixix',
    'Testing a sentence.' => 'xihak-hysul-gapak-venyd-bumud-besek-heryl-gynek-vumuk-hyrox',
    '1234567890' => 'xesef-disof-gytuf-katof-movif-baxux',
    'Pineapple' => 'xigak-nyryk-humil-bosek-sonax',
);

foreach ($tests as $src=>$expected)
{
    $return = BubbleBabble::Encode($src);
    assert($return == $expected);

    $return = BubbleBabble::Decode($return);
    assert($return == $src);
}

echo "OK\n";

?>