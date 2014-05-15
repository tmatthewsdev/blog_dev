<?php
return array(
	'_root_'  => 'blog/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route


	'post/(:segment)' => 'blog/view/$1',
);