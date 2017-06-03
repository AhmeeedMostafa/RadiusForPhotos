@extends('layouts.app')

@section('title')

    Upload a new photo

@endsection

@section('content')

    {{ Form::open(['method' => 'POST', 'action' => 'PhotosController@upload', 'files' => true]) }}

        @include('errors.form_errors')

        <div>
            {{ Form::label('headline', 'Title: ') }}
            {{ Form::text('headline', null) }}
        </div>

        <div>
            {{ Form::label('caption', 'Caption: ') }}
            {{ Form::textarea('caption', null) }}
        </div>

        <div>
            {{ Form::label('photo', 'Photo: ') }}
            {{ Form::file('photo') }}
        </div>

        <div>
            {{ Form::label('pin', 'Pin (4 - 6 secret numbers u will use it if u want to edit the photo) : ') }}
            {{ Form::password('pin') }}
        </div>

        <div class="form-group">
            {{ Form::submit('+ Upload') }}
        </div>

    {{ Form::close() }}

@endsection