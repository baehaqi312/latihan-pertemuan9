@extends('layouts.app')

@section('content')
<div class="section mt-3" id="about">
    <div class="container">
        <div class="card container-fluid" data-aos="fade-up" data-aos-offset="10">
            <div class="profile content-center">
                <div class="cc-profile-image">
                    <img src="images/luthfi.jpg" alt="Image" />
                </div>
                <div class="h2 title">LUTHFI BAEHAQI</div>
                <p class="category text-dark">Web Developer & Graphic Designer</p>
            </div>
            <hr width="98%">
            <div class="row">
                <div class="col-lg-6 col-md-12" style="visibility: visible; animation-name: fadeInRight">
                    <div class="row">
                        <div class="card-body">
                            <div class="h4 mt-0 ml-3 title">About</div>
                            <ul class="theme-list ml-3">
                                <li><b>Nama:</b>Luthfi Baehaqi</li>
                                <li><b>Tempat Tanggal Lahir :</b> Cirebon, 03 Januari 2002</li>
                                <li><b>Alamat : </b> Desa Winduhaji Kec. Sedong Kab. Cirebon</li>
                                <li><b>Jenis Kelamin :</b> Laki-Laki</li>
                                <li><b>Agama :</b> Islam</li>
                                <li><b>Status :</b> Pelajar</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="progress-container progress-danger">
                                <span class="progress-badge">HTML</span>
                                <div class="progress">
                                <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                <span class="progress-value">80%</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">CSS</span>
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    <span class="progress-value">75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">JavaScript</span>
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                    <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Bootstrap</span>
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    <span class="progress-value">75%</span>
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
