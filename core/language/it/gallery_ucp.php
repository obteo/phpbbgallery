<?php
/**
*
* gallery_ucp [Italiano]
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
	'ACCESS_CONTROL_ALL'			=> 'Tutti',
	'ACCESS_CONTROL_REGISTERED'		=> 'Utenti registrati',
	'ACCESS_CONTROL_NOT_FOES'		=> 'Utenti registrati, tranne gli utenti ignorati',
	'ACCESS_CONTROL_FRIENDS'		=> 'Solo i tuoi amici',
	'ACCESS_CONTROL_SPECIAL_FRIENDS'		=> 'Solo i tuoi amici speciali',
	'ALBUMS'						=> 'Albums',
	'ALBUM_ACCESS'					=> 'Consenti l’accesso per',
	'ALBUM_ACCESS_EXPLAIN'			=> 'Puoi usare %1$sFriends and Foes lists%2$s per controllare l’accesso all’album. Comunque <strong>i Moderatori</strong> possono <strong>sempre</strong> accedere all’album.',
	'ALBUM_DESC'					=> 'Descrizione dell’album',
	'ALBUM_NAME'					=> 'Nome dell’album',
	'ALBUM_PARENT'					=> 'Album genitore',
	'ATTACHED_SUBALBUMS'			=> 'Sottoalbum contenuti',

	'CREATE_PERSONAL_ALBUM'			=> 'Crea un album personale',
	'CREATE_SUBALBUM'				=> 'Crea un sottoalbum',
	'CREATE_SUBALBUM_EXP'			=> 'Puoi allegare un nuovo sottoalbum alla tua galleria personale.',
	'CREATED_SUBALBUM'				=> 'Sottoalbum creato con successo',

	'DELETE_ALBUM'					=> 'Elimina l’album',
	'DELETE_ALBUM_CONFIRM'			=> 'Eliminare l’album, con tutti i sottoalbum e le immagini contenute?',
	'DELETED_ALBUMS'				=> 'Album cancellati con successo',

	'EDIT'							=> 'Modifica',
	'EDIT_ALBUM'					=> 'Modifica album',
	'EDIT_SUBALBUM'					=> 'Modifica Subalbum',
	'EDIT_SUBALBUM_EXP'				=> 'Puoi modificare il tuo album qui.',
	'EDITED_SUBALBUM'				=> 'Album modificato correttamente.',

	'GOTO'							=> 'Vai a',

	'MANAGE_SUBALBUMS'				=> 'Gestisci i tuoi sottoalbum',
	'MISSING_ALBUM_NAME'			=> 'Inserisci un nome per l’album',

	'NEED_INITIALISE'				=> 'Non hai ancora un album personale.',
	'NO_ALBUM_STEALING'				=> 'Non sei autorizzato a gestire l’album di altri utenti.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Hai aggiunto il numero massimo di sottoalbum al tuo album personale',
	'NO_PARENT_ALBUM'				=> '&laquo;-- nessun genitore',
	'NO_PERSALBUM_ALLOWED'			=> 'Non hai i permessi per creare il tuo album personale',
	'NO_PERSONAL_ALBUM'				=> 'Non hai ancora un album personale. Qui puoi creare il tuo album personale, con alcuni sottoalbum.<br />Negli album personali solo il proprietario può caricare immagini.',
	'NO_SUBALBUMS'					=> 'Nessun album allegato',
	'NO_SUBSCRIPTIONS'				=> 'Non sei iscritto a nessuna immagine.',

	'PARSE_BBCODE'					=> 'Analizza il BBCode',
	'PARSE_SMILIES'					=> 'Analizza gli smilies',
	'PARSE_URLS'					=> 'Analizza i links',
	'PERSONAL_ALBUM'				=> 'Album personale',

	'UNSUBSCRIBE'					=> 'smetti di seguire',
	'USER_ALLOW_COMMENTS'			=> 'Consenti agli utenti di commentare le tue immagini',

	'YOUR_SUBSCRIPTIONS'			=> 'Qui puoi vedere gli album e le immagini per cui ricevi una notifica.',

	'WATCH_CHANGED'					=> 'Impostazioni memorizzate',
	'WATCH_COM'						=> 'Iscriviti alle immagini commentate come impostazione predefinita',
	'WATCH_NOTE'					=> 'Questa opzione influisce solo sulle nuove immagini. Tutte le altre immagini devono essere aggiunte tramite l’opzione "segui l’immagine".',
	'WATCH_OWN'						=> 'Sottoscrivi le tue immagini come impostazione predefinita',

	'RRC_ZEBRA'						=> 'Nasconditi dai foes in RRC',
	'RRC_ZEBRA_EXPLAIN'				=> 'Nascondi le immagini negli album ai foes in Recenti, Casuali e Commenti dell’indice.<br /><strong>ATTENZIONE!</strong> Ciò non nasconderà le immagini caricate negli album comuni/pubblici.'
));
