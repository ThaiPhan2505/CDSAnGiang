@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['index']['title']])
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>{{$config['seo']['index']['title']}}</h5>
            </div>
            <div class="ibox-content">
                @include('backend.user.component.filter')
                @include('backend.user.component.table')
            </div>
        </div>
    </div>
</div>



