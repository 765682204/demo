<?php if (!defined('THINK_PATH')) exit();?>		<!-- 引入头部 -->
		<?php echo W('Public/header');?>

		<!-- 内容开始 -->
		
	<!--购物车top-->
	<div class="store_top">
		<img src="/MeiZu-SunShine/Public/Home/images/liu2.gif" alt="">
	</div>

	<!-- 收获地址 -->
	<a name='modify'></a>
	<div class="adress" status='0'>
		<?php if(is_array($adress)): foreach($adress as $key=>$vo): ?><div class="adress_1">
			<div class="adress_2" data="<?php echo ($vo['id']); ?>">
				<div class="name">
					<span class='name_1'><?php echo ($vo['person']); ?></span>
					<span class='name_2'><?php echo ($vo['aphone']); ?></span>
				</div>
				<p class='text2'><?php echo ($vo['province']); ?> <?php echo ($vo['city']); ?> <?php echo ($vo['county']); ?> <?php echo ($vo[town]); ?> <?php echo ($vo['more']); ?></p>
			</div>
			<div class="adress_3">
				<a href="javascript:;" data='<?php echo ($vo["id"]); ?>' class="edit">修改</a>
				<a href="javascript:;" data='<?php echo ($vo["id"]); ?>' class="dels">删除</a>
			</div>
		</div><?php endforeach; endif; ?>
	</div>
	
	<!--收货人信息-->
	<div style="border-bottom:1px solid #DFE0E0;width:1080px;margin:0 auto;height:50px;margin-bottom:10px;line-height:50px;clear:both">收货人信息</div>

	<div style="width:1080px;margin-left:80px;height:80px;margin:0 auto;line-height:80px"><a href="javascript:;" style="text-decoration:none;color:#00C3F5" id='add'>+添加新地址</a></div>

	<!-- 添加新地址 -->
	<div class="add_form"  style="display:none">
		<table class="table2">
			<tr>
				<th>收件人 :</th>
				<td colspan="2"><input type="text" name="person" class="input" id='person' placeholder='长度不超过12个字' required></td>
				<td class="xing p">*<span></span></td>
			</tr>
			<tr>
				<th>电 话 :</th>
				<td colspan="2"><input type="text" name='aphone' class="input" id='aphone' placeholder='请输入11位手机号' required></td>
				<td class="xing a">*<span></span></td>
			</tr>
			<tr>
				<th>地 址 :</th>
				<td colspan="2">
					<select name="province" id="province" class="td">
						<option value="">--请选择--</option>
					</select>

					<select name="city" id="city" class="td">
						<option value="" >--请选择--</option>
					</select>
				
					<select name="county" id="county" class="td">
						<option value="">--请选择--</option>
					</select>

					<select name="town" id="town" class="td">
						<option value="">--请选择--</option>
					</select>
				</td>
				<td class="xing ds">*<span></span></td>
			</tr>
			<tr>
				<th></th>
				<td colspan="5"><input type="text" name='more' id='mores' class="input" placeholder='请输入不超过50字的详细地址,例如:路名,门牌号'></td>
				<td class="xing m">*<span></span></td>
			</tr>
			<tr>
				<th></th>
				<td><a href="javascript:;"><div class="btn1">保存并使用</div></a></td>
				<td><a href="javascript:;"><div class="btn2">取消</div></a></td>
			</tr>
		</table>
	</div>
	<!-- 修改地址 -->
	<div class="add_form2"  style="display:none">
		<table class="table2">
			<input type="hidden" id='hid' value="">
			<tr>
				<th>收件人 :</th>
				<td colspan="2"><input type="text" name="person" class="input" id='person2' placeholder='长度不超过12个字' required></td>
				<td class="xing p">*<span></span></td>
			</tr>
			<tr>
				<th>电 话 :</th>
				<td colspan="2"><input type="text" name='aphone' class="input" id='aphone2' placeholder='请输入11位手机号' required></td>
				<td class="xing a">*<span></span></td>
			</tr>
			<tr>
				<th>地 址 :</th>
				<td colspan="2">
					<select name="province" id="province2" class="td">
						<option value="">--请选择--</option>
					</select>

					<select name="city" id="city2" class="td">
						<option value="" >--请选择--</option>
					</select>
				
					<select name="county" id="county2" class="td">
						<option value="">--请选择--</option>
					</select>

					<select name="town" id="town2" class="td">
						<option value="">--请选择--</option>
					</select>
				</td>
				<td class="xing ds">*<span></span></td>
			</tr>
			<tr>
				<th></th>
				<td colspan="5"><input type="text" name='more' id='mores2' class="input input_2" placeholder='请输入不超过50字的详细地址,例如:路名,门牌号'></td>
				<td class="xing m">*<span></span></td>
			</tr>
			<tr>
				<th></th>
				<td><a href="javascript:;"><div class="btn3">保存并使用</div></a></td>
				<td><a href="javascript:;"><div class="btn2">取消</div></a></td>
			</tr>
		</table>
	</div>

	<div style="height:250px;width:1080px;margin:0 auto;font-weight:bold">发票类型&nbsp;&nbsp;&nbsp;<input type="radio" checked>电子发票
		<div style="margin-left:86px;font-size:12px;font-weight:normal;margin-bottom:10px;margin-top:20px">发票抬头：默认为收货人姓名</div>
		<div style="margin-left:86px;font-size:12px;font-weight:normal;margin-bottom:10px">-增值税电子普通发票的法律效力、基本用途、基本使用规定等与税务机关监制的增税普通发票相同</div>
		<div style="margin-left:86px;font-size:12px;font-weight:normal;margin-bottom:10px">-为响应国家政策，同时提高发货效率，我们的订单默认开电子发票；电子发片打印后可用于报销</div>
		<div style="margin-left:86px;font-size:12px;font-weight:normal;margin-bottom:10px">什么是电子发票</div>
		<div style="margin-bottom:20px">备&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="" size="60px"></div>
		<div>验证码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="" size="30px" class="code" placeholder="请输入验证码" value='' data='0'>
		<span><a href='javascript:;' class="shua"><span class='verify'><img src="<?php echo U('Shop/verify');?>"></span></a></span>
		<span class="xing p">*<span></span></span>
		</div>
	</div>
	<!---购物车center1-->
	
		<!---购物车center1-->
	
	<div class="store_center1">
		<div class="order">订单信息</div>
		<table class="table">
				<tr>
					<th width="500px">商品</th>
					<th>单价</th>
					<th>购买数量</th>
					<th>小计</th>
				</tr>
		</table>
		<table class="table">
			<?php if(is_array($data)): foreach($data as $key=>$vo2): ?><tr class='shangpin jg' data=<?php echo ($vo2['id']); ?>>
					<td>
						<div class="goods">
							<div class="pic"><img src="/MeiZu-SunShine/Public/<?php echo ($vo2['pic']); ?>" alt=""></div>
							<div class="texts">
								<div class="text"><?php echo ($vo2['gname']); ?></div>
								<div class="text">
									<span><?php echo ($vo2['net']); ?></span>
									<span><?php echo ($vo2['color']); ?></span>
									<span><?php echo ($vo2[mem]); ?></span>
								</div>
							</div>
						</div>
					</td>
					<td class="jiage">
						<div class="td1"><span>￥</span><span class='pri'><?php echo ($vo2['price']); ?></span></div>
					</td>
					<td class="shu">
						<div class="nu ge">
							<?php echo ($vo2['snum']); ?>
						</div> 
					</td>
					<td class="p">
						<div class="td1">
							<span>￥</span>
							<span class='price'><?php echo ($vo2['snum']*$vo2['price']); ?></span>
						</div>
					</td>
				</tr><?php endforeach; endif; ?>
		</table>
		<table class="table" id='buy2' data=<?php echo ($buy['id']); ?>>
			<tr class='shangpin'>
					<td>
						<div class="goods">
							<div class="pic"><img src="/MeiZu-SunShine/Public/<?php echo ($buy['pic']); ?>" alt=""></div>
							<div class="texts">
								<div class="text"><?php echo ($buy['gname']); ?></div>
								<div class="text">
									<span><?php echo ($bmore['net']); ?></span>
									<span><?php echo ($bmore['color']); ?></span>
									<span><?php echo ($bmore['mem']); ?></span>
								</div>
							</div>
						</div>
					</td>
					<td class="jiage">
						<div class="td1"><span>￥</span><span class='pri'><?php echo ($buy['price']); ?></span></div>
					</td>
					<td class="shu">
						<div class="nu ge ge2">
							<?php echo ($bmore['snum']); ?>
						</div> 
					</td>
					<td class="p">
						<div class="td1">
							<span>￥</span>
							<span class='price'><?php echo ($buy['price']); ?></span>
						</div>
					</td>
				</tr>
		</table>
		
	</div>

	<!---购物车center2-->
	<div class="store_center2">
		<div class="shang">
			<div style="height:50px;margin-top:20px">
				<div style="float:left;width:100px;">商品总额</div>
				<div style="float:right;width:100px;"><span>￥</span><span id='total2'></span></div>
			</div>
			
			<div style="height:50px">
				<div style="float:left;width:100px;">套餐优惠</div>
				<div style="float:right;width:100px;"><span class='a'>￥</span><span id='tao' class='tao'>0.00</span></div>
			</div>
			<div style="height:50px">
				<div style="float:left;width:100px;">折扣</div>
				<div style="float:right;width:100px;"><span class='a'>￥</span><span id='sale' class='sale'>0.00</span></div>
			</div>
		</div>
		<div class="xia">
			<div style="height:50px;margin-top:20px">
				<div style="float:left;width:100px;margin-left:870px">应付</div>
				<div style="float:right;width:100px;"><span class='c'>￥</span><span id='copy' class='copy'>0.00</span></div>
			</div>
			<div style="height:50px;">
				<div style="float:left;width:120px;margin-left:800px"><a href="<?php echo U('Index/index');?>" style="color:#31A5E7;font-size:20px;text-decoration:none">继续购物 &nbsp; > </a> </div>
				<a href="javascript:;">
					<div style="float:right;width:150px;background:#31A5E7;height:50px;line-height:50px;text-align:center;color:#fff;font-size:20px" id='jisuan2'>去结算</div>
				</a>
			</div>
		</div>
	</div>
	
		<!-- 内容结束 -->
		
		<!-- 引入尾部 -->
		<?php echo W('Public/footer');?>

	</div>
	<script>var url = '/MeiZu-SunShine/index.php/Home'</script>
	<script>var src = '/MeiZu-SunShine/Public'</script>
	<script src='/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/bootstrap.min.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/jQuery.md5.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/header.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/index.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/detail.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/shop.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/shop2.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/shop3.js'></script>
	<script src='/MeiZu-SunShine/Public/Home/js/order.js'></script>
	
	
	
	<script src='/MeiZu-SunShine/Public/Home/js/footer.js'></script>
</body>
</html>