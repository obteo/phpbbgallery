<?php
/**
*
* Gallery Notifications [Italiano]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 Lucifer Lucifer@anavaro.com http://www.anavaro.com
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
	'NOTIFICATION_PHPBBGALLERY_IMAGE_FOR_APPROVAL'	=> '%2$s immagini caricate per l’approvazione nell’album <strong>%1$s</strong>',
	'NOTIFICATION_TYPE_PHPBBGALLERY_IMAGE_FOR_APPROVE'	=> 'Immagini in attesa di approvazione',

	'NOTIFICATION_TYPE_PHPBBGALLERY_IMAGE_APPROVED'	=> 'Immagini approvate',
	'NOTIFICATION_PHPBBGALLERY_IMAGE_APPROVED'		=> 'Le immagini nell’album <strong>%1$s</strong> sono state approvate',

	'NOTIFICATION_TYPE_PHPBBGALLERY_IMAGE_NOT_APPROVED'	=> 'Immagini non approvate',
	'NOTIFICATION_PHPBBGALLERY_IMAGE_NOT_APPROVED'		=> 'Le immagini nell’album <strong>%1$s</strong> non sono state approvate',

	'NOTIFICATION_TYPE_PHPBBGALLERY_NEW_IMAGE'	=> 'Nuove immagini',
	'NOTIFICATION_PHPBBGALLERY_NEW_IMAGE'		=> 'Le nuove immagini sono state caricate nell’album <strong>%1$s</strong>',

	'NOTIFICATION_TYPE_PHPBBGALLERY_NEW_COMMENT'	=> 'Nuovi commenti',
	'NOTIFICATION_PHPBBGALLERY_NEW_COMMENT'			=> '<strong>%1$s</strong> hanno commentato l’immagine che stai guardando',

	'NOTIFICATION_TYPE_PHPBBGALLERY_NEW_REPORT'	=> 'New image report',
	'NOTIFICATION_PHPBBGALLERY_NEW_REPORT'			=> '<strong>%1$s</strong> immagini riportate',
));
