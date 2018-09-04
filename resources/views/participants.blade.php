@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Participants</div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" width="100%" cellspacing="0" id="example">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Country</th>
                                <th>Contact Number</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{ $author->title }} {{ $author->name }}</td>
                                    <td>{{ $author->type }}</td>
                                    <td>{{ $author->country }}</td>
                                    <td>{{ $author->contact_number }}</td>
                                    <td colspan="2">
                                        <a href="{{route('admin.authorRegistrationDetails',$author->id)}}"
                                           class="btn btn btn-sm btn-outline-info" role="button">Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>
    <script>
      $(document).ready(function() { $('#example').DataTable(); } );
    </script>
@endsection
