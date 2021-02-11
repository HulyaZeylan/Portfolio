@extends('front.layouts.master-projects')
@section('title','projects')
@section('content')


        <div class="row" style="height:80px ">
            <div class="col-xl-2"></div>
            <div class="col-xl-8 my-auto">
                <hr style="width: 90%; margin: auto">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8 card-group">
                <div class="card bottomCardImg">
                    <div class="m-lg-5">
                        <div class="align-text-bottom">
                            <img class="card-img-top img-fluid" src={{asset("themes/images/2.jpg")}} alt="..."></div>
                        <div><h5 class="card-title mt-3">Card title</h5>
                        </div><a href="#" class="btn btn-primary mt-5">Go somewhere</a>
                    </div>
                </div>
                <div class="card bottomCardImg">
                    <div class="m-lg-5">
                        <div class="align-text-bottom">
                            <img class="card-img-top img-fluid" src={{asset("themes/images/2.jpg")}} alt="..."></div>
                        <div><h5 class="card-title mt-3">Card title</h5>
                        </div><a href="#" class="btn btn-primary mt-5">Go somewhere</a>
                    </div>
                </div>
                <div class="card bottomCardImg">
                    <div class="m-lg-5">
                        <div class="align-text-bottom">
                            <img class="card-img-top img-fluid" src={{asset("themes/images/2.jpg")}} alt="..."></div>
                        <div><h5 class="card-title mt-3">Card title</h5>
                        </div><a href="#" class="btn btn-primary mt-5">Go somewhere</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-2"></div>

        </div>
        <br/>





@endsection
