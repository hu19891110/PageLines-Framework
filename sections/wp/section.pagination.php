<?php
/*
	Section: Post/Page Pagination
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: Paginates posts, shows a numerical post navigation
	Class Name: PageLinesPagination
	Tags: internal, core
*/

class PageLinesPagination extends PageLinesSection {

   function __construct( $registered_settings = array() ) {
	
		$name = __('Pagination', 'pagelines');
		$id = 'pagination';
	
		
		$settings = array(
			'type' 			=> 'main',
			'description' 	=> 'Pagination - A numerical post/page navigation. (Supports WP-PageNavi)',
			'workswith' 	=> array('main'),
			'failswith'		=> pagelines_special_pages(),
			'folder' 		=> 'wp', 
			'init_file' 	=> 'pagination', 
			'icon'			=> PL_ADMIN_ICONS . '/pagination.png'
		);
		

	   parent::__construct($name, $id, $settings);    
   }

   function section_template() { ?>
		<?php if(function_exists('wp_pagenavi') && show_posts_nav() && VPRO):?>
			<?php wp_pagenavi(); ?>  
		<?php elseif (show_posts_nav()) : ?>
			<div class="page-nav-default fix">
				<span class="previous-entries"><?php next_posts_link(__('&larr; Previous Entries','pagelines')) ?></span>
				<span class="next-entries"><?php previous_posts_link(__('Next Entries &rarr;','pagelines')) ?></span>
			</div><!-- page nav -->
		<?php endif;?>
		
	<?php }

}

/*
	End of section class
*/