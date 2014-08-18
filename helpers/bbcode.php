<?php
$arrayBBCode=array(
  ''=>  array('type' =>BBCODE_TYPE_ROOT , 'childs'=>'!i' ),
  'i' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<i>',
    'close_tag' => '</i>', 'childs' => 'b,url'),
  'b' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<b>',
    'close_tag' => '</b>', 'childs' => 'i,url'),
  'url' => array('type' =>BBCODE_TYPE_OPTARG, 'open_tag' => '<a href="{PARAM}">',
    'close_tag' => '</a>', 'childs' => 'i,b'),
  'img' => array('type' =>BBCODE_TYPE_NOARG, 'open_tag' => '<img src="',
    'close_tag' => '/>', 'childs' => ''),

  )