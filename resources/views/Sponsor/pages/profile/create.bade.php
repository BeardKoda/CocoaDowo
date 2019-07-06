
<div class="row">
    <div class="col-md-8">
        <p>Edit your profile detail</p>
        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation" validate action="{{route('save-profile')}}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>First name</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" value="" name="first_name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Last name</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" value="" name="last_name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                     </div>
                        <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label>Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" id="username" class="form-control" placeholder="Username" value="{{Auth::user()->name}}" name="username" disabled>
                            </div>
                        </div>


                    <div class="col-md-5 mb-3">
                            <label>Email</label>
                            <input type="text" id="firstname" class="form-control" placeholder="Email Address" value="{{Auth::user()->email}}" name="email" disabled>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                   </div>
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label>Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                            <div class="invalid-feedback">
                                Please provide a valid Address.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid City.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>State</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Country</label>
                            <input type="text" name="Country" id="country" class="form-control" placeholder="Country" required>
                            <div class="invalid-feedback">
                                Please provide a valid country.
                            </div>
                        </div>
                     </div>
                    <div class="form-group">
                        <div class="form-check">


                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save & Continue</button>
                </form>
            </div>
        </div>
    </div>
