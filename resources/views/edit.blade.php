@extends('layouts.app')

@section('title')

    Edit {{ $photo->headline }}

@endsection

@section('content')

    {{ Form::model($photo, ['method' => 'PATCH', 'action' => ['PhotosController@update', $photo->id], 'files' => true]) }}

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
        {{ Form::label('pin', 'Current Pin (It doesn\'t change): ') }}
        {{ Form::password('pin', null) }}
    </div>

    <div class="form-group">
        {{ Form::submit('+ Upload') }}
    </div>

    {{ Form::close() }}

@endsection