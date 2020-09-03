@extends('layout.master')
@section('title','update PAGE')
@section('form_update')
    <br><br><br><br><br><br><br><br>
    <div class="info-5" style="background-color: #032330">

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

                <form class="form-group" action="/Signinusrs/{{ $FindUser -> id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="{{ $FindUser -> text }}"  class="form-control" id="text" placeholder="نام" name="text">
                        </div>
                        <div class="col">
                            <input type="email" value="{{ $FindUser -> email }}"  id="email" class="form-control" placeholder="نام خانوادگی" name="email">
                        </div>
                    </div><br>
                    <textarea class="form-control"  id="body" name="body" rows="7" cols="120" placeholder="توضیحات">{{ $FindUser -> body }}</textarea><br>
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
                        <img src="/images/home-icon.png" width="80%">
                    </i><br>
                    <div class="col-md-8 text">
                        <h5>آدرس</h5>
                        <p>لرستان بروجرد</p>
                    </div>
                </div><br>
                <div class="sub-1 row">
                    <i class="col-md-4">
                        <img src="/images/icons8-phone-100.png" width="80%">
                    </i><br>
                    <div class="col-md-8 text">
                        <h5>آدرس</h5>
                        <p>لرستان بروجرد</p>
                    </div>
                </div><br>
                <div class="sub-1 row">
                    <i class="col-md-4">
                        <img src="/images/icons8-development-skill-100.png" width="80%">
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
