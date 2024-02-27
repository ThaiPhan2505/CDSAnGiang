<!DOCTYPE html>
<html>

<head>
    @include('backend.Dashboard.component.head')
</head>
<body>
    <div id="wrapper">
        @include('backend.Dashboard.component.sidebar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('backend.Dashboard.component.nav')
            @include($template)
            @include('backend.Dashboard.component.footer')
        </div>
    </div>
    @include('backend.Dashboard.component.script')
</body>
</html>
