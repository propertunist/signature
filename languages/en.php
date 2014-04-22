<?php
/**
 * signature English language file
 */
$tags = htmlspecialchars("<br>, <a>, <b>, <strong>, <i> & <italic>",ENT_QUOTES, "UTF-8");
$english = array(
	'signature:title' => 'Signature',
	'signature:user:config' => 'Here you can enter a message to use as your signature, which will appear at the bottom of the comments that you write.<br/><b>note: </b>all html tags will be removed from the signature after being saved - except: <i>' . $tags . '</i>.',
);
					
add_translation("en", $english);
?>