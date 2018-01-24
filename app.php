<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

Image::configure(['driver' => 'gd']);

$background = Image::make('./certificate-blank-exact.png');

$profile_picture = Image::make('./avatar.jpg')->resize(220, 220)
                                              ->encode('jpg', 100);
$background->insert($profile_picture, 'top-left', 70, 140);

$background->text('Guddu', 380, 160, function ($font) {
    $font->size(24);
    $font->file('./OpenSans-Regular.ttf');
    $font->color('#000000');
});

$background->text('গার্লফ্রেন্ড', 380, 220, function ($font) {
    $font->size(24);
    $font->file('./kalpurush.ttf');
    $font->color('#ec1c24');
});

$background->save('./output.jpg', 100);