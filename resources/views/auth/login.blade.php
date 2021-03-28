<x-layouts.app>
    <section>
        <div class="block no-padding  gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner2">
                            <div class="inner-title2">
                                <h3>Login</h3>
                                <span>Keep up to date with the latest news</span>
                            </div>
                            <div class="page-breacrumbs">
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="#" title="">Pages</a></li>
                                    <li><a href="#" title="">Login</a></li>
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
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                <span>Lorem ipsum dolor sit amet consectetur adipiscing elit odio duis risus at lobortis ullamcorper</span>
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="cfield mb-2">
                                        <input type="text" name="email" placeholder="Email">
                                        <i class="la la-user"></i>
                                    </div>
                                    @error('email')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <div class="cfield mb-2 mt-4">
                                        <input type="password" name="password" placeholder="Password">
                                        <i class="la la-key"></i>
                                    </div>
                                    @error('password')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror

                                    <p class="remember-label">
                                        <input type="checkbox" name="remember" id="remember"><label for="remember">Remember</label>
                                    </p>
                                    <a href="#" title="">Forgot Password?</a>
                                    <button type="submit">Login</button>
                                </form>
                                <div class="extra-login">
                                    <span>Or</span>
                                    <div class="login-social">
                                        <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                                        <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
