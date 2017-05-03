<!-- /* -->
<!--  Name: 判断城市是否有商铺 -->
<!--  Description: 当城市没有商铺的时候默认显示的页面 -->
<!--  */ -->
<div class="ecjia-no-content">
	<div class="content">
		<div class="content-container">
			<div class="current-city">当前选择城市：{$info.city_name}</div>
			<p>抱歉！您切换的城市暂时还没有店铺和商品。</p>
			<p>赶快来入驻吧</p>
			<a class="nopjax" href="{$info.merchant_url}" target="_blank"><span class="go_settled">去入驻</span></a>
			<p>或者您还可以<span class="choose-city">去其他城市看看哦</span></p>
		</div>
	</div>
</div>