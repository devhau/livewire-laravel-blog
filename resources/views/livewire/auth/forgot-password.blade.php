<main class="d-flex w-100 auth-wrapper" >
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
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                            placeholder="Enter your email" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                            placeholder="Enter your password" required />
                                        <small>
                                            <a href="{{route('forgot-password')}}">Forgot password?</a>
                                        </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me"
                                                name="remember-me" checked>
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="index.html" class="btn btn-lg btn-primary">Sign in</a>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
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
