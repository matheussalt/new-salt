<?php
function catch_that_image($sizex) {
  global $post, $posts;
  $urldosite = get_site_url();
  $first_img = "";
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  
  if(empty($first_img)){ //Defines a default image
  
  		if ( has_post_thumbnail() )
		{
			if($sizex == "1")
			{
  				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'big');
			} else if($sizex == "2")
			{
  				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
			}
			else if($sizex == "3")
			{
  				$fotoPega = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
			}
			$first_img = $fotoPega[0];
		} 
		else if (!$output) 
		{
			$first_img = "";
		} 
		else
		{
			$first_img = $matches[1][0];
		}
		
		if (!$first_img)
		{
 			$first_img = "$urldosite/img/branco.png";
		}
  }
  return $first_img;
} 


function custom_excerpt($length){
 global $post;
 $content = strip_tags($post->post_content);
 preg_match('/^\s*+(?:\S++\s*+){1,'.$length.'}/', $content, $matches);
 echo "<p>" . $matches[0] . "...</p>";
}



function custom_excerpt2($length){
 global $post;
 $content = strip_tags($post->post_content);

$content = (mb_strlen($content) > $length) ? mb_substr($content,0,($length - 3), 'utf8' ).'...' : $content;

	
 return $content;
}


    function isMobile() 
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    
    function get_foto( $post, $size = 'post-full' ) {
    $post_thumbnail_id = get_post_thumbnail_id( $post );
    if ( ! $post_thumbnail_id ) {return false;}
    return wp_get_attachment_image_url( $post_thumbnail_id, $size );
}
	
	
function has_children() {
    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );
    if( count( $children ) == 0 ) {
        return false;
    } else {
        return true;
    }
}
?>

<?
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
?>