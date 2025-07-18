<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary-color: #1e293b;
            --secondary-color: #3b82f6;
            --accent-color: #ef4444;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --purple-color: #8b5cf6;
            --pink-color: #ec4899;
            --sidebar-width: 280px;
            --topbar-height: 75px;
            --border-radius: 16px;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .background-image {
    position: fixed;
    top: 0;
    left: 20vh;
    width: 100vw;
    height: 100vh;
    background-image: url('/images/2.jpg');
    background-size: cover;
    background-position: center;
    z-index: 0;
}
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.2) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        /* Floating particles animation */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 4px;
            height: 4px;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 6px;
            height: 6px;
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 3px;
            height: 3px;
            left: 30%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 5px;
            height: 5px;
            left: 60%;
            animation-delay: 1s;
        }

        .particle:nth-child(5) {
            width: 4px;
            height: 4px;
            left: 80%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            50% { transform: translateY(-100px) rotate(180deg); }
        }

        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, 
                rgba(30, 41, 59, 0.95) 0%, 
                rgba(51, 65, 85, 0.95) 100%);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            color: #f1f5f9;
            position: fixed;
            top: 0; 
            left: 0; 
            bottom: 0;
            padding: 0;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1000;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            background: linear-gradient(45deg, 
                rgba(59, 130, 246, 0.1) 0%, 
                rgba(139, 92, 246, 0.1) 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .sidebar-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transform: translateX(-100%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .sidebar-header h4 {
            color: #f1f5f9;
            font-weight: 700;
            margin: 0;
            text-align: center;
            font-size: 1.4rem;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 1;
        }

        .sidebar-header .admin-badge {
            background: linear-gradient(45deg, var(--secondary-color), var(--purple-color));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 600;
            display: block;
            text-align: center;
            margin-top: 0.8rem;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
            position: relative;
            z-index: 1;
        }

        .sidebar-menu {
            padding: 1.5rem 0;
        }

        .sidebar a {
            color: #94a3b8;
            display: flex;
            align-items: center;
            padding: 1rem 1.5rem;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            border-left: 3px solid transparent;
            margin: 0.2rem 0;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .sidebar a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, 
                rgba(59, 130, 246, 0.1) 0%, 
                rgba(139, 92, 246, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 0 12px 12px 0;
        }

        .sidebar a:hover::before {
            opacity: 1;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #f1f5f9;
            border-left-color: var(--secondary-color);
            transform: translateX(8px);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.2);
        }

        .sidebar a.active {
            background: linear-gradient(90deg, 
                rgba(59, 130, 246, 0.2) 0%, 
                rgba(139, 92, 246, 0.2) 100%);
            color: #f1f5f9;
            border-left-color: var(--secondary-color);
            transform: translateX(8px);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
        }

        .sidebar a.active::before {
            opacity: 1;
        }

        .sidebar a i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .sidebar a:hover i {
            transform: scale(1.1);
        }

        .logout-section {
            position: absolute;
            bottom: 25px;
            left: 1.5rem;
            right: 1.5rem;
        }

        .logout-section .btn {
            background: linear-gradient(45deg, var(--accent-color), #dc2626);
            border: none;
            padding: 1rem;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
            position: relative;
            overflow: hidden;
        }

        .logout-section .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .logout-section .btn:hover::before {
            left: 100%;
        }

        .logout-section .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        }

        .topbar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            margin-left: var(--sidebar-width);
            height: var(--topbar-height);
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .topbar h5 {
            color: #1e293b;
            font-weight: 700;
            margin: 0;
            font-size: 1.3rem;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .search-box {
            position: relative;
            margin-right: 1rem;
        }

        .search-box input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 0.6rem 1rem 0.6rem 2.5rem;
            color: #1e293b;
            width: 250px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-box i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
        }

        .notification-icon {
            position: relative;
            color: #1e293b;
            font-size: 1.3rem;
            cursor: pointer;
            padding: 0.8rem;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .notification-icon:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.1);
        }

        .notification-badge {
            position: absolute;
            top: 0.3rem;
            right: 0.3rem;
            background: linear-gradient(45deg, var(--accent-color), #dc2626);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.5rem;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-profile:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--secondary-color), var(--purple-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.9rem;
        }

        .user-role {
            font-size: 0.8rem;
            color: #64748b;
        }

        .main {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: calc(100vh - var(--topbar-height));
        }

        .content-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin-bottom: 1rem;
        }

        .stat-icon.primary {
            background: linear-gradient(45deg, var(--secondary-color), var(--purple-color));
        }

        .stat-icon.success {
            background: linear-gradient(45deg, var(--success-color), #059669);
        }

        .stat-icon.warning {
            background: linear-gradient(45deg, var(--warning-color), #d97706);
        }

        .stat-icon.danger {
            background: linear-gradient(45deg, var(--accent-color), #dc2626);
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #64748b;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .stat-change {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 0.8rem;
            padding: 0.3rem 0.6rem;
            border-radius: 20px;
            font-weight: 600;
        }

        .stat-change.positive {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .stat-change.negative {
            background: rgba(239, 68, 68, 0.1);
            color: var(--accent-color);
        }

        footer {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            margin-left: var(--sidebar-width);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                z-index: 1000;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main, .topbar, footer {
                margin-left: 0;
            }
            
            .mobile-toggle {
                display: block;
                background: none;
                border: none;
                color: #1e293b;
                font-size: 1.5rem;
                cursor: pointer;
                padding: 0.5rem;
            }

            .search-box {
                display: none;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        .mobile-toggle {
            display: none;
        }

        /* Custom Scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, var(--secondary-color), var(--purple-color));
            border-radius: 4px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #2563eb, #7c3aed);
        }

        /* Loading animation */
        @keyframes slideIn {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        .main {
            animation: slideIn 0.6s ease-out;
        }

        .content-card {
            animation: slideIn 0.8s ease-out;
        }

        /* Enhanced hover effects */
        .content-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Backdrop overlay for mobile */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>
<body>
    <div class="background-image"></div>

    <!-- Animated background particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Sidebar overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h4>Admin Panel</h4>
        <div class="admin-badge">
            <i class="fas fa-crown"></i> Administrator
        </div>
    </div>

    <div class="sidebar-menu">
        @php
    $layoutActive = request()->is('admin/settings') ||
                    request()->is('admin/banners') ||
                    request()->is('admin/about') ||
                    request()->is('admin/appointments') ||
                    request()->is('admin/services') ||
                    request()->is('admin/workingprocess') ||
                    request()->is('admin/porto') ||
                    request()->is('admin/testimoni') ||
                    request()->is('admin/sponsor');
@endphp

        <!-- Dashboard -->
        <a href="/admin/dashboard">
            <i class="fas fa-home"></i> Dashboard
        </a>

        <!-- Pesanan -->
        <a href="/admin/orders">
            <i class="fas fa-concierge-bell"></i> Pesanan
        </a>

         <a href="{{ route('admin.orders.history') }}">
                    <i class="fas fa-history"></i>History
                </a>
            
        <a href="/admin/testimoni"><i class="fas fa-comments"></i> Testimonials</a>

        <!-- Layout (dropdown) -->
       <a href="javascript:void(0)" onclick="toggleLayoutMenu()" class="{{ $layoutActive ? 'active' : '' }}">
    <i class="fas fa-layer-group"></i> Layout <i class="fas fa-chevron-down float-end"></i>
</a>


        <!-- Submenu: Layout children -->
        <div id="layoutSubmenu" style="display: '{{ $layoutActive ? 'block' : 'none' }}'; padding-left: 20px;">
            <a href="/admin/settings"><i class="fas fa-sliders-h"></i> Settings</a>
            <a href="/admin/banners"><i class="fas fa-image"></i> Banners</a>
            <a href="/admin/about"><i class="fas fa-info-circle"></i> About Us</a>
            <a href="/admin/appointments"><i class="fas fa-calendar-check"></i> Appointments</a>
            <a href="/admin/services"><i class="fas fa-cog"></i> Services</a>
            <a href="/admin/workingprocess"><i class="fas fa-tasks"></i> Working Process</a>
            <a href="/admin/porto"><i class="fas fa-briefcase"></i> Portfolio</a>
            
            <a href="/admin/sponsor"><i class="fas fa-handshake"></i> Sponsors</a>
        </div>
    </div>
</div>


        
    </div>

    <div class="topbar">
        <div class="d-flex align-items-center">
            <button class="mobile-toggle" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <h5>Royal Laundres</h5>
        </div>
        <div class="topbar-right">
        

    <form method="GET" action="{{ route('admin.orders.index') }}" class="search-box">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Cari pesanan..." value="{{ request('q') }}">
            <button class="btn btn-outline-light px-3 py-2" type="submit" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); color: white; font-weight: bold;">
    Cari
</button>

        </div>
    </form>



            
            <div class="user-profile">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-info">
                    <div class="user-name">Admin</div>
                    <div class="user-role">Admin</div>
                </div>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn w-100">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main">
        <div class="content-card">
            @yield('content')
            
            <!-- Enhanced Demo Content -->
            
        </div>
    </div>

    <footer>
        <div>
            <i class="fas fa-heart" style="color: #ef4444; margin: 0 0.5rem;"></i>
            &copy; Di buat dengan penuh semangat | 
            <strong>Royal Laundres</strong>
        </div>
    </footer>
    <!-- Bootstrap Bundle JS (WAJIB untuk modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script>
    function toggleLayoutMenu() {
        var submenu = document.getElementById('layoutSubmenu');
        submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'block' : 'none';
    }
    
</script>
