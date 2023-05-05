<script>
    document.getElementById('sidebarToggle').addEventListener('click', function () {
        document.getElementById('tenantSidenav_nav').classList.toggle('active');
        const sidebarToggle = document.getElementById("sidebarToggle");
const sidebarContainer = document.getElementById("tenantSidenav_nav");

// Add a click event listener to the toggle button
sidebarToggle.addEventListener("click", function () {
  // Toggle the 'show' class on the sidebar container
  sidebarContainer.classList.toggle("show");
});
    });
</script>

<style>
    #tenantSidenav_nav.active {
        display: block;
    }
    #tenantSidenav_nav {
        display: none;
    }
    #tenantSidenav_nav {
  position: fixed;
  top: 0;
  left: -250px;
  height: 100vh;
  width: 250px;
  background-color: #222;
  z-index: 999;
  transition: all 0.3s ease-in-out; /* Add transition property */
}
#tenantSidenav_nav.show {
  left: 0;
}
</style>
<div id="tenantSidenav_nav">
    
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            {{--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHomepage" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Homepage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseHomepage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/announcement" class="nav-link" aria-current="page">Announcement Board</a>
                                    <a class="nav-link" href="layout-operatinghours.html">Operating Hours</a>
                                </nav>
                            </div>--}}

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


                            {{--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStalls" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Account Services
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStalls" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="/stalladd" class="nav-link" aria-current="page">Notifications</a>
                                    <a href="/stallview" class="nav-link" aria-current="page">Report Issues</a>
                                </nav>
                            </div>--}}

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
