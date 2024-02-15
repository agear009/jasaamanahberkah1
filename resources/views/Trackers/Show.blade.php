@extends('layouts.main')

@section('container')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="table-responsive table-condensed">
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="form-group">

                                        <label class="font-weight-bold">Code</label>
                                        <p>{{ $tracker->code }}</p>

                                    </div>
                                </td>
                                <td>
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

                            <tr>
                                <td width="50%">
                                    <div class="form-group"><label for="w3review"></label>
                                        <p>{{ $tracker->constraint }}</p>
                                    </div>


                                </td>
                                <td>
                                    <div class="form-group"><label for="w3review"></label>
                                        <p>{{ $tracker->constraint }}</p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
