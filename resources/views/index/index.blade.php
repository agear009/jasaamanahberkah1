
@extends('Layouts.MainIndex')
@section('Container')



        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Tracker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index">Home</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">JASA AMANAH BERKAH</h1>
                            <p class="display-5 fw-bolder text-white mb-2">TRACKER</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center mt-8">

                                    <form class="d-flex" role="search" action="/searchs" method="get">
                                        <div class="input-group mb-3">
                                        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>





    @endsection


