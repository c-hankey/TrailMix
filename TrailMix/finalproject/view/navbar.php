
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../controller/controller.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/controller.php?action=About">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trails</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../controller/controller.php?action=Trails">Trails</a> </li>
                        <li><a class="dropdown-item" href="../controller/controller.php?action=ListTrails">Table of Trails</a> </li>
                        <li><a class="dropdown-item" href="../controller/controller.php?action=SearchTrails">Search Trails</a> </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/controller.php?action=Newsletter" target="_blank">Newsletter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../controller/controller.php?action=EmailSend">Send Emails</a></li>
                        <li><a class="dropdown-item" href="undercontruction.php">Security</a></li>
                        <li><a class = "dropdown-item" href="../controller/controller.php?action=ImageUpload">Image Upload</a></li>
                        <li><a class="dropdown-item" href="../controller/controller.php?action=QuoteUpload">Quote Upload</a></li>
                        <li><a class="dropdown-item" href="../controller/controller.php?action=NewsletterUpload">Newsletter Upload</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../controller/controller.php?action=Grading">Grading</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/controller.php?action=Register">Register</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
