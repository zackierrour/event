<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.nav')

    <section class="vh-100 bg-image" style="background-image: url('https://images.pexels.com/photos/3122799/pexels-photo-3122799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); background-position: center; background-size: cover; background-repeat: no-repeat; padding-top: 50px;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.25);"> <!-- Set the background color with opacity -->
                        <div class="card-header text-center">Create an account</div>
                        <div class="card-body p-2"> <!-- Reduced padding here -->
                            <form method="POST" action="{{ route('registeruser') }}">
                                @csrf
                                <div class="form-group mb-2"> <!-- Reduced margin here -->
                                    <input type="text" id="name" class="form-control form-control-sm" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label class="form-label" for="name">Your Name</label>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="email" id="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label class="form-label" for="email">Your Email</label>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="password" id="password" class="form-control form-control-sm" name="password" required autocomplete="new-password">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-2">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>
                                <div class="d-grid mx-auto" style="max-width: 200px;"> <!-- Reduced maximum width -->
                                    <button type="submit" class="btn btn-primary btn-sm">Register</button> <!-- Reduced button size -->
                                </div>
                            </form>
                            <p class="text-center text-black mt-2 mb-0">Have already an account? <a href="#" class="fw-bold text-body"><u>Login here</u></a></p> <!-- Reduced margin here -->
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
