<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.common.head')
    <title>Login</title>
</head>
<body>
    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      {{-- <img src="assets/img/logo.png" alt=""> --}}
                      <span class="d-none d-lg-block">FirstKart</span>
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
                        <span class="text-danger">
                            @if (session('error'))
                                {{session('error')}}
                            @endif
                        </span>
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your username & password to login</p>
                      </div>
    
                      <form class="row g-3 needs-validation" novalidate  action="{{route('admin_auth')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
    
                        
                        <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Login</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Don't have account? <a href="{{route('register_view')}}">Create an account</a></p>
                        </div>
                      </form>
    
                    </div>
                  </div>`
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main><!-- End #main -->
    @include('admin.common.script')
</body>
</html>