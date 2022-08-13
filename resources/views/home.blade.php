 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center" style="font-size: 36px;font-weight: 700;">Stories Listing</h1> <hr>
            <br><br>
            <form action="{{ route('search') }}" class="" method="POST">
                @csrf
            <div class="row">
                <div class="col-md-8"></div>

                    <div class="col-md-3">
                        <input type="text" name="search" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <input type="submit" class="btn btn-danger">
                    </div>

            </div>
        </form>
            <div class="row justify-content-center">
                @foreach ($stories as $story)
                    <div class="col-md-8" style="margin-block: 15px;">
                        <h3>{{ $story->title }}</h3>
                        <h5>By <span style="font-weight: 700">{{ $story->users->name }}</span> on <span style="font-weight: 700">{{ changeDateFormate(date($story->date),'d M Y')  }}</span></h5>
                        <p>{{ $story->body }}</p>
                        <div class="row">
                            <div class="col-md-6">

                                <a href="{{ route('json',$story->id) }}" class="btn btn-primary mr-2">JSON</a>
                            </div>
                            <div class="col-md-6" style="display:flex">
                                <a href="{{ route('story.edit',$story->id) }}" class="btn btn-primary mr-2">Edit</a>
                                <form action="{{ route('story.destroy',$story->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                {{ $stories->links() }}
            </div>

        </div>
    </div>
    @endsection
