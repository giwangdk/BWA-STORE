@extends('layouts.dashboard')

@section('title')
Account Settings
@endsection

@section('content')
 <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">My Account</h2>
              <p class="dashboard-subtitle">
                Update your current profile
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <form action="">
                    <div class="card">
                      <div class="card-body">
                        <div class="row mb-2" >
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Your Name</label>
                              <input type="text" class="form-control" name="name" id="addressOne">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Your Email</label>
                              <input type="email" class="form-control" name="email" id="addressTwo">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Address 1</label>
                              <input type="text" class="form-control" name="addresOne" id="addressOne">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Addres 2</label>
                              <input type="text" class="form-control" name="addressTwo" id="addressTwo">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="province">Province </label>
                              <select name="province" id="province" class="form-control">
                                <option value="West Java">West Java</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="city">City </label>
                              <select name="city" id="city" class="form-control">
                                <option value="Bandung">Bandung</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input type="text" class="form-control" name="addrepostalCodessTwo" id="postalCode">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" class="form-control" name="country" id="country">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="text" class="form-control" name="mobile" id="mobile">
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection