@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                            <h1>{{$question->title}}</h1>
                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all
                                    questions</a>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="media">
                        {{-- برای اضافه کردن این ایکن ها از لینک زیر استفاده می کنیم  --}}
                        {{-- این لینک را باید به فایل app.blade.php  اضافه می کنیم  --}}
                        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
                        <div class="d-flex flex-column vote-controls">
                            <a title="This question is usefull" class="vote-up">
                                <i class="fa fa-caret-up fa-3x"></i>
                            </a>
                            <span class="votes-count">1230</span>
                            <a title="This question is not useful" class="vote-down">
                                <i class="fa fa-caret-down fa-3x"></i>
                            </a>
                            <a title="Click to mark as favorite question (Click again to undo )"
                                class="favorite mt-2 favorited">
                                <i class="fa fa-star fa-2x"></i>
                                <span class="favorites-count">123</span>
                            </a>
                        </div>
                        <div class="media-body">
                            {!! $question->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">Asked: {{$question->created_date}}</span>
                                <div class="media mt-2">
                                    <a href="{{$question->user->url}}" class="pr-2">
                                        <img src="{{$question->user->avatar}}" alt="">
                                    </a>
                                    <div class="media-body mt-1">
                                        <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('answers._index', [
        'answers' => $question->answers,
        'answerCount' => $question->answers_count
    ])

    @include('answers._create')

</div>
@endsection
