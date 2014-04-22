<?php
// outputs the signature that has been created via profile_manager for the creator of the current comment
$signature = elgg_get_plugin_user_setting('signature',$commenter->getGUID(), 'signature');

if (($signature != '')&&(($vars['full_view'])))
  $output = '<div class="elgg-signature">' . $signature . '</div>'; 

echo $output;
?>