<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

    <div class="col-md-6">
        <input id="title" type="text" placeholder="Enter title of your story" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$story->title) }}">

        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

    <div class="col-md-6">
        <textarea type="text" cols="20" rows="6" placeholder="Enter the body of your story" class="form-control @error('body') is-invalid @enderror" name="body">{{ old('body',$story->body) }}</textarea>
        @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Published Date') }}</label>

    <div class="col-md-6">
        <input id="title" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date',$story->date) }}">
        @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
