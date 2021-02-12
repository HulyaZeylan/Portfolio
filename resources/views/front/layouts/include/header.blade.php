<div class="container-fluid ">
    <div class="row rowHeight">
        <div class="col-xl-1"></div>


        <div class="col-xl-10 mt-3"> <a class="navbar-brand abs" href=""><img class="logo mylogo"
                                                                          src={{asset("themes/images/MywLogo.png")}} alt=""
                                                                          style="opacity: 80%"></a>
            <nav class="navbar navbar-expand-custom navbar-light ">

                <button class="navbar-toggler pos" data-toggle="collapse" data-target="#collapsingNavbar"
                        onclick="myFunction(this)">
                    <hr class="bar1" >
                    <hr class="bar2">
                    <hr class="bar3">
                </button>
                <div class="navbar-collapse collapse " id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item linkMargin">
                        <a class="nav-link " href="">AboutMe</a>
                    </li>
                    <li class="nav-item linkMargin">
                        <a class="nav-link " href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item linkMargin">
                        <a class="nav-link" href="">Blog</a>
                    </li>
                    <li class="nav-item linkMargin">
                        <a class="nav-link" href="{{route('contactMe')}}">Contact Me</a>
                    </li>
                </ul>
        </div>

        </nav>
    </div>
        <div class="col-xl-1"></div>
</div>
    <div class="row" style="height:80px ">
        <div class="col-12 my-auto">
            <hr style="width: 100%; margin: auto">
        </div>
    </div>
