<div id="college-global-header" class="site-header">
	<nav id="college-global-nav">
		<ul>
			<li class="college-name-logo">
				<a href="//cahnrs.wsu.edu">
					CAHNRS
				</a><a href="<?php echo esc_url( get_site_url() ) ?>"> <strong><?php echo esc_html( get_bloginfo( 'name' ) ) ?></strong></a>
			</li>
		</ul>
	</nav><nav id="college-global-actions">
		<?php if ( is_active_sidebar( 'global-top-header-bar-secondary' ) ) : dynamic_sidebar( 'global-top-header-bar-secondary' ); ?>
		<?php else : ?>
		<a href="http://admission.wsu.edu/applications/index.html">Apply</a><a href="http://cahnrs.wsu.edu/academics/prospective/">Request Info</a><a href="https://foundation.wsu.edu/give/?fund=c39b3693-1ede-4044-aa2a-f5fed2b62638&utm_source=college-of-agricultural-human-and-natural-resource-sciences-excellence-fund&utm_medium=wsu-link&utm_campaign=agricultural-human-and-natural-resource-sciences">Give</a>
		<?php endif; ?>
	</nav>
</div>
