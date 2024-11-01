<?php
/**
 * Plugin Name:     WPBLOX | COMPARE PLANS
 * Description:     A useful, usable and beautiful responsive plan / product / service / price / edition comparison table. It allows your customers to quickly find your offering that best answers to their needs. With a compelling call-to-action WPBLOX | COMPARE PLANS will help you convert website visitors into paying customers with ease!
 * Version:         3.0.0
 * Author:          marco@wpblox.com
 * Author URI:      https://wpblox.com
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     wpbloxcp
 *
 * @package         wpblox
 */

namespace Wp_Blox;

if ( !class_exists( '\Wp_Blox\Compare_Plans' ) ) {

    class Compare_Plans {

        public function __construct() {
            $this->hook_up();
        }

        private function hook_up() {
            /**
             * Enqueue block editor only JavaScript and CSS.
             */
            add_action( 'enqueue_block_editor_assets', '\Wp_Blox\Compare_Plans::enqueue_editor_assets' );

            /**
             * Enqueue front end and editor JavaScript and CSS assets.
             */
            add_action( 'enqueue_block_assets', '\Wp_Blox\Compare_Plans::enqueue_assets' );

            /**
             * Enqueue front end JavaScript and CSS assets.
             */
            add_action( 'enqueue_block_assets', '\Wp_Blox\Compare_Plans::enqueue_frontend_assets' );

            /**
             * Show admin notices.
             */
            add_action( 'admin_notices', '\Wp_Blox\Compare_Plans::show_admin_notices', 10, 0 );
            add_action( 'network_admin_notices', '\Wp_Blox\Compare_Plans::show_admin_notices', 10, 0 );
            add_action( 'admin_init', '\Wp_Blox\Compare_Plans::dismiss_admin_notices', 10, 0 );
        }

        /**
         * Enqueues js / css assets that will only be loaded for the back end.
         * 
         * @since   1.0.0
         * 
         * @return  void
         */
        public static function enqueue_editor_assets() {
            // Make paths variables so we don't write em twice ;)
            $block_path = '/assets/js/editor.js';
            $style_path = '/assets/css/backend.css';
            
            $editor_asset_file = include( plugin_dir_path( __FILE__ ) . 'assets/js/editor.asset.php');
            $editor_styles_asset_file = include( plugin_dir_path( __FILE__ ) . 'assets/css/backend.asset.php');

            // Enqueue the bundled block JS file
            wp_enqueue_script(
                'wpblox-compare-plans-editor',
                plugins_url( $block_path, __FILE__ ),
                $editor_asset_file['dependencies'],
                $editor_asset_file['version']
            );

            // Enqueue optional editor only styles
            wp_enqueue_style(
                'wpblox-compare-plans-editor-styles',
                plugins_url( $style_path, __FILE__ ),
                [ ],
                $editor_styles_asset_file['version']
            );
        }

        /**
         * Enqueues js / css assets that will be loaded for both front and back end.
         * 
         * @since   1.0.0
         * 
         * @return  void
         */
        public static function enqueue_assets() {
            $style_path = '/assets/css/both.css';
            $icons_path = '/assets/css/icons.css';
            $app_asset_file = include( plugin_dir_path( __FILE__ ) . 'assets/css/both.asset.php');
            
            wp_enqueue_style(
                'wpblox-compare-plans-both-styles',
                plugins_url( $style_path, __FILE__ ),
                [ ],
                $app_asset_file['version']
            );
            
            wp_enqueue_style(
                'wpblox-compare-plans-both-icons',
                plugins_url( $icons_path, __FILE__ ),
                [ ],
                $app_asset_file['version']
            );
        }

        /**
         * Enqueues js / css assets that will only be loaded for the front end.
         * 
         * @since   1.0.0
         * 
         * @return  void
         */
        public static function enqueue_frontend_assets() {

            // If in the backend, bail out.
            if ( is_admin() ) {
                return;
            }
            
            // App launcher will search for the div with ID comparePlansElem and
            // then mount the ComparePlansTable component on it.
            $app_launcher_path = '/assets/js/appLauncher.js';
            $app_launcher_assets_file = include( plugin_dir_path( __FILE__ ) . 'assets/js/appLauncher.asset.php');

            $style_path = '/assets/css/frontend.css';
            $app_asset_file = include( plugin_dir_path( __FILE__ ) . 'assets/css/frontend.asset.php');

            wp_enqueue_style(
                'wpblox-compare-plans-frontend-styles',
                plugins_url( $style_path, __FILE__ ),
                [],
                $app_asset_file['version']
            );
            
            // Enqueue the bundled block JS file
            wp_enqueue_script(
                'wpblox-compare-plans-app-launcher',
                plugins_url( $app_launcher_path, __FILE__ ),
                $app_launcher_assets_file['dependencies'],
                $app_asset_file['version']
            );
        }

        /**
         * Shows admin notices.
         * 
         * @since   1.0.0
         * 
         * @return  void
         */
        public static function show_admin_notices() {

            if ( !is_admin() && !is_network_admin() ) {
                return;
            }

            if ( false === get_transient( 'wpbloxcp_review_dismissed' ) && false === get_option( 'wpbloxcp_review_stop' ) ) {
                echo( '<div class="notice notice-info" style="margin-left: 2px;"><p>' 
                    . sprintf( __( 'Many thanks for using the %s plugin! Could you please spare a minute and give it a review over at WordPress.org?', 'wpbloxcp' ), '<strong>WPBLOX | COMPARE PLANS</strong>' )
                    . '</p><p><a class="button button-primary" href="http://wordpress.org/support/view/plugin-reviews/wpblox-compare-plans?filter=5#postform" target="_blank">' . __( 'Yes, here we go!', 'wpbloxcp' ) . '</a> <a class="button" href="./?wpbloxcp_review_dismissed">' . __( 'Remind me later', 'wpbloxcp' ) . '</a> <a class="button" href="./?wpbloxcp_review_stop">' . __( 'No, thanks', 'wpbloxcp' ) . '</a></p>'
                    . '<p>- Marco van Wieren | Downloads by van Wieren | <a target="_blank" href="https://wpblox.com/">https://wpblox.com/</a></p></div>' );
            }
        }

        /**
         * Helper to configure a transient to surpress admin notices when the user clicked dismiss.
         * 
         * @since   1.0.0
         * 
         * @return  void
         */
        public static function dismiss_admin_notices() {

            if ( isset( $_GET[ 'wpbloxcp_review_dismissed' ] ) ) {
                set_transient( 'wpbloxcp_review_dismissed', date( 'd' ), 1209600 );
            }

            if ( isset( $_GET[ 'wpbloxcp_review_stop' ] ) ) {
                delete_transient( 'wpbloxcp_review_dismissed' );
                add_option( 'wpbloxcp_review_stop', true );
            }
        }
    }

    // Safe to initialize the plugin
    new Compare_Plans();
}
