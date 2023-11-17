<?php
/**
 *
 * info_acp_gallery [Italiano]
 *
 * @package       phpBB Gallery
 * @version       $Id$
 * @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
 * @license       http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'       => 'Gestione dell’album',
	'ACP_GALLERY_ALBUM_PERMISSIONS'      => 'Permessi',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY' => 'Copia i permessi',
	'ACP_GALLERY_CONFIGURE_GALLERY'      => 'Configura la galleria',
	'ACP_GALLERY_LOGS'                   => 'Log della galleria',
	'ACP_GALLERY_LOGS_EXPLAIN'           => 'Elenca tutte le azioni del moderatore della galleria, come l’approvazione, la disapprovazione, il blocco, lo sblocco, la chiusura dei report e l’eliminazione delle immagini.',
	'ACP_GALLERY_MANAGE_ALBUMS'          => 'Gestisci gli album',
	'ACP_GALLERY_OVERVIEW'               => 'Panoramica',

	'GALLERY'                  => 'Galleria',
	'GALLERY_EXPLAIN'          => 'Galleria immagini',
	'GALLERY_HELPLINE_ALBUM'   => 'Galleria immagini: [image]image_id[/image], con questo BBCode puoi aggiungere un’immagine dalla gallery al tuo post.',
	'GALLERY_POPUP'            => 'Galleria',
	'GALLERY_POPUP_HELPLINE'   => 'Apri un popup in cui puoi selezionare le tue immagini recenti e caricare nuove immagini.',

	// Please do not change the copyright.
	'GALLERY_COPYRIGHT'        => 'Powered by <a href="http://www.anavaro.com/">phpBB Gallery</a> &copy; 2016 <a href="http://www.anavaro.com/">Lucifer</a>',

	// A little line where you can give yourself some credits on the translation.
	'GALLERY_TRANSLATION_INFO'			=> 'Italiano “phpBB Gallery“-Tradotto da <a href="http://hexy.it/">Teo</a>',
	'GALLERY_TRANSLATION_INFO' => '',

	'IMAGES'                  => 'Immagini',
	'IMG_BUTTON_UPLOAD_IMAGE' => 'Carica immagine',

	'PERSONAL_ALBUM' => 'Album personale',
	'PHPBB_GALLERY'  => 'phpBB Gallery',

	'TOTAL_IMAGES_SPRINTF' => array(
		0 => 'Immagini totali <strong>0</strong>',
		1 => 'Immagini totali <strong>%d</strong>',
	),
));
