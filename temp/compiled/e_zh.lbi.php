<?php if ($this->_var['fittings']): ?>
<script type="text/javascript">
function check(){
var result='<?php echo $this->_var['goods']['goods_id']; ?>,';
var fid = document.getElementById('boxOne');
var box = fid.getElementsByTagName('input');
for(var i = 0; i < box.length; i++){
           if(box[i].type == 'checkbox' && box[i].checked){
                result = result + box[i].value + ',';
           }
        }
        //在Common.js文件中添加了addToCartNums方法
        addToCartNums(result);
}
function totalPrice(){
var result=Math.round(<?php echo $this->_var['goods']['pj_price']; ?>);
var fid = document.getElementById('boxOne');
var box = fid.getElementsByTagName('input');
for(var i = 0; i < box.length; i++){
   if(box[i].type == 'checkbox' && box[i].checked){
        var a = box[i].name;
        var re = /[￥元]/g;
        result =  Number(result) +  Number(a.replace(re, ''));
		result = result.toFixed(2);
   }
}
result_format='￥%s元';
re_re=/\%s/g;
result_format=result_format.replace(re_re, result);

document.getElementById("totalPrice").innerHTML=result_format;
}
</script>
<style>
.compose{background:#fff; width:769px;padding-bottom:2px; overflow:hidden;}
.w1210 .compose{width:989px;}
.compose .cp_titg{height:29px; border-bottom:2px solid #cc0000;}
.compose .cp_tit{float:left;width:90px;font-size:12px; height:31px; background:url(themes/jd2013/images/zhg1.gif) no-repeat;}
.compose .cp_tit span{display:block;height:31px;line-height:31px;color:#CC0000;text-align:center;font-size:15px;font-weight:bold;}
.cp_box{background:#fff; clear:both;border:1px solid #E4E4E4; border-top:0;padding:5px 0px;}
.cp_box .mainzh{background-color:#fff;padding:10px 5px 10px 10px;width:97%;}
.cp_box .main_pro{float:left;width:170px;padding-top:5px;background:url(themes/jd2013/images/ico_add_zh.gif) no-repeat right center;text-align:left;display:ineline;}
.cp_box .main_pro .thumb{width:100px;height:100px;}
.cp_box .pro{float:left;width:60%;height:185px;display:ineline;overflow-x:scroll;overflow-y:hidden;}
.w1210 .cp_box .pro{width:65%;}
.cp_box .pro ul{background:#fff;width:2000px;}
.cp_box .pro ul li{float:left;width:110px;padding:5px 1px 10px 1px;text-align:center;}
.w1210 .cp_box .pro ul li{padding:5px 7px 10px 8px;}
.cp_box .pro ul li a{text-decoration:none;}
.cp_box .pro ul li .img{width:100px;height:100px;border:1px solid #ddd;}
.cp_box .pro ul li p{margin:3px 0;width:100px; height:30px; line-height:16px; overflow:hidden}
.cp_box .cp_price{float:left;width:13%;padding-left:25px;}
.cp_box .cp_price .cp_input{
	width:77px;height:25px;line-height:25px;border:0;text-align:center;
	background:url(themes/jd2013/images/bg_tab_zh.gif) no-repeat;
	color:#fff;font-size:13px;font-weight:bold;cursor:pointer;
}
#totalPrice{font-size:15px;font-weight:bold;color:#ff3300;}
</style> 
<div class="h3goods">
<div class="h3"><span class="text">优惠套餐</span></div>
</div>
<div class="compose" id="boxOne">
	<div class="cp_box">
	 <div class="mainzh clearfix">
		<div class="main_pro">
		<div style="float:left;text-align:center;"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="thumb" /><p><?php echo $this->_var['goods']['goods_style_name']; ?></p><font class="f1"><?php echo $this->_var['goods']['shop_price_formated']; ?></font></div>
		</div>
		<div class="pro">
		<ul> 
        <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goodss');if (count($_from)):
    foreach ($_from AS $this->_var['goodss']):
?>
				<li>
		<a href="<?php echo $this->_var['goodss']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goodss']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goodss']['name']); ?>" class="img" /></a>
		<p><a href="<?php echo $this->_var['goodss']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goodss']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goodss']['short_name']); ?></a></p>
		<input type="checkbox" name="<?php echo $this->_var['goodss']['fittings_price']; ?>" value="<?php echo $this->_var['goodss']['goods_id']; ?>"  onClick="totalPrice()" checked=checked />
				<font class="f1"><?php echo $this->_var['goodss']['fittings_price']; ?></font>
				</li>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			 </ul>
         </div>       
	
	  <div class="cp_price"><font style="font-size:13px;font-weight:bold;">购买最佳组合</font><br><br>
	  组合总价：<br><span id="totalPrice"></span><br><br>
	  <input class="cp_input" type="button" value="购买组合" onClick="check()" ></div>
	  </div>
	</div>
	<script>totalPrice();</script>
</div>
<div class="blank5"></div>
<?php endif; ?>