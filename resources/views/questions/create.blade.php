@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask a questions</h2>
                        <div class="ml-auto">
                        <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all questions</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <form action="{{route('questions.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="question-title">Question title</label>
                    <input type="text" name="title" value="{{old('title')}}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">

                        {{-- Showing error for title --}}
                        @if( $errors->has('title') )
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('title')}}</strong>
                            </div>
                        @endif
                        {{-- Showing error for title --}}
                    </div>

                    <div class="form-group">
                        <label for="question-body">Explain your question</label>
                    <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" cols="30" rows="10">{{old('body')}}</textarea>

                        {{-- Showing error for body --}}
                        @if( $errors->has('body') )
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif
                        {{-- Showing error for body --}}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
