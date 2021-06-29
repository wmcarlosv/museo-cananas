<?php
/**
 * The template for displaying search forms in savinilib
 *
 * @package savinilib
 */
?>

<form role="search" method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
	  <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'savinilib' ); ?></label>
	<input type="text" class="form-control search-query" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'savinilib' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'savinilib' ); ?>" />
	<span class="input-group-btn">
	  <button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php echo _e( 'Search', 'savinilib' ); ?>"><?php echo esc_attr_x( 'Search', 'submit button', 'savinilib' ); ?></button>
	</span>
  </div>
</form>
