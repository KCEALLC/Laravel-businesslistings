@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <footer class="content">
        <div class="title m-b-md">
            Business Listings
        </div>
        <h3>Features:</h3>
        <ul class="features">
            <li>CRUD (<em>Create, Read, Update & Delete</em>)</li>
            <li>Create,Edit,Delete Business Listings</li>
            <li>User Registration</li>
            <li>User Authentication</li>
            <li>Custom Navigation for Authorised Users</li>
            <li>Form validation with security tokens</li>
            <li>Error Handling with Flash Messages</li>
            <li>Custom Error Page</li>
            <li>Save Business Listings to Database</li>
            <li>Listings editable only by creator</li>
            <li><a class="btn btn-success btn-sm p-2 m-3" href="/index.php/listings"  role="button">View
                    Listings</a></li>
        </ul>
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
