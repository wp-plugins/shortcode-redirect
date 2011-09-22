<?php
/*
Plugin Name: ShortCode Redirect
Plugin URI: http://cartpauj.com/projects/shortcode-redirect-plugin/
Description: This plugin allows you to add a shortcode to a page. When this shortcode is executed it re-directs the user to a pre-defined URL. You can also set how many seconds to wait before redirecting the user.
Author: Cartpauj
Version: 1.0.0
Author URI: http://cartpauj.com
*/

add_shortcode('redirect', 'scr_do_redirect');
function scr_do_redirect($atts)
{
	$myURL = (isset($atts['url']) && !empty($atts['url']))?$atts['url']:"";
	$mySEC = (isset($atts['sec']) && !empty($atts['sec']))?$atts['sec']:"0";
	if(!empty($myURL)) {
?>
		<meta http-equiv="refresh" content="<?php echo $mySEC; ?>; url=<?php echo $myURL; ?>">
		Please wait while you are redirected...or <a href="</php echo $myURL; ?>">Click Here</a> if you do not want to wait.
<?php
	}
}

?>