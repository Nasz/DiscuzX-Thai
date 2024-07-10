<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_notification.php 33824 2013-08-19 08:26:11Z nemohou $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'type_wall' => 'ฝากข้อความ',
	'type_piccomment' => 'เมนท์รูปภาพ',
	'type_blogcomment' => 'ความคิดเห็นในบล็อก',
	'type_clickblog' => 'คำชี้แจงบล็อก',
	'type_clickarticle' => 'คำชี้แจงบทความ',
	'type_clickpic' => 'ไลค์รูปภาพ',
	'type_sharecomment' => 'แบ่งปันเมนท์',
	'type_doing' => 'สมุดโน๊ต',
	'type_friend' => 'เพื่อน',
	'type_credit' => 'เครดิต',
	'type_bbs' => 'เว็บบอร์ด',
	'type_system' => 'ระบบ',
	'type_thread' => 'กระทู้',
	'type_task' => 'ภารกิจ',
	'type_group' => 'คลับ',

	'mail_to_user' => 'มีการแจ้งเตือนใหม่',
	'showcredit' => '{actor} จะให้แต้มการเสนอราคา {credit} แก่คุณเพื่อช่วยปรับปรุงอันดับของคุณใน <a href="misc.php?mod=ranklist&type=member" target="_blank">รายการจัดอันดับการเสนอราคา</a>',
	'share_space' => '{actor} แบ่งปันสเปซของคุณ',
	'share_blog' => '{actor} แบ่งปันบล็อกของคุณ <a href="{url}" target="_blank">{subject}</a>',
	'share_album' => '{actor} แบ่งปันอัลบั้มรูปภาพของคุณ <a href="{url}" target="_blank">{albumname}</a>',
	'share_pic' => '{actor} แบ่งปันรูปภาพ จากอัลบั้ม<a href="{url}" target="_blank">{albumname}</a>ของคุณ',
	'share_thread' => '{actor} แบ่งปันโพสต์ของคุณ <a href="{url}" target="_blank">{subject}</a>',
	'share_article' => '{actor} แบ่งปันบทความของคุณ <a href="{url}" target="_blank">{subject}</a>',
	'magic_present_note' => 'ให้พร็อพแก่คุณ <a href="{url}" target="_blank">{name}</a>',
	'friend_add' => '{actor} เป็นเพื่อนกับคุณ',
	'friend_request' => '{actor} ขอคุณเป็นเพื่อน{note}&nbsp;&nbsp;<a onclick="showWindow(this.id, this.href, \'get\', 0);" class="xw1" id="afr_{uid}" href="{url}">ยอมรับ</a>',
	'doing_reply' => '{actor} ตอบกลับ<a href="{url}" target="_blank">บันทึก</a>ของคุณ ',
	'wall_reply' => '{actor} ตอบกลับ<a href="{url}" target="_blank">ข้อความ</a>ของคุณ',
	'pic_comment_reply' => '{actor} ตอบกลับ<a href="{url}" target="_blank">ความคิดเห็นรูปภาพ</a>ของคุณ',
	'blog_comment_reply' => '{actor} ตอบกลับ<a href="{url}" target="_blank">ความคิดเห็นบล็อก</a>ของคุณ',
	'share_comment_reply' => '{actor} ตอบกลับ<a href="{url}" target="_blank">ความคิดเห็นแบ่งปัน</a>ของคุณ',
	'wall' => '{actor} ฝาก<a href="{url}" target="_blank">ข้อความ</a>ถึงคุณบนกระดานข้อความ',
	'pic_comment' => '{actor} แสดงความคิดเห็นเกี่ยวกับ<a href="{url}" target="_blank">รูปภาพ</a>ของคุณ',
	'blog_comment' => '{actor} แสดงความคิดเห็นในโพสต์<a href="{url}" target="_blank">{subject}</a>ของคุณ',
	'share_comment' => '{actor} แสดงความคิดเห็นเกี่ยวกับ<a href="{url}" target="_blank">การแบ่งปัน</a>ของคุณ',
	'click_blog' => '{actor} แสดงความคิดเห็นในบล็อก<a href="{url}" target="_blank">{subject}</a>ของคุณ',
	'click_pic' => '{actor} แสดงความคิดเห็นเกี่ยวกับ<a href="{url}" target="_blank">ภาพ</a>ของคุณ',
	'click_article' => '{actor} แสดงความคิดเห็นในบทความ<a href="{url}" target="_blank">{subject}</a>ของคุณ',
	'show_out' => '{actor} หลังจากเยี่ยมชมหน้าแรกของคุณแล้ว จุดสุดท้ายของคุณในรายการอันดับการประมูลก็ถูกใช้ไปเช่นกัน',
	'puse_article' => 'ยินดีด้วย คุณถูกเพิ่มเข้าไปในรายการบทความ<a href="{url}" target="_blank">{subject}</a>แล้ว <a href="{newurl}" target="_blank">คลิกเพื่อดู</a>',

	'group_member_join' => 'มีการเพิ่ม {actor} ในแวดวง<a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a>ของคุณต้องมีการตรวจสอบ โปรดไปที่<a href="{url}" target="_blank">ศูนย์การจัดการแวดวง</a>เพื่อตรวจสอบ',
	'group_member_invite' => '{actor} เชิญคุณเข้าร่วมกลุ่ม<a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a> <a href="{url}" target="_blank">คลิกที่นี่เพื่อเข้าร่วมทันที</a>',
	'group_member_check' => 'คุณได้ผ่านการตรวจสอบของกลุ่ม<a href="{url}" target="_blank">{groupname}</a>แล้ว โปรด<a href="{url}" target="_blank">คลิกที่นี่</a>เพื่อเยี่ยมชม',
	'group_member_check_failed' => 'คุณไม่ได้รับการอนุมัติสำหรับกลุ่ม<a href="{url}" target="_blank">{groupname}</a>',
	'group_mod_check' => 'กลุ่ม<a href="{url}" target="_blank">{groupname}</a>ที่คุณสร้างได้รับการอนุมัติแล้ว โปรด<a href="{url}" target="_blank">คลิกที่นี่</a>เพื่อเยี่ยมชม',

	'reason_moderate' => 'หัวข้อของคุณ <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ถูกตรวจสอบโดย {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_merge' => 'หัวข้อของคุณ <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ถูกผสานโดย {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_post' => 'โพสต์ของคุณ <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ถูกลบ {actor} เพราะ <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_comment' => 'ความคิดเห็นของคุณ <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> ถูกลบ {actor} เพราะ <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_ban_post' => 'หัวข้อของคุณ <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ถูกแบนโดย {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_warn_post' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} {modaction}<br />
