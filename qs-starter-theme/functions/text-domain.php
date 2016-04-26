add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('text-domain-name', get_template_directory(). '/languages');

}
