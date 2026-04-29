<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard - UMKM Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#89f5e7",
                        "secondary-fixed": "#ffdcc3",
                        "tertiary": "#00443e",
                        "error": "#ba1a1a",
                        "surface-container": "#e5eeff",
                        "on-secondary-fixed-variant": "#6e3900",
                        "outline": "#6f7973",
                        "inverse-surface": "#213145",
                        "inverse-on-surface": "#eaf1ff",
                        "secondary-fixed-dim": "#ffb77d",
                        "background": "#f8f9ff",
                        "on-tertiary-container": "#6cd9cb",
                        "error-container": "#ffdad6",
                        "surface": "#f8f9ff",
                        "surface-tint": "#1b6b51",
                        "secondary": "#904d00",
                        "outline-variant": "#bec9c2",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#8bd6b6",
                        "on-background": "#0b1c30",
                        "tertiary-fixed-dim": "#6bd8cb",
                        "primary": "#004532",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#00201d",
                        "on-primary-fixed": "#002116",
                        "on-surface": "#0b1c30",
                        "primary-container": "#065f46",
                        "surface-bright": "#f8f9ff",
                        "surface-container-high": "#dce9ff",
                        "surface-container-highest": "#d3e4fe",
                        "on-surface-variant": "#3f4944",
                        "on-tertiary-fixed-variant": "#005049",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fe932c",
                        "on-primary-container": "#8bd6b7",
                        "surface-dim": "#cbdbf5",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#2f1500",
                        "on-secondary-container": "#663500",
                        "primary-fixed-dim": "#8bd6b6",
                        "primary-fixed": "#a6f2d1",
                        "on-primary-fixed-variant": "#00513b",
                        "tertiary-container": "#005e56",
                        "surface-container-low": "#eff4ff",
                        "surface-variant": "#d3e4fe"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1320px",
                        "lg": "24px",
                        "xs": "4px",
                        "base": "4px",
                        "md": "16px",
                        "xxl": "48px",
                        "xl": "32px",
                        "gutter": "24px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "h1": ["Inter"],
                        "label-bold": ["Inter"],
                        "button": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "h3": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "h1": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-bold": ["14px", {
                            "lineHeight": "1.2",
                            "fontWeight": "600"
                        }],
                        "button": ["16px", {
                            "lineHeight": "1",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "h2": ["36px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "h3": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <div class="flex min-h-screen">
        <!-- SideNavBar -->
        <aside class="h-screen w-64 border-r border-slate-200 bg-slate-50 flex flex-col sticky top-0 left-0">
            <!-- Header -->
            <div class="p-6">
                <div class="text-lg font-black text-emerald-900 tracking-tighter mb-1">Admin Panel</div>
                <div class="flex items-center gap-3 mt-4">
                    <img alt="Admin Avatar" class="w-10 h-10 rounded-xl object-cover"
                        data-alt="Professional portrait of a corporate executive in a suit with a friendly expression and neutral background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuQt_C01dHEClloUF05LZtyXXvUFdoM2M7amoR6SvfLamVNkqwE2AZLFhU5nk8iakqwiUyoWe-vkOB8kdea2HHNrY49e5_Sm3cK0vgwjwfCcW-8UCBvPTj4OE68ESFJlXbio72quGgm4cOi0NyZxXY7ZJfGwyVtvtbaIQhafeoyYc_JGpD--mJD4u5nWxr668Elbw4NNPLPx0IWVejsHdlbOzRjyw5yZgJqtF_-l4O8qmX7ulpV_l94XZ1UX9SbtABaYtOpI7H7Tla" />
                    <div>
                        <div class="font-inter text-sm font-semibold text-emerald-800">Admin Panel</div>
                        <div class="font-inter text-xs text-slate-500">SME Manager</div>
                    </div>
                </div>
            </div>
            <!-- Main Nav -->
            <nav class="flex-1 px-4 space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('admin.produk') }}">
                    <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                    Produk
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('admin.kategori') }}">
                    <span class="material-symbols-outlined" data-icon="category">category</span>
                    Kategori
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('admin.kelolauser') }}">
                    <span class="material-symbols-outlined" data-icon="group">group</span>
                    Pengguna
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('admin.mitra') }}">
                    <span class="material-symbols-outlined" data-icon="handshake">handshake</span>
                    Mitra
                </a>
            </nav>
            <!-- Footer Nav -->
            <div class="px-4 pb-6 border-t border-slate-200 pt-4">
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('login') }}">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Keluar
                </a>
            </div>
        </aside>
        <!-- Main Content Canvas -->
        <main class="flex-1 flex flex-col min-w-0">
            <!-- TopBar Admin -->
            <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40">
                <div class="max-w-[1320px] mx-auto px-6 py-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                                <span class="material-symbols-outlined" data-icon="search">search</span>
                            </span>
                            <input
                                class="pl-10 pr-4 py-2 bg-slate-50 border-slate-200 rounded-full text-sm focus:ring-2 focus:ring-emerald-700 focus:border-emerald-700 w-64 lg:w-96"
                                placeholder="Cari laporan atau data..." type="text" />
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-2 text-slate-600">
                            <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                            <span class="w-2 h-2 bg-secondary rounded-full -mt-4 -ml-4"></span>
                        </div>
                        <div class="h-8 w-[1px] bg-slate-200"></div>
                        <div class="flex items-center gap-3">
                            <span class="text-right hidden sm:block">
                                <p class="font-label-bold text-slate-900">{{ Auth::user()->name }}</p>
                                <p class="text-[10px] text-slate-500 uppercase tracking-widest">
                                    {{ auth()->user()->role }}
                                </p>
                            </span>
                            <img alt="Profile" class="w-10 h-10 rounded-full border-2 border-emerald-50"
                                data-alt="{{ Auth::user()->name }}"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDPTWkPhjJxH8qYFDli0UYzUBBe_PZ14QfUOGY_ikPWt_vhbbsh2NkNmCtr6JV3Nr1eIkrmiUqoLnGRSQgGCp8TlWv1WU9hPatPyxfnmf-1mXI0A9x3vqatDDC8Y_npqo8h_DDKDweVj1sMDfJ1N5HErBc3DxLkuwq4yoQztnRDFG1GTuF0hdet3O-im_eQA0uvjCf0D45Hs_bG1Mjmg_jidg9UpuBeb38UgYRH_skmlcsFPAWlraH-7b1g1ofrnzouzEIfprZj98x" />
                        </div>
                    </div>
                </div>
            </header>
            <!-- Dashboard Content -->
            <div class="p-6 lg:p-xl max-w-[1320px] mx-auto w-full space-y-gutter">
                <!-- Welcome Section -->
                <div>
                    <h1 class="font-h2 text-h2 text-primary">Ringkasan Bisnis</h1>
                    <p class="font-body-md text-slate-500">Selamat datang kembali,<b> {{ Auth::user()->name }} </b>
                        berikut
                        performa UMKM hari ini.</p>
                </div>
                <!-- Statistics Widgets (Bento Grid) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    <!-- Total Sales -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-[0_8px_24px_-12px_rgba(0,0,0,0.1)] border border-slate-100 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-emerald-50 text-emerald-700 rounded-lg">
                                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                            </div>
                            <span class="text-emerald-600 text-xs font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm"
                                    data-icon="trending_up">trending_up</span>
                                +12.5%
                            </span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Total
                                Penjualan</p>
                            <h3 class="text-h3 font-h3 text-slate-900">Rp 124.500.000</h3>
                        </div>
                    </div>
                    <!-- Active Products -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-[0_8px_24px_-12px_rgba(0,0,0,0.1)] border border-slate-100 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-secondary-fixed text-secondary rounded-lg">
                                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                            </div>
                            <span class="text-slate-400 text-xs font-semibold">Bulan ini</span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Produk Aktif
                            </p>
                            <h3 class="text-h3 font-h3 text-slate-900">1,248</h3>
                        </div>
                    </div>
                    <!-- Total Partners -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-[0_8px_24px_-12px_rgba(0,0,0,0.1)] border border-slate-100 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-tertiary-fixed text-tertiary rounded-lg">
                                <span class="material-symbols-outlined" data-icon="handshake">handshake</span>
                            </div>
                            <span class="text-emerald-600 text-xs font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm"
                                    data-icon="trending_up">trending_up</span>
                                +4
                            </span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Total Mitra
                            </p>
                            <h3 class="text-h3 font-h3 text-slate-900">86</h3>
                        </div>
                    </div>
                    <!-- New Orders -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-[0_8px_24px_-12px_rgba(0,0,0,0.1)] border border-slate-100 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-surface-container text-primary rounded-lg">
                                <span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
                            </div>
                            <div class="bg-secondary text-white text-[10px] px-2 py-0.5 rounded-full font-bold">URGENT
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Pesanan Baru
                            </p>
                            <h3 class="text-h3 font-h3 text-slate-900">42</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                    <!-- Activity Table -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                            <h3 class="font-h3 text-lg text-slate-900">Transaksi Terbaru</h3>
                            <button class="text-emerald-700 font-label-bold text-sm hover:underline">Lihat
                                Semua</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th
                                            class="px-6 py-4 font-label-bold text-xs text-slate-500 uppercase tracking-wider">
                                            Order ID</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-xs text-slate-500 uppercase tracking-wider">
                                            Pelanggan</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-xs text-slate-500 uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-xs text-slate-500 uppercase tracking-wider">
                                            Total</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-xs text-slate-500 uppercase tracking-wider">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-900">#ORD-9021</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold text-xs">
                                                    AS</div>
                                                <span class="text-sm text-slate-700">Andi Saputra</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase">Selesai</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-700 font-semibold">Rp 450.000</td>
                                        <td class="px-6 py-4">
                                            <button class="text-slate-400 hover:text-emerald-700 transition-colors">
                                                <span class="material-symbols-outlined text-xl"
                                                    data-icon="visibility">visibility</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-900">#ORD-9022</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-xs">
                                                    RM</div>
                                                <span class="text-sm text-slate-700">Rina Melati</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase">Proses</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-700 font-semibold">Rp 1.200.000</td>
                                        <td class="px-6 py-4">
                                            <button class="text-slate-400 hover:text-emerald-700 transition-colors">
                                                <span class="material-symbols-outlined text-xl"
                                                    data-icon="visibility">visibility</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-slate-900">#ORD-9023</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-700 font-bold text-xs">
                                                    BK</div>
                                                <span class="text-sm text-slate-700">Bambang K.</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-red-100 text-red-800 text-[10px] font-bold px-2 py-1 rounded-full uppercase">Dibatalkan</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-700 font-semibold">Rp 320.000</td>
                                        <td class="px-6 py-4">
                                            <button class="text-slate-400 hover:text-emerald-700 transition-colors">
                                                <span class="material-symbols-outlined text-xl"
                                                    data-icon="visibility">visibility</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Recent Activity List -->
                    <div class="bg-white rounded-xl shadow-sm border border-slate-100 flex flex-col">
                        <div class="p-6 border-b border-slate-100">
                            <h3 class="font-h3 text-lg text-slate-900">Aktivitas Terbaru</h3>
                        </div>
                        <div class="p-6 space-y-6 flex-1">
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-700">
                                        <span class="material-symbols-outlined text-lg"
                                            data-icon="add_business">add_business</span>
                                    </div>
                                    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[2px] h-6 bg-slate-100">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-900 font-semibold">Mitra Baru Bergabung</p>
                                    <p class="text-xs text-slate-500">Toko Batik Solo kian berkembang.</p>
                                    <span class="text-[10px] text-slate-400 mt-1 block">2 menit yang lalu</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-700">
                                        <span class="material-symbols-outlined text-lg"
                                            data-icon="inventory">inventory</span>
                                    </div>
                                    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[2px] h-6 bg-slate-100">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-900 font-semibold">Stok Hampir Habis</p>
                                    <p class="text-xs text-slate-500">Keripik Tempe Level 3 sisa 5 pcs.</p>
                                    <span class="text-[10px] text-slate-400 mt-1 block">45 menit yang lalu</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-700">
                                    <span class="material-symbols-outlined text-lg"
                                        data-icon="person_add">person_add</span>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-900 font-semibold">User Terdaftar</p>
                                    <p class="text-xs text-slate-500">Lina Kurniawati telah membuat akun.</p>
                                    <span class="text-[10px] text-slate-400 mt-1 block">2 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-slate-50 mt-auto rounded-b-xl">
                            <button
                                class="w-full text-slate-500 font-label-bold text-xs flex items-center justify-center gap-2 py-2 hover:text-emerald-700 transition-colors">
                                Lihat Semua Aktivitas
                                <span class="material-symbols-outlined text-sm"
                                    data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Featured Products Grid (Simplified for Dashboard) -->
                <div class="space-y-4">
                    <h3 class="font-h3 text-lg text-slate-900">Produk Terlaris</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                        <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm flex items-center gap-4">
                            <img alt="Product 1" class="w-16 h-16 rounded-lg object-cover"
                                data-alt="Authentic Indonesian handmade woven basket with natural textures and earthy tones"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6QN1ZEIkdcJAWJuTqwQruR75a6x-j9CMYb9tyLdoIrYVi2ERMOWm1UWrQRi1qTxmS3XzyFcEww4o1eD6Wg05pOPwm7auZLmzWlnxux7Nzc6nBu-EpQqLzcfiwJX-ChCRepGURuL6my3WoeJXuimAjCg5-1YIk6gs2F0p8FtaRRFFMCUhAXshjm1DHGQnyWD5Q0MtMVlUO_2lSF8pBKNqFrbmh1pTW1aNCJBEyYSdjvajs5GLTfsAaaoFgI0sOguYSUAt-ycsDAuvH" />
                            <div class="min-w-0">
                                <p class="text-sm font-semibold text-slate-900 truncate">Anyaman Rotan Premium</p>
                                <p class="text-xs text-emerald-700 font-bold">Rp 125.000</p>
                                <p class="text-[10px] text-slate-400 mt-1">Terjual: 452 unit</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm flex items-center gap-4">
                            <img alt="Product 2" class="w-16 h-16 rounded-lg object-cover"
                                data-alt="Traditional Indonesian coffee beans in a rustic wooden bowl with dramatic natural lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnOiAkAqV7eZ794VpB7_6wILm5wLGcnJ--_D_jeaOGUI0KB70pjcG_C64wPFukntrZqjFPr9KB7GgLA1GDheL1fzrhRTpKxc3RUcQBMh-hbl0pOqUQwr-HrjX69x31IDSvuQ5bxApGtSOadtvW8RpfRAr-vOQ6NmMfBKBssu59cjtkJSKXLatRn_7hrTLqZf1xNhXHwvPCaQmVcr36oaZ09jQOA5T7YgbPnnRAONdAMY44BufeLywWgsr54bzICP1JOIneG9B1zsTN" />
                            <div class="min-w-0">
                                <p class="text-sm font-semibold text-slate-900 truncate">Kopi Arabika Gayo 250g</p>
                                <p class="text-xs text-emerald-700 font-bold">Rp 85.000</p>
                                <p class="text-[10px] text-slate-400 mt-1">Terjual: 890 unit</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm flex items-center gap-4">
                            <img alt="Product 3" class="w-16 h-16 rounded-lg object-cover"
                                data-alt="Bottles of organic traditional Indonesian herbal medicine with natural ingredients around them"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-YLtNx0JJsylvNGfgxkNS8EezAsVNHglzCCShestITRPECo3hoC_Nnvm0LhZs5H-r4_DyG1a-LdEq5ERAbU6WepuiLoi7ZQcWHbu0wpez-_6hub-6boKDQRd0WA-okItxjCR1pfozMPbLq9KhIZS3isLZvvrtUVrAwS7AaQgcfu5ZLlykTwcNTTZew_1WdmNMnyyV-FOSnBFDoEnmIeNDbzB15AAwoTsRl7u4vsAJfZXHJu-EWwlBg1fhcN_2qP5jR3I-xt1BNw0j" />
                            <div class="min-w-0">
                                <p class="text-sm font-semibold text-slate-900 truncate">Jamu Kunyit Asam Cair</p>
                                <p class="text-xs text-emerald-700 font-bold">Rp 25.000</p>
                                <p class="text-[10px] text-slate-400 mt-1">Terjual: 1,2k unit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section inside Main -->
            <footer class="w-full border-t border-slate-200 mt-auto bg-slate-50">
                <div
                    class="max-w-[1320px] mx-auto py-12 px-6 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-md font-bold text-emerald-900">UMKM Digital</div>
                    <p class="font-inter text-xs text-slate-500">© 2024 UMKM Digital Indonesia. Memberdayakan Ekonomi
                        Lokal.</p>
                    <div class="flex gap-6">
                        <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                            href="#">Syarat &amp; Ketentuan</a>
                        <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                            href="#">Kebijakan Privasi</a>
                        <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                            href="#">Bantuan</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>
</body>

</html>
