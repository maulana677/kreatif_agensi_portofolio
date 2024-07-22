<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('frontend/src/output.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="{{ asset($generalSetting->favicon) }}" />

    @stack('before-style')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    @stack('after-style')

    <title>@yield('title')</title>
</head>

<body class="text-portto-black font-poppins">
    <div class="flex flex-col min-h-screen">
        @php
            $footerGridOne = \App\Models\FooterGridOne::where(['status' => 1])->get();
            $footerGridTwo = \App\Models\FooterGridTwo::where(['status' => 1])->get();
            $footerGridThree = \App\Models\FooterGridThree::where(['status' => 1])->get();
            $footerGridFour = \App\Models\FooterGridFour::where(['status' => 1])->get();

            $footerGridOneTitle = \App\Models\FooterTitle::where([
                'key' => 'grid_one_title',
            ])->first();
            $footerGridTwoTitle = \App\Models\FooterTitle::where([
                'key' => 'grid_two_title',
            ])->first();
            $footerGridThreeTitle = \App\Models\FooterTitle::where([
                'key' => 'grid_three_title',
            ])->first();
            $footerGridFourTitle = \App\Models\FooterTitle::where([
                'key' => 'grid_four_title',
            ])->first();
        @endphp

        @yield('content')

        @stack('before-script')
        <script src="https://cdn.tailwindcss.com"></script>
        @stack('after-script')
    </div>

</body>

</html>
