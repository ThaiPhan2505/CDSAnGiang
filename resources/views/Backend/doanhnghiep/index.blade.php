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
            @include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['index']['title']])
            <div class="col-lg-12 mt-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Thông Tin Doanh Nghiệp</h5>
                    </div>
                    <div class="ibox-content">
                        @include('backend.doanhnghiep.component.filter')
                        @include('backend.doanhnghiep.component.table')
                    </div>
                </div>
            </div>
            @include('backend.Dashboard.component.footer')
        </div>
    </div>
    @include('backend.Dashboard.component.script')
</body>
</html>

