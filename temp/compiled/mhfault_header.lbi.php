<?php 
   require_once("themes/".$GLOBALS['_CFG']['template']."/diyfile.php");
   $this->assign('TemplatePath','themes/'.$GLOBALS['_CFG']['template']);
?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="shortcut-2013">
	<div class="w">
		<ul class="fl lh">
			<li>
			<span onclick="AddFavorite(document.location.href,document.title);" title="加入收藏" class="font1_2d pointer" onMouseDown="shoucang(this, 'http://www.baidu.com', '百度一下！')" >加入收藏</span>
			</li>
		</ul>
		<ul class="fr lh">
			<li class="fore1"><span id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span></li>
			<li class="fore2 ld">
				<s></s>
				<a href="user.php?act=order_list" rel="nofollow">我的订单</a>
			</li>
			<li class="fore3 ld">
				<s></s>
				<!--a href="#" target="_blank">手机京礼中国</a-->
			</li>
			<li class="fore4 ld menu" id="biz-service" onMouseOver="this.className='fore4 ld menu hover'" onMouseOut="this.className='fore4 ld menu'">
				<s></s>
				<span class="outline"></span>
				<span class="blank"></span>
				客户服务
				<b></b>
				<div class="dd">
					<div><a href="#" target="_blank">常见问题</a></div>
					<div><a href="#" target="_blank" rel="nofollow">售后服务</a></div>
					<div><a href="#" target="_blank" rel="nofollow">在线客服</a></div>
					<div><a href="#" target="_blank" rel="nofollow">投诉中心</a></div>
					<div><a href="#" target="_blank">客服邮箱</a></div>
				</div>
			</li>
			<!--li class="fore5 ld menu" id="site-nav" onMouseOver="this.className='fore5 ld menu hover'" onMouseOut="this.className='fore5 ld menu'">
				<s></s>
				<span class="outline"></span>
				<span class="blank"></span>
				网站导航
				<b></b>
				<div class="dd lh">
					<dl class="item fore1">
						<dt>特色栏目</dt>
						<dd>
							<div><a target="_blank" href="#">为我推荐</a></div>
							<div><a target="_blank" href="#">视频购物</a></div>
							<div><a target="_blank" href="#">京东社区</a></div>
							<div><a target="_blank" href="#">校园频道</a></div>
							<div><a target="_blank" href="#">在线读书</a></div>
							<div><a target="_blank" href="#">装机大师</a></div>
							<div><a target="_blank" href="#">礼品卡</a></div>
						</dd>
					</dl>
					<dl class="item fore2">
						<dt>企业服务</dt>
						<dd>
							<div><a target="_blank" href="#">企业客户</a></div>
							<div><a target="_blank" href="#">办公直通车</a></div>
						</dd>
					</dl>

				</div>
			</li-->
		</ul>
		<span class="clr"></span>
	</div>
</div>
<div id="o-header-2013">
	<div class="w" id="header-2013">
		<div id="logo-2013" class="ld"><a href="index.php"><b></b><img src="themes/jd2013/images/logo.gif"  height="70"></a></div>
		<div id="search-2013">
			<div class="i-search ld">
				<ul id="shelper" class="hide">
				</ul>
				<div class="form">
				<form id=searchForm name=searchForm onSubmit="return checkSearchForm()" action="search.php" method=get>
					<input type="text" class="text" accesskey="s" id="key" name="keywords" autocomplete="off" onkeydown="javascript:if(event.keyCode==13) search('key');">
					<input type="submit" value="搜索" class="button">
					</form>
				</div>
			</div>
			<!--div id="hotwords"><strong>热门搜索：</strong><?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div-->
		</div>
		
		<div id="my360buy-2013">
			<dl onMouseOver="this.className='hover'" onMouseOut="this.className=''">
				<dt class="ld"><s></s><a href="user.php">会员中心</a><b></b></dt>
					<dd>
				<div class="prompt">	
				<span class="fl"><?php 
$k = array (
  'name' => 'member_info1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span>	
				<span class="fr"></span>
				</div>
				<div class="viewlist">	
				<div class="smt">
				<h4>最近浏览的商品：</h4>
				<div style="float:right;padding-right:9px;"><a style="border:0;color:#005EA7" onclick="clear_history()" target="_blank">清空浏览历史&nbsp;&gt;</a></div>				</div>			<div class="smc" id="jduc-viewlist">					
				<div style="display: none;" class="loading-style1"><b></b>加载中，请稍候...</div>					
				<ul style="display: block;" class="lh hide" id='history_div'>
				 <div class="clearfix" id='history_list'>
    <?php 
$k = array (
  'name' => 'history1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  </div>
				<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>
				</ul>				
				</div>			
				</dd>
			</dl>
		</div>
		
		<div id="settleup-2013">
			<dl id="ECS_CARTINFO" onMouseOver="this.className='hover'" onMouseOut="this.className=''">
				<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
			</dl>
		</div>
		
	</div>
	
	<div class="blank"></div>
	<div class="w">
		<div id="nav-2013">

			<div id="treasure"><!--a style="float:right;width:141px;height:40px;background:url(themes/jd2013/images/jd2013/rad.jpg) no-repeat 0 0;" href="#" target="_blank" title="">&nbsp;</a--></div>
				<ul id="navitems-2013">
					<li<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="curr"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
					<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
					  <li <?php if ($this->_var['nav']['active'] == 1): ?> class="curr"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
					 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
		</div>
	</div>
</div>
