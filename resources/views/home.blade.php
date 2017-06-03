@extends('layouts.app')

@section('title')

    Home

@endsection

@section('content')

    @if (count($photos))

        <div id="main">

            <div class="inner">

                <div class="columns">

                    @php ($n = 0)

                    @foreach ($photos as $photo)

                        @php ($n++)

                        @if ($column_style == 1)

                            <div class="image fit">
                                <a href="{{ route('show', $photo->id) }}">
                                    <img src="{{ $photo->path }}" alt="{{ $photo->headline }}" class="image-resize-c1-{{ $n }}" />
                                </a>
                            </div>

                            @php
                                if(!($n%4)) {
                                    $column_style = 2;
                                    $n = 0;
                                }
                            @endphp

                        @else

                            <div class="image fit">
                                <a href="{{ route('show', $photo->id) }}">
                                    <img src="{{ $photo->path }}" class="image-resize-c2-{{ $n }}" alt="{{ $photo->headline }}" />
                                </a>
                            </div>

                            @php
                                if(!($n%4)) {
                                    $column_style = 1;
                                    $n = 0;
                                }
                            @endphp

                        @endif

                    @endforeach
                </div>

            </div>

            <div class="paginate">
                {{ $photos->links() }}
            </div>

        </div>

    @else
        <h2 style="position: absolute; right: 45%; bottom: 55%;">No photos found</h2>
    @endif

@endsection