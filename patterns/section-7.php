<?php
/**
 * Title: Section (Left large image)
 * Slug: unitone/section/7
 * Categories: section
 * Block Types: unitone/decorator, unitone/gutters, unitone/with-sidebar
 */
?>
<!-- wp:unitone/decorator {"align":"full","tagName":"section"} -->
<section data-unitone-layout="decorator" class="alignfull">
	<!-- wp:unitone/gutters {"lock":{"move":true,"remove":true}} -->
	<div data-unitone-layout="gutters">
		<!-- wp:unitone/with-sidebar {"sidebarWidth":"max(50%, var(--unitone--cg4))","contentMaxWidth":"var(--unitone--measure)","revert":true,"sidebar":"left","lock":{"move":true,"remove":true},"unitone":{"gap":"0","alignItems":"center"}} -->
		<div data-unitone-layout="with-sidebar -sidebar:left -revert -align-items:center -gap:0" style="--unitone--sidebar-width:max(50%, var(--unitone--cg4));--unitone--content-max-width:var(--unitone--measure)">
			<!-- wp:unitone/with-sidebar-content {"lock":{"move":true,"remove":true},"unitone":{"blockAlign":"center"}} -->
			<div data-unitone-layout="with-sidebar__content -align:center">
				<!-- wp:unitone/decorator {"lock":{"move":true,"remove":true},"unitone":{"padding":"2"}} -->
				<div data-unitone-layout="decorator -padding:2">
					<!-- wp:unitone/text {"lock":{"move":true,"remove":true}} -->
					<div data-unitone-layout="text">
						<!-- wp:unitone/stack {"lock":{"move":true,"remove":true}} -->
						<div data-unitone-layout="stack">
							<!-- wp:heading {"fontSize":"unitone-xl"} -->
							<h2 class="has-unitone-xl-font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
							<!-- /wp:heading -->

							<!-- wp:unitone/text {"unitone":{"maxWidth":"100%"}} -->
							<div data-unitone-layout="text" style="--unitone--max-width:100%">
								<!-- wp:paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:unitone/text -->
						</div>
						<!-- /wp:unitone/stack -->
					</div>
					<!-- /wp:unitone/text -->
				</div>
				<!-- /wp:unitone/decorator -->
			</div>
			<!-- /wp:unitone/with-sidebar-content -->

			<!-- wp:unitone/with-sidebar-content {"lock":{"move":true,"remove":true}} -->
			<div data-unitone-layout="with-sidebar__content">
				<!-- wp:unitone/frame {"ratio":"3/4","lock":{"move":true,"remove":true}} -->
				<div data-unitone-layout="frame" style="--unitone--ratio:3/4">
					<!-- wp:image {"id":1,"width":1920,"height":1280,"lock":{"move":true,"remove":true}} -->
					<figure class="wp-block-image">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/stocksnap_lgg8nat9jy.jpg" alt="" width="1920" height="1280" class="wp-image-1"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:unitone/frame -->
			</div>
			<!-- /wp:unitone/with-sidebar-content -->
		</div>
		<!-- /wp:unitone/with-sidebar -->
	</div>
	<!-- /wp:unitone/gutters -->
</section>
<!-- /wp:unitone/decorator -->
