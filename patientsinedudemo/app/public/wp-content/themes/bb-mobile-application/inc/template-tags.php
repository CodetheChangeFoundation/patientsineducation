<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package BB Mobile Application
 */

if ( ! function_exists( 'bb_mobile_application_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function bb_mobile_application_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'bb_mobile_application_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids      = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

if ( ! function_exists( 'bb_mobile_application_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function bb_mobile_application_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) )
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	printf('<span class="posted-on">Published %1$s</span><span class="byline"> by %2$s</span>',
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			esc_html($time_string)
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function bb_mobile_application_categorized_blog() {
	if ( false === ( $bb_mobile_application_all_the_cool_cats = get_transient( 'bb_mobile_application_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$bb_mobile_application_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$bb_mobile_application_all_the_cool_cats = count( $bb_mobile_application_all_the_cool_cats );

		set_transient( 'bb_mobile_application_all_the_cool_cats', $bb_mobile_application_all_the_cool_cats );
	}

	if ( '1' != $bb_mobile_application_all_the_cool_cats ) {
		// This blog has more than 1 category so bb_mobile_application_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so bb_mobile_application_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'bb_mobile_application_the_custom_logo' ) ) :
	/**
	 * Displays the optional custom logo.
	 *
	 * Does nothing if the custom logo is not available.
	 *
	 * @since BB Mobile Application
	 */
	function bb_mobile_application_the_custom_logo() {
		if( has_custom_logo() ){
			the_custom_logo();
		}
	}
endif;

/**
 * Flush out the transients used in bb_mobile_application_categorized_blog
 */
function bb_mobile_application_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'bb_mobile_application_all_the_cool_cats' );
}
add_action( 'edit_category', 'bb_mobile_application_category_transient_flusher' );
add_action( 'save_post',     'bb_mobile_application_category_transient_flusher' );