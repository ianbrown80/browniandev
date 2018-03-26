<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package browniandev
 */

?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="assistive-text" for="s"><?php esc_html_e( 'Search', 'browniandev' ); ?></label>
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;', 'browniandev' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
			<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Search', 'browniandev' ); ?>">
	</span>
	</div>
</form>
