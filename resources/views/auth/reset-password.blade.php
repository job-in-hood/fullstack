<x-layouts.app class="flex flex-col">
    <x-layouts.page-breadcrumb-section title="Reset Password">
        Please define your new password
    </x-layouts.page-breadcrumb-section>

    <section class="w-full max-w-sm mx-auto flex-grow">
        <form method="post" action="{{ route('password.update') }}" class="flex flex-col space-y-6 mb-12">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <x-form.text-input name="email" placeholder="Email" readonly class="p-4 h-full w-full"
                               value="{{ old('email', request()->get('email')) }}">
                <x-slot name="icon"><i class="las la-envelope text-2xl text-gray-500"></i></x-slot>
                @error('email')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.text-input type="password" name="password" placeholder="Password" class="p-4 h-full w-full">
                <x-slot name="icon"><i class="las la-key text-2xl text-gray-500"></i></x-slot>
                @error('password')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.text-input type="password" name="password_confirmation" placeholder="Password Again"
                               class="p-4 h-full w-full">
                <x-slot name="icon"><i class="las la-key text-2xl text-gray-500"></i></x-slot>
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.standard-button>Update password</x-form.standard-button>
        </form>
    </section>
    {{--    <section>--}}
    {{--        <div class="block remove-bottom">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-12">--}}
    {{--                        <div class="account-popup-area signup-popup-box static">--}}
    {{--                            <div class="account-popup">--}}
    {{--                                <h3>Sign Up</h3>--}}
    {{--                                <span>Lorem ipsum dolor sit amet consectetur adipiscing elit odio duis risus at lobortis ullamcorper</span>--}}
    {{--                                <form method="post" action="{{ route('register') }}">--}}
    {{--                                    @csrf--}}
    {{--                                    <div class="cfield my-2">--}}
    {{--                                        <input type="text" name="email" placeholder="Email">--}}
    {{--                                        <i class="la la-envelope-o"></i>--}}
    {{--                                    </div>--}}
    {{--                                    @error('email')--}}
    {{--                                    <div class="text-danger small mb-2">{{ $message }}</div>--}}
    {{--                                    @enderror--}}

    {{--                                    <div class="cfield my-2">--}}
    {{--                                        <input type="text" name="name" placeholder="Name">--}}
    {{--                                        <i class="la la-user"></i>--}}
    {{--                                    </div>--}}
    {{--                                    @error('name')--}}
    {{--                                    <div class="text-danger small mb-2">{{ $message }}</div>--}}
    {{--                                    @enderror--}}

    {{--                                    <div class="cfield my-2">--}}
    {{--                                        <input type="password" name="password" placeholder="Password">--}}
    {{--                                        <i class="la la-key"></i>--}}
    {{--                                    </div>--}}
    {{--                                    @error('password')--}}
    {{--                                    <div class="text-danger small mb-2">{{ $message }}</div>--}}
    {{--                                    @enderror--}}

    {{--                                    <div class="cfield my-2">--}}
    {{--                                        <input type="password" name="password_confirmation" placeholder="Password Confirmation">--}}
    {{--                                        <i class="la la-key"></i>--}}
    {{--                                    </div>--}}
    {{--                                    @error('password')--}}
    {{--                                    <div class="text-danger small mb-2">{{ $message }}</div>--}}
    {{--                                    @enderror--}}

    {{--                                    <button type="submit">Signup</button>--}}
    {{--                                </form>--}}
    {{--                                <div class="extra-login">--}}
    {{--                                    <span>Or</span>--}}
    {{--                                    <div class="login-social">--}}
    {{--                                        <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>--}}
    {{--                                        <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div><!-- SIGNUP POPUP -->--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
</x-layouts.app>
