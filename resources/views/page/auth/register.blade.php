<x-layoutout>
    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form class="login100-form validate-form" method="POST" action="{{ route('register.store') }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <span class="login100-form-title">
                    Registration
                </span>
                <div class="wrap-input100 validate-input input-group"
                    data-bs-validate="Valid email is required: ex@abc.xyz">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-account" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control @error('name') is-invalid @enderror"
                        type="text" name="name" value="{{old('name')}}" placeholder="Nama Lengkap">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input input-group"
                    data-bs-validate="Valid email is required: ex@abc.xyz">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control @error('email') is-invalid @enderror"
                        name="email" type="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input input-group">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-account-card-details" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control  @error('nik') is-invalid @enderror"
                        type="text" name="nik" value="{{old('nik')}}" placeholder="Nomot Induk Kependudukan">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input input-group">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="icon icon-phone" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control  @error('no_hp') is-invalid @enderror"
                        type="text" name="no_hp" value="{{old('no_hp')}}" placeholder="Nomor Ponsel">
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input input-group">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="icon icon-location-pin" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control @error('alamat') is-invalid @enderror"
                        type="text" name="alamat" value="{{old('alamat')}}" placeholder="Alamat">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input input-group">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="icon icon-layers  " aria-hidden="true"></i>
                    </a>
                    <input
                        class="input100 border-start-0 ms-0 form-control @error('jenis_dagangan') is-invalid @enderror"
                        type="text" name="jenis_dagangan" value="{{old('jenis_dagangan')}}" placeholder="Jenis Dagangan">
                    @error('jenis_dagangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control @error('password') is-invalid @enderror"
                        name="password" type="password" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" type="password"  placeholder="Password Confirmation">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                </label>
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn btn btn-primary">
                        Register
                    </button>
                </div>
                <div class="text-center pt-3">
                    <p class="text-dark mb-0 d-inline-flex">Belum memiliki akun ?<a href="{{ route('auth.login') }}"
                            class="text-primary ms-1">Masuk</a></p>
                </div>

            </form>
        </div>
    </div>
</x-layoutout>
