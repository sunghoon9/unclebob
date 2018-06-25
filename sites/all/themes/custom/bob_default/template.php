<?php
function bob_default_preprocess_page(&$variables) {
	// drupal_set_message('<pre>'. print_r($variables, true) .'</pre>');

	if(array_key_exists('node', $variables) && $variables['node']) {
		if($variables['node']->type == 'skills') {
			$variables['template_files'][] = 'pagetemplate';
			//$vars['node_tabs'][] = $tabs; now you are saying that $vars['node_tabs'] is an array
			$variables['node']->tabs = $variables['tabs'];
	  }
	}
};
