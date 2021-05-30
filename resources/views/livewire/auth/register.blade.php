<main class="d-flex w-100 auth-wrapper" >
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
							<div class="text-center mt-4">
								<h1 class="h2">Register</h1>
								<p class="lead">
									Welcome back, Guest
								</p>
							</div>
                            <div class="m-sm-4">
                                <form wire:submit.prevent="submit">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control form-control-lg" type="text" name="name"
                                            placeholder="Enter your name" wire:model="name" />
                                        @error('name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                            placeholder="Enter your email" wire:model="email" />
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                            placeholder="Enter your password"  wire:model="password" />
                                        @error('password') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password Confirmed</label>
                                        <input class="form-control form-control-lg" type="password" name="password_confirmation"
                                            placeholder="Enter your password"  wire:model="password_confirmation" />
                                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="text-center mt-3">
                                         <button type="submit" class="btn btn-lg btn-primary">Register</button>
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
