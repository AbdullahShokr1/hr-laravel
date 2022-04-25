<x-structure>

    <section class="page_title cs gradientvertical-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">
                    <h1 class="">Candidates</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Candidates
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>

    <section class="pt-20 pb-30 s-py-md-75 s-py-lg-130 candidate-page">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 contact-header text-center animate" data-animation="pullDown">
                    <h5>
                        Submit
                    </h5>
                    <h4>
                        Candidate CV
                    </h4>
                </div>
                <form  action="{{route('sendcandidate')}}" class="contact-form contact2 c-mb-20 animate"  enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-c-mb-60 form-group has-placeholder">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="200" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="col-c-mb-60 form-group has-placeholder">
                                <label for="text">Phone number
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="200" value="{{old('phone')}}" name="phone" id="text" class="form-control" placeholder="Phone number">
                            </div>
                            <div class="col-c-mb-60 form-group has-placeholder">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" aria-required="true" size="200" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Job sector</label>
                                        <select class="form-control" name="job" style="color: #000;">
                                            @foreach ( $jobs as $job)
                                                <option value="{{ $job -> name}}">{{ $job -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @error('writer_id')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="message">skills</label>
                                <textarea aria-required="true" rows="6" cols="40" name="skills" id="skills" class="form-control" placeholder="skills">{{old('skills')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <button type="submit" name="contact_submit" class="btn theme_button">Submit CV</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-structure>
