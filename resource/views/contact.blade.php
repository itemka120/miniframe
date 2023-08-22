<!--Show's in layout.master file-->
@extends('layout.master')
<!--your title-->
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!--content of this page-->
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis mt-4">BladeOne Framework</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                <code>You are reading the content of Contact Page, click on the button below and go ahead to the Index Page :3</code>
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <a class="d-inline-flex align-items-center btn btn-outline-secondary btn-lg px-4 rounded-pill" role="button" href="http://remember.loc/">
                    Click here!
                </a>
            </div>
        </div>
    </div>
@endsection