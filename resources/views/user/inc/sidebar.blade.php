<nav class="sb-sidenav accordion bg-primary " style="color: white;" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('user.home') }}" style="color: white;">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Service</div>

            <a class="nav-link" href="{{ route('user.fuelDelivery') }}" style="color: white;">
                <div class="sb-nav-link-icon"><i class="fas fa-gas-pump"></i></div>
                Fuel Delivery
            </a>
            <a class="nav-link" href="tables.html" style="color: white;">
                <div class="sb-nav-link-icon"><i class="fas fa-pump-soap"></i></div>
                LPG Cylinder
            </a>
            <a class="nav-link" href="tables.html" style="color: white;">
                <div class="sb-nav-link-icon"><i class="fas fa-caravan"></i></div>
                Car Wash
            </a>
            <a class="nav-link" href="tables.html" style="color: white;">
                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                Car Maintenance
            </a>


            <div class="sb-sidenav-menu-heading">Interface</div>

            <a class="nav-link collapsed" style="color: white;" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" style="color: white;" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>


                </nav>
            </div>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ Auth::user()->name }}
    </div>
</nav>
