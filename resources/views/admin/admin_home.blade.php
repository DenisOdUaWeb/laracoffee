@extends('admin.admin_app')

<H1>WELKOME TO THE ADMIN PANEL</H1>
@section('content') <!-- this section toesnt working as there is no layout for the admin -->    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<h1>Hi  {{ Auth::user()->name }}, how are you ?!</h1>


<section class="admin-section">
    <div class="container">
        <div class="admin-section-wrapper p-4">
            <div class="admin-section__button">
                <button class="admin-section__button admin_panel_btn btn btn-primary btn-lg"><a href="{{ url('/text-edit') }}">Text Editor</a></button>
            </div>
        </div>
    </div> 
</section>
<section class="admin-section">
    <div class="container">
        <div class="admin-section-wrapper p-4">
            <div class="admin-section__button">
                <button class="admin-section__button admin_panel_btn btn btn-primary btn-lg"><a href="{{ url('/text-edit') }}">Blog Editor (DROP DOWN MENU)</a></button>
            </div>
        </div>
    </div> 
</section>
 


@endsection
