<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/dokumenty/([a-zA-Z0-9\\.\\-_]+)/([a-zA-Z0-9\\.\\-_]+)/?.*#',
    'RULE' => 'SECTION_CODE=$1&SUB_SECTION_CODE=$2',
    'PATH' => '/dokumenty/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^(.*)$#',
    'RULE' => '$1.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/dokumenty/([a-zA-Z0-90-9\\.\\-_]+)/?.*#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/dokumenty/index.php',
    'SORT' => 110,
  ),
  3 => 
  array (
    'CONDITION' => '#^(.*)\\?(.*)#',
    'RULE' => '$1.php?$2',
    'SORT' => 120,
  ),
);
