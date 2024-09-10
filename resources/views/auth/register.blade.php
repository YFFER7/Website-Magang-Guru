<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <img src="https://disnaker.bandung.go.id/resources/admin/img/logo_bimma.png" alt="Logo" width="160px">
        </a>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <!-- Judul Formulir -->
                <div class="text-center mb-4">
                    <h5 class="font-weight-bold">Register Akun Perorangan</h5>
                </div>

                <!-- Formulir Registrasi -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="nama_pemohon" :value="__('Nama Lengkap')" class="me-2"/>
                            <x-text-input id="nama_pemohon" type="text" name="nama_pemohon" :value="old('nama_pemohon')" required autofocus class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('nama_pemohon')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="nohp" :value="__('No Handphone')" class="me-2"/>
                            <x-text-input id="nohp" type="text" name="nohp" :value="old('nohp')" required class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('nohp')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="email" :value="__('Email')" class="me-2"/>
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('email')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="email_confirmation" :value="__('Konfirmasi Email')" class="me-2"/>
                            <x-text-input id="email_confirmation" type="email" name="email_confirmation" :value="old('email_confirmation')" required class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('email_confirmation')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="password" :value="__('Password')" class="me-2"/>
                            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('password')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="me-2"/>
                            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required class="form-control" />
                        </div>
                        <x-input-error :messages="$errors->first('password_confirmation')" />
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <x-input-label for="captcha" :value="__('Captcha')" class="me-2"/>
                            <div class="d-flex align-items-center">
                                <img src="https://disnaker.bandung.go.id/captcha/default?LTRiaT3a" alt="Captcha" class="img-fluid me-2">
                                <x-text-input id="captcha" type="text" name="captcha" required class="form-control" />
                            </div>
                        </div>
                        <x-input-error :messages="$errors->first('captcha')" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
                        <x-primary-button>
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
