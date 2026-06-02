<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Kategori - UMKM Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
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
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
                    href="{{ route('admin.produk') }}">
                    <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                    Produk
                </a>
                <a class="flex items-center gap-3 px-3 py-2 bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2"
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
        <main class="flex-1 flex flex-col min-w-0">
            <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40">
                <div class="max-w-[1320px] mx-auto px-6 py-4 flex items-center justify-between gap-6">
                    <div class="relative w-full max-w-md">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-full text-sm focus:ring-2 focus:ring-emerald-700 focus:border-emerald-700"
                            placeholder="Cari kategori atau slug..." type="text" />
                    </div>
                    <div class="flex items-center gap-6">
                        <button class="relative p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-secondary rounded-full"></span>
                        </button>
                        <div class="h-8 w-[1px] bg-slate-200"></div>
                        <div class="text-right hidden sm:block">
                            <p class="font-label-bold text-slate-900">Budi Santoso</p>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest">Super Admin</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="p-6 lg:p-xl max-w-[1320px] mx-auto w-full space-y-gutter">
                <section class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
                    <div>
                        <h1 class="font-h2 text-h2 text-primary">Admin Kategori</h1>
                        <p class="font-body-md text-slate-500">Kelola kategori katalog, prioritas tampil, ikon, dan
                            status publikasi.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button
                            class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-xl font-button hover:bg-white transition-colors flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">download</span>
                            Ekspor
                        </button>
                        <button
                            class="px-5 py-2.5 bg-primary text-on-primary rounded-xl font-button hover:bg-primary-container transition-colors flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Tambah Kategori
                        </button>
                    </div>
                </section>


                <section class="grid grid-cols-1 xl:grid-cols-3 gap-gutter">
                    <div class="xl:col-span-2 bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <div
                            class="p-4 border-b border-slate-100 flex flex-col lg:flex-row gap-4 lg:items-center justify-between">
                            <div>
                                <h2 class="font-h3 text-lg text-slate-900">Daftar Kategori</h2>
                                <p class="font-body-sm text-outline">Atur urutan kategori yang tampil di etalase.</p>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                <select
                                    class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                                    <option>Semua Status</option>
                                    <option>Aktif</option>
                                    <option>Draft</option>
                                    <option>Nonaktif</option>
                                </select>
                                <button
                                    class="flex items-center gap-xs font-button text-sm text-primary hover:bg-emerald-50 px-3 py-2 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-sm">filter_list</span>
                                    Reset
                                </button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse min-w-[760px]">
                                <thead class="bg-slate-50 border-b border-slate-200">
                                    <tr>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                            Kategori</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                            Slug</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                            Produk</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                            Urutan</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                            Status</th>
                                        <th
                                            class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px] text-right">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    @php
                                        $categories = [
                                            [
                                                'name' => 'Batik & Tekstil',
                                                'slug' => 'batik-tekstil',
                                                'icon' => 'styler',
                                                'products' => 64,
                                                'order' => 1,
                                                'status' => 'Aktif',
                                                'color' => 'bg-emerald-100 text-emerald-800',
                                            ],
                                            [
                                                'name' => 'Kuliner Nusantara',
                                                'slug' => 'kuliner-nusantara',
                                                'icon' => 'restaurant',
                                                'products' => 82,
                                                'order' => 2,
                                                'status' => 'Aktif',
                                                'color' => 'bg-orange-100 text-orange-800',
                                            ],
                                            [
                                                'name' => 'Kerajinan Tangan',
                                                'slug' => 'kerajinan-tangan',
                                                'icon' => 'handyman',
                                                'products' => 47,
                                                'order' => 3,
                                                'status' => 'Aktif',
                                                'color' => 'bg-sky-100 text-sky-800',
                                            ],
                                            [
                                                'name' => 'Kecantikan & Herbal',
                                                'slug' => 'kecantikan-herbal',
                                                'icon' => 'spa',
                                                'products' => 31,
                                                'order' => 4,
                                                'status' => 'Aktif',
                                                'color' => 'bg-violet-100 text-violet-800',
                                            ],
                                            [
                                                'name' => 'Pertanian Lokal',
                                                'slug' => 'pertanian-lokal',
                                                'icon' => 'eco',
                                                'products' => 24,
                                                'order' => 5,
                                                'status' => 'Draft',
                                                'color' => 'bg-lime-100 text-lime-800',
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr class="hover:bg-slate-50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-11 h-11 rounded-xl {{ $category['color'] }} flex items-center justify-center">
                                                        <span
                                                            class="material-symbols-outlined">{{ $category['icon'] }}</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-label-bold text-on-surface">
                                                            {{ $category['name'] }}</p>
                                                        <p class="text-xs text-outline">Kategori utama katalog</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 font-body-sm text-on-surface-variant">
                                                {{ $category['slug'] }}</td>
                                            <td class="px-6 py-4 font-label-bold text-on-surface">
                                                {{ $category['products'] }}</td>
                                            <td class="px-6 py-4 font-body-sm text-on-surface-variant">
                                                #{{ $category['order'] }}</td>
                                            <td class="px-6 py-4">
                                                @if ($category['status'] === 'Aktif')
                                                    <span
                                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800"><span
                                                            class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>Aktif</span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800"><span
                                                            class="w-1.5 h-1.5 rounded-full bg-orange-600"></span>Draft</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex justify-end gap-1">
                                                    <button
                                                        class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors"
                                                        title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                                    </button>
                                                    <button
                                                        class="p-2 text-outline hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors"
                                                        title="Hapus">
                                                        <span
                                                            class="material-symbols-outlined text-[20px]">delete</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <aside class="bg-white rounded-xl shadow-sm border border-slate-200 p-xl h-fit">
                        <div class="flex items-center justify-between mb-lg">
                            <div>
                                <h2 class="font-h3 text-lg text-slate-900">Form Kategori</h2>
                                <p class="font-body-sm text-outline">Tambah atau ubah data kategori.</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">edit_square</span>
                        </div>
                        <form class="space-y-md" action="{{ route('admin.kategori.store') }}" method="POST">
                            @csrf
                            <div>
                                <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Nama
                                    Kategori</label>
                                <input
                                    class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                    placeholder="Contoh: Produk Rumah" type="text" />
                            </div>
                            <div>
                                <label
                                    class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Slug</label>
                                <input
                                    class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                    placeholder="produk-rumah" type="text" />
                            </div>
                            <div class="grid grid-cols-2 gap-md">
                                <div>
                                    <label
                                        class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Ikon</label>
                                    <select
                                        class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none bg-white">
                                        <option>category</option>
                                        <option>restaurant</option>
                                        <option>styler</option>
                                        <option>handyman</option>
                                        <option>spa</option>
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Urutan</label>
                                    <input
                                        class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all"
                                        placeholder="1" type="number" />
                                </div>
                            </div>
                            <div>
                                <label
                                    class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Deskripsi</label>
                                <textarea
                                    class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none"
                                    placeholder="Deskripsi singkat kategori..." rows="4"></textarea>
                            </div>
                            <label
                                class="flex items-center justify-between gap-3 p-md bg-slate-50 rounded-xl cursor-pointer">
                                <span>
                                    <span class="block font-label-bold text-on-surface">Tampilkan di katalog</span>
                                    <span class="block text-xs text-outline mt-1">Kategori aktif akan muncul di halaman
                                        publik.</span>
                                </span>
                                <input class="rounded border-slate-300 text-primary focus:ring-primary" checked
                                    type="checkbox" />
                            </label>
                            <button
                                class="w-full py-3 bg-primary text-on-primary rounded-xl font-button hover:bg-primary-container transition-colors"
                                type="button">
                                Simpan Kategori
                            </button>
                        </form>
                    </aside>
                </section>
            </div>
        </main>
    </div>
</body>

</html>
