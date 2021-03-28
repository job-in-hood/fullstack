<x-layouts.app>
    <section>
        <div class="block no-padding  gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner2">
                            <div class="inner-title2">
                                <h3>Register</h3>
                                <span>Keep up to date with the latest news</span>
                            </div>
                            <div class="page-breacrumbs">
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="#" title="">Pages</a></li>
                                    <li><a href="#" title="">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signup-popup-box static">
                            <div class="account-popup">
                                <h3>Sign Up</h3>
                                <span>Lorem ipsum dolor sit amet consectetur adipiscing elit odio duis risus at lobortis ullamcorper</span>
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="cfield my-2">
                                        <input type="text" name="email" placeholder="Email">
                                        <i class="la la-envelope-o"></i>
                                    </div>
                                    @error('email')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <div class="cfield my-2">
                                        <input type="text" name="name" placeholder="Name">
                                        <i class="la la-user"></i>
                                    </div>
                                    @error('name')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <div class="cfield my-2">
                                        <input type="password" name="password" placeholder="Password">
                                        <i class="la la-key"></i>
                                    </div>
                                    @error('password')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <div class="cfield my-2">
                                        <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                                        <i class="la la-key"></i>
                                    </div>
                                    @error('password')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <button type="submit">Signup</button>
                                </form>
                                <div class="extra-login">
                                    <span>Or</span>
                                    <div class="login-social">
                                        <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                                        <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SIGNUP POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