连续 {warningexpiration} 天内累计 {warninglimit} 次警告，您将被自动禁止发言 {warningexpiration} 天。<br />
截止至目前，您已被警告 {authorwarnings} 次，请注意！<div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_move' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 移动到 <a href="forum.php?mod=forumdisplay&fid={tofid}" target="_blank">{toname}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_copy' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 复制为 <a href="forum.php?mod=viewthread&tid={threadid}" target="_blank">{subject}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_remove_reward' => '您的悬赏主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 撤销 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_update' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 添加了图章 {stamp} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_delete' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 撤销了图章 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_update' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 添加了图标 {stamp} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_delete' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 撤销了图标 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickreply' => '您在主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 的回帖被 {actor} 置顶 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickdeletereply' => '您在主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 的回帖被 {actor} 撤销置顶 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_quickclear' => '您的{cleartype} 被 {actor} 清除 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_live_update' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 设置为直播贴 <div class="quote"><blockquote>{reason}</blockquote></div>',
	'reason_live_cancle' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 取消直播 <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modthreads_delete' => '您发表的主题 {threadsubject} 已由管理团队 {modusername} 审核拒绝，现已被删除！',

	'modthreads_delete_reason' => '您发表的主题 {threadsubject} 已由管理团队 {modusername} 审核拒绝，现已被删除！<div class="quote"><blockquote>{reason}</blockquote></div>',
	'modthreads_validate' => '您发表的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{threadsubject}</a> 已由管理团队 {modusername} 审核通过！ &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'modreplies_delete' => '您发表的回复已由管理团队 {modusername} 审核拒绝，现已被删除！ <p class="summary">回复内容：<span>{post}</span></p>',

	'modreplies_delete_reason' => '您发表的回复已由管理团队 {modusername} 审核拒绝，现已被删除！ <p class="summary">回复内容：<span>{post}</span></p><div class="quote"><blockquote>{reason}</blockquote></div>',

	'modreplies_validate' => '您发表的回复已由管理团队 {modusername} 审核通过！ &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a> <p class="summary">回复内容：<span>{post}</span></p>',

	'transfer' => '您收到一笔来自 {actor} 的积分转账 {credit} &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=log&suboperation=creditslog" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>
