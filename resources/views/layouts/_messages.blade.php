@if(Session('success'))

    <div class="alert alert-danger">
        <strong>Success </strong> {{Session('success')}}
    </div>

@endif()