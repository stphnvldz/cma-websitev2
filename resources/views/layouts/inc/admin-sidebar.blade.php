<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHomepage" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Homepage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseHomepage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/announcement" class="nav-link" aria-current="page">Announcement Board</a>
                                    {{--<a href="/preview" class="nav-link" aria-current="page">Preview</a>--}}
                                    <a href="/editRequirements" class="nav-link" aria-current="page">Requirements</a>
                                    {{--<a class="nav-link" href="layout-operatinghours.html">Operating Hours</a>--}}
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTenants" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tenants
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTenants" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/tenant" class="nav-link" aria-current="page">Tenant Profiling</a>
                                    <a href="/tenantlists" class="nav-link" aria-current="page">List of Tenants</a>
                                    <a href="/rent" class="nav-link" aria-current="page">Rent Stall</a>
                                    {{--<a class="nav-link" href="layout-contracts.html">Contracts</a>--}}
                                    <a class="nav-link" href="/unaccounted" aria-current="page">Unaccounted Tenants</a>
                                    <a href="/archivetenant" class="nav-link" aria-current="page">Archives</a>
                                    {{--<a class="nav-link" href="layout-billing.html">Billing</a>--}}
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStalls" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Stalls
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStalls" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/stalladd" class="nav-link" aria-current="page">Add</a>
                                    <a href="/stallview" class="nav-link" aria-current="page">View</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFloor" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Floor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFloor" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/flooradd" class="nav-link" aria-current="page">Add</a>
                                    <a href="/floorview" class="nav-link" aria-current="page">View</a>
                                </nav>
                            </div>
                    
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReports" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseReports" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    {{--<a class="nav-link" href="layout-tenantreport.html">Tenant Reports</a>--}}
                                    <a class="nav-link" href="/paymentreports" aria-current="page">Payment Reports</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Add-ons</div>
                            <a href="/lostfound" class="nav-link" aria-current="page">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Lost and Found
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>