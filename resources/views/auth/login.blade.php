<x-guest-layout>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <div class="card shadow-2-strong mb-5" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                 <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="form1Example3"
                            checked
                        />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #f50334" href="{{ url('auth/google') }}" role="button">
                        <i class="fab fa-google-f me-2"></i>Continue with Google
                    </a>
                </form>
            </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
</x-guest-layout>
