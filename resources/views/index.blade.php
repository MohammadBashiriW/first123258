@extends('layout.master')

@section('title','INDEX PAGE')

@section('main_img')

    <div class="img-info-1">
        <div class="over"></div>
    </div>
@endsection
<div class="img-info-1">
    <div class="over"></div>
</div>
@section('info_1')

<div class="info-1">
        <div class="text-info-1">
            <h4>با آینون صبح ها با نون</h4>
            <p>آینون در خدمت شما عزیزان</p>
            <div class="buttons group-button row ">
                <div class=" col-md-4">
                    <a href="#sign" class="btn">ثبت نام نکرده ام!</a>

                </div>
                <div class=" col-md-4">
                    <a href="#drop" class="btn">بریم خرید!</a>

                </div>
                <div class=" col-md-4">
                    <a href="#sign" class="btn">ما چیکار میکنیم!</a>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('about')


<div class="about">
        <div class="head text-center">
            <h6>درباره ما!</h6>
            <div class="line"><span></span></div>
        </div><br><br>
        <div class="container">
            <h4>درباره شرکت</h4>
            <p>در این مکان توضیحات مروبط بهشرکت نوشته میشود.در این مکان توضیحات مروبط بهشرکت نوشته میشوددر این مکان
                توضیحات مروبط بهشرکت نوشته میشودر این مکان توضیحات مروبط بهشرکت نوشته میشود.در این مکان توضیحات مروبط
                بهشرکت نوشته میشوددر این مکان توضیحات مروبط بهشرکت نوشته میشودر این مکان توضیحات مروبط بهشرکت نوشته
                میشود.در این مکان توضیحات مروبط بهشرکت نوشته میشوددر این مکان توضیحات مروبط بهشرکت نوشته میشودر این مکان
                توضیحات مروبط بهشرکت نوشته میشود.در این مکان توضیحات مروبط بهشرکت نوشته میشوددر این مکان توضیحات مروبط
                بهشرکت نوشته میشود</p>
        </div>
    </div>

    <br><br><br>

@endsection

@section('info_2')

<div class="info-2">

        <div class="head text-center">
            <h6>چطوری سفارش بدم!</h6>
            <div class="line"><span></span></div>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="detail">
                        <i><img src="images/Home-icon.png" width="30%"></i><br>
                        <h4>01</h4>
                        <p>در این مکان قوانین مربوط به سایت نوشته میشود.</p>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="detail">
                        <i><img src="images/icons8-phone-100.png" width="30%"></i><br>
                        <h4>02</h4>
                        <p>در این مکان قوانین مربوط به سایت نوشته میشود.</p>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="detail">
                        <i><img src="images/icons8-development-skill-100.png" width="30%"></i><br>
                        <h4>03</h4>
                        <p>در این مکان قوانین مربوط به سایت نوشته میشود.</p>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="detail">
                        <i><img src="images/icons8-development-skill-100.png" width="30%"></i><br>
                        <h4>04</h4>
                        <p>در این مکان قوانین مربوط به سایت نوشته میشود.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <br><br><br><br>


@endsection


@section('info_3')

<div class="info-3 drop" id="drop">

    <div class="head text-center">
        <h6>محصولات</h6>
        <div class="line"><span></span></div>
    </div><br><br>

    <div class="container">
        <div class="row">

            <div class="col-md-3 ">
                <div class="box sangak">
                    <div class="img-back">
                        <img src="images/bread-icon.png" width="100%">
                    </div>
                    <div class="over sangak">
                        <h4>به سبد اضافه شد!<br><i class="fa fa-shopping-cart"></i></h4>
                    </div>
                    <div class="detail">
                        <h5>نان سنگک</h5>
                        <p class="price">2000</p>
                    </div>
                    <button id="sangak" class="btn">+</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box lavash">
                    <div class="img-back">
                        <img src="images/bread-icon.png" width="100%">
                    </div>
                    <div class="over lavash">
                        <h4>به سبد اضافه شد!<br><i class="fa fa-shopping-cart"></i></h4>
                    </div>
                    <div class="detail">
                        <h5>نان لواش</h5>
                        <p class="price">300</p>
                    </div>
                    <button id="lavash" class="btn">+</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box barbary">
                    <div class="img-back">
                        <img src="images/bread-icon.png" width="100%">
                    </div>
                    <div class="over barbary">
                        <h4>به سبد اضافه شد!<br><i class="fa fa-shopping-cart"></i></h4>
                    </div>
                    <div class="detail">
                        <h5>نان بربری</h5>
                        <p class="price">1600</p>
                    </div>
                    <button id="barbary" class="btn">+</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box konged">
                    <div class="img-back">
                        <img src="images/bread-icon.png" width="100%">
                    </div>
                    <div class="over konged">
                        <h4>به سبد اضافه شد!<br><i class="fa fa-shopping-cart"></i></h4>
                    </div>
                    <div class="detail">
                        <h5> سنگک کنجدی</h5>
                        <p class="price">2000</p>
                    </div>
                    <button id="konged" class="btn">+</button>
                </div>
            </div>

        </div>
    </div>
