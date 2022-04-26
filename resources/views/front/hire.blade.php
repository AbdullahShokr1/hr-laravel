<x-structure>

    <section class="page_title cs gradientvertical-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">
                    <h1 class="">Hiring Employees</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Hiring Employees
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>


    <section class="lss-overlay s-map-light s-py-130 c-gutter-60 container-px-30">
        <div class="container ">
            <div class="row">

                <div class="divider-30 d-none d-xl-block"></div>

                <div class="col-lg-8 offset-lg-2 animate" data-animation="slideDown">

                    <form action="{{route('send-hire')}}" class="black-bg contact-form c-mb-20 c-gutter-20" method="POST"  >
                        @csrf
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="ds form-group has-placeholder">
                                    <label for="name">Full Name</label>
                                    <input type="text"  value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="ds form-group has-placeholder">
                                    <label for="email">Email address</label>
                                    <input type="email"  value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="ds form-group has-placeholder">
                                    <label for="phone">Phone </label>
                                    <input type="text"  value="{{old('phone')}}" name="phone" id="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="ds form-group has-placeholder">
                                    <label for="subject">number of employees </label>
                                    <input type="number" value="{{old('number')}}" name="number" id="number" class="form-control" placeholder="number of employees">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="ds form-group has-placeholder">
                                    <label>Job sector</label>
                                    <select class="form-control" name="job" style="color: #000;">
                                        @foreach ( $jobs as $job)
                                            <option value="{{ $job -> name}}">{{ $job -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ds form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea rows="6" cols="4" name="message" id="message" class="form-control" placeholder="Message">{{old('message')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12 text-center mt-10">

                                <div class="form-group">
                                    <button type="submit"class="btn-color">
                                        Send Now
                                    </button>
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
                <!--.col-* -->


                <div class="divider-30 d-none d-xl-block"></div>
            </div>
        </div>
    </section>

    <section class="ds section_gradient gradient-background py-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate" data-animation="pullUp">
                    <div class="info-block">
                        <p>
                            Call Us 24/7
                        </p>
                        <h3>
                            +123-456-7890
                        </h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate" data-animation="pullUp">
                    <div class="info-block">
                        <p>
                            Email Address
                        </p>
                        <h3>
                            example@example.com
                        </h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate" data-animation="pullUp">
                    <div class="info-block">
                        <p>
                            Open Hours
                        </p>
                        <h3>
                            Daily 9:00-20:00
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-structure>
