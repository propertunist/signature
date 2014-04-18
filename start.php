<?php
elgg_register_event_handler('init', 'system', 'signature_init');

/**
 * Init
 */
function signature_init() {
		elgg_extend_view('css/elgg', 'css/signature');
		elgg_extend_view('annotation/generic_comment','output/signature', 501);
}
