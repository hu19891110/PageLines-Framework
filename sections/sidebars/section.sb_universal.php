<?php
/*
	Section: Universal Sidebar
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: A universal widgetized sidebar
	Class Name: UniversalSidebar
	Tags: internal
*/

class UniversalSidebar extends PageLinesSection {

   function __construct( $registered_settings = array() ) {
	
		$name = __('Universal Sidebar', 'pagelines');
		$id = 'sidebar_universal';
	
		
		$settings = array(
			'description' 	=> 'The universal widgetized sidebar, works in most areas.',
			'workswith' 	=> array('sidebar1', 'sidebar2', 'sidebar_wrap', 'templates', 'main', 'header', 'morefoot'),
			'icon'			=> PL_ADMIN_ICONS . '/sidebar.png', 
			'version'		=> 'pro'
		);
		

	   parent::__construct($name, $id, $settings);    
   }

   function section_persistent() { 
		$setup = pagelines_standard_sidebar($this->name, $this->settings['description']);
		register_sidebar($setup);
	}

   function section_template() { 
	 	 pagelines_draw_sidebar($this->id, $this->name);
	}

}

/*
	End of section class
*/