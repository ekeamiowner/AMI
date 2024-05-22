@extends('layouts.admin')
@section('content')
<body style="background: #003144;">
    <nav class="navbar navbar-light navbar-expand-md py-3" data-bs-spy="scroll" style="background: #ffffff;box-shadow: 0px 0px 11px 5px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-size: 18px;font-weight: bold;font-style: italic;font-family: Aldrich, sans-serif;">AMI - Admin Panel</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 16px;font-weight: bold;background: #003144;color: rgba(255,255,255,0.9);border-radius: 10px;">New publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 16px;font-weight: bold;background: #003144;color: rgb(255,255,255);border-radius: 10px;">Existing publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 16px;font-weight: bold;background: #003144;color: rgb(255,255,255);border-radius: 10px;">User management</a></li>
                </ul>
                <div class="spacer"></div><a class="btn btn-primary" role="button" style="background: rgb(0,49,68);font-weight: bold;font-style: italic;font-family: Aldrich, sans-serif;" href="#">Log out</a>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 5vw;">
        <div class="row">
            <div class="col-md-6 col-xl-3" data-aos="zoom-in-left">
                <div class="card" data-bss-hover-animate="bounce" style="margin-bottom: 2vw;">
                    <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 56px;margin-bottom: 1vw;">
                            <path d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <h4 class="card-title">Attention!</h4>
                        <h4 class="card-title">Attention!</h4>
                        <h6 class="text-muted card-subtitle mb-2">Be careful! Accepting a document will instantly upload it to the homepage!</h6>
                        <p class="card-text">In this section you can accept, reject or send back to modify the documents which the users already uploaded. Once you accept a document it will instantly appear on the homescreen. If you would like to change anything you should navigate to the Existing publications menu.&nbsp;</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-9" style="background: #ffffff;border-radius: 10px;">
                <div class="row" style="margin-top: 3vw;">
                    <div class="col">
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article</p>
                            </div>
                        </div>
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article<br></p>
                            </div>
                        </div>
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article<br></p>
                            </div>
                        </div>
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article<br></p>
                            </div>
                        </div>
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article<br></p>
                            </div>
                        </div>
                        <div class="row" style="margin: 10px;background: #204755;border-radius: 14px;margin-top: 16px;">
                            <div class="col">
                                <p style="color: rgb(255,255,255);">Name - Article<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="text-align: center;border-left: 2px solid rgb(33, 37, 41);">
                        <h1 style="font-size: 32px;margin-top: 3vw;">Name - Article</h1><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 129px;margin-top: 2vw;">
                            <path d="M12 10V16M12 16L9 13M12 16L15 13M17 21H7C5.89543 21 5 20.1046 5 19V5C5 3.89543 5.89543 3 7 3H12.5858C12.851 3 13.1054 3.10536 13.2929 3.29289L18.7071 8.70711C18.8946 8.89464 19 9.149 19 9.41421V19C19 20.1046 18.1046 21 17 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
                <div class="row" style="margin-top: 5vw;margin-bottom: 1vw;">
                    <div class="col text-center"><button class="btn btn-primary" type="button" style="background: #204755;">Accept</button></div>
                    <div class="col text-center"><button class="btn btn-primary" type="button" style="background: #204755;">Send to Modify</button></div>
                    <div class="col text-center"><button class="btn btn-primary" type="button" style="background: #204755;">Reject</button></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>