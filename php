<?php
require 'gallery.php';
$gallery = new Gallery();
$gallery->setPath('img'); //path to the image folder
$images = $gallery->getImages(array('JPG','PNG')); //array of possible image extensions (useful if you have mixed galleries)
$row_counter = 0; //don't change that
$img_no_caption = " "; //default caption for image that don't have one

$page_title="Scandinavia"; //changes the <title> attribute AND the logo in top left corner
$no_images_warning="Ooops! No images in gallery!"; //Display the text when $gallery->setPath directory is empty.
$col_md_x = 6; //Bootstrap - choose either 2,3,4 or 6 to have 6,4,3 or 2 pics per line respectively
//----------------------------------------------

$row_x = 12 / $col_md_x; ?>
