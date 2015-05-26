<div class="aside">
	<ul>
		<?php
			$sidebar = 'Blog Sidebar';
			if (is_page() && $custom = get_meta('_custom_sidebar')) {
				$sidebar = $custom;
			} elseif (is_category(31)){			
			$sidebar = 'Default Sidebar';
			} elseif (in_category(31)){			
			$sidebar = 'Default Sidebar';
			} elseif (is_category(32)){			
			$sidebar = 'Default Sidebar';
			} elseif (in_category(32)){			
			$sidebar = 'Default Sidebar';
			} elseif (is_category(33)){			
			$sidebar = 'Default Sidebar';
			} elseif (in_category(33)){			
			$sidebar = 'Default Sidebar';
			} else {
			wp_list_categories('orderby=name&exclude=68,27,36,38,28,37,35,1&title_li=<h4 class="widgettitle">' . __('Categories') . '</h4>' );

			}
			dynamic_sidebar($sidebar);
		?>
	</ul>
</div>