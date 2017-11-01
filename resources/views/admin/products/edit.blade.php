@extends('layouts.principal')
@section('body-class','product-page')
@section('title','Nuevo producto')
@section('content')
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section ">
                <h2 class="title text-center">Registrar Producto</h2>
                <form method="post" action="{{url('/admin/products')}}">
                    {{csrf_field()}}
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Descripcion corta</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control" placeholder="Descripcion extensa" rows="5" name="long_description"></textarea>
                    </div>
                    <div align="center">
                        <button class="btn btn-primary">Registrar producto</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @include('layouts.include.footer')
@endsection

