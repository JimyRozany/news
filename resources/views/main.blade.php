@extends('layouts.app')

{{-- @section('page-title')
Articles Page
@endsection --}}

@section('css')
<style>

body {
    background: #eee
}

.date {
    font-size: 11px
}

.comment-text {
    font-size: 12px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}

</style>
@endsection

@section('content')
<div class="search row-lg-3 center-block w-100">
    <form action="{{Route('search')}}" method="POST">
        @csrf


        <!-- Search form -->
        
        <div class="input-group mb-3 w-50 m-auto ">
            <input type="text" class="form-control l-5" name ="keySearch" id="keySearch" placeholder="Search . . . ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>
</div>

<div class="container mt-5">
    <h1>Articles</h1>
    @if(session('status')) {{-- for search result --}} 
    <h3>{{session('status')}}</h3>
    @endif


    @foreach ($articles as $article)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="d-flex flex-column comment-section">
                        <div class="bg-white p-2">
                            <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://persius.in/static/img/profile-pic.png" width="40">
                                <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$users->find($article->user_id)->name}}</span><span class="date text-black-50">Shared publicly - {{$users->find($article->user_id)->created_at->format('m/Y')}}</span></div>
                            </div>
                            <div class="mt-2">
                                <h5>{{$article->title_article}}</h5>
                                <p class="comment-text">{{$article->body_article}}</p>
                                
                                
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="d-flex flex-row fs-12">
                                <div class="like p-2 cursor"><i class="fa-solid fa-thumbs-up"></i><span class="ml-1"><a href="#" class="btn-like">Like</a> </span></div>
                                <div class="like p-2 cursor"><i class="fa-regular fa-comment"></i><span class="ml-1">Comment</span></div>
                                <div class="like p-2 cursor"><i class="fa-solid fa-up-right-from-square"></i><span class="ml-1">Share</span></div>
                            </div>
                        </div>
                        <div class="bg-light p-2">
                            <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="https://persius.in/static/img/profile-pic.png" width="40"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                            <div class="mt-2 text-right"><button class="btn btn-primary m-2 btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>
@endsection

