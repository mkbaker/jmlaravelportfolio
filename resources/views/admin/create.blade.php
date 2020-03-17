@extends('layout')

@section('create') 
<div class="container upload-wrapper">
        <h1 class="heading has-text-weight-bold is-size-4">New Artwork</h1>

        <form method="POST" action="/admin/store">
            {{-- cross-site request forgery to prevent 419 error--}}
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input is-small {{ $errors->has('title') ? 'is-danger' : ''}}" type="text" name="title"
                        id="title" {{-- this provides the previous input's value: --}} value="{{ old('title') }}" />

                    @if ($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div> 
            </div>

            <div class="field">
                <label class="label" for="url">Image URL</label>
            
                <div class="control">
                    <input class="input is-small {{ $errors->has('url') ? 'is-danger' : ''}}" type="text" name="url" id="url"
                        {{-- this provides the previous input's value: --}} value="{{ old('url') }}" />
            
                    @if ($errors->has('url'))
                    <p class="help is-danger">{{ $errors->first('url') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="medium">Medium</label>
            
                <div class="control">
                    <select class="input is-small {{ $errors->has('medium') ? 'is-danger' : ''}}" type="text" name="medium" id="medium"
                        {{-- this provides the previous input's value: --}} value="{{ old('medium') }}" >
                        <option value="painting">Painting</option>
                        <option value="batik">Batik</option>
                        <option value="collaborative">Collaborative Artwork</option>
                        <option value="commission">Commission</option>
                        <option value="digital">Digital</option>
                        <option value="ink-pencil">Ink and Pencil</option>
                        <option value="mosaic">Mosaic</option>
                        <option value="print">Print</option>
                        <option value="sculpture">Sculpture</option>
                        <option value="watercolor">Watercolor</option>
                    </select>
            
                    @if ($errors->has('medium'))
                    <p class="help is-danger">{{ $errors->first('medium') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="statement">Statement</label>
            
                <div class="control">
                    <textarea class="textarea is-small @error('statement') is-danger @enderror" type="body" name="statement" id="statement"
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
@endsection