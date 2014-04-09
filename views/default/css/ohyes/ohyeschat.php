/**
 * OhYesChat
 * @website Link: https://github.com/lianglee/OhYesChat
 * @Package Ohyes
 * @subpackage Chat
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */ 
/****************************
 OhYesChat
*****************************/
.OhYesChat{
   border-bottom: 0;
   bottom: 0px;
   left: 15px;
   display: block;
   font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
   font-size: 11px;
   height: 29px;
   position: fixed;
   text-align: left;
   z-index: 1028;
   margin-top: 8px;
   width:1000px;
   left:15%;
}
.OhYesChat .ChatBar {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 200px;
   float: right;
}

.OhYesChat .ChatNotification {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 43px;
   float: right;
}
.OhYesChat .ChatNotification .inner {
    padding: 11px;
    margin-left: 5px;
    background: #EBEEF4;
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
    border: 1px solid #BAC0CD;
    height: 29px;
}
.OhYesChat .ChatNotification .inner .text{
   margin-top: -20px;
   background: #8F4040;
   color: #FFF;
   text-align:center;
   font-weight: bold;
   width: 18px;
   margin-left: -5px;
   padding: 3px;
   border-radius: 20px;
}
.OhYesChat .ChatBar .inner {
   padding: 6px;
   margin-left: 5px;
   background: #EBEEF4;
   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
   border: 1px solid #BAC0CD;
   height: 29px;
   border-radius:4px;
}
.OhYesChat .ChatBar .inner:hover {
   background: #FDFEFF;
}

.OhYesChat-Inner-Text {
   margin-left: 20px;
   font-weight: bold;
}
.OhYesChat-Tab-Text {
   margin-left: 12px;
   font-weight: bold;
   width: 157px;
}
.OhYesChat .ChatTab {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 180px;
   float: right;
}
.OhYesChat .ChatTab .inner {
   padding: 6px;
   margin-left: 5px;
   background: #EBEEF4;
   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
   border: 1px solid #BAC0CD;
   height: 29px;
   border-radius: 4px;
}
.OhYesChat .ChatTab .inner .box {
   margin-top: -7px;
   width: 247px;
   margin-left: -6px;
}
.OhYesChat .ChatTab .inner .box input{
 border-radius: 0px;
 background: none repeat scroll 0% 0% #FFF;
 border: medium none;
 width: 225px;
 height: 28px;
 margin-top: 1px;
 position: absolute;
}
.OhYesChat .ChatTab .inner:hover {
   background: #FDFEFF;
}
.OhYesChat .data {
  overflow: -moz-scrollbars-vertical; 
  overflow-y: scroll;
  height: 245px;
  border-left: 2px solid #BAC0CD;
  border-right: 2px solid #BAC0CD;
}
.ohyeschat-new-message {
  float: right;
  margin-top: 0px;
  margin-right: 2px;
  position: absolute;
  margin-left: 147px;
  display:none;
}
.ohyeschat-new-message .text{
  font-weight: bold;
  margin-left: 2px;
  margin-top: -23px;
  color: #fff;
  position: absolute;
}
.OhYesChat-Inner-Text {
   margin-left: 20px;
   font-weight: bold;
}
.friends-list {
  background: #F2F3F5;
  width: 195px;
  min-height: 268px; 
  margin-top: -268px; 
  margin-left: 5px;
  position: fixed;
  height: 268px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.friends-list .data {
 overflow: auto;
 height: 245px;
 border-left: 1px solid #CCC;
 border-right: 1px solid #CCC;
}
#chat-count-message {
 margin-top:-20px;
 display:none;
}
.friends-list-item {
 margin: 5px 5px 5px 5px;
}
.friends-list-item .icon{
display: inline-table;
}
.friends-list-item:hover{
	background:#eee;
    height:29px;
}
.friends-list-item .name{ 
 margin-top: -25px;
 margin-left: 33px;
}
.friends-list-item .OhYesChat-Icon-Onine{
  float: right;
  margin-right: 4px;
  margin-top:-17px;
}

