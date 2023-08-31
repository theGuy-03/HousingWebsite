
<div class="card-header pb-0">
    <div class="d-flex align-items-center">
        <div class="position-relative end-0">

            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " href="/" role="tab" aria-selected="true">
                <i class="ri-home-2-fill"></i>
                <span class="ms-1">Home</span>
            </a>

        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto  mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav  nav-fill  mx-3" role="tablist">

                    <li class="nav-item ">
                    <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="/view/profile/{{ $userData->id }}" role="tab" aria-selected="true">
                        <i class="ni ni-app"></i>
                        <span class="ms-2">All</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="/view/sale/profile/{{ $userData->id }}" role="tab" aria-selected="true">
                        <i class="ni ni-email-83"></i>
                        <span class="ms-2">Sale</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="/view/rent/profile/{{ $userData->id }}" role="tab" aria-selected="true">
                        <i class="ni ni-email-83"></i>
                        <span class="ms-2">Rent</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mb-0 px-0  d-flex active align-items-center justify-content-center "  href="/view/mortgage/profile/{{ $userData->id }}" role="tab" aria-selected="true">
                        <i class="ni ni-settings-gear-65"></i>
                        <span class="ms-2">Mortgage</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


