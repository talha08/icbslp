@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                     Authors(Paper)<br>
                                    <h3><b>{{ $authors }}</b></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col order-12">
                            <div class="card">
                                <div class="card-body">
                                    Authors(Poster)<br>
                                    <h3><b>{{ $posters }}</b></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col order-12">
                            <div class="card">
                                <div class="card-body">
                                    Participants<br>
                                    <h3><b>{{ $participants }}</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
