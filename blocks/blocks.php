<?php 
	include "functions.php";
   $blocks = getBlocks($_SESSION["username"]);
   for ($i = 0; $i<4 ; $i++){
      $block_1 = $blocks[$i][0];
      $block_2 = $blocks[$i][1];
      $block_3 = $blocks[$i][2];
      $block_4 = $blocks[$i][3];
      include "pattern_block.php";
   }
?>
