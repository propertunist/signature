<?php

// outputs the signature that has been created via profile_manager for the creator of the current comment

 



if (($commenter->signature != ''))

  $output = '<div class="elgg-signature">' . $commenter->signature . '</div>'; 

 

echo $output;

