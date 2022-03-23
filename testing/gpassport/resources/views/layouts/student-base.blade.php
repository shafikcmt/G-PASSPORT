<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{asset('backend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    @livewireStyles

</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <a href="/student"><img src="{{asset('backend/images/gsplogo.png')}}" alt=""></a>
        </div>
        <div id="accordion">

            <div class="card">
                <div class="card-header">
                    <a href="/student">
                        <li><i class="fa-solid fa-gauge"></i> &nbsp;Dashboard</li>
                    </a>
                </div>

            </div>
           
           <div class="card">
                <div class="card-header">
                    <a  data-bs-toggle="collapse" href="#collapseTwo">
                        <li><i class="fa-solid fa-book-open-reader"></i> &nbsp; <span>Studetnt Details</span> </li>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="/studentprofile">Student Profile</a></li>
                            <li class="list-group-item"><a href="/changeprofile">Change Profile</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="" data-bs-toggle="collapse" href="#collapseTwo">
                        <li><i class="fa-solid fa-ribbon"></i> &nbsp; <span>Course</span> </li>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">First item</a></li>
                            <li class="list-group-item"><a href="#">Second item</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="" data-bs-toggle="collapse" href="#collapseThree">
                        <li><i class="fa-solid fa-chart-line"></i> &nbsp; <span>Technical Work</span> </li>
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">First item</a></li>
                            <li class="list-group-item"><a href="#">Second item</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="" data-bs-toggle="collapse" href="#collapseFour">
                        <li><i class="fa-brands fa-playstation"></i> &nbsp; <span>Assessments Work</span> </li>
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">First item</a></li>
                            <li class="list-group-item"><a href="#">Second item</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="" data-bs-toggle="collapse" href="#collapseFive">
                        <li><i class="fa-solid fa-square-poll-horizontal"></i> &nbsp; <span>Placements Work</span> </li>
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">First item</a></li>
                            <li class="list-group-item"><a href="#">Second item</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="" data-bs-toggle="collapse" href="#collapseSix">
                        <li><i class="fa-solid fa-square-poll-horizontal"></i> &nbsp; <span>Drive Skills</span> </li>
                    </a>
                </div>
                <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">First item</a></li>
                            <li class="list-group-item"><a href="#">Second item</a></li>
                            <li class="list-group-item"><a href="#">Third item</a></li>
                            <li class="list-group-item"><a href="#">Fourth item</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

    </div>
   {{$slot}}
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    @livewireScripts
</body>

</html>