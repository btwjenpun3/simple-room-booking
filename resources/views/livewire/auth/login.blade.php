<div>
    <div class="container container-normal py-6">
        <div class="row align-items-center g-4">
            <div class="col-lg">
                <div class="container-tight">
                    <div class="text-center mb-4">
                        {{-- <a href="#" class="navbar-brand navbar-brand-autodark"><img src="/static/logo.svg"
                                height="36" alt="">
                            </a> --}}
                    </div>
                    <div class="card card-md">
                        <div class="card-body">
                            <h2 class="h2 text-center mb-4">Masuk ke akun kamu</h2>
                            <form wire:submit="logins">
                                <div class="mb-3">
                                    <label class="form-label required">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        wire:model="username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label required">
                                        Password
                                    </label>
                                    <div class="input-group input-group-flat">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Your password" wire:model="password">
                                        <span class="input-group-text">
                                            <a href="#" class="link-secondary" title="Show password"
                                                data-bs-toggle="tooltip">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                    <path
                                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                </svg>
                                            </a>
                                        </span>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">Ingat saya</span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100"
                                        wire:loading.attr="disabled">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg d-none d-lg-block">
                <img src="/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto"
                    alt="">
            </div>
        </div>
    </div>

    @script
        <script>
            $wire.on('failed', (data) => {
                Toastify({
                    text: data,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "center",
                    stopOnFocus: true,
                    style: {
                        background: "red",
                    }
                }).showToast();
            });
        </script>
    @endscript
</div>
