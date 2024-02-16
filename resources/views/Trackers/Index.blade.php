@extends('layouts.main')

@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('trackers.create') }}" class="btn btn-md btn-success mb-3">Insert Trackers</a>
                        <form class="d-flex" role="search" action="/trackers" method="get">
                            <div class="input-group mb-3">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                                <table class="table" border="0">
                                    <thead>
                                        <td class="">Code</td>
                                        <td class="">Name</td>
                                        <td class="">Name Order / Code</td>
                                        <td class="">Process</td>
                                        <td class="">Kendala</td>
                                        <td class=""></td>
                                        <td class="">Menu</td>
                                    </thead>
                                    <tbody>
                                    @forelse ($trackers as $tracker)
                                        <tr
                                        @if ($tracker->constraint=="-")
                                            bgcolor=""
                                        @else
                                            bgcolor="pink"
                                        @endif>

                                                <td class="text-left" width="15%">{{ $tracker->code }}</td>
                                                <td class="text-left" width="10%">{{ $tracker->name }}</td>
                                                @if( $tracker->jasa_name=="")
                                                <td class="text-left" width="15%">{{ $tracker->name_order }}</td>
                                                @else
                                                <td class="text-left" width="15%">{{ $tracker->jasa_name }}</td>
                                                @endif


                                                @if($tracker->status1=='Process')
                                                    @if( $tracker->jasa_process1=="")
                                                            <td class="text-left" width="15%">{{ $tracker->status1 }} 1</td>
                                                        @else
                                                            <td class="text-left">{{ $tracker->jasa_process1 }}</td>
                                                    @endif


                                                @elseif($tracker->status2=='Process')
                                                    @if( $tracker->jasa_process2=="")
                                                            <td class="text-left" width="15%">{{ $tracker->status2 }} 2</td>
                                                        @else
                                                            <td class="text-left">{{ $tracker->jasa_process2 }}</td>
                                                    @endif

                                                @elseif($tracker->status3=='Process')
                                                    @if( $tracker->jasa_process3=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status3 }} 3</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process3 }}</td>
                                                    @endif

                                                @elseif($tracker->status4=='Process')
                                                    @if( $tracker->jasa_process4=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status4 }} 4</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process4 }}</td>
                                                    @endif

                                                @elseif($tracker->status5=='Process')
                                                    @if( $tracker->jasa_process5=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status5 }} 5</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process5 }}</td>
                                                    @endif

                                                @elseif($tracker->status6=='Process')
                                                    @if( $tracker->jasa_process6=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status6 }} 6</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process6 }}</td>
                                                    @endif

                                                @elseif($tracker->status7=='Process')
                                                    @if( $tracker->jasa_process7=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status7 }} 7</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process7 }} 7</td>
                                                    @endif

                                                @elseif($tracker->status8=='Process')
                                                    @if( $tracker->jasa_process8=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status8 }} 8</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process7 }}</td>
                                                    @endif

                                                @elseif($tracker->status9=='Process')
                                                    @if( $tracker->jasa_process9=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status9 }} 9</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process9 }}</td>
                                                    @endif

                                                @elseif($tracker->status10=='Process')
                                                    @if( $tracker->jasa_process10=="")
                                                        <td class="text-left" width="15%">{{ $tracker->status10 }} 10</td>
                                                    @else
                                                        <td class="text-left">{{ $tracker->jasa_process10 }}</td>
                                                    @endif


                                                @else
                                                    <td class="text-left">Tidak dalam proses apapun</td>

                                                @endif


                                            <td class="text-left" width="10%">
                                                <p>{{ $tracker->constraint }}</p>
                                            </td>
                                            <td class="text-left" width="10%">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('trackers.update', $tracker->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Continue</button>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('cost') is-invalid @enderror" name="code" value="{{ $tracker->code }}" placeholder="insert code" required>

                                                    </div>
                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('cost') is-invalid @enderror" name="name" value="{{ $tracker->name }}" placeholder="insert name" required>

                                                    </div>
                                                    <div class="form-group">

                                                        <input type="hidden"  class="form-control @error('name_order') is-invalid @enderror"  placeholder="Please insert " name="name_order"  value="{{ $tracker->name_order }}" required>



                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('condition') is-invalid @enderror"  placeholder="Please insert "  name="condition"  value="{{ $tracker->condition }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status1') is-invalid @enderror"  placeholder="Please insert " name="status1" value="{{ $tracker->status1 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status2') is-invalid @enderror"  placeholder="Please insert " name="status2"  value="{{ $tracker->status2 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status3') is-invalid @enderror"  placeholder="Please insert " name="status3" value="{{ $tracker->status3 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status4') is-invalid @enderror"  placeholder="Please insert " name="status4"  value="{{ $tracker->status4 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status5') is-invalid @enderror"  placeholder="Please insert " name="status5" value="{{ $tracker->status5 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status6') is-invalid @enderror"  placeholder="Please insert " name="status6"  value="{{ $tracker->status6 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status7') is-invalid @enderror"  placeholder="Please insert " name="status7"  value="{{ $tracker->status7 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status8') is-invalid @enderror"  placeholder="Please insert " name="status8"  value="{{ $tracker->status8 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status9') is-invalid @enderror"  placeholder="Please insert " name="status9"  value="{{ $tracker->status9 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status10') is-invalid @enderror"  placeholder="Please insert " name="status10"  value="{{ $tracker->status10 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status10') is-invalid @enderror"  placeholder="Please insert " name="constraint"  value="-" required>

                                                    </div>


                                                </form>
                                            </td>


                                            <td class="text-left"width="15%">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('trackers.destroy', $tracker->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('trackers.show', $tracker->id) }}" class="btn btn-sm btn-dark">Show</a>
                                                    <a href="{{ route('trackers.edit', $tracker->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                      @empty
                                        <div class="alert alert-danger">
                                            Data tracker belum Tersedia.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>

                    </div>
                    {{--  {{ $countrys->links() }}  --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>
@endsection
