<?php
/**
*
* permissions_gallery [Italiano]
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

// Adding the permissions
$lang = array_merge($lang, array(
	'ACL_A_GALLERY_MANAGE'		=> 'Può gestire le regolazioni della Galleria phpBB',
	'ACL_A_GALLERY_ALBUMS'		=> 'Può aggiungere/modificare album e permessi',
));
