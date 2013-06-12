<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
if(!defined('USER_WIDTH')) { define('USER_WIDTH','width:95%'); }

$FORUMPOLLPOSTED ="
<table style='".USER_WIDTH."' class='fborder table'>
<tr>
	<td class='fcaption' colspan='2'>".LAN_FORUM_3043."</td>
</tr>
<tr>
	<td style='text-align:right; vertical-align:middle; width:20%' class='forumheader2'>".IMAGE_e."&nbsp;</td>
	<td style='vertical-align:middle; width:80%' class='forumheader2'>
		<br />".LAN_FORUM_3045."<br />
		<span class='defaulttext'><a class='forumlink' href='{$threadLink}'>".LAN_FORUM_3046."</a><br />
		<a class='forumlink' href='{$forumLink}'>".LAN_FORUM_3044."</a></span><br /><br />	
	</td>
</tr>
</table>";

$FORUMTHREADPOSTED = "
<table style='".USER_WIDTH."' class='fborder table'>
<tr>
	<td class='fcaption' colspan='2'>".LAN_FORUM_3043."</td>
</tr>
<tr>
	<td style='text-align:right; vertical-align:middle; width:20%' class='forumheader2'>".IMAGE_e."&nbsp;</td>
	<td style='vertical-align:middle; width:80%' class='forumheader2'>
		<br />".LAN_FORUM_3047."<br />
		".(defined('F_MESSAGE') ? F_MESSAGE.'<br />' : '')."
		<span class='defaulttext'><a href='{$threadLink}'>".LAN_FORUM_3047."</a><br />
		<a href='{$forumLink}'>".LAN_FORUM_3044."</a></span><br /><br />
	</td>
</tr>
</table>";


$FORUMREPLYPOSTED = "
<table style='".USER_WIDTH."' class='fborder table'>
<tr>
	<td class='fcaption' colspan='2'>".LAN_FORUM_3043."</td>
</tr>
<tr>
	<td style='text-align:right; vertical-align:middle; width:20%' class='forumheader2'>".IMAGE_e."&nbsp;</td>
	<td style='vertical-align:middle; width:80%' class='forumheader2'>
		<br />".LAN_FORUM_3049."<br />
		".(defined('F_MESSAGE') ? F_MESSAGE.'<br />' : '')."
		<span class='defaulttext'><a href='{$threadLink}'>".LAN_FORUM_3048."</a><br />
		<a href='{$forumLink}'>".LAN_FORUM_3044."</a></span><br /><br />
	</td>
</tr>
</table>";

?>