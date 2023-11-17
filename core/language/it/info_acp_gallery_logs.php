<?php
/**
*
* info_acp_gallery_logs [Italiano]
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
	'ACP_LOG_GALLERY_MOD'						=> 'Log Moderatore',
	'ACP_LOG_GALLERY_MOD_EXP'						=> 'Log Moderatore',
	'ACP_LOG_GALLERY_ADM'						=> 'Log Amministratore',
	'ACP_LOG_GALLERY_ADM_EXP'						=> 'Log Amministratore',
	'ACP_LOG_GALLERY_SYSTEM'						=> 'Log di sistema',
	'ACP_LOG_GALLERY_SYSTEM_EXP'						=> 'Log di sistema',
	'LOG_GALLERY_SHOW_LOGS'						=> 'Mostra solo',

	'SORT_USER_ID'							=> 'ID Utente',

	'LOG_ALBUM_ADD'							=> '<strong>Album creati</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Album eliminati</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Album e sottoalbum eliminati</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Album eliminati e subalbum spostati</strong> verso %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Album eliminati e immagini spostate</strong> verso %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Album e sottoalbum eliminati, immagini spostate</strong> verso %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Album eliminati, immagini spostate</strong> verso %1$s <strong>e subalbums</strong> verso %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Album eliminati con le immagini</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Album eliminati con immagini e sottoalbum</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Album eliminati con immagini e spostati i sottoalbum</strong> verso %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Modifiche ai dettagli dell’allbum</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Album spostato</strong> %1$s <strong>sotto</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Album spostato</strong> %1$s <strong>sopra</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Album risincronizzato</strong><br />» %s',

	'LOG_CLEAR_GALLERY'					=> 'Registro della Galleria cancellato',

	'LOG_GALLERY_APPROVED'				=> '<strong>Approved image</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Deleted comment</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Edited comment</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Deleted image</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>Edited image</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Locked image</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>Moved image</strong><br />» from %1$s to %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Closed report</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Deleted report</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>Reopened report</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Unapproved image</strong><br />» %s',
	'LOG_GALLERY_DISAPPROVED'			=> '<strong>Disapproved image</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'View album',
	'LOGVIEW_VIEWIMAGE'					=> 'View image',
));
