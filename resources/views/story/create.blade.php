@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center" style="font-size: 36px;font-weight: 700;">Create New Story</h1><hr>
            <a href="{{route('home')}}" class="btn btn-danger right" style="float: right">All Story</a>
        <br><br>
        <form method="POST" action="{{ route('story.store') }}">
            @csrf

            @include('story.form')

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
