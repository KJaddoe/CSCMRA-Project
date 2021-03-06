<?php
/**
 * Dropcap
 *
 * This file is being included into "../class-shortcodes.php" file's shortcode_render() method.
 *
 * @since    1.0
 * @version  1.3
 *
 * @param  string class
 * @param  string color
 * @param  string shape
 */



//Shortcode attributes
	$defaults = apply_filters( 'wmhook_shortcode_' . '_defaults', array(
			'class' => '',
			'color' => '',
			'shape' => '',
		), $shortcode );
	$atts = apply_filters( 'wmhook_shortcode_' . '_attributes', $atts, $shortcode );
	$atts = shortcode_atts( $defaults, $atts, $prefix_shortcode . $shortcode );

//Validation
	//content
		$atts['content'] = apply_filters( 'wmhook_shortcode_' . '_content', $content, $shortcode, $atts );
		$atts['content'] = apply_filters( 'wmhook_shortcode_' . $shortcode . '_content', $atts['content'], $atts );
	//class
		$atts['class'] = trim( 'wm-dropcap ' . trim( $atts['class'] ) );
	//color
		$atts['color'] = trim( $atts['color'] );
		if ( $atts['color'] ) {
			$atts['class'] .= ' color-' . $atts['color'];
		}
	//shape
		$atts['shape'] = trim( $atts['shape'] );
		if ( $atts['shape'] ) {
			$atts['class'] .= ' shape-' . $atts['shape'];
		}
	//class
		$atts['class'] = apply_filters( 'wmhook_shortcode_' . $shortcode . '_classes', $atts['class'], $atts );

//Output
	$output = '<span class="' . esc_attr( $atts['class'] ) . '">' . $atts['content'] . '</span>';

?>