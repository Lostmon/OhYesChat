<?php
/**
 * OhYesChat
 * @website Link: https://informatikon.com
 * @package Informatikon.Elgg
 * @subpackage Chat
 * @author $arsalanshah.informatikon
 * @copyright All right reserved Informatikon Technologies 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */ 
?>
<div class="ChatTab" id="ohyeschat-window-<?php echo $vars['friend']['guid'];?>">
         <div class="Tab-Title" style="display:none;" id="OhYesChat-Tab-<?php echo $vars['friend']['guid'];?>">
               <div class="OhYesChat-Titles">
                   <div class="OhYesChat-Inline-Table text"><?php echo OhYesChat::sttl($vars['friend']['name'], 23);?></div>
                  <div class="OhYesChat-Inline-Table options"> 
                    <div class=" OhYesChat-Inline-Table OhYesChat-Icon-Expend" title="Popout Chat" onclick="OhYesChat.Expand('<?php echo $vars['friend']['username'];?>')"></div> 
                    <div class="OhYesChat-Inline-Table item" style="width: 17px;margin-right: -4px;text-align: center;"> X </div>
                 </div>

               </div>
               <div class="icons" id="ohyes-smiles-u<?php echo $vars['friend']['guid'];?>" style="background: #FFF;width: 219px;min-height: 40px;padding: 5px;position: fixed;border: 1px solid #CCC;display:none;"> Icons </div>
            <div id="ohyes-chat-data-messages-<?php echo $vars['friend']['guid'];?>" class="data">
<?php
/**
 * OhYesChat
 * @website Link: https://informatikon.com
 * @package Informatikon.Elgg
 * @subpackage Chat
 * @author $arsalanshah.informatikon
 * @copyright All right reserved Informatikon Technologies 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */  
			  if($vars['xhr'] == 'false'){  
			  $login = elgg_get_logged_in_user_entity()->guid;
			  $messages = OhYesChat::getMessages($login, $vars['friend']->guid); 
			  foreach(array_reverse($messages) as $umessages){
			  if($umessages->sender == elgg_get_logged_in_user_entity()->guid){
				  $icon = '';
			  } else {
			  $icon = elgg_view("icon/default", array(
														'entity' => get_user($umessages->sender), 
														'size' => 'small',
									));			
			  }
			  $user_msgs[] = elgg_view('ohyes/chat/message-item', array(
																		'icon' => $icon,
																		'message' => OhYesChat::replaceIcon($umessages->message),
																		'sender' => $umessages->sender
																	  ));	
			  }
			   echo implode('', $user_msgs);
			 }
			   ?>
                      
              </div>   
          </div>
         <div class="inner" onClick="OhYesChat.TabOpen('<?php echo $vars['friend']['guid'];?>', this);">
               <div class="box" style="display:none;">
               <script>OhYesChat.Form(<?php echo $vars['friend']['guid'];?>); </script>
               <form id="ohyeschat-form-<?php echo $vars['friend']['guid'];?>" method="post">
               <input type="text" name="message" id="mbox" autocomplete="off" />
               <div class="ohyeschat-message-sending"><div class="OhYesChat-Icon-LoadingSmall"></div></div>
               <div class="options OhYesChat-Inline-Table" style="margin-left: 225px;height: 27px;margin-top: 2px;width: 22px;background: #FFF;position: absolute;">
                        <div class="OhYesChat-Inline-Table OhYesChat-Icon-Smilies" onClick="OhYesChat.ShowSmilies(<?php echo $vars['friend']['guid'];?>);" style="margin-top: 5px;"></div>
                </div>
               <input type="hidden" name="friend" value="<?php echo $vars['friend']['guid'];?>" />
               </form>
                </div>
                <div class="ohyeschat-new-message">
                              <div class="OhYesChat-Icon-NewMessage" style="display:inline-table;"></div>
                              <div class="text"  style="display:inline-table;"></div>
                        </div>     
            <div class="<?php echo OhYesChat::getStatusClass($vars['friend']['guid']);?> ohyeschat-uinfo" id="ohyeschat-ustatus-<?php echo $vars['friend']['guid'];?>">
                        <div class="OhYesChat-Tab-Text" style="display:inline-table;"><?php echo OhYesChat::sttl($vars['friend']['name'], 17);?></div>
            </div> 
          </div>
     </div>