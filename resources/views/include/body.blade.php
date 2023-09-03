<form action="{{route('profile')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
    @csrf
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Hello, @auth{{auth()->user()->name}}@endauth</h1>
                <p class="lead text-body-secondary">What would you like to do this time?</p>
                <div class="container">
                    <div class="mb-3">
                        <a href="{{route('saved_passwords')}}" class="btn btn-primary">Review saved passwords</a>
                    </div>
                </div>
                <div class="container">
                    <div class="mb-3">
                        <a href="{{route('generate_password')}}" class="btn btn-success">Generate new password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
