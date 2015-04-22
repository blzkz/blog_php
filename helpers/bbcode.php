<?php
function bbcode_parser($text) {
  $arrayBBCode=array(
    ''=>  array('type' =>BBCODE_TYPE_ROOT , 'childs'=>'i,b,url' ),
    'i' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<i>',
      'close_tag' => '</i>', 'childs' => 'b,url'),
    'b' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<b>',
      'close_tag' => '</b>', 'childs' => 'i,url'),
    'url' => array('type' =>BBCODE_TYPE_OPTARG, 'open_tag' => '<a href="{PARAM}">',
      'close_tag' => '</a>', 'childs' => 'i,b'),
    'img' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<img src="',
      'close_tag' => '/>', 'childs' => ''),

    );
  $BBHandler = bbcode_create($arrayBBCode);
  $text = bbcode_parse($BBHandler,$text);
  return preg_replace('#(?<!href\=[\'"])(https?|ftp|file)://[-A-Za-z0-9+&@\#/%()?=~_|$!:,.;]*[-A-Za-z0-9+&@\#/%()=~_|$]#', '<a href=${0}>${0}</a>', $text);
}

function bbcode_parser_without_img($text) {
  $arrayBBCode=array(
    ''=>  array('type' =>BBCODE_TYPE_ROOT , 'childs'=>'i,b,url' ),
    'i' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<i>',
      'close_tag' => '</i>', 'childs' => 'b,url'),
    'b' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<b>',
      'close_tag' => '</b>', 'childs' => 'i,url'),
    'url' => array('type' =>BBCODE_TYPE_OPTARG, 'open_tag' => '<a href="{PARAM}">',
      'close_tag' => '</a>', 'childs' => 'i,b'),
    );
  $BBHandler = bbcode_create($arrayBBCode);
  $text = bbcode_parse($BBHandler,$text);
  return preg_replace('#(?<!href\=[\'"])(https?|ftp|file)://[-A-Za-z0-9+&@\#/%()?=~_|$!:,.;]*[-A-Za-z0-9+&@\#/%()=~_|$]#', '<a href=${0}>${0}</a>', $text);
}