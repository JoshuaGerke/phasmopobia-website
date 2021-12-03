<!doctype html>

<head>
  <!-- ... --->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/components/fonts.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-main-bg antialiased">
  <div class="bg-main-board bg-cover bg-no-repeat bg-center h-[1079px] w-[2048px] absolute text-center" id="main-board">
    <input id="routeName" type="hidden" value="{{ Route::currentRouteName() }}">
    @section('content')

    @show
  </div>
</body>
