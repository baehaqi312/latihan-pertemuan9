    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bgnav" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                <a class="navbar-brand {{ Route::is('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}" rel="tooltip">Web Pribadi</a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link smooth-scroll {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll {{ Route::is('about') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll {{ Route::is('about') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll {{ Route::is('about') ? 'active' : '' }}" href="{{ route('education') }}">Education</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll {{ Route::is('about') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
    </header>


