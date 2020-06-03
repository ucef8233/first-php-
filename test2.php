<?php
session_start();
if ($_SESSION['connect'] == true) :
  echo 'test ok';
endif;