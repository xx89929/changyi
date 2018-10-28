@extends('home.base')
@section('content')
<div class="about_warp">
	<div class="shangbuk ">
		<div class="shangbu">
			<p>合作伙伴<span>/partner</span></p>
		</div>
		<div class="qiyejianjie">
			<a href="#" class="qiyejianjie_a" >
				合作伙伴
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
			<p>合作伙伴></p>
		</div>
		<div class="xiam">
			<div class="tup1" >
				<ul>
					@foreach($partner as $pt)
					<li><img  style="width:100%;height: 150px;" src="{{$qshow.$pt->partner_img}}">
						
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection