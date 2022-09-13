<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="เปิด DIY แผงหน้าปัด" class="xi1 xw1 showmenu" onmouseover="showMenu({'ctrlid':'diy-tg','pos':'34!'})">DIY</a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">ความเรียบง่าย</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">โหมดระดับสูง</a></li>
</ul>
</div>

EOF;
?>