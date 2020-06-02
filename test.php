<?php



function calc()
{
  if (2 < 4) {
    return 2;
  }
}
function test()
{
  $test  = calc();
  return $test;
}

echo test();