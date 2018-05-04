@extends('home.base')
@section('content')
		<!--关于长艺子页面开始-->
<div class="about_warp">
	<div class="shangbuk ">
		<div class="shangbu">
			<p>人才招聘<span>/recruit</span></p>
		</div>
		<div class="qiyejianjie">
			<a href="#" class="qiyejianjie_a" >
				加入我们
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
				联系人：李先生<br/>
				手机：{{$webset->phone}}<br/>
				公司地址：{{$webset->address}}
			</h4>
		</div>
	</div>
	
	<div class=youbu>
		<div class=shangm>
			<p>加入我们>人才招聘</p>
		</div>
		<div class="xiam">
			<div class="lianxi">
				{!! $jobs->content !!}
			</div>

		</div>
	</div>
</div>






<!--关于长艺子页面结束-->
@endsection