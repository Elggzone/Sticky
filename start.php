<?php
/*
 *
 * Elgg sticky footer
 *
 * @author Per Jensen - Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2012, Per Jensen
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
elgg_register_event_handler('init', 'system', 'sticky_init');

function sticky_init() {

	elgg_extend_view('css/elgg', 'sticky/css');

}


