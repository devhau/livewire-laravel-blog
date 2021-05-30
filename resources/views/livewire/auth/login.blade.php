<main class="d-flex w-100 auth-wrapper">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <h1 class="h2">Login</h1>
                                <p class="lead">
                                    Welcome back, Guest
                                </p>
                            </div>
                            <div class="m-sm-4">
                                <form wire:submit.prevent="submit">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                            placeholder="Enter your email" wire:model.defer="email" />
                                        @error('email') <p class="error">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                            placeholder="Enter your password" wire:model.defer="password" />
                                        <small>
                                            <a href="{{ route('forgot-password') }}">Forgot password?</a>
                                        </small>
                                        @error('password') <p class="error">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="remember"
                                                wire:model.defer="remember">
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>
                                    </div>
                                    @error('submit') <p class="error">{{ $message }}</p> @enderror

                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
