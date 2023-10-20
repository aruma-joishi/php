<?php
$people = [
    ['Taro','20','men'],
    ['Jiro','20','men'],
    ['Hanako','16','women']
    ];

foreach ($people as $person) {
  echo "{$person[0]}({$person[1]}歳{$person[2]})<br />";
}