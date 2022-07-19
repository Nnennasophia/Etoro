@extends("layouts.customlayout")

@section('body')


<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form class="contact-form" action="{{route('register')}}" method="post"> 
                @csrf 
      

                <div class="form-group row">
                    <label for="InputFirstname" class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-9">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

               

                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Your Username:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" value="" name="username" placeholder="Username"  value="" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">E-mail Address:</label>
                    <div class="col-sm-9">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>



                <div class="form-group row">

                    <input type="hidden" id="track" name="country_code" >
                    <label for="phone" class="col-sm-3 col-form-label">Mobile Number</label>
                    <div class="col-sm-9">
                        <input type="tel"  class="form-control pranto-control" id="phone"  name="phone"  value="" placeholder="Your Contact Number" required>
                    </div>
                </div>


                <div class="form-group row d-none">
                    <label for="country" class="col-sm-3 col-form-label">Select Country</label>
                    <div class="col-sm-9">
                        <input type="text" name="country" id="country" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Define Password:</label>
                    <div class="col-sm-9">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Retype Password:</label>
                    <div class="col-sm-9">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                                <div class="form-group row">
                    <div class="col-sm-3 text-white"> </div>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" required id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">   <p> I agree with the terms and conditions </p>

                            <br>


                                                                <a target="_blank" href="{{route('login')}}"> Already a member, sign in </a>
                                                                ,

                                                                <a target="_blank" href="{{route('login')}}"> Already a member, sign in </a>

                                                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row pt-5">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-default website-color">Submit Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
