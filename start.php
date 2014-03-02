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

include_once(elgg_get_plugins_path().'OhYesChat/classes/ohyeschat.class.php');

global $OhYesChat;
if (!isset($OhYesChat)) {
	$OhYesChat = new stdClass;
}

elgg_register_event_handler('init', 'system', 'OhYesChat');
/**
* Init the OhYesChat
*
* @access system
* @return null;
*/
function OhYesChat(){
   elgg_register_simplecache_view('css/ohyes/ohyeschat');
   $ohyescss = elgg_get_simplecache_url('css', 'ohyes/ohyeschat');
   elgg_register_css('ohyeschat.css', $ohyescss);
   
   elgg_register_simplecache_view('js/ohyes/ohyescha');
   $ohyesjs = elgg_get_simplecache_url('js', 'ohyes/ohyeschat');
   elgg_register_js('ohyeschat.js', $ohyesjs);
   
   elgg_register_page_handler('ohyeschat', 'ohyeschat_page_handler');
   if(elgg_is_logged_in()){
   elgg_extend_view('page/elements/foot', 'ohyes/chat/bar');
   OhYesChat::loadCss();
   OhYesChat::loadJs();
   }
   run_function_once('ohyeschat_setup');
   elgg_extend_view('page/elements/body', 'ohyes/header/chat', 1);
   elgg_extend_view('page/elements/body', 'ohyes/chat/sound');

}
/**
 * OhYesChat Page Setup;
 *  URLs take the form of
 *  Boot:       ohyeschat/boot/ohyeschat.boot.js
 *  Notifications:    ohyeschat/notif
 *  Freinds:   ohyeschat/friends
 *  New tab : ohyeschat/newtab
 *  actions:       {
 *      Send Message:        oyeschat/action/send
 *      Refresh the tab:       ohyeschat/action/refresh
 *      Remove the tab :    ohyeschat/action/removetab/<id of tab>
 *
 * Title is ignored
 *
 *
 * @param array $page
 * @return bool
 */
function ohyeschat_page_handler($page){
	$plugin = elgg_get_plugins_path().'OhYesChat/';
	if(!isset($page[0])){
		    $page[0] = 'friends';
	}
	$user = elgg_get_logged_in_user_entity();
	if(empty($user->username)){
	   return false;	
	}
	switch ($page[0]) {

        case 'bootsys':
		  echo elgg_view('ohyes/header/chat');
		break;
		case 'boot':
		if($page[1] == 'ohyeschat.boot.js'){
		    header('Content-Type: text/javascript');
			echo elgg_view('js/ohyes/chat');
		}
        break;
		case 'notif':
		    header('Content-Type: application/json'); 
			$messages = elgg_view('ohyes/chat/messages');
			if(empty($messages)){
			   $messages = '<p style="padding:10px;">'.elgg_echo('ohyes:chat:no:message').'</p>';				   
		     }
		    echo json_encode(array(
							   'messages' => $messages,
							   'count' => ''
							));
        break;
		case 'friends':
		    header('Content-Type: application/json'); 
		    echo json_encode(array(             
								 'friends' =>  elgg_view('ohyes/chat/friends', array(
													   'entity' => elgg_get_logged_in_user_entity()
													   ))
								 ));
        break;

        case 'newtab':
		if(empty($page[1])){
		     exit;	
		} 
		else {
	      if(!in_array($page[1], $_SESSION['ohyes_chat'])){ 		
		      $_SESSION['ohyes_chat'][] = $page[1];
		   }
		}
		    $friend = get_user($page[1]);
		    echo elgg_view('ohyes/chat/selectfriend', array(
													   'friend' => $friend
													   ));
			global $CONFIG;	
			$login = elgg_get_logged_in_user_entity()->guid;
            update_data("UPDATE {$CONFIG->dbprefix}ohyes_chat SET view='1' WHERE(sender='$page[1]' AND reciever='{$login}')");
        break;
		
		case 'action':
		if(empty($page[1]) || !in_array($page[1], OhYesChat::actions())){
		     exit;	
		}
		if($page[1] == 'send'){	
			require_once("{$plugin}actions/send.php");
		}
		if($page[1] == 'refresh'){	
			require_once("{$plugin}actions/refresh.php");
			$login = elgg_get_logged_in_user_entity()->guid;
            $friend = get_input('friend');
			global $CONFIG;	
			update_data("UPDATE {$CONFIG->dbprefix}ohyes_chat SET view='1' WHERE(sender='{$friend}' AND reciever='{$login}')");
	     }
		
		 if($page[1] == 'removetab'){
			        $uid = array_search($page[2],  $_SESSION['ohyes_chat']);
			        unset($_SESSION['ohyes_chat'][$uid]);
			        echo 'removed';
		}
		
        break;
	   
	   default:
			return false;
	}
	return true;
}
/**
* Setup Chat;
*
* @access system
* @return null;
*/
function ohyeschat_setup(){
   $Setup = new OhYesChat;
   $Setup->Setup();
}