</div>
<br><br>
<br><br>

@endsection


@section('info_4')
<div class="info-4" id="sign">
        <br><br>
        <div class="head text-center">
            <h6>آینونی شو!</h6>
            <div class="line"><span></span></div>
        </div><br><br>

        <div class="container">
            <div class="text">
                <h4>برای ثبت نام یا ورود یکی از کلید های زیر را بزنید!</h4>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="#" class="btn">ثبت نام نکرده ام!</a></li>
                    <li class="nav-item"><a href="#" class="btn">ورود!</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>

@endsection

@section('rights')
<div class="rights">
        <br><br>
        <div class="head text-center">
            <h6>قوانین!</h6>
            <div class="line"><span></span></div>
        </div><br><br>

        <div class="container row">
            <div class="col-md-7">
                <div class="panel-group" id="according">
                    <div class="panel-default">
                        <div class="panel-title container">
                            <a class="butt" data-toggle="collapse" data-parent="#accordion" href="#one">
                                <h4>قانون شماره 01</h4><i class="fa fa-chevron-down "></i>
                            </a>
                        </div>
                        <div class="panel-collapsed collapsed container" id="one">
                            <div class="container">
                                <p>در این قسمت قوانین مر بوط به شماره یک نوشته میشود.در این قسمت قوانین مر بوط به شماره
                                    یک نوشته میشوددر این قسمت قوانین مر بوط به شماره یک نوشته میشود</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-default">
                        <div class="panel-title container">
                            <a class="butt" data-toggle="collapse" data-parent="#accordion" href="#two">
                                <h4>قانون شماره 02</h4><i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="panel-collapse collapse container" id="two">
                            <div class="container">
                                <p>در این قسمت قوانین مر بوط به شماره یک نوشته میشود.در این قسمت قوانین مر بوط به شماره
                                    یک نوشته میشوددر این قسمت قوانین مر بوط به شماره یک نوشته میشود</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-default">
                        <div class="panel-title container">
                            <a class="butt" data-toggle="collapse" data-parent="#accordion" href="#three">
                                <h4>قانون شماره 03</h4><i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="panel-collapse collapse container" id="three">
                            <div class="container">
                                <p>در این قسمت قوانین مر بوط به شماره یک نوشته میشود.در این قسمت قوانین مر بوط به شماره
                                    یک نوشته میشوددر این قسمت قوانین مر بوط به شماره یک نوشته میشود</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-5">
                <img src="images/bread-icon.png" width="100%">
            </div>

        </div>
    </div>
    <br><br>


@endsection

@section('sign_form')
    <div class="info-5">

        <div class="head text-center">
            <h6>فرم همکاری!</h6>
            <div class="line"><span></span></div>
        </div><br><br><br><br>

        {{--        validators codes!!!!!  --}}

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container row">
            <div class="form1 col-lg-6 text-center">

                <form class="form-group" action="/Signinusrs" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <input type="text"  class="form-control" id="text" placeholder="نام" name="text">
                        </div>
                        <div class="col">
                            <input type="email" id="email" class="form-control" placeholder="نام خانوادگی" name="email">
                        </div>
                    </div><br>
                    <textarea class="form-control" id="body" name="body" rows="7" cols="120" placeholder="توضیحات"></textarea><br>
                    {{--                    <select class="form-control" name="select">--}}
                    {{--                        <option id="0">انتخاب</option>--}}
                    {{--                        <option id="1">نانوایی لواش</option>--}}
                    {{--                        <option id="2">نانوایی سنگکی</option>--}}
                    {{--                        <option id="3">نانوایی بربری</option>--}}
                    {{--                        <option id="4">پیک</option>--}}

                    {{--                    </select>--}}
                    <br>

                    <button class="btn btn-block" type="submit">ثبت</button>
                </form>
            </div>

            <div class="col-md-6">
                <div class="sub-1 row">
                    <i class="col-md-4">
                        <img src="images/home-icon.png" width="80%">
                    </i><br>
                    <div class="col-md-8 text">
                        <h5>آدرس</h5>
                        <p>لرستان بروجرد</p>
                    </div>
                </div><br>
                <div class="sub-1 row">
                    <i class="col-md-4">
                        <img src="images/icons8-phone-100.png" width="80%">
                    </i><br>
                    <div class="col-md-8 text">
                        <h5>آدرس</h5>
                        <p>لرستان بروجرد</p>
                    </div>
                </div><br>
                <div class="sub-1 row">
                    <i class="col-md-4">
                        <img src=" images/icons8-development-skill-100.png" width="80%">
                    </i><br>
                    <div class="col-md-8 text">
                        <h5>آدرس</h5>
                        <p>لرستان بروجرد</p>
                    </div>
                </div><br>
            </div>
        </div>
    </div>

@endsection

