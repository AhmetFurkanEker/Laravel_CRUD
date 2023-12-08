@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kullanıcı Düzenleme</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Geri Dön</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>OPPPSSS!</strong> Geçersiz giriş.<br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>İsim:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="İsim">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Açıklama:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detaylar">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Kayıt Et</button>
            </div>
        </div>

    </form>
@endsection
