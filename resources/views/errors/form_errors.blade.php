@if (count($errors))

    <div style="background-color: #f7a0a0; margin-top: 52px; padding-left: 10px; border-top-right-radius: 5px; border-bottom-left-radius: 5px; color: white">

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif