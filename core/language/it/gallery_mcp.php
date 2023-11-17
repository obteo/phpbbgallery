<?php
/**
*
* gallery_mcp [Italiano]
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
	'CHOOSE_ACTION'					=> 'Seleziona l’azione desiderata',

	'GALLERY_MCP_MAIN'				=> 'Principale',
	'GALLERY_MCP_OVERVIEW'			=> 'Panoramica',
	'GALLERY_MCP_QUEUE'				=> 'Coda',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Dettagli dell’immagine',
	'GALLERY_MCP_REPORTED'			=> 'Immagini riportate',
	'GALLERY_MCP_REPO_DONE'			=> 'Rapporti chiusi',
	'GALLERY_MCP_REPO_OPEN'			=> 'Rapporti aperti',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Dettagli rapporti',
	'GALLERY_MCP_UNAPPROVED'		=> 'Immagini in attesa di approvazione',
	'GALLERY_MCP_APPROVED'			=> 'Immagini approvate',
	'GALLERY_MCP_LOCKED'			=> 'Immagini bloccate',
	'GALLERY_MCP_VIEWALBUM'			=> 'Guarda l’album',
	'GALLERY_MCP_ALBUM_OVERVIEW'	=> 'Modera l’album',

	'IMAGE_REPORTED'				=> 'L’immagine è stata segnalata.',
	'IMAGE_UNAPPROVED'				=> 'L’immagine è in attesa di approvazione.',

	'MODERATE_ALBUM'				=> 'Modera l’album',

	'LATEST_IMAGES_REPORTED'		=> 'Ultime 5 immagini segnalate',
	'LATEST_IMAGES_UNAPPROVED'		=> 'Ultime 5 immagini in attesa di approvazione',

	'QUEUE_A_APPROVE'				=> 'Approva l’immagine',
	'QUEUE_A_APPROVE2'				=> 'Approvare l’immagine?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Sei sicuro di voler approvare l’immagine?',
	'QUEUE_A_DELETE'				=> 'Cancella l’immagine',
	'QUEUE_A_DELETE2'				=> 'Cancellare l’immagine?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare l’immagine?',
	'QUEUE_A_LOCK'					=> 'Blocca l’immagine',
	'QUEUE_A_LOCK2'					=> 'Bloccare l’immagine?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Sei sicuro di voler bloccare l’immagine?',
	'QUEUE_A_MOVE'					=> 'Sposta l’immagine',
	'QUEUE_A_UNAPPROVE'				=> 'Non approvare l’immagine',
	'QUEUE_A_UNAPPROVE2'			=> 'Non approvare l’immagine?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Sei sicuro di non voler approvare l’immagine?',

	'QUEUE_STATUS_0'				=> 'L’immagine è in attesa di approvazione.',
	'QUEUE_STATUS_1'				=> 'L’immagine è approvata.',
	'QUEUE_STATUS_2'				=> 'L’immagine è bloccata.',

	'QUEUES_A_APPROVE'				=> 'Approva le immagini',
	'QUEUES_A_APPROVE2'				=> 'Approvare le immagini?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Sei sicuro di voler approvare le immagini?',
	'QUEUES_A_DELETE'				=> 'Cancella le immagini',
	'QUEUES_A_DELETE2'				=> 'Cancellare le immagini?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare le immagini?',
	'QUEUES_A_LOCK'					=> 'Blocca le immagini',
	'QUEUES_A_LOCK2'				=> 'Bloccare le immagini?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Sei sicuro di voler bloccare le immagini?',
	'QUEUES_A_MOVE'					=> 'Sposta le immagini',
	'QUEUES_A_UNAPPROVE'			=> 'Non approvare le immagini',
	'QUEUES_A_UNAPPROVE2'			=> 'Non approvare le immagini?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Sei sicuro di non voler approvare le immagini?',
	'QUEUES_A_DISAPPROVE2_CONFIRM'	=> 'Sei sicuro di non voler approvare le immagini?',

	'REPORT_A_CLOSE'				=> 'Chiudi il rapporto',
	'REPORT_A_CLOSE2'				=> 'Chiudere il rapporto?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Sei sicuro di voler chiudere il rapporto?',
	'REPORT_A_DELETE'				=> 'Cancella il rapporto',
	'REPORT_A_DELETE2'				=> 'Cancellare il rapporto?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare questo rapporto?',
	'REPORT_A_OPEN'					=> 'Apri il rapporto',
	'REPORT_A_OPEN2'				=> 'Aprire il rapporto?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Sei sicuro di voler aprire il rapporto?',

	'REPORT_NOT_FOUND'				=> 'Impossibile trovare il rapporto.',
	'REPORT_STATUS_1'				=> 'Il rapporto deve essere rivisto.',
	'REPORT_STATUS_2'				=> 'Il rapporto è chiuso.',

	'REPORTS_A_CLOSE'				=> 'Chiudi i rapporti',
	'REPORTS_A_CLOSE2'				=> 'Chiudere i rapporti?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Sei sicuro di voler chiudere questi rapporti?',
	'REPORTS_A_DELETE'				=> 'Cancella i rapporti',
	'REPORTS_A_DELETE2'				=> 'Cancellare i rapporti?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare questi rapporti?',
	'REPORTS_A_OPEN'				=> 'Apri i rapporti',
	'REPORTS_A_OPEN2'				=> 'Aprire i rapporti?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Sei sicuro di voler aprire questi rapporti?',

	'REPORT_MOD'					=> 'Modificato da',
	'REPORT_CLOSED_BY'				=> 'Rapporto chiuso da',
	'REPORTED_IMAGES'				=> 'Immagini riportate',
	'REPORTER'						=> 'Utente segnalante',
	'REPORTER_AND_ALBUM'			=> 'Segnalante & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'No images approved.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine approvata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini approvate.',
	),
	'WAITING_DISPPROVED_IMAGE'		=> array(
		0			=> 'Nessun immagine non approvata',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine non approvata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini non approvate.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Nessuna immagine bloccata.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine bloccata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini bloccate.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Nessun rapporto esaminato.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> rapporto esaminato.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> rapporti esaminati.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Nessun rapporto da esaminare.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> rapporto da esaminare.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> rapporti da esaminare.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Nessuna immagine in attesa di approvazione.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine in attesa di approvazione.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini in attesa di approvazione.',
	),
	'DELETED_IMAGES'		=> array(
		0			=> 'Nessuna immagine eliminata.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine eliminata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini eliminate.',
	),
	'MOVED_IMAGES'		=> array(
		0			=> 'Nessuna immagine è stata spostata.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine spostata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini spostate.',
	),
	'NO_WAITING_UNAPPROVED_IMAGE'	=> 'Nessuna immagine in attesa di approvazione.',
));
