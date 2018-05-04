@extends('home.base')
@section('content')
<div class="about_warp">
	<div class="shangbuk ">
		<div class="shangbu">
			<p>联系我们<span>/telephone</span></p>
		</div>
		<div class="qiyejianjie">
			<a href="#" class="qiyejianjie_a" >
				联系方式
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
			<p>联系我们>联系方式</p>
		</div>
		<div class="xiam">
			<div class="lianxi">
				{!! $contact->content !!}
			</div>

		</div>
	</div>
</div>
@endsection