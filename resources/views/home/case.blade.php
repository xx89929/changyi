@extends('home.base')
@section('content')
<div class="about_warp">
	<div class="shangbuk ">
		<div class="shangbu">
			<p>成功案列<span>/exhidition</span></p>
		</div>
		<div class="chanpinzhanshi">
			<ul>
				@foreach($caseType as $ct)
				<li>
					<i class="fa fa-caret-right "></i>
					<a href="{{route('case',['case_type' => $ct->id])}}" class="chanpinzhanshi_a" >{{$ct->type_name}} </a>
					<i class=" fa fa-angle-double-right "></i>
				</li>
				@endforeach
			</ul>
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
			<p>成功案列</p>
		</div>
		<div class="xiam">
			<div class="tup" >
					<ul>
						@foreach($case as $ca)
							<li>
								<a href="{{route('case.info',['id' => $ca->id])}}" class="asd">
								<img style="width:100%;height:250px;" src="{{$qshow.$ca->case_img}}">
								<p>{{$ca->case_title}}</p>
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection