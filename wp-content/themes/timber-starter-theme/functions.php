<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

function starterkit_theme_load_assets() {
	// Chemin absolu vers le dossier dist
	$dist_dir = get_template_directory();
	$dist_uri = get_template_directory_uri();
	// $dist_dir = get_template_directory() . '/dist';
	// $dist_uri = get_template_directory_uri() . '/dist';

	// Initialiser les chemins des fichiers CSS et JS
	$css_file = '';
	$js_file = '';

	// Lire les fichiers du dossier css, vérifier qu'ils sont présent
	if (is_dir($dist_dir . '/css')) {
			$css_files = glob($dist_dir . '/css/index.css');
			if (!empty($css_files)) {
					// Prend le premier fichier trouvé et l'assigne à la variable $css_file
					$css_file = basename($css_files[0]);
			}
	}

	// Lire les fichiers du dossier js, vérifier qu'ils sont présent
	if (is_dir($dist_dir . '/js')) {
		$js_files = glob($dist_dir . '/js/index.js');
		if (!empty($js_files)) {
				
					// Prend le premier fichier trouvé et l'assigne à la variable $js_file
					$js_file = basename($js_files[0]);
			}
	}

	// Mise en file d'attente des fichiers si trouvés
	if ($css_file) {
			wp_enqueue_style('starterkit_theme-style', $dist_uri . '/css/' . $css_file, [], null);
	}

	if ($js_file) {
			wp_enqueue_script('starterkit_theme-js', $dist_uri . '/js/' . $js_file, [], null, true);
	}
}
add_action('wp_enqueue_scripts', 'starterkit_theme_load_assets');

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();