.Tab-Title {
  background: #F2F3F5;
  width: 250px;
  min-height: 278px;
  margin-top: -278px;
  margin-left: 5px;
  position: fixed;
  height: 268px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.Tab-Title .message-item .ohyeschat-message-text{
 margin-top: -38px;
 margin-left: 51px;
 width: 165px;
 background-image: -webkit-linear-gradient(bottom, #F2F2F2, #FFF);
 background-color: #F7F7F7; 
 border: 1px solid #DFDFDF;
 border: 1px solid rgba(0, 0, 0, 0.18);
 border-bottom-color: rgba(0, 0, 0, 0.29);
 -webkit-border-radius: 4px;
 -webkit-box-shadow: 0 1px 0 #DCE0E6;
 padding:3px;
}
.Tab-Title .message-item .icon{
 padding:5px;
 height:40px;
 width:40px;
}
.ohyeschat-triangle {
 border-top: 5px solid rgba(0, 0, 0, 0);
 border-bottom: 5px solid rgba(0, 0, 0, 0);
 margin-left: 46px;
 margin-top: -32px;

}
.ohyeschat-triangle-white { 
 float: left;
 border-right: 5px solid #B8B8B8;
}	
.ohyeschat-triangle-blue {
 float:right;
 border-left: 5px solid #AFD0FE;
}
.Tab-Title .message-item .ohyeschat-message-text-sender{
 background-color: #DBEDFE;
 background-image: url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/message-bg-sender.png") repeat-x;
 background-image: -webkit-gradient(linear, center bottom, center top, from(#C7DEFE), to(#E7F1FE));
 background-image: -webkit-linear-gradient(bottom, #C7DEFE, #E7F1FE);
 
 border: 1px solid #DFDFDF;
 border: 1px solid rgba(0, 0, 0, 0.18);
 border-bottom-color: rgba(0, 0, 0, 0.29);
 
 -webkit-border-radius: 4px;
 -webkit-box-shadow: 0 1px 0 #DCE0E6;
 
 padding:3px;
 margin-top: -38px;
 margin-left: 51px;
 width: 165px;
}

.OhYesChat-Titles {
 background: #4C66A4;
 padding: 5px;
 background-image: url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/chat-title-bg.png");
 border: 1px solid #3C5998;
 border-top-left-radius: 4px;
 border-top-right-radius: 4px;
}

.OhYesChat-Inline-Table {
  display: inline-table;	
}
.OhYesChat-Titles .options {
  float: right;
  margin-right: 10px;
  color: #FFF;
  margin-top: 2px;
  font-size: 12px;
  cursor:pointer;
}
.OhYesChat-Titles .options .item:hover{
 background: #5E72A2;
 width: 17px;
 margin-right: -4px;
 text-align: center;
}
.OhYesChat-Titles:hover {
	background:#4C66A4;
}

.OhYesChat-Titles .text {
  color: #FFF;
  font-weight: bold;
  margin-left: 9px;
  padding: 2px;
}
.notification-window {
   margin-top: -332px;
   margin-left: -196px;
   border: 1px solid #CCC;
   background: #F2F3F5;
   border-top-left-radius: 4px;
   border-top-right-radius: 4px;
}
.notification-window .data {
 overflow: overlay;
 height: 245px;
}
.ohyeschat-message-sending {
 background: #FFF; 
 border: medium none;
 width: 225px;
 height: 28px;
 margin-top: 1px;
 padding: 10px;
 display:none;
 position: absolute;
}
.ohyes-chat-expand {
width: 660px;
margin: 0 auto;
overflow: auto;
height: 600px;
}
.message-item-expand {
border-bottom:1px solid rgba(0, 0, 0, 0.29);
padding: 3px;	
margin-bottom: 16px;
-moz-box-shadow: 0 0 10px #EEE;
-webkit-box-shadow: 0 0 10px #EEE;
box-shadow: 0 0 10px #EEE;
}
.message-item-expand .icon{
	display:inline-table;
}
.message-item-expand .message{
	display:inline-table;
	width: 570px;
    margin-top: -21px;
    margin-left: 5px;
}
/****************************
 OhYesChat Icons
*****************************/
.OhYesChat-Icon-UserOnine {
   background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/useronline.png") no-repeat;
   width16px;
   height:14px;
}
.OhYesChat-Icon-Onine{
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/online.png") no-repeat;
  width:9px;
  height:14px;
}
.OhYesChat-Icon-Notification{
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/notification.png") no-repeat;
  width13px;
  height:13px;
}
.ohyes-chat-loading {
  padding: 100px;
}
.OhYesChat-Icon-Loading {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/loading.gif") no-repeat;
  width32px;
  height:32px;
}

.OhYesChat-Icon-NewMessage {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/new.png") no-repeat;
  width:16px;
  height:16px;
}
.OhYesChat-Icon-Smilies {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/smilies.png") no-repeat;
  width:14px;
  height:14px;
}
.OhYesChat-Icon-Smilies:hover {
 opacity:0.7;
}
.OhYesChat-Icon-LoadingSmall {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/loading-small.gif") no-repeat;
  width:16px;
  height:11px;
}
.OhYesChat-Icon-Expend {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/popup.png") no-repeat;
  width:10px;
  height:11px;
  margin-right:8px;
}
.OhYesChat-Icon-Expend:hover{
  opacity:0.9;
}




