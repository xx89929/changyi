@extends('home.base')
@section('content')
    <div class="about_warp">
        <div class="shangbuk ">
            <div class="shangbu">
                <p>成功案列<span>/case</span></p>
            </div>
            <div class="qiyejianjie">
                <a href="#" class="qiyejianjie_a" >
                    成功案列
                </a>
            </div>
            <div class="zhongbu">
                <div class="zhongbu1" style="background: url('{{asset("images/index_28.gif")}}') no-repeat;">
				<span>联系我们<span>
                </div>
            </div>
            <div class=xiabu>
                <h4>
                    电话：123456<br/>
                    联系人：李先生<br/>
                    手机：123456789<br/>
                    公司地址：
                </h4>
            </div>
        </div>

        <div class=youbu>
            <div class=shangm>
                <p>成功案列>详细信息</p>
            </div>
            <div class="xiam">
                <div class="lianx">
                   <img src="{{$qshow.$case_info->case_img}}" >
                </div>
                <div class="wenzi">
                    {!! $case_info->case_content !!}
                </div>

            </div>
        </div>
    </div>


@endsection