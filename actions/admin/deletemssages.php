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
 
$delete  = new OhYesChat;
if($delete->messagesDelete()){
	$delete->forwardSystemMessage('Message has been deleted');
} 
else {
	$delete->forwardSystemMessage('Please try again later');
}

forward(REFERER);