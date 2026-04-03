<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVision - Future Technology</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 1rem 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -1px;
            cursor: pointer;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        nav ul li a:hover {
            color: #bae6fd;
        }

        .menu-toggle {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.75)),
                url('https://source.unsplash.com/random/1920x1080/?technology') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 140px 20px 100px;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            margin-bottom: 20px;
        }

        .hero p {
            font-size: clamp(1.1rem, 3vw, 1.35rem);
            max-width: 850px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-4px);
        }

        main {
            max-width: 1800px;
            margin: 50px auto;
            padding: 0 20px;
        }

        section {
            margin-bottom: 90px;
        }

        h2 {
            font-size: clamp(2rem, 4.5vw, 2.8rem);
            margin-bottom: 25px;
            color: #1e3a8a;
            position: relative;
            display: inline-block;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 4px;
            background: #3b82f6;
            border-radius: 2px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 22px;
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .card h3 {
            color: #1e40af;
            margin-bottom: 16px;
            font-size: 1.35rem;
        }

        /* Image + Text Section */
        /* Sustainable Technology Section with Background */
        .image-left-content-right {
            background-color: #f8fafc;
            /* Light clean background */
            padding: 80px 0;
            margin-bottom: 100px;
        }

        .image-text-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .image-text-wrapper img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .image-text-wrapper .text-content h2 {
            margin-top: 0;
            margin-bottom: 25px;
            color: #1e3a8a;
        }

        .image-text-wrapper .text-content p {
            font-size: 1.1rem;
            margin-bottom: 22px;
            color: #475569;
        }

        /* Duplicate section removed - keeping only one clean version */
        .txt {
            background-color: rgb(241, 241, 241);
            padding: 60px 40px;
            border-radius: 12px;
        }

        /* Footer Styles */
        footer {
            background: #0f172a;
            color: #cbd5e1;
            padding: 80px 0 40px;
        }

        .footer-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 40px;
        }

        .footer-col h3 {
            color: white;
            margin-bottom: 22px;
            font-size: 1.4rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 14px;
        }

        .footer-col ul li a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-col ul li a:hover {
            color: #60a5fa;
        }

        .footer-bottom {
            border-top: 1px solid #334155;
            margin-top: 70px;
            padding-top: 30px;
            text-align: center;
            color: #94a3b8;
            font-size: 0.95rem;
        }

        /* ===================== RESPONSIVE DESIGN ===================== */

        @media (max-width: 992px) {
            .image-text-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 1rem 15px;
            }

            .menu-toggle {
                display: block;
            }

            nav ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #1e3a8a;
                flex-direction: column;
                padding: 20px;
                gap: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            nav ul.active {
                display: flex;
            }

            .hero {
                padding: 100px 15px 80px;
            }

            main {
                margin: 30px auto;
                padding: 0 15px;
            }

            section {
                margin-bottom: 70px;
            }

            .txt {
                padding: 40px 20px;
            }
        }

        @media (max-width: 480px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .hero {
                padding: 90px 15px 70px;
            }

            h2 {
                font-size: 2.1rem;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="header-container">
            <div class="logo" onclick="window.location.href='design'">TechVision</div>

            <nav>
                <ul id="nav-menu">
                    <li><a href="home">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">AI & Future</a></li>
                    <li><a href="#">Quantum</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <h1>Shaping Tomorrow with Technology</h1>
        <p>Explore the latest breakthroughs in Artificial Intelligence, Quantum Computing, Sustainable Tech, and the
            innovations that will define our future.</p>
        <a href="#" class="btn">Explore Latest Insights</a>
    </section>

    <!-- MAIN CONTENT -->
    <main>

        <!-- First Section with Background -->
        <section class="txt">
            <h2>The Evolution of Artificial Intelligence in 2026</h2>
            <p>Artificial Intelligence has transcended basic automation and is now entering an era of cognitive
                intelligence. Modern AI systems can understand context, reason through complex problems, generate
                creative solutions, and even exhibit emotional intelligence.</p>

            <p>From predictive healthcare and personalized education to autonomous transportation and climate modeling,
                AI is reshaping every industry.</p>

            <div class="content-grid">
                <div class="card">
                    <h3>AI in Healthcare Revolution</h3>
                    <p>AI-powered diagnostic tools now detect diseases earlier and more accurately than many
                        specialists.</p>
                </div>
                <div class="card">
                    <h3>Autonomous Future</h3>
                    <p>Self-driving cars, intelligent drones, and fully automated smart factories are becoming reality.
                    </p>
                </div>
                <div class="card">
                    <h3>Generative Creativity</h3>
                    <p>AI tools are now creating art, music, code, and scientific hypotheses at an unprecedented pace.
                    </p>
                </div>
            </div>
        </section>

        <!-- Image Left + Content Right -->
        <section class="image-left-content-right">
            <div class="image-text-wrapper">
                <img src="/uploads/66a0a6dc6a0c5.webp" alt="Sustainable Technology">
                <div class="text-content">
                    <h2>Sustainable Technology & Green Innovation</h2>
                    <p>Technology is playing a pivotal role in combating climate change. Advanced solar panels,
                        next-generation batteries, hydrogen fuel cells, and smart energy grids are making clean energy
                        more accessible and efficient than ever before.</p>
                    <p>AI is being used to optimize energy consumption in cities, predict renewable energy output, and
                        design circular economies where waste is minimized and resources are continuously reused.</p>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            menu.classList.toggle('active');
        }

        // Close menu when clicking a link (optional)
        document.querySelectorAll('#nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    document.getElementById('nav-menu').classList.remove('active');
                }
            });
        });

        // Reset menu on resize
        window.addEventListener('resize', () => {
            const menu = document.getElementById('nav-menu');
            if (window.innerWidth > 768) {
                menu.classList.remove('active');
                menu.style.display = 'flex';
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\new_project\resources\views/design.blade.php ENDPATH**/ ?>