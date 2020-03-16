@extends('layout')

@section('create') 
<div id="wrapper">
    <div id="page" class="container columns is-full">
        <h1 class="heading has-text-weight-bold is-size-4">New Artwork</h1>

        <form method="POST" action="/home/store">
            {{-- cross-site request forgery to prevent 419 error--}}
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input {{ $errors->has('title') ? 'is-danger' : ''}}" type="text" name="title"
                        id="title" {{-- this provides the previous input's value: --}} value="{{ old('title') }}" />

                    @if ($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="url">Image URL</label>
            
                <div class="control">
                    <input class="input {{ $errors->has('url') ? 'is-danger' : ''}}" type="text" name="url" id="url"
                        {{-- this provides the previous input's value: --}} value="{{ old('url') }}" />
            
                    @if ($errors->has('url'))
                    <p class="help is-danger">{{ $errors->first('url') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="medium">Medium</label>
            
                <div class="control">
                    <input class="input {{ $errors->has('medium') ? 'is-danger' : ''}}" type="text" name="medium" id="medium"
                        {{-- this provides the previous input's value: --}} value="{{ old('medium') }}" />
            
                    @if ($errors->has('medium'))
                    <p class="help is-danger">{{ $errors->first('medium') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="statement">Statement</label>
            
                <div class="control">
                    <textarea class="textarea @error('statement') is-danger @enderror" type="body" name="statement" id="statement"
                        value="{{ old('statement') }}"></textarea>
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection