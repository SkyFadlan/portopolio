<style>
    #layoutSidenav_nav {
    position: fixed; /* Fix sidebar position */
    top: 0;
    left: 0;
    width: 250px; /* Adjust this width as needed */
    height: 100%; /* Make sidebar full height */
    background-color: #343a40; /* Dark background color */
}

#layoutSidenav_content {
    margin-left: 250px; /* Offset content to the right of the sidebar */
    padding: 20px; /* Add padding to content */
}

</style>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- Header for Sidebar Section -->
                    <div class="sb-sidenav-menu-heading">Core</div>
                    
                    <!-- Link to Data Home -->
                    <a class="nav-link" href="{{ route('home.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Data Home
                    </a>

                    <!-- Link to Data About -->
                    <a class="nav-link" href="{{ route('about.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                        Data About
                    </a>

                    <!-- Link to Data Skill -->
                    <a class="nav-link" href="{{ route('skill.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                        Data Skill
                    </a>

                    <!-- Link to Data Project -->
                    <a class="nav-link" href="{{ route('project.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                        Data Project
                    </a>

                    <!-- Link to Data Certificate -->
                    <a class="nav-link" href="{{ route('certificate.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                        Data Certificate
                    </a>

                    <!-- Link to Data Contact -->
                    <a class="nav-link" href="{{ route('contact.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                        Data Contact
                    </a>
                </div>
            </div>

            <!-- Footer for Sidebar -->
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
</div>