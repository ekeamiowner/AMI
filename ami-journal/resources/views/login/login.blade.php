@extends('layouts.main')
@section('content')
<body style="background: rgb(255, 255, 255);">
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Log in</h2>
                    <p class="w-lg-50">You have to be logged in to upload any kind of document to the AMI.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5" style="border-width: 0px;">
                        <div class="card-body d-flex flex-column align-items-center" style="background: #004863;border-radius: 25px;"><img class="img-fluid" src="/img/unknown.png" style="margin-bottom: 2vw;padding-right: 2vw;padding-left: 2vw;padding-top: 4vw;">
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3" style="padding-top: 2vw;"><button class="btn btn-primary d-block w-100" type="submit" style="background: #003447;">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection