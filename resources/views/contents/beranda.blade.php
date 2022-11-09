@extends('layouts.app')

@section('content')
<div id="particles-js">
    <div class="profile content-center">
        <div class="cc-profile-image">
            <a href="{{ route('about') }}"><img src="images/luthfi.jpg" alt="Image" /></a>
        </div>
        <div class="h2 title text-white">LUTHFI BAEHAQI</div>
        <p class="category text-white">Web Developer & Graphic Designer</p>
    </div>
</div>

    <div class="section">
        <div class="container">
            <div class="card" data-aos="fade-up" data-aos-offset="10">
                <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card-body">
                        <div class="h4 mt-0 title">About</div>
                        <p>Hello! I am Anthony Barnett. Web Developer, Graphic Designer and Photographer.</p>
                        <p>
                            Creative CV is a HTML resume template for professionals. Built with Bootstrap 5, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience.
                            <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card-body">
                    <div class="h4 mt-0 title">Basic Information</div>
                    <div class="row">
                        <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                        <div class="col-sm-8">20</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                        <div class="col-sm-8">lutfibaehaqi1234@gmail.com</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                        <div class="col-sm-8">+62 838 1806 2960</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                        <div class="col-sm-8">Dusun 02, Winduhaji, Sedong, Cirebon.</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="skill">
        <div class="container">
        <div class="h4 text-center mb-4 title">Professional Skills</div>
        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">HTML</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                    <span class="progress-value">80%</span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">CSS</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    <span class="progress-value">75%</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">JavaScript</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    <span class="progress-value">60%</span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">SASS</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    <span class="progress-value">60%</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">Bootstrap</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    <span class="progress-value">75%</span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="progress-container progress-primary">
                    <span class="progress-badge">Photoshop</span>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    <span class="progress-value">70%</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section" id="experience">
        <div class="container cc-experience">
        <div class="h4 text-center mb-4 title">Work Experience</div>
        <div class="card">
            <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                <p>Desember 2019</p>
                <div class="h5">Mitra Kerja</div>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                <div class="h5">Front End Developer</div>
                <p>
                    Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque
                    cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                <p>Juli - September 2016</p>
                <div class="h5">Prakerin Kerja Lapang</div>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                <div class="h5">Web Developer</div>
                <p>
                    Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque
                    cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section" id="education">
        <div class="container cc-education">
        <div class="h4 text-center mb-4 title">Education</div>
        <div class="card">
            <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                <p>2017 - 2020</p>
                <div class="h5">Sekolah Menengah Kejuruan</div>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                <div class="h5">Sekolah Menengah Kejuruan</div>
                <p class="category">SMK Pertiwi Kuningan - Rekayasa Perangkat Lunak</p>
                <p>
                    Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque
                    cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                <p>2014 - 2017</p>
                <div class="h5">Madrayah Tsanawiyah</div>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                <div class="h5">Madrayah Tsanawiyah</div>
                <p class="category">MTS Al - Munthohir</p>
                <p>
                    Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque
                    cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                <p>2008 - 2014</p>
                <div class="h5">Sekolah Dasar</div>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                <div class="h5">Sekolah Dasar</div>
                <p class="category">SDN 2 Winduhaji</p>
                <p>
                    Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque
                    cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section" id="contact">
        <div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
        <div class="container">
            <div class="cc-contact">
            <div class="row">
                <div class="col-md-9">
                <div class="card mb-0" data-aos="zoom-in">
                    <div class="h4 text-center title">Contact Me</div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                        <form action="https://formspree.io/your@email.com" method="POST">
                            <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                            <div class="row mb-3">
                            <div class="col">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                                </div>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required" />
                                </div>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required" />
                                </div>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col">
                                <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                        <p class="mb-0"><strong>Address </strong></p>
                        <p class="pb-2">Dusun02, Winduhaji, Sedong, Cirebon.</p>
                        <p class="mb-0"><strong>Phone</strong></p>
                        <p class="pb-2">+62 838-1806-2960</p>
                        <p class="mb-0"><strong>Email</strong></p>
                        <p>lutfibaehaqi1234@gmail.com</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
