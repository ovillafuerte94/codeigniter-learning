<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter Learning</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{base_url()}">Codeigniter Learning</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        {if $CI->session->userdata('logged_in')}
                            <li class="nav-item">
                                <a class="nav-link" href="{base_url('logout')}">Logout</a>
                            </li>
                        {else}
                            <li class="nav-item">
                                <a class="nav-link" href="{base_url('login')}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{base_url('register')}">Register</a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 mb-5">
        {block name=content}{/block}
    </main>

    <footer class="bg-light text-center py-3">
        <p>Copyright © {date('Y')} - Codeigniter Learning</p>
    </footer>

    <!-- Link to Bootstrap JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>