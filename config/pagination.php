<?php

return array(

	// the active pagination template
	'active'                      => 'default',

	// default FuelPHP pagination template, compatible with pre-1.4 applications
	'default'                     => array(
		'wrapper'                 => "<div class=\"pagination\">\n\t{pagination}\n</div>\n",

		'previous'                => "<span class=\"previous\">\n\t{link}\n</span>\n",
		'previous-link'           => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'previous-inactive'       => "<span class=\"previous-inactive\">\n\t{link}\n</span>\n",
		'previous-inactive-link'  => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'regular'                 => "<span>\n\t{link}\n</span>\n",
		'regular-link'            => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'active'                  => "<span class=\"active\">\n\t{link}\n</span>\n",
		'active-link'             => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'next'                    => "<span class=\"next\">\n\t{link}\n</span>\n",
		'next-link'               => "\t\t<a href=\"{uri}\">{page}</a>\n",

		'next-inactive'           => "<span class=\"next-inactive\">\n\t{link}\n</span>\n",
		'next-inactive-link'      => "\t\t<a href=\"{uri}\">{page}</a>\n",
	),

	// Twitter bootstrap 2.x template
	'bootstrap'                   => array(
		'wrapper'                 => "<div class=\"pagination\">\n\t<ul>{pagination}\n\t</ul>\n</div>\n",

		'previous'                => "\n\t\t<li>{link}</li>",
		'previous-link'           => "<a href=\"{uri}\">{page}</a>",

		'previous-inactive'       => "\n\t\t<li class=\"disabled\">{link}</li>",
		'previous-inactive-link'  => "<a href=\"{uri}\">{page}</a>",

		'regular'                 => "\n\t\t<li>{link}</li>",
		'regular-link'            => "<a href=\"{uri}\">{page}</a>",

		'active'                  => "\n\t\t<li \"active\">{link}</li>",
		'active-link'             => "<a href=\"{uri}\">{page}</a>",

		'next'                    => "\n\t\t<li>{link}</li>",
		'next-link'               => "<a href=\"{uri}\">{page}</a>",

		'next-inactive'           => "\n\t\t<li class=\"disabled\">{link}</li>",
		'next-inactive-link'      => "<a href=\"{uri}\">{page}</a>",
	),
);
