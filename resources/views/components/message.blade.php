@if(session()->has('success'))
<div class="alert alert-success alert-dismissible position-fixed w-auto z-index-9999 right-0">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4 style="color: white"><i class="fa fa-check mr-2"></i>Success!</h4>
  <strong>{{session()->get('success')}}</strong>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade" role="alert">
  <h4 class="alert-heading">Oh Oo!</h4>
  <p class="text-inherit">{{ session()->get('error') }}</p>
  <hr />
  <p class="text-inherit mb-0">To register and Login to Skillpark, please follow this <a
      href="https://skillpark.herokuapp.com">link</a></p>
</div>
@endif

@if($errors->count() > 0)
<div class="alert alert-danger alert-dismissible fade">
  <h4 class="alert-heading">Oh Oo!</h4>
  <ul class="list-unstyled">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  <hr />
  <p class="text-inherit mb-0">To register and Login to Skillpark, please follow this <a
      href="https://skillpark.herokuapp.com">link</a></p>
</div>
@endif