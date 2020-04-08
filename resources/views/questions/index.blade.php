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
                            <div class="media-body">
                                <h3 class="mt-3">{{$question->title}}</h3>
                                {{str_limit($question->body, 250)}}
                            </div>
                            <hr>
                        </div>
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
