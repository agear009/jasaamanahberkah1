
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

                                    <form class="d-flex" role="search" action="/searchs" >
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

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="table-responsive table-condensed">
                            <table class="table">
                                <tr>
                                    <td width="35%">
                                        <div class="form-group">

                                            <label class="font-weight-bold">Code</label>
                                            <p>{{ $tracker->code }}</p>

                                        </div>
                                    </td>
                                    <td width="65%">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Name</label>
                                            <p>{{ $tracker->name }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Produk</label>
                                            <p>{{ $tracker->jasa_name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Persyaratan yang Diberikan :</label>
                                            <p>{{ $tracker->condition }}</p>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process1 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status1 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process2 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status2 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process3 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status3 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process4 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status4 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process5 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status5 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process6 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status6 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process7 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status7 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process8 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status8 }}</label>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process9 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status9 }}</label>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="font-weight-bold">{{ $tracker->jasa_process10 }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">{{ $tracker->status10 }}</label>

                                        </div>
                                    </td>
                                </tr>

                                <tr
                                    @if ($tracker->constraint=="-")
                                        bgcolor=""
                                    @else
                                        bgcolor="orange"
                                    @endif>
                                    <td width="" colspan="2"  >
                                        <div class="form-group" text-align-top><label for="w3review"></label>
                                            <p align="center"><b>{{ $tracker->constraint }}</b></p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    @endsection
