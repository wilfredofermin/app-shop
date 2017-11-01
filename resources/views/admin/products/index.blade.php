@extends('layouts.principal')
@section('body-class','landing-page')
@section('title','Listado de prodcutos')
@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Nuestros productos</h2>
                <div class="team">
                    <div class="row">
                       @include('auth.products.table')
                    </div>

                </div>
            </div>
        </div>
    </div>
@include('layouts.include.footer')
@endsection

