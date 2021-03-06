<?php
/**
 * Ohyes Theme
 * @website Link: https://github.com/lianglee/OhYesTheme
 * @Package Ohyes
 * @subpackage Theme
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
*/ 
$friends = OhYesChat::OnlineFriends($vars['entity']);
foreach ($friends as $friend){
				$icon = elgg_view("icon/default", array(
														'entity' => get_user($friend->guid), 
														'size' => 'tiny',
														));  
				if($vars['mobile'] !== true){
 				$users[] = elgg_view('ohyes/chat/freinds-item', array(
																	 'icon' => $icon,
																	 'entity' => $friend
																	 ));
				} elseif($vars['mobile'] == true){
					$users[] = elgg_view('ohyes/mobilechat/freinds-item', array(
																	 'icon' => $icon,
																	 'entity' => $friend
																	 ));
			} 
} 
$users = implode('', $users);
if(empty($users)){
 $users = '<p style="padding:10px;">'.elgg_echo('ohyes:chat:no:online').'</p>';	
}
echo $users;	
