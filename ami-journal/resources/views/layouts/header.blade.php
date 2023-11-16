<style>
    .nav{
        margin: none;
        width: 100%;
        overflow: hidden;
        background-color: #f2ffb0;
        position: fixed;
    }
    .nav a{
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        display: inline-block;
    
    }
    .nav a:hover{
        background-color: #e3ff54;
        color: black;
    }

    .nav a:visited{
        color: black;
    }
</style>
<div class="nav">
        <a href="http://127.0.0.1:8000/">Home</a>
        <a>Browse</a>
        <a>Submissions</a>
        <a>About</a>
        <input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input>
        <a href="{{ asset('login') }}" class="btn btn-primary" role="button" style="margin-left: auto; margin-right: 150px; --bs-primary: #004863;--bs-primary-rgb: 0,72,99;background: rgb(0,72,99);">Login</a>
</div>
<div class="container" data-aos="fade" data-aos-duration="1000" data-aos-once="true">
    <header>
    
        <div class="row">
            <div class="col-xl-3 d-xl-flex justify-content-xl-start align-items-xl-center"><img class="img-fluid" src="/img/summa.jpg" alt="Image of Summa"></div>
            <div class="col offset-xl-0 d-xl-flex align-items-xl-center">
                <h1 class="text-center" style="color: rgb(41,47,61);font-weight: bold;padding-left: 4vw;">ANNALES MATHEMATICAE<br><span style="color: rgb(186, 186, 186);">ET</span> INFORMATICAE<br></h1>
            </div>
            
        </div>
    </header>
</div>
