@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <footer class="content">
            <div class="title m-b-md">
                Business Listings
            </div>
            <div class="card" id="error-card">
                <h3 class="card-header">Nothing Found!</h3>
                <div class="card-body">
                    <h4 class="card-title">Error Code: 404</h4>
                    <p>It appears that we are not able to complete your request.</p>
                    <ul class="error-ul">
                        <li>Please the url or click below to return to the main
                            page.</li>
                            <li><a class="btn btn-success btn-sm p-2 m-3" href="/index.php/listings"  role="button">View
                                    Listings</a></li>
                    </ul>
                </div>
            </div>
            <h5>Important Notice</h5>
            <section class="security">

                This web application has been developed by KCEA,LLC using Laravel Technologies following MVC
                patterns.<br>
                Business Listings was built for educational purposes only. <br>
                Feel free to register and login. <br>
                <b>Data you enter into this application is NOT used for any other purposes
                    except
                    accessing
                    the application for your personal testing.</b> <br>
                <b>You should NOT enter financial or private personal information to view this demo.</b>
            </section>
            <div class="links">
                <a  class="links" href="https://github.com/KCEALLC" target="blank" title="KCEALLC GitHub">KCEALLC GitHub</a>
            </div>
        </footer>
    </div>
@endsection
