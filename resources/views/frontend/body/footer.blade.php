@php
    $footer=App\Models\Footer::first();
@endphp
<div class="site-footer">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Disclaimer!</h3>
                    <div >
                        <p style="color:black;">{{ Str::ucfirst($footer?->disclaimer) }}.</p>
                    </div>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>3 Nangarhar, Afghanistan </address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://{{ $footer?->phon1 }}">{{ $footer?->phon1 }}</a></li>
                        <li><a href="tel://{{ $footer?->phon2 }}">{{ $footer?->phon2 }}</a></li>
                        <li><a href="mailto:info@mydomain.com">{{ $footer?->email }}</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Sources</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="{{ route('index.about') }}">About us</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">

                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>

                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Links</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{ route('index.about') }}">About us</a></li>
                        <li><a href="{{ route('index.contact') }}">Contact us</a></li>
                    </ul>

                    <ul class="list-unstyled social">
                        <li><a href="{{ $footer?->instagramLink }}"><span class="icon-instagram"></span></a></li>
                        <li><a href="{{ $footer?->tweeterLink }}"><span class="icon-twitter"></span></a></li>
                        <li><a href=" {{ $footer?->facebookLink }}"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">

        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://property">property</a>
        </p>

      </div>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.site-footer -->
