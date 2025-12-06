<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jurnal Mengajar</title>

    <!-- DaisyUI & Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .hero-pattern {
            background-color: #3b82f6;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .geometric-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
        }
    </style>
</head>
<body>

<div class="min-h-screen hero-pattern relative overflow-hidden flex items-center justify-center p-4">

    <!-- BACKGROUND SHAPES -->
    <div class="geometric-shape bg-white w-64 h-64 top-10 left-10"></div>
    <div class="geometric-shape bg-white w-96 h-96 bottom-10 right-10"></div>
    <div class="geometric-shape bg-white w-48 h-48 top-1/2 left-1/4"></div>

    <!-- Dark Mode Toggle -->
    <div class="absolute top-6 right-6 z-50">
        <label class="swap swap-rotate btn btn-circle btn-ghost bg-white/20">
            <input type="checkbox" class="theme-controller" value="dark">
            <svg class="swap-off w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 5v1m0 13v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m0 12.728l.707-.707M18.657 6.343l.707-.707"/>
            </svg>
            <svg class="swap-on w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M21.64 13A9 9 0 1111 3.36 7 7 0 0021.64 13z"/>
            </svg>
        </label>
    </div>

    <!-- LOGIN CONTAINER -->
    <div class="w-full max-w-6xl mx-auto grid lg:grid-cols-2 gap-8 items-center relative z-10">

        <!-- LEFT SIDE -->
        <div class="hidden lg:flex flex-col text-white space-y-6">
            <h1 class="text-5xl font-bold">Jurnal Mengajar</h1>
            <p class="text-xl opacity-80">Platform Digital untuk Guru Modern</p>

            <div class="space-y-4 mt-6">
                <div class="flex items-start gap-4">
                    <div class="bg-white/30 rounded-xl p-3">
                        ⭐
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Kelola Jurnal dengan Mudah</h3>
                        <p class="opacity-80">Catat & dokumentasikan kegiatan mengajar Anda.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-white/30 rounded-xl p-3">
                        📊
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Laporan Otomatis</h3>
                        <p class="opacity-80">Generate laporan bulanan & semester.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-white/30 rounded-xl p-3">
                        🔒
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Aman & Terpercaya</h3>
                        <p class="opacity-80">Data Anda tersimpan dengan baik.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE (FORM) -->
        <div>
            <div class="card bg-base-100 shadow-2xl">
                <div class="card-body p-10">

                    <!-- FORM HEADER -->
                    <h2 class="text-3xl font-bold text-center">Selamat Datang Kembali!</h2>
                    <p class="text-center opacity-70 mb-6">Masuk ke akun Anda untuk melanjutkan</p>

                    @if ($errors->any())
                        <div class="alert alert-error mb-4">
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <!-- LOGIN FORM -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- EMAIL -->
                        <label class="form-control">
                            <span class="label-text font-semibold">Email</span>
                            <input type="email" name="email" class="input input-bordered"
                                   placeholder="nama@sekolah.com" required autofocus>
                        </label>

                        <!-- PASSWORD -->
                        <label class="form-control">
                            <span class="label-text font-semibold">Password</span>
                            <input type="password" name="password" class="input input-bordered"
                                   placeholder="••••••••" required>
                        </label>

                        <!-- REMEMBER -->
                        <div class="flex justify-between items-center">
                            <label class="cursor-pointer flex items-center gap-2">
                                <input type="checkbox" class="checkbox checkbox-primary" name="remember">
                                <span>Ingat saya</span>
                            </label>

                            <a href="{{ route('password.request') }}" class="link link-primary text-sm">
                                Lupa password?
                            </a>
                        </div>

                        <!-- SUBMIT -->
                        <button class="btn btn-primary w-full btn-lg">Masuk</button>
                    </form>

                    <!-- REGISTER -->
                    <div class="text-center mt-4">
                        <p class="opacity-70">
                            Belum punya akun?
                            <a href="{{ route('register') }}" class="link link-primary">Daftar sekarang</a>
                        </p>
                    </div>
                </div>
            </div>

            <p class="text-center text-white/80 mt-6">
                © {{ date('Y') }} Jurnal Mengajar
            </p>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const html = document.documentElement;
    let saved = localStorage.getItem("theme") || "light";
    html.setAttribute("data-theme", saved);

    document.querySelector(".theme-controller").checked = saved === "dark";
});
</script>

</body>
</html>
