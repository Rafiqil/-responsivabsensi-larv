<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    {{-- CSRF TOKEN UNTUK REQUEST JAVASCRIPT --}}
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Presensi QR')
    </title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            width: min(1100px, 92%);
            margin: auto;
            min-height: 65px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .brand {
            text-decoration: none;
            color: #2563eb;
            font-size: 20px;
            font-weight: bold;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            padding: 9px 12px;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.2s;
        }

        .nav-links a:hover {
            background: #eff6ff;
            color: #2563eb;
        }

        .nav-links a.active {
            background: #dbeafe;
            color: #1d4ed8;
            font-weight: bold;
        }

        .main {
            width: min(1100px, 92%);
            margin: auto;
            padding: 35px 0;
        }

        @media (max-width: 650px) {

            .nav-container {
                min-height: auto;
                padding: 12px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 3px;
            }

            .nav-links a {
                white-space: nowrap;
            }

            .main {
                padding: 25px 0;
            }
        }

    </style>

    <style>

        body {
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-success {
            background: #16a34a;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #f8fafc;
            font-weight: 700;
        }

        @media (max-width: 768px) {

            .container {
                padding: 12px;
            }

            .card {
                padding: 16px;
            }

            th,
            td {
                padding: 10px;
                font-size: 14px;
            }

        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 20px;

            display: flex;
            align-items: center;
            gap: 15px;

            border: 1px solid #e5e7eb;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);

            transition: 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-icon {
            width: 48px;
            height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #eff6ff;
            border-radius: 12px;

            font-size: 22px;
        }

        .stat-label {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 26px;
            font-weight: bold;
            color: #111827;
        }

        @media (max-width: 850px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 500px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

    @stack('styles')

</head>

<body>

    <nav class="navbar">

        <div class="nav-container">

            <a
                href="{{ route('dashboard') }}"
                class="brand">

                📚 Presensi QR

            </a>

            <div class="nav-links">

                <a
                    href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    Dashboard

                </a>

                <a
                    href="{{ route('scanner') }}"
                    class="{{ request()->routeIs('scanner') ? 'active' : '' }}">

                    📷 Scan QR

                </a>

                <a
                    href="{{ route('mahasiswa.index') }}"
                    class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">

                    Mahasiswa

                </a>

                <a
                    href="{{ route('presensi.index') }}"
                    class="{{ request()->routeIs('presensi.*') ? 'active' : '' }}">

                    Presensi

                </a>

            </div>

        </div>

    </nav>

    <main class="main">

        @yield('content')

    </main>

    @stack('scripts')

</body>

</html>