@extends('front.layouts.master')
@section('title',$category->category_title)
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-1"></div>
            <div class="col-xl-10 card-group">
                @foreach($projects as $project)

                        <div class="card bottomCardImg">
                            <div class="m-lg-2">
                                <div class="align-text-bottom">
                                    <img class="card-img-top img-fluid" src={{asset("themes/images/2.jpg")}} alt="..."></div>
                                <div>
                                    <h5 class="card-title mt-3"> {{$project->project_title}}</h5>
                                    <h5 class=" mt-3"> {{$category->category_description}}</h5>
                                </div><a href="{{route('projectCategory',$category->slug)}}" class="btn btn-primary mt-5">----></a>
                                <h4><a class="btn" href="">VIEW</a>
                            </div>
                        </div>

                @endforeach


            </div>
            <div class="col-xl-1"></div>

        </div>
        </div>

@endsection

