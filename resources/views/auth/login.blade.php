<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')

<body>
    @include ('layouts.nav')

    <section class="vh-100 bg-image" style="background-image: url('https://edm.com/.image/ar_4:3%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTgxOTQzNTc0MjQ0NTY2MzQ0/lan2019_1228_020031-6058_alivecoverage.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; padding-top: 50px;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card" style="background-color: rgba(0, 0, 0, 0.5); color: white;"> <!-- Set the background color with opacity and text color -->
                            <div class="card-header text-center">Login</div>
                            <div class="card-body p-2"> <!-- Reduced padding here -->
                                <form method="POST" action="{{ route('loginuser') }}">
                                    @csrf
                                    <div class="form-group mb-2"> <!-- Reduced margin here -->
                                        <input type="email" id="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        <label class="form-label" for="email">Your Email</label>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" id="password" class="form-control form-control-sm" name="password" required autocomplete="current-password">
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    <div class="d-grid mx-auto" style="max-width: 200px;"> <!-- Reduced maximum width -->
                                        <button type="submit" class="btn btn-primary btn-sm">Login</button> <!-- Reduced button size -->
                                    </div>
                                </form>
                                <p class="text-center mt-2 mb-0">Don't have an account yet? <a href="{{ route('register') }}" class="fw-bold text-white"><u>Register here</u></a></p> <!-- Reduced margin here -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>