@extends('layouts.app')

@section('title')

    {{ $photo->headline }}

@endsection

@section('content')

    <div id="preview" {{ $img_class }}>
        <div class="inner">
            <div class="image fit">
                <img src="{{ $photo->path }}" alt="{{ $photo->headline }}" />
            </div>
            <div class="content">
                <header>
                    <h2>
                        {{ $photo->headline }}
                        <a href="{{ route('edit', $photo->id) }}" style="color: blue; font-size: 18px;">
                            <span class="fa fa-edit">Edit</span>
                        </a>
                    </h2>
                </header>
                <p>
                    {{ $photo->caption }}
                </p>
            </div>
        </div>
        @if ($previousPhoto)
            <a href="{{ route('show', $previousPhoto) }}" class="nav previous"><span class="fa fa-chevron-left"></span></a>
        @endif

        @if ($nextPhoto)
            <a href="{{ route('show', $nextPhoto) }}" class="nav next"><span class="fa fa-chevron-right"></span></a>
        @endif
    </div>

@endsection