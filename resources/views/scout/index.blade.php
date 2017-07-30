@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Backend Search</h1>
                            <form action="/scout" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="search">Search Scout</label>
                                    <input class="form-control" type="text" name="query" id="query">
                                </div>
                            </form>
                        </div>
                    </div>
                    <scouts></scouts>
                </div>
            </div>
        </div>
    </div>
@endsection
