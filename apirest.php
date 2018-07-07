<?php
/**
 * @package APIREST
 */
/*
Plugin Name: APIREST WordCamp Sevilla 2018
Description: configurador de APIREST WordPress para WordCamp Sevilla 2018
Version: 0.0.5
Author: Víctor Sáenz & Paco Marchante
Author URI: http://www.mowomo.com
License: GPL2
*/

/*  Copyright 2018 Víctor Sáenz  (email : victor@mowomo.com) Paco Marchante (email : paco@mowomo.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


define( 'APIREST', '0.0.5' );
define( 'APIREST__MINIMUM_WP_VERSION', '4.0' );
define( 'APIREST__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( APIREST__PLUGIN_DIR . 'funciones-api.php' );

?>
