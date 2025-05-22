<?php

function columnWidthClass(string $width): string
{
  $map = [
    '1/1' => 'col-span-12',
    '1/2' => 'col-span-6',
    '1/3' => 'col-span-4',
    '2/3' => 'col-span-8',
    '1/4' => 'col-span-3',
    '3/4' => 'col-span-9',
  ];

  return $map[$width] ?? 'col-span-12'; // fallback to full width
}
