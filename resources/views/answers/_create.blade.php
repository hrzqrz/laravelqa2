<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3> Your answer </h3>
                </div>
                <hr>
            <form action="{{route('questions.answers.store', $question->id)}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <textarea class="form-control @error('body') is-invalid @enderror " name="body" id="body" cols="30" rows="10"></textarea>

                        @error('body')
                            <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Answer</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>