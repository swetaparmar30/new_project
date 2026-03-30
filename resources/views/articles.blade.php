<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InsightHub - Articles</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/design.css">
  <style>
    .article-card {
      transition: all 0.3s ease;
    }
    .article-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    }
    .featured {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('https://picsum.photos/id/1015/1200/600') center/cover;
    }
  </style>
</head>
<body class="bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100">

  <!-- Navbar -->
  <nav class="bg-white dark:bg-gray-900 border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-8">
          <a href="#" class="text-2xl font-bold text-indigo-600">InsightHub</a>
          
          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center gap-6 text-sm font-medium">
            <a href="#" class="hover:text-indigo-600">Home</a>
            <a href="#" class="text-indigo-600 font-semibold">Articles</a>
            <a href="#" class="hover:text-indigo-600">Topics</a>
            <a href="#" class="hover:text-indigo-600">About</a>
          </div>
        </div>

        <div class="flex items-center gap-4">
          <div class="relative hidden md:block">
            <input type="text" id="searchInput" 
                   class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-full py-2 px-5 pl-10 w-72 focus:outline-none focus:border-indigo-500"
                   placeholder="Search articles...">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-3 text-gray-400"></i>
          </div>

          <button onclick="toggleDarkMode()" class="p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800">
            <i id="themeIcon" class="fa-solid fa-moon text-xl"></i>
          </button>

          <button onclick="toggleMobileMenu()" class="md:hidden p-2">
            <i id="menuIcon" class="fa-solid fa-bars text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t px-4 py-4">
      <div class="flex flex-col gap-4 text-sm font-medium">
        <a href="#" class="hover:text-indigo-600">Home</a>
        <a href="#" class="text-indigo-600 font-semibold">Articles</a>
        <a href="#" class="hover:text-indigo-600">Topics</a>
        <a href="#" class="hover:text-indigo-600">About</a>
      </div>
      <div class="mt-4">
        <input type="text" id="mobileSearch" 
               class="w-full bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-full py-3 px-5 pl-10 focus:outline-none"
               placeholder="Search articles...">
      </div>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

      <!-- Main Content -->
      <div class="lg:col-span-8">

        <!-- Featured Article -->
        <div class="featured h-96 rounded-3xl flex items-end p-8 mb-10 text-white relative overflow-hidden">
          <div class="max-w-md">
            <span class="bg-indigo-600 text-white text-xs font-semibold px-4 py-1 rounded-full">Featured</span>
            <h1 class="text-4xl font-bold mt-4 leading-tight">The Future of Artificial Intelligence in 2026 and Beyond</h1>
            <p class="mt-4 text-lg opacity-90">How AI is reshaping industries and what it means for humanity in the coming decade.</p>
            <div class="flex items-center gap-4 mt-6">
              <div class="flex items-center gap-3">
                <img src="https://i.pravatar.cc/40" alt="" class="w-8 h-8 rounded-full">
                <div>
                  <p class="text-sm">Sarah Chen</p>
                  <p class="text-xs opacity-75">Mar 28, 2026</p>
                </div>
              </div>
              <button onclick="readArticle(0)" 
                      class="ml-auto bg-white text-black px-6 py-3 rounded-2xl font-semibold hover:bg-gray-100">
                Read Now →
              </button>
            </div>
          </div>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap gap-2 mb-8" id="categoryFilters">
          <!-- Populated by JS -->
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="articlesGrid">
          <!-- Populated by JS -->
        </div>

        <!-- Load More -->
        <div class="flex justify-center mt-12">
          <button onclick="loadMore()" 
                  class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-2xl flex items-center gap-2">
            Load More Articles <i class="fa-solid fa-arrow-down"></i>
          </button>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="lg:col-span-4 space-y-10">

        <!-- Trending -->
        <div>
          <h3 class="font-semibold text-xl mb-6 flex items-center gap-2">
            <i class="fa-solid fa-fire text-orange-500"></i> Trending
          </h3>
          <div id="trendingList" class="space-y-6">
            <!-- Populated by JS -->
          </div>
        </div>

        <!-- Categories -->
        <div>
          <h3 class="font-semibold text-xl mb-6">Categories</h3>
          <div class="grid grid-cols-2 gap-3 text-sm" id="sidebarCategories">
            <!-- Populated by JS -->
          </div>
        </div>

        <!-- Newsletter -->
        <div class="bg-gray-900 dark:bg-white dark:text-gray-900 text-white p-8 rounded-3xl">
          <h3 class="text-2xl font-bold">Stay Updated</h3>
          <p class="mt-3 opacity-80">Get the best articles delivered to your inbox weekly.</p>
          <div class="mt-6">
            <input type="email" placeholder="Your email address" 
                   class="w-full py-4 px-6 rounded-2xl bg-white/10 dark:bg-gray-800 border border-white/20 focus:outline-none">
            <button class="w-full mt-3 bg-indigo-600 hover:bg-indigo-700 py-4 rounded-2xl font-semibold">
              Subscribe Free
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('footer')

  <script>
    // Sample Articles Data
    let articles = [
      {
        id: 1,
        title: "Why Quantum Computing Will Change Everything",
        excerpt: "A deep dive into the principles of quantum mechanics and their practical applications.",
        image: "https://picsum.photos/id/1015/600/400",
        category: "Technology",
        date: "Mar 29, 2026",
        readTime: "12 min"
      },
      {
        id: 2,
        title: "The Psychology Behind Great Product Design",
        excerpt: "How cognitive biases influence user experience and what designers should know.",
        image: "https://picsum.photos/id/237/600/400",
        category: "Design",
        date: "Mar 28, 2026",
        readTime: "8 min"
      },
      {
        id: 3,
        title: "Sustainable Living: Small Changes That Matter",
        excerpt: "Practical tips to reduce your carbon footprint without sacrificing comfort.",
        image: "https://picsum.photos/id/866/600/400",
        category: "Lifestyle",
        date: "Mar 27, 2026",
        readTime: "15 min"
      },
      {
        id: 4,
        title: "Building Better Habits Using Atomic Principles",
        excerpt: "Lessons from the bestselling book on how tiny changes create remarkable results.",
        image: "https://picsum.photos/id/201/600/400",
        category: "Self Improvement",
        date: "Mar 26, 2026",
        readTime: "10 min"
      }
    ];

    const categories = ["All", "Technology", "Design", "Lifestyle", "Self Improvement"];

    // Render Articles
    function renderArticles(filteredArticles) {
      const grid = document.getElementById('articlesGrid');
      grid.innerHTML = '';

      filteredArticles.forEach(article => {
        const card = document.createElement('div');
        card.className = `article-card bg-white dark:bg-gray-900 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-800`;
        card.innerHTML = `
          <img src="${article.image}" alt="${article.title}" class="w-full h-52 object-cover">
          <div class="p-6">
            <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
              <span>${article.category}</span>
              <span>•</span>
              <span>${article.date}</span>
              <span>•</span>
              <span>${article.readTime}</span>
            </div>
            <h3 class="font-semibold text-xl mt-3 leading-tight line-clamp-2">${article.title}</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-4 line-clamp-3">${article.excerpt}</p>
            <button onclick="readArticle(${article.id})" 
                    class="mt-6 text-indigo-600 font-medium hover:text-indigo-700 flex items-center gap-2">
              Read full article <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        `;
        grid.appendChild(card);
      });
    }

    // Render Filters
    function renderFilters() {
      const container = document.getElementById('categoryFilters');
      container.innerHTML = '';

      categories.forEach(cat => {
        const btn = document.createElement('button');
        btn.className = `px-6 py-2 rounded-2xl text-sm font-medium transition-all ${cat === 'All' ? 'bg-indigo-600 text-white' : 'bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 border'}`;
        btn.textContent = cat;
        btn.onclick = () => filterByCategory(cat);
        container.appendChild(btn);
      });
    }

    // Render Trending & Sidebar Categories
    function renderSidebar() {
      // Trending (using same articles)
      const trending = document.getElementById('trendingList');
      trending.innerHTML = articles.map(a => `
        <div onclick="readArticle(${a.id})" class="flex gap-4 cursor-pointer">
          <img src="${a.image}" class="w-20 h-20 object-cover rounded-2xl">
          <div>
            <p class="line-clamp-2 text-sm font-medium leading-tight">${a.title}</p>
            <p class="text-xs text-gray-500 mt-2">${a.date}</p>
          </div>
        </div>
      `).join('');

      // Sidebar Categories
      const catsContainer = document.getElementById('sidebarCategories');
      catsContainer.innerHTML = categories.slice(1).map(cat => `
        <div onclick="filterByCategory('${cat}')" 
             class="bg-white dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 border border-gray-200 dark:border-gray-700 px-5 py-4 rounded-2xl cursor-pointer text-center text-sm font-medium">
          ${cat}
        </div>
      `).join('');
    }

    // Filter by Category
    function filterByCategory(category) {
      let filtered = articles;
      if (category !== 'All') {
        filtered = articles.filter(a => a.category === category);
      }
      renderArticles(filtered);
    }

    // Simple Search
    document.getElementById('searchInput').addEventListener('input', (e) => {
      const term = e.target.value.toLowerCase();
      const filtered = articles.filter(a => 
        a.title.toLowerCase().includes(term) || 
        a.excerpt.toLowerCase().includes(term)
      );
      renderArticles(filtered);
    });

    // Dark Mode
    function toggleDarkMode() {
      document.documentElement.classList.toggle('dark');
      const icon = document.getElementById('themeIcon');
      icon.classList.toggle('fa-moon');
      icon.classList.toggle('fa-sun');
    }

    // Mobile Menu
    function toggleMobileMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    }

    // Fake "Read Article"
    function readArticle(id) {
      alert(`Opening article #${id}... (In a real app, this would navigate to the full article page)`);
    }

    function loadMore() {
      alert("In a real website, this would load more articles from the backend.");
    }

    // Initialize
    window.onload = () => {
      renderFilters();
      renderArticles(articles);
      renderSidebar();

      // Default to light mode (you can change to dark if preferred)
      // document.documentElement.classList.add('dark');
    };
  </script>
</body>
</html>