@if(Session::has('success'))
    <div class="bg-green-200 border-green-600 p-4 mb-3 rounded-sm shadow-sm">
        {{ Session::get('success')}}
    </div>
@endif
<!-- agr session m susscess ka msg h to success ka msg show krwa do.  -->
@if(Session::has('error'))
    <div class="bg-red-200 border-red-600 p-4 mb-3 rounded-sm shadow-sm">
        {{ Session::get('error')}}
    </div>
@endif
<!-- agr session m error h to error ka msg show krwa do.  -->