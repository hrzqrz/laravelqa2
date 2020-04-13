@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All questions</div>

                <div class="card-body">
                    @foreach( $questions as $question)
                        <div class="media mb-3">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{$question->votes}} &nbsp;</strong>{{str_plural('vote', $question->votes)}}
                                </div>

                            <div class="status {{ $question->status }}">
                                    <strong>{{$question->answers}} &nbsp;</strong>{{str_plural('answer', $question->answers)}}
                                </div>

                                <div class="view">
                                    {{$question->views." ".str_plural('view', $question->views)}}
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="mt-3"> <a href="{{$question->url}}">{{$question->title}}</a> </h3>
                                <p class="lead">
                                    Asked by
                                    <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="text-muted">{{$question->created_date}}</small>
                                </p>
                                {{str_limit($question->body, 250)}}
                            </div>
                            
                        </div>
                        <hr>
                    @endforeach
                    <div class="paginqation justify-content-center">
                        {{$questions->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection