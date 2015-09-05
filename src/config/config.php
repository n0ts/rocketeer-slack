<?php

return array(

	// Slack room credentials
	'url'      => '',
	'username' => '',
	'room'     => '',

	// Message
	// You can use the following variables :
	// 1: User deploying
	// 2: Branch
	// 3: Connection and stage
	// 4: Host
	// 5: Revision
	// 6: Remote origin URL (only git)
	// 7: Release number
	// 8: Release path
	'before_before'  => '{1} is deploying "{2}" on "{3}"',
	'after_after'    => '{1} finished deploying "{2}" on "{3}"',
	'before_deploy'  => '{1} is deploying "{2}" on "{3}" ({4})',
	'after_deploy'   => '{1} finished deploying branch "{2}" on "{3}" ({4})',
	'after_rollback' => '{1} rolled back branch "{2}" on "{3}" to previous version ({4})',

/* or
	'before_deploy'  => array('fallback' => '{1} is deploying "{2}" on "{3}" ({4})...',
				'pretext' => '',
				'title' => '{1} on "{3}" ({4})',
				'title_link' => '',
				'text' => 'deploying "{2}" on "{3}" ({4})',
				'color' => '#00FFDD'),

*/

	// Default emoji to use as the bot's avatar
	'emoji'   => 'rocket',

);