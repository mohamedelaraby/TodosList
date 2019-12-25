  {{-- Show errors --}}
  @if(count($errors) > 0)
  @foreach ($errors->all() as $error )
      @alert(['type' => 'danger'])
          {{$error}}
      @endalert
  @endforeach
@endif
 

{{-- check for session success --}}
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif

{{-- check for session error --}}
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

