<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Mengajar - Aplikasi Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-pattern {
            background-color: #3b82f6;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-lg sticky top-0 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Dashboard</a></li>
                    <li><a>Jurnal Saya</a></li>
                    <li><a>Jadwal Mengajar</a></li>
                    <li><a>Laporan</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">Jurnal Mengajar</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a class="active">Dashboard</a></li>
                <li><a>Jurnal Saya</a></li>
                <li><a>Jadwal Mengajar</a></li>
                <li><a>Laporan</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=guru" alt="Avatar" />
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Profile</a></li>
                    <li><a>Pengaturan</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero min-h-[300px] hero-pattern">
        <div class="hero-content text-center text-white">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Selamat Datang!</h1>
                <p class="py-6">Kelola jurnal mengajar Anda dengan mudah dan efisien</p>
                <button class="btn btn-primary" onclick="modal_tambah.showModal()">+ Tambah Jurnal Baru</button>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Stats Cards -->
        <div class="stats stats-vertical lg:stats-horizontal shadow w-full mb-8">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div class="stat-title">Total Jurnal</div>
                <div class="stat-value text-primary">0</div>
                <div class="stat-desc">Bulan ini</div>
            </div>
            
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Jam Mengajar</div>
                <div class="stat-value text-secondary">0</div>
                <div class="stat-desc">Minggu ini</div>
            </div>
            
            <div class="stat">
                <div class="stat-figure text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Kelas Aktif</div>
                <div class="stat-value text-accent">0</div>
                <div class="stat-desc">Semester ini</div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card bg-base-100 shadow-xl mb-8">
            <div class="card-body">
                <h2 class="card-title">Filter Jurnal</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tanggal Mulai</span>
                        </label>
                        <input type="date" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tanggal Akhir</span>
                        </label>
                        <input type="date" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kelas</span>
                        </label>
                        <select class="select select-bordered">
                            <option>Semua Kelas</option>
                            <option>Kelas 7A</option>
                            <option>Kelas 7B</option>
                            <option>Kelas 8A</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Mata Pelajaran</span>
                        </label>
                        <select class="select select-bordered">
                            <option>Semua Mapel</option>
                            <option>Matematika</option>
                            <option>Bahasa Indonesia</option>
                            <option>IPA</option>
                        </select>
                    </div>
                </div>
                <div class="card-actions justify-end mt-4">
                    <button class="btn btn-ghost">Reset</button>
                    <button class="btn btn-primary">Terapkan Filter</button>
                </div>
            </div>
        </div>

        <!-- Jurnal List -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="card-title">Daftar Jurnal</h2>
                    <button class="btn btn-primary btn-sm" onclick="modal_tambah.showModal()">+ Tambah Jurnal</button>
                </div>
                
                <!-- Empty State -->
                <div class="text-center py-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-base-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="text-xl font-semibold mt-4 text-base-content/70">Belum ada jurnal</h3>
                    <p class="text-base-content/50 mt-2">Mulai tambahkan jurnal mengajar Anda</p>
                    <button class="btn btn-primary mt-4" onclick="modal_tambah.showModal()">+ Tambah Jurnal Pertama</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Jurnal -->
    <dialog id="modal_tambah" class="modal">
        <div class="modal-box max-w-2xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg mb-4">Tambah Jurnal Mengajar</h3>
            
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Tanggal & Waktu</span>
                </label>
                <input type="datetime-local" class="input input-bordered" required />
            </div>

            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Kelas</span>
                    </label>
                    <select class="select select-bordered" required>
                        <option disabled selected>Pilih Kelas</option>
                        <option>XI-RPL</option>
                        <option>XI-TPM</option>
                        <option>XI-TPM 2</option>
                        <option>XI</option>
                        <option>XI</option>
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Mata Pelajaran</span>
                    </label>
                    <select class="select select-bordered" required>
                        <option disabled selected>Pilih Mapel</option>
                        <option>Matematika</option>
                        <option>Bahasa Indonesia</option>
                        <option>IPA</option>
                        <option>IPS</option>
                        <option>Bahasa Inggris</option>
                    </select>
                </div>
            </div>

            <div class="form-control mt-4">
                <label class="label">
                    <span class="label-text">Materi Pembelajaran</span>
                </label>
                <input type="text" placeholder="Contoh: Persamaan Linear" class="input input-bordered" required />
            </div>

            <div class="form-control mt-4">
                <label class="label">
                    <span class="label-text">Kegiatan Pembelajaran</span>
                </label>
                <textarea class="textarea textarea-bordered h-24" placeholder="Jelaskan kegiatan pembelajaran yang dilakukan..." required></textarea>
            </div>

            <div class="form-control mt-4">
                <label class="label">
                    <span class="label-text">Jumlah Siswa Hadir</span>
                </label>
                <input type="number" placeholder="30" class="input input-bordered" required />
            </div>

            <div class="form-control mt-4">
                <label class="label">
                    <span class="label-text">Catatan / Kendala (Opsional)</span>
                </label>
                <textarea class="textarea textarea-bordered h-20" placeholder="Catatan tambahan atau kendala yang dihadapi..."></textarea>
            </div>

            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-ghost mr-2">Batal</button>
                    <button class="btn btn-primary">Simpan Jurnal</button>
                </form>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content mt-16">
        <aside>
            <p class="font-bold">
                Jurnal Mengajar - Aplikasi Guru
            </p> 
            <p>Copyright © 2025 - All right reserved</p>
        </aside>
    </footer>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('#logout-form button').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('logout-form').submit();
        });
    });
});
</script>
</body>
</html>