<p class="summary">{actor} 说：<span>{transfermessage}</span></p>',

	'addfunds' => '您提交的积分充值请求已完成，相应数额的积分已存入您的积分账户 &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>
<p class="summary">订单号：<span>{orderid}</span></p><p class="summary">支出：<span>人民币 {price} 元</span></p><p class="summary">收入：<span>{value}</span></p>',

	'rate_reason' => '您在主题 <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> 的帖子被 {actor} 评分 {ratescore} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'recommend_note_post' => '恭喜，您的帖子 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被编辑采用',

	'rate_removereason' => '您在主题 <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> 中帖子的评分 {ratescore} <div class="quote"><blockquote>{reason}</blockquote></div> 被 {actor} 撤销',

	'trade_seller_send' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 购买您的商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>，对方已付款，等待您发货 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'trade_buyer_confirm' => '您购买的商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>，<a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> 已发货，等待您确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'trade_fefund_success' => '商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 已退款成功 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">评价 &rsaquo;</a>',

	'trade_success' => '商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 已交易成功 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">评价 &rsaquo;</a>',

	'trade_order_update_sellerid' => '卖家 <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> 修改了商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 的交易单，请确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'trade_order_update_buyerid' => '买家 <a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 修改了商品 <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> 的交易单，请确认 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'eccredit' => '与您交易的 {actor} 已对您作了评价 &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">回评 &rsaquo;</a>',

	'activity_notice' => '{actor} 申请加入您举办的活动 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>，请审核 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'activity_apply' => 'ผู้สนับสนุน {actor} ได้อนุมัติให้เข้าร่วมกิจกรรม <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_replenish' => 'ผู้สนับสนุน {actor} แจ้งให้คุณทราบว่า คุณจำเป็นต้องกรอกข้อมูลการลงทะเบียนกิจกรรม <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> ให้ครบถ้วน &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_delete' => 'ผู้สนับสนุน {actor} แจ้งให้คุณทราบว่า คุณถูกปฏิเสธไม่ให้เข้าร่วมกิจกรรม <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">ตรวจสอบ &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_cancel' => '{actor} ได้ยกเลิกการเปิดให้เข้าร่วมกิจกรรม <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">ตรวจสอบ &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_notification' => 'ผู้สนับสนุน {actor} ได้ส่งการแจ้งเตือนเกี่ยวกับกิจกรรม <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบกิจกรรม &rsaquo;</a> <div class="quote"><blockquote>{msg}</blockquote></div>',

	'reward_question' => '您的悬赏主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被 {actor} 设置了最佳答案 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'reward_bestanswer' => '您的回复被悬赏主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 的作者 {actor} 选为最佳答案 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'reward_bestanswer_moderator' => '您在悬赏主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 的回复被选为最佳答案 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'comment_add' => '{actor} 点评了您曾经在主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 发表的帖子 &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

	'reppost_noticeauthor' => '{actor} ตอบกลับโพสต์ของคุณ <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">ตรวจสอบ</a>',

	'task_reward_credit' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得积分 {creditbonus} &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">ตรวจสอบเครดิตของฉัน &rsaquo;</a></p>',

	'task_reward_magic' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得道具 <a href="home.php?mod=magic&action=mybox" target="_blank">{rewardtext}</a> {bonus} 张',

	'task_reward_medal' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得勋章 <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> 有效期 {bonus} วัน',

	'task_reward_medal_forever' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得勋章 <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> 永久有效',

	'task_reward_invite' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得<a href="home.php?mod=spacecp&ac=invite" target="_blank">邀请码 {rewardtext}个</a> 有效期 {bonus} วัน',

	'task_reward_group' => 'ยินดีด้วย ภารกิจสำเร็จแล้ว：<a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>，获得用户组 {rewardtext} 有效期 {bonus} วัน &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">看看我能做什么 &rsaquo;</a>',

	'user_usergroup' => 'คุณได้กลายเป็น {usergroup} &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">看看我能做什么 &rsaquo;</a>',

	'grouplevel_update' => '恭喜您，您的群组 {groupname} 已升级到 {newlevel}。',

	'thread_invite' => '{actor} 邀请您{invitename} <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',
	'blog_invite' => '{actor} เชิญชวนให้คุณดูบล็อก่ <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a> &nbsp; <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',
	'article_invite' => '{actor} เชิญชวนคุณดูบทความ <a href="{url}" target="_blank">{subject}</a> &nbsp; <a href="{url}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',
	'invite_friend' => 'ยินดีด้วยที่เชิญ {actor} สำเร็จ และเขาได้กลายเป็นเพื่อนของคุณแล้ว',

	'poke_request' => '<a href="{fromurl}" class="xi2">{fromusername}</a>: <span class="xw0">{pokemsg}&nbsp;</span><a href="home.php?mod=spacecp&ac=poke&op=reply&uid={fromuid}&from=notice" id="a_p_r_{fromuid}" class="xw1" onclick="showWindow(this.id, this.href, \'get\', 0);">回打招呼</a><span class="pipe">|</span><a href="home.php?mod=spacecp&ac=poke&op=ignore&uid={fromuid}&from=notice" id="a_p_i_{fromuid}" onclick="showWindow(\'pokeignore\', this.href, \'get\', 0);">忽略</a>',

	'profile_verify_error' => '{verify}资料审核被拒绝,以下字段需要重新填写:<br/>{profile}<br/>เหตุผลในการปฏิเสธ:{reason}',
	'profile_verify_pass' => '恭喜您，您填写的{verify}资料审核已通过',
	'profile_verify_pass_refusal' => '很遗憾，您填写的{verify}资料审核已被拒绝',
	'member_ban_speak' => '您已被 {user} 禁止发言，ระยะ：{day}天(0：代表永久禁言)，เหตุผลในการห้าม：{reason}',
	'member_ban_visit' => '您已被 {user} 禁止访问，ระยะ：{day}天(0：代表永久禁止访问)，เหตุผลในการห้ามการเข้าถึง：{reason}',
	'member_ban_status' => '您已被 {user} 锁定，เหตุผลในการล็อก：{reason}',
	'member_change_usergroup' => '您已被 {user} 修改为 {groupname} 用户组，ระยะ：{day} (0：代表永久生效)，扩展组信息为 {extgroupinfo}，并应操作者要求告知您相关变动，เหตุผลในการดำเนินการ：{reason}',
	'member_change_credits' => '您已被 {user} 调整积分，积分类型与调整值为 {extcredits} ，并应操作者要求告知您相关变动，เหตุผลในการดำเนินการ：{reason}',

	'member_follow' => 'คนที่คุณติดตามมีโพสต์ใหม่ {count} โพสต์<a href="home.php?mod=follow">คลิกเพื่อดู</a>',
	'member_follow_add' => '{actor} ติดตามคุณ<a href="home.php?mod=follow&do=follower">คลิกเพื่อดู</a>',

	'member_moderate_invalidate' => 'บัญชีของคุณไม่ผ่านการตรวจสอบของผู้ดูแลระบบ กรุณาส่ง<a href="home.php?mod=spacecp&ac=profile">ข้อมูลการลงทะเบียน</a>อีกครั้ง<br />ข้อความของผู้ดูแลระบบ: <b>{remark}</b>',
	'member_moderate_validate' => 'บัญชีของคุณได้รับการอนุมัติแล้ว<br />ข้อความจากผู้ดูแลระบบ: <b>{remark}</b>',
	'member_moderate_invalidate_no_remark' => 'บัญชีของคุณไม่ผ่านการตรวจสอบของผู้ดูแลระบบ กรุณาส่ง<a href="home.php?mod=spacecp&ac=profile">ข้อมูลการลงทะเบียน</a>อีกครั้ง',
	'member_moderate_validate_no_remark' => 'บัญชีของคุณได้รับการอนุมัติแล้ว',
	'manage_verifythread' => 'มีกระทู้ใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=threads&dateline=all">ตรวจสอบตอนนี้</a>',
	'manage_verifypost' => 'มีโพสต์ใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=replies&dateline=all">ตรวจสอบตอนนี้</a>',
	'manage_verifyuser' => 'มีสมาชิกใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=members">ตรวจสอบตอนนี้</a>',
	'manage_verifyblog' => 'มีบล็อก่ใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=blogs">ตรวจสอบตอนนี้</a>',
	'manage_verifydoing' => 'มีโน๊ตใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=doings">ตรวจสอบตอนนี้</a>',
	'manage_verifypic' => 'มีรูปภาพใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=pictures">ตรวจสอบตอนนี้</a>',
	'manage_verifyshare' => 'มีการแบ่งปันใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=shares">ตรวจสอบตอนนี้</a>',
	'manage_verifycommontes' => 'มีการตอบกลับ/คอมเมนต์ใหม่ที่รอการตรวจสอบ<a href="admin.php?action=moderate&operation=comments">ตรวจสอบตอนนี้</a>',
	'manage_verifyrecycle' => 'ศูนย์รีไซเคิลมีหัวข้อใหม่ที่รอการดำเนินการ<a href="admin.php?action=recyclebin">จัดการตอนนี้</a>',
	'manage_verifyrecyclepost' => 'ศูนย์รีไซเคิลมีโพสต์ใหม่ที่รอการดำเนินการ<a href="admin.php?action=recyclebinpost">จัดการตอนนี้</a>',
	'manage_verifyarticle' => 'มีบทความใหม่ที่จะตรวจสอบ<a href="admin.php?action=moderate&operation=articles">ตรวจสอบตอนนี้</a>',
	'manage_verifymedal' => 'พบการได้รับตราอันใหม่ของสมาชิกที่รอให้คุณมาตรวจสอบ<a href="admin.php?action=medals&operation=mod">ตรวจสอบตอนนี้</a>',
	'manage_verifyacommont' => 'พบการคอมเมนต์ใหม่บนบทความที่รอให้คุณมาตรวจสอบ<a href="admin.php?action=moderate&operation=articlecomments">ตรวจสอบตอนนี้</a>',
	'manage_verifytopiccommont' => 'พบการคอมเมนต์ใหม่บนหัวข้อที่รอให้คุณมาตรวจสอบ<a href="admin.php?action=moderate&operation=topiccomments">ตรวจสอบตอนนี้</a>',
	'manage_verify_field' => 'มีการดำเนินการ{verifyname}ใหม่ <a href="admin.php?action=verify&operation=verify&do={doid}">จัดการตอนนี้</a>',
	'system_notice' => '{subject}<p class="summary">{message}</p>',
	'system_adv_expiration' => 'โฆษณาต่อไปนี้บนไซต์ของคุณจะหมดอายุใน {day} วัน โปรดจัดการกับโฆษณาเหล่านี้ทันที：<br />{advs}',
	'report_change_credits' => '{actor} รายงานของคุณได้รับการประมวลผลแล้ว {creditchange} {msg}',
	'at_message' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> 在主题 <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> 中提到了您<div class="quote"><blockquote>{message}</blockquote></div><a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">现在去看看</a>。',
	'new_report' => 'มีรายงานใหม่จาก {username} รายงานรอการจัดการ<a href="admin.php?action=report" target="_blank">คลิกที่นี่เพื่อเข้าสู่ศูนย์บริหารจัดการ</a>',
	'new_post_report' => 'มีรายงานใหม่จาก {username} รายงานรอการจัดการ<a href="forum.php?mod=modcp&action=report&fid={fid}" target="_blank">คลิกที่นี่เพื่อเข้าสู่ศูนย์บริหารจัดการ</a>。',
	'magics_receive' => 'คุณได้รับไอเท้ม {magicname} จาก {actor}
<p class="summary">{actor} อธิบาย：<span>{msg}</span></p>
<p class="mbn"><a href="home.php?mod=magic" target="_blank">回赠道具</a><span class="pipe">|</span><a href="home.php?mod=magic&action=mybox" target="_blank">ดูกล่องไอเทมของฉัน</a></p>',
	'invite_collection' => '{actor} 邀请您参与维护淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>。<br /> <a href="forum.php?mod=collection&action=edit&op=acceptinvite&ctid={ctid}&dateline={dateline}">接受邀请</a>',
	'collection_removed' => '您参与维护的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 已被 {actor} 关闭。',
	'exit_collection' => '您已经退出维护淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>。',
	'collection_becommented' => '您的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 收到了新评论。',
	'collection_befollowed' => '您的淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 有新用户订阅了！',
	'collection_becollected' => '恭喜您的主题 <a href="forum.php?mod=viewthread&tid={tid}">{threadname}</a> 被淘专辑  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> 收录了！',

	'pmreportcontent' => '{pmreportcontent}',

	'thread_hidden' => '您的主题 <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> 被多个用户认定为垃圾帖，现已被隐藏 &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">ตรวจสอบ &rsaquo;</a>',

);

?>