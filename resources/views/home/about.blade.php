@extends('home.base')
@section('title')
	关于我们-海口长艺广告
@endsection
@section('content')
	<!--关于长艺子页面开始-->
<div class="about_warp">
	<div class="shangbuk ">
		<div class="shangbu">
			<p>关于我们<span>/synopsis</span></p>
		</div>
		<div class="qiyejianjie">
			<a href="#" class="qiyejianjie_a" >
				企业简介
			</a>
		</div>
		<div class="zhongbu">
			<div class="zhongbu1" style="background: url('{{asset("images/index_28.gif")}}') no-repeat;">
				<span>联系我们<span>
			</div>
		</div>
		<div class=xiabu>
			<h4>
				电话：{{$webset->tel}}<br/>
				联系人：{{$webset->contacter}}<br/>
				手机：{{$webset->phone}}<br/>
				公司地址：{{$webset->address}}
			</h4>
		</div>
	</div>
	
	<div class=youbu>
		<div class=shangm>
			<p>关于我们>公司简介</p>
		</div>
		<div class="xiam">
			{!! $aboutUs->intro !!}
		</div>
	</div>
</div>


<!--关于长艺子页面结束-->
@endsection