<!DOCTYPE html>
<html>

<head>
    @include('backend.dashboard.compoment.head')

</head>

<body>
    <div id="wrapper"></div>
        @include('backend.dashboard.compoment.sidebar')

        <div id="page-wrapper" class="gray-bg">
            @include('backend.dashboard.compoment.nav')
            @include($template)
            @include('backend.dashboard.compoment.footer')
        </div>
    </div>
    @include('backend.dashboard.compoment.script')
</body>

</html>
