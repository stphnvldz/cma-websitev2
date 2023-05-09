<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTenants" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Payments
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTenants" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="/payment" class="nav-link" aria-current="page">Payment</a>
                        <a href="/tenantlists" class="nav-link" aria-current="page">Payment History</a>
                    </nav>
                </div>

                {{-- // tenant-dashboard, payment, paymenthistory, cmainfo, developer, billsnotice --}}

                <div class="collapse" id="collapseTenants" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="/tenant-dashboard" class="nav-link" aria-current="page">Dashboard</a>
                        <a href="/paymenthistory" class="nav-link" aria-current="page">Payment History</a>
                        <a href="/billsnotice" class="nav-link" aria-current="page">Bills Notice</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFloor" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    About
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFloor" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="/cmainfo" class="nav-link" aria-current="page">CMA Information</a>
                        <a href="/developer" class="nav-link" aria-current="page">Developer</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Tenant
        </div>
    </nav>
            </div>
