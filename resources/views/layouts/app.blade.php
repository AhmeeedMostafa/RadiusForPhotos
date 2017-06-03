<!DOCTYPE HTML>
<!--
	Radius by TEMPLATED
	templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>

    <!-- Header -->
    @if ($_SERVER['REQUEST_URI'] == '/')

        <header id="header">
            <div class="inner">
                <div class="content">
                    <h1>Radius</h1>
                    <h2>A fully responsive website, you can upload a photo with title & caption, edit & share it without registration.<br /><br />
                        <u>Programming:</u> Ahmed Mostafa.</h2>
                    <a href="#" class="button big alt"><span>Let's Go</span></a>
                </div>
                <a href="#" class="button hidden"><span>Let's Go</span></a>
            </div>
            <a href="{{ route('upload') }}" class="upload">+Upload a photo</a>
        </header>

    @else

        <header id="header" class="preview">
            <div class="inner">
                <div class="content">
                    <h1>Radius</h1>
                    <h2>A fully responsive website, you can upload a photo with title & caption, edit & share it without registration.<br /><br />
                        <u>Programming:</u> Ahmed Mostafa.</h2>
                </div>
                <a href="/" class="button hidden"><span>Let's Go</span></a>
            </div>
            <a href="{{ route('upload') }}" class="upload">+Upload a photo</a>
        </header>

    @endif

    <!-- Main -->
    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <a href="#" class="info fa fa-info-circle"><span>About</span></a>
        <div class="inner">
            <div class="content">
                <h3>Footer content headline is based here !</h3>
                <p>Footer whole content based here, I got this free template ( Radius ) & programmed it to be dynamic & functional to let anyone, upload a photo with title & caption,
                    edit it with the pin he creates while uploading the photo, then share the url with the others, it doesn't require any registration, all photos shown in the home
                    page with pagination after 18 photos. <br />
                    Regards xD.</p>
            </div>
            <div class="copyright">
                <h3>Ahmed Mostafa's ( FB & linkedin )</h3>
                <ul class="icons">
                    <li><a href="https://facebook.com/ahmeeedmustafa" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                    <li><a href="https://linkedin.com/in/ahmeeedmostafa" class="icon fa-linkedin" target="_blank"><span class="label">Instagram</span></a></li>
                </ul>
                &copy; Radius. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Programming: <a onclick="var goto = confirm('If u want to open my Facebook profile click OK, \r\nIf u want to Open my Linkedin profile click CANCEL'); if (goto) {window.location.href = 'https://facebook.com/ahmeeedmustafa'; } else { window.location.href = 'https://linkedin.com/in/ahmeeedmostafa'; }" style="cursor: pointer">Ahmed Mostafa</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>