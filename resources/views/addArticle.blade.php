@extends('layouts.app')


@section('page-title')
Add Article
@endsection

@section('css')
<style>
.containerHere{
    border:2px solid black;
    display: inline-block;
    width: 500px;
    margin: 50px auto;
    background: rgb(177, 177, 177);
    text-align: center;
}
.containerHere h1{
    color: #fff;
    text-align: center;
}
form input, textarea{
    width: 400px;
    height: 30px;
    display: flex;
    margin: 10px auto;
}
textarea{
    min-height: 300px;
    min-width: 400px;
    max-width: 400px;
}
button{
    width: 100px;
    height: 50px;
   margin: 20px auto;
   border-radius: 25px;
   outline: none;
   border: none;
   cursor: pointer;

}
</style>

@endsection

@section('content')
<div class="containerHere">
    {{-- error input --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
            <ul>
                <li>{!! session('success') !!}</li>
            </ul>
    </div>
@endif
    <h1>Add Article</h1>
    <form action="{{Route('addArticle')}}" method="POST">
        @csrf
        <input type="text" name="title_article" id="title_article" placeholder="Enter Title">
        <br>
        <textarea name="body_article" id="body_article" placeholder="write any think"></textarea>
        <button>Publish</button>
    </form>
</div>


@endsection