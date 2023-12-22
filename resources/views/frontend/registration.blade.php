@extends('frontend.layout.main')

@push('title')
    <title>CODEX.</title>
@endpush

@section('main')
    <style>
        .appointment-box .container {
            padding: 100px 0px;
        }
    </style>





    <!-- Form -->
    <div class="section-area section-sp3 ovpr-dark bg-fix appointment-box" id="contact"
        style="background-image:url(frontend/assets/images/background/bg1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading-bx style1 text-white text-center">
                    <h2 class="title-head">Registration Form</h2>
                </div>
            </div>
            <form class="contact-bx " action="{{url('/register_post')}}" method="POST">
                @csrf
                {{-- <div class="ajax-message"></div> --}}
                <div class="row placeani">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Your Name</label>
                                <input name="name" type="text" required class="form-control valid-character">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Father's Name</label>
                                <input name="fathername" type="text" required class="form-control valid-character">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Your Email Address</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Mobile number</label>
                                <input name="phone" type="tel" required class="form-control int-value">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Alternate Mobile number</label>
                                <input name="alt_phone" type="tel" required class="form-control int-value">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <div class="input-group">
                                <input name="dob" type="date" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <div class="input-group">
                                <input type="radio" name="gender" id="" value="Male">Male
                                <input type="radio" name="gender" id="" value="Female">Female
                                <input type="radio" name="gender" id="" value="Others">Others
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Gender</label>
                                <input name="subject" type="text" required class="form-control">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>City</label>
                                <input name="city" type="text" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="input-group" name="state">
                                <option value="select" selected disabled>State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Last Qualification</label>
                                <input name="last_qualification" type="text" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="input-group" name="work_experience">
                                <option value="select"  selected disabled>Work Experience</option>
                                <option value="0">0</option>
                                <option value="1 year">1 year</option>
                                <option value="2 years">2 years</option>
                                <option value="3 years">3 years</option>
                                <option value="4 years">4 years</option>
                                <option value="5+ years">5+ years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button name="submit" type="submit" value="Submit" class="btn button-md">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('frontend/assets/images/background/appointment-bg.png') }}" class="appoint-bg" alt="" />
    </div>
    <!-- Form END -->
@endsection
