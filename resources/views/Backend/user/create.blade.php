@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('user.store')}}" method="post" class="box-shadow mx-auto" style="width: 80%;"> @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="panel-head">
                    <div class="panel-title">NHẬP THÔNG TIN NGƯỜI DÙNG MỚI</div>
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
                            @if ($config['method'] == 'create')
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Mật Khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="password" value="{{old('password', ($user->password) ?? '')}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Nhập lại mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="password" name="re-password" value="" class="form-control" placeholder="">
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Phân Quyền
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    {{-- <select class="form-control input-sm m-bot15" id="role" name="role" >
                                        @foreach ($Roles as $id => $role )
                                        <option for = "role" value="{{ $role->id }}">{{ $role->tenvaitro }}</option>
                                        @endforeach
                                    </select> --}}
                                    <select class="form-control" name="vaitro"> 
                                        <option value="0" selected>[Chọn nhóm thành viên]</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Cộng tác viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit" style="padding: 8px 16px; margin-top:32px;">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
