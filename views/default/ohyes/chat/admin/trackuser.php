<?php
/**
 * OhYesChat
 * @website Link: https://github.com/lianglee/OhYesChat
 * @Package Ohyes
 * @subpackage Chat
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */ 
$from = get_user_by_username(get_input('msgfrom'));
$to = get_user_by_username(get_input('msgto'));
$var['to'] = $to;
$var['from'] = $from;
$var['messages'] = array_reverse(OhYesChat::getMessages($from->guid ,$to->guid));
echo elgg_view('ohyes/chat/track', $var);	
