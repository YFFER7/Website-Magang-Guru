<x-guest-layout>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-lg rounded-3">
                    <div class="card-header py-3 bg-white fw-semibold">Registrasi Akun Guru</div>
                    <div class="card-body mt-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- First Row --}}
                            <div class="form-group row mb-4">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="nama_lengkap" class="fw-semibold">Nama Lengkap:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                                        class="form-control rounded py-3" placeholder="Nama Lengkap">
                                </div>


                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="no_hp" class="fw-semibold">No Handphone:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="number" id="no_hp" name="no_hp"
                                        class="form-control rounded py-3" placeholder="No Handphone/WA">
                                </div>
                            </div>

                            {{-- Second Row --}}
                            <div class="form-group row mb-4">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="email" class="fw-semibold">Email:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="text" id="email" name="email"
                                        class="form-control rounded py-3" placeholder="email@example.com">
                                </div>


                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="konfirmasi_email" class="fw-semibold">Konfirmasi Email:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="text" id="konfirmasi_email" name="konfirmasi_email"
                                        class="form-control rounded py-3" placeholder="email@example.com">
                                </div>
                            </div>

                            {{-- Third Row --}}
                            <div class="form-group row mb-4">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="pw" class="fw-semibold">Password:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="text" id="pw" name="password"
                                        class="form-control rounded py-3" placeholder="Password">
                                </div>


                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="konfirmasi_pw" class="fw-semibold">Konfirmasi Password:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <input type="text" id="konfirmasi_pw" name="konfirmasi_pw"
                                        class="form-control rounded py-3" placeholder="Konfirmasi Password">
                                </div>
                            </div>

                            {{-- Fourth Row --}}
                            <div class="form-group row mb-4">
                                <div class="col-sm-1 d-flex align-items-center">
                                    <label for="captcha" class="fw-semibold">Captcha:</label>
                                </div>
                                <div class="col-sm-5 register">
                                    <img src="https://disnaker.bandung.go.id/captcha/default?qDA8NWN6" class="mb-2 rounded w-25">    
                                    <input type="text" id="captcha" name="captcha"
                                        class="form-control rounded py-3" placeholder="Captcha">
                                </div>
                            </div>   

                                {{-- Fifth Row --}}
                                <div class="form-group row mb-4">
                                    <div class="col-6 d-flex align-items-center">
                                        <button type="button" class="btn btn-secondary me-3 px-3 py-2">Close</button>
                                        <button type="submit" class="btn btn-primary px-4 py-2">Save</button>
                                </div>
                            </div>
                        </form>
                        {{-- footer --}}
                        <footer class="pt-5 pb-1 mt-auto">
                            <h5 class="text-center opacity-50">2024 @ Tataq Bayu Rabbani</h5>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
