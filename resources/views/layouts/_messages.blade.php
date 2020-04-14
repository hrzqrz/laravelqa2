@if(Session('success'))

    <div class="alet alert-danger">
        <strong>Success </strong> {{Session('success')}}
    </div>

@endif()