<?php


function myPortfolioFiles() {

	//css stylesheet
	wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());

	//getting the fonts
	wp_enqueue_style('custom-google-fonts', '///fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

//getting the font awesome
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');



           ///javascript
	wp_enqueue_script('main-javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);


}
add_action('wp_enqueue_scripts', 'myPortfolioFiles');








//adding navigation
function myPortfolio_features () {
	register_nav_menu('headerNav', 'Header Navigation');
	register_nav_menu('footerNavOne', 'Footer Navigation One');
	register_nav_menu('footerNavTwo', 'Footer Navigation Two');
}


add_action('after_setup_theme', 'myPortfolio_features');








