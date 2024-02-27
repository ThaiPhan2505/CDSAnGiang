<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cổng thông tin chuyển đổi số An Giang</title>
    <link rel="stylesheet" href="backend/customize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="padding-top: 50px">
      <h1 style="color: blue; padding: 0px 150px 32px; font-size: 50px; font-family: Bookma;">
        CỔNG THÔNG TIN CHUYỂN ĐỔI SỐ TỈNH AN GIANG
      </h1>
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://chuyendoisodoanhnghiep.info/wp-content/uploads/2021/03/chuyen-doi-so-trong-nganh-giao-duc.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="border:3px solid #000; border-radius:6px; padding: 32px">
              <form method= "post" role="form" action="{{route('auth.login')}}"> @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start bf-shadow">
                  <p class="lead mb-0 me-3 fs-1 fw-bold " style="font-family: Bookma;">Đăng nhập</p>
                </div>
                <p class="fw-normal mb-0 me-3 pb-3" style="font-family: Bookma;">Xin chào! Rất vui được gặp lại bạn.</p>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label fw-bold" for="form3Example3" style="font-size : 16px;">Tên Đăng Nhập</label>
                    <input name="email" type="text" id="form3Example3" class="form-control form-control-lg"/>
                    @if ($errors->has('email')) 
                        <span class="error-message">* 
                            {{$errors->first('email')}}
                        </span>
                    @endif    
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label fw-bold" for="form3Example4" style="font-size : 16px;">Mật Khẩu</label>
                    <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" />
                    @if ($errors->has('password')) 
                        <span class="error-message">* 
                            {{$errors->first('password')}}
                        </span>
                    @endif 
                </div>
      
                <div class="d-flex justify-content-between align-items-center pt-3">
                  <a href="#!" class="text-body text-decoration-none fs-6">Quên mật khẩu ?</a>
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Truy cập 
                    <i class="fa-solid fa-arrow-right ps-3"></i>
                  </button>
                </div>
      
                {{-- <div class="text-center text-lg-start mt-4 pt-2">
                  <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản ? <a href="#!"
                      class="link-danger">Đăng kí tài khoản </a></p>
                </div> --}}
                <button type="button" class="mt-3 fs-6 float-end btn-gg" 
                  style="padding: 6px 30px; font-weight : 600"
                  href="#!" 
                  role="button"><i class="fa-brands fa-google me-2"></i>Đăng nhập bằng Google
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>