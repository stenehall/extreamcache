<ul class="items">
	<li class="item clear">
		<span class="pct80"><?php _e( 'Misses' ); ?></span><span class="comments pct20"><?php echo $extream_cache_misses; ?></span>
	</li>
	
	<li class="item clear">
		<script type="text/javascript">
		/* <![CDATA[ */
			var url = '<?php URL::out('auth_ajax', 'context=clear_extreamcache'); ?>';
			$(function() {
				$('#clearextreamcache').click(function()
				{
					$.get(
						url,
						function( json ) {
						},
						'json'
					);
					return false;
				});
			});
		/* ]]> */
		</script>
	</li>
	<li>
		<p><a class="" id="clearextreamcache" href="#"><?php _e( 'Clear Cache Data' ); ?></a></p>
	</li>
</ul>
