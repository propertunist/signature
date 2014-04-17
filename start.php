<?php
elgg_register_event_handler('init', 'system', 'signature_init');

/**
 * Init
 */
function signature_init() {
	//register actions
		elgg_extend_view('css/elgg', 'css/signature');
		elgg_extend_view('output/elgg','default/output');
		
}
