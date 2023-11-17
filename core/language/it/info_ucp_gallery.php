<?php
/**
*
* info_ucp_gallery [Italiano]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Italiano] translated by Matteo Dragoni (https://hexy.it)
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> 'Galleria',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Gestisci gli album personali',
	'UCP_GALLERY_SETTINGS'				=> 'Impostazioni personali',
	'UCP_GALLERY_WATCH'					=> 'Gestisci le iscrizioni',
));
