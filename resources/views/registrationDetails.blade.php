@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Registration Details</div>
                        <div class="float-right">
                            <a href="{{ url()->previous() }}"
                               class="btn btn btn-sm btn-outline-info" role="button">
                                <-Previous
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($author->paper)
                            <div class="card">
                                <div class="card-header text-center">Paper Information</div>
                                <div class="card-body">
                                    <b>WebID:</b> {{ $author->paper->id }} <br>
                                    <b>Paper ID:</b> {{ $author->paper->paper_id }} <br>
                                    <b>Paper Title:</b> {{ $author->paper->paper_title }} <br>
                                    <b>Paper Authors:</b> {{ $author->paper->paper_authors }} <br>
                                </div>
                            </div>
                            <hr>
                        @elseif($author->poster)
                            <div class="card">
                                <div class="card-header text-center">Poster Information</div>
                                <div class="card-body">
                                    <b>WebID:</b> {{ $author->poster->id }} <br>
                                    <b>Poster Title:</b> {{ $author->poster->poster_title }} <br>
                                    <b>Poster Authors:</b> {{ $author->poster->poster_authors }} <br>
                                </div>
                            </div>
                            <hr>
                        @endif
                            <div class="card">
                                <div class="card-header text-center">Author Information</div>
                                <div class="card-body">
                                    <b>WebID:</b> {{ $author->id }} <br>
                                    <b>Title:</b> {{ $author->title }} <br>
                                    <b>Name:</b> {{ $author->name }} <br>
                                    <b>Address:</b> {{ $author->address }} <br>
                                    <b>Affiliation:</b> {{ $author->affiliation }} <br>
                                    <b>Type:</b> {{ $author->type }} <br>
                                    <b>Country:</b> {{ $author->country }} <br>
                                    <b>Food Habit:</b> {{ $author->food_habit }} <br>
                                    <b>Email:</b> {{ $author->email }} <br>
                                    <b>Contact Number:</b> {{ $author->contact_number }} <br>
                                    <b>IEEE Id:</b> {{ $author->IEEE_card }} <br>
                                    <b>Registered At:</b> {{ $author->created_at }} <br><br>

                                    @if($author->payment_receipt)
                                    <div class="card">
                                        <div class="card-header text-center">Payment Slip</div>
                                        <div class="card-body">
                                            <img src="{{ asset('storage/app/'.$author->payment_receipt)}}"
                                                 class="center"
                                                 alt="Payment Slip Not Found/ Image Could Not be Loaded"
                                                 style="width:100%; max-width:300px;">
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($author->student_card)
                                    <div class="card">
                                        <div class="card-header text-center">Student Card</div>
                                        <div class="card-body">
                                            <img src="{{ asset('storage/app/'.$author->student_card)}}"
                                                 class="center"
                                                 alt="Student Card Not Found/ Image Could Not be Loaded"
                                                 style="width:100%; max-width:300px; height:250px;">>
                                        </div>
                                    </div><br>
                                    @endif

                                    @if($author->IEEE_card)
                                    <div class="card">
                                        <div class="card-header text-center">IEEE Card</div>
                                        <div class="card-body">
                                            <img src="{{ asset('storage/app/'.$author->IEEE_card)}}"
                                                 class="center"
                                                 alt="IEEE Card Not Found/ Image Could Not be Loaded"
                                                 style="width:100%; max-width:300px; height:250px;">
                                    </div>
                                    @endif

                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('style')
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
