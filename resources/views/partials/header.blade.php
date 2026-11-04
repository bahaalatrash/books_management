{{-- <header class="bg-gradient bg-secondary text-white py-4 mb-4 shadow-sm border-bottom border-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h1 class="h3 fw-bold mb-1 text-light">📚 Book Management Dashboard</h1>
            <p class="text-white-50 mb-0 small">Manage your books, authors, and categories efficiently</p>
        </div>
        <div class="d-none d-md-block">
            <span class="badge bg-dark border border-secondary px-3 py-2 text-info">
                Admin Control Panel
            </span>
        </div>
    </div>
</header> --}}



{{-- <header class="py-3 mb-3 bg-dark border-bottom border-secondary">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
        <!-- العنوان والشعار بطريقة أنيقة -->
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-success bg-opacity-10 text-success border border-success px-2 py-1">Admin Panel</span>
            <span class="text-light fw-semibold small">Laravel Book Management System</span>
        </div>

        <!-- حقوق أو اسم المطور بشكل احترافي في الأعلى -->
        <div class="text-muted small">
            Lead Developer: <span class="text-info fw-semibold">Bahaa Al-Atrash</span>
        </div>
    </div>
</header> --}}




<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary py-3 shadow-sm mb-4">
    <div class="container">
        <!-- شعار أو اسم النظام -->
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('books.index') }}">
            📚 <span class="text-light">Book Manager</span>
        </a>

        <!-- زر التجاوب للشاشات الصغيرة (Mobile Toggler) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- روابط التنقل + اسم المطور في نفس السطر -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- روابط الصفحات -->
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.*') ? 'active text-info fw-semibold' : '' }}" href="{{ route('books.index') }}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('categories.*') ? 'active text-info fw-semibold' : '' }}" href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('book.create') ? 'active text-info fw-semibold' : '' }}" href="{{ route('book.create') }}">Create Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('category.create') ? 'active text-info fw-semibold' : '' }}" href="{{ route('category.create') }}">Create Category</a>
                </li>
            </ul>

            <!-- اسمك كمهندس مطور للنظام مفصول بفاصل أنيق -->
            <div class="ms-lg-4 ps-lg-3 border-start border-secondary text-muted small mt-3 mt-lg-0">
                Developer: <span class="text-info fw-semibold">Bahaa Al-Atrash</span>
            </div>
        </div>
    </div>
</nav>
