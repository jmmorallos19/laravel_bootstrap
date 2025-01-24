<x-login-layout>
    <form action="{{ route('admin.dashboard') }}" method="Get" class="col col-xs-12 col-sm-8 col-md-6 col-xl-5 col-xxl-3 p-5 p-xxl-4">
        @csrf

        <div class="text-center mb-4">
            <img src="assets/images/college.jpg" alt="Logo" class="img-fluid mb-0 ms-0" id="img" style=" border-radius: 50%; border: 2px solid #193c71;">
            <h2 class="text-primary form-h2 fs-2 mb-4 mt-1">Sign In</h2>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
            <label for="floatingInput">Email Address</label>
        </div>

        <div class="input-group mb-4">
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <span class="input-group-text" id="toggle-password">
                <i class="bi bi-eye-slash" id="eye-icon"></i>
            </span>
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </div>

    </form>
</x-login-layout>