<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/porto.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="shortcut icon" href="lgg-removebg-preview.png" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="/" class="logo">dul <span>.lux</span> </a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="/"></a></li>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/skill">Skills</a></li>
            <li><a href="/portofolio">Portofolio</a></li>
            <li><a href="/school">School</a></li>
            <li><a href="/sertifikat">Certificate</a></li>
            {{-- <li><a href="/services">Services</a></li> --}}
            <li><a href="/contact">Contact</a></li>
        </ul>

        <!-- Dark/Light Mode Switch with Sun and Moon Icons -->
        <label class="ui-switch">
            <input type="checkbox" id="theme-toggle">
            <div class="slider">
                <div class="circle"></div>
            </div>
        </label>
    </header>

    <div class="content">
        @yield('konten')
    </div>

    <div class="footer">
        <div class="copyright">
            <p>&copy; copyright, 2023, Abdul Hadi, All Right Reserved!</p>
        </div>
    </div>

    <script src="js/porto.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 250,
            duration: 1000,
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitch = document.querySelector('#theme-toggle');
            const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

            if (currentTheme) {
                document.body.classList.add(currentTheme);
                if (currentTheme === 'light-mode') {
                    toggleSwitch.checked = true;
                }
            }

            toggleSwitch.addEventListener('change', function() {
                if (toggleSwitch.checked) {
                    document.body.classList.add('light-mode');
                    localStorage.setItem('theme', 'light-mode');
                } else {
                    document.body.classList.remove('light-mode');
                    localStorage.setItem('theme', 'dark-mode');
                }
            });
        });
    </script>
</body>

</html>
