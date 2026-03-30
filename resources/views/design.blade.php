<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVision - Future Technology</title>
    <link rel="stylesheet" href="assets/css/design.css">
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
        <a href="design" class="btn">Explore Latest Insights</a>
    </section>

    <!-- MAIN LONG CONTENT -->
    <main>

        <section class="txt">
            <h2>The Evolution of Artificial Intelligence in 2026</h2>
            <p>Artificial Intelligence has transcended basic automation and is now entering an era of cognitive
                intelligence. Modern AI systems can understand context, reason through complex problems, generate
                creative solutions, and even exhibit emotional intelligence.</p>

            <p>From predictive healthcare and personalized education to autonomous transportation and climate modeling,
                AI is reshaping every industry. However, with great power comes great responsibility. Issues like data
                privacy, algorithmic bias, job transformation, and ethical AI usage are at the forefront of global
                discussions.</p>

            <div class="content-grid">
                <div class="card">
                    <h3>AI in Healthcare Revolution</h3>
                    <p>AI-powered diagnostic tools now detect diseases earlier and more accurately than many
                        specialists. Real-time monitoring systems and predictive analytics are saving lives and reducing
                        healthcare costs dramatically.</p>
                </div>
                <div class="card">
                    <h3>Autonomous Future</h3>
                    <p>Self-driving cars, intelligent drones, and fully automated smart factories are becoming reality.
                        The combination of AI and Internet of Things (IoT) is creating responsive environments that
                        adapt instantly to human needs.</p>
                </div>
                <div class="card">
                    <h3>Generative Creativity</h3>
                    <p>AI tools are now creating art, music, code, and scientific hypotheses. These systems are
                        accelerating innovation across creative and technical fields at an unprecedented pace.</p>
                </div>
            </div>
        </section>

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

        <section>
            <h2>Technology & Green Innovation</h2>
            <p>Technology is playing a pivotal role in combating climate change. Advanced solar panels, next-generation
                batteries, hydrogen fuel cells, and smart energy grids are making clean energy more accessible and
                efficient than ever before.</p>

            <p>AI is being used to optimize energy consumption in cities, predict renewable energy output, and design
                circular economies where waste is minimized and resources are continuously reused.</p>
        </section>




    </main>

    <!-- FOOTER -->
   @include('footer')

    <script>
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            if (menu.style.display === 'flex') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'flex';
            }
        }

        // Close menu when clicking outside (optional improvement)
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                document.getElementById('nav-menu').style.display = 'flex';
            } else {
                document.getElementById('nav-menu').style.display = 'none';
            }
        });
    </script>
</body>

</html>
