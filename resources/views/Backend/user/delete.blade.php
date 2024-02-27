@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['delete']['title']])
<form action="{{route('user.destroy', $user->id)}}" method="post" class="box-shadow mx-auto mt-2" style="width: 80%;">
    @csrf
    @method('DELETE')    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="panel-head">
                    <div class="panel-title mb-0">THÔNG TIN NGƯỜI DÙNG</div>
                    <h4 class="mt-0" style="color: red;">Bạn có chắc đang muốn xóa người dùng</h4>
                    <h5 class="mt-0" style="color: red;">Lưu ý : Không thể khôi phục lại sau khi nhấn nút XÓA</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Họ Tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="name" value="{{old('name', ($user->name) ?? '')}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="email" value="{{old('email', ($user->email) ?? '')}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger" type="submit" style="padding: 12px 24px; margin-top:16px;">XÓA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
