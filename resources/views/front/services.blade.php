@extends('front.master')

@section('title', 'Services')

@section('content')

    @include('front.common.breadcrumb')

    <section class="page-content">
        <div class="container">
            <div class="services-page">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget widget-recent-services">
                                <ul> <!-- TODO
                                            add active here -->
                                    <li><a href="#" title="">Network Video Recorder	</a></li>
                                    <li><a href="#" title="">Fire Alarm System	</a></li>
                                    <li><a href="#" title="">Gate Automation	</a></li>
                                    <li><a href="#" title="">Home Automation	</a></li>
                                    <li><a href="#" title="">Burgular / Intruder Alarm	</a></li>
                                    <li><a href="#" title="">Video Door Phone	</a></li>
                                    <li><a href="#" title="">CCTV Equipments	</a></li>
                                    <li><a href="#" title="">Access Control System	</a></li>
                                    <li><a href="#" title="">Public Address System	</a></li>
                                </ul>
                            </div><!--widget-recent-services end-->
                            <div class="widget widget-brouchers">
                                <h3 class="widget-title">Download Brochures</h3>
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-file-pdf"></i> <span>Project-One.pdf</span></a></li>
                                    <li><a href="#" title=""><i class="fa fa-file-word"></i> <span>Project-One.wd</span></a></li>
                                    <li><a href="#" title=""><i class="fa fa-file-powerpoint"></i> <span>Project-One.ppt</span></a></li>
                                </ul>
                            </div><!--widget-brouchers end-->
                            <div class="widget widget-contact">
                                <div class="wid-head">
                                    <h3>Quick Contact</h3>
                                    <p>Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus eo.</p>
                                </div>
                                <form class="js-ajax-form">
                                    <div class="form-group no-pt">
                                        <div class="missing-message">
                                            Populate Missing Fields
                                        </div>
                                        <div class="success-message">
                                            <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                        </div>
                                        <div class="error-message">Populate Missing Fields</div>
                                    </div><!--form-group end-->
                                    <div class="input-field">
                                        <input type="text" name="name" placeholder="Your Name" id="name">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="email" placeholder="Email Address" id="email">
                                    </div>
                                    <div class="input-field">
                                        <select>
                                            <option>Select Service</option>
                                            <option>Select Service</option>
                                            <option>Select Service</option>
                                            <option>Select Service</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="message" placeholder="Your Massage"></textarea>
                                    </div>
                                    <div class="input-submit">
                                        <button type="submit" name="submit" class="lnk-default submit">Send Now</button>
                                    </div>
                                </form>
                            </div><!--widget-contact end-->
                        </div><!--sidebar end-->
                    </div>
                    <div class="col-lg-8">
                        <div class="content-details">
                            <img src="{{ asset('assets/images/resources/sv-img.jpg') }}" alt="">
                            <h2>Home Automation</h2>
                            <h4>Monitor and control your home’s devices with enhanced smartphone accessibility</h4>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
                            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                            <h3>Is Home Automation?</h3>
                            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Aenean leo ligula, porttitor eu, consequ at vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
                            <ul class="fz-lst">
                                <li>Crime prevention</li>
                                <li>Industrial processes</li>
                                <li>Traffic monitoring</li>
                                <li>Transport safety</li>
                                <li>Sporting events</li>
                                <li>Monitor Employees</li>
                                <li>Institutions</li>
                                <li>Criminal use</li>
                                <li>Home security</li>
                            </ul>
                            <div class="coz-sv">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Details of Accessories</h3>
                                        <p>Aenean leo ligula, porttitor eu, consequat vitae, ac eleifend, enim. Aliquam lorem ante, dapibus in, viv erra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Aenean leo ligula, porttitor eu, consequ at vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{ asset('assets/images/resources/sv-img2.jpg') }}" alt="" class="align-right img-fluid">
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Precautions</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Intelligence</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Specializations</a>
                                  </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <p>Processing and refining operatons turn crude oil and gas into marktable products. In the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil. Oil refining processes include dis-catalytic cracking, alkylation, isomerization and hydrotreating. Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but seds because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <p>Processing and refining operatons turn crude oil and gas into marktable products. In the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil. Oil refining processes include dis-catalytic cracking, alkylation, isomerization and hydrotreating. Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but seds because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                  <p>Processing and refining operatons turn crude oil and gas into marktable products. In the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil. Oil refining processes include dis-catalytic cracking, alkylation, isomerization and hydrotreating. Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but seds because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                              </div>
                            </div>
                        </div><!--content-details end-->
                    </div>
                </div>
            </div><!--services-page end-->
        </div>
    </section><!--page-content end-->
    

    @include('front.common.partner')

@endsection




