<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $__env->yieldContent('title', 'Presensi QR'); ?>
    </title>

    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            min-height: 100%;
            background: #020617;
        }

        body {

            min-height: 100vh;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: #e2e8f0;

            background:

                radial-gradient(
                    circle at 15% 10%,
                    rgba(34, 211, 238, .08),
                    transparent 28%
                ),

                radial-gradient(
                    circle at 85% 25%,
                    rgba(59, 130, 246, .07),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 50% 100%,
                    rgba(16, 185, 129, .05),
                    transparent 35%
                ),

                linear-gradient(
                    145deg,
                    #020617 0%,
                    #07111f 45%,
                    #020617 100%
                );

            background-attachment: fixed;

            overflow-x: hidden;
        }


        /* =====================================================
           BACKGROUND GRID
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            z-index: -1;

            opacity: .22;

            background-image:

                linear-gradient(
                    rgba(148, 163, 184, .035) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(148, 163, 184, .035) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            position: sticky;

            top: 0;

            z-index: 1000;

            background:
                rgba(2, 6, 23, .88);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            border-bottom:
                1px solid
                rgba(148, 163, 184, .10);

            box-shadow:
                0 10px 35px
                rgba(0, 0, 0, .25);
        }


        .nav-container {

            width:
                min(1100px, 92%);

            margin:
                auto;

            min-height:
                68px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                20px;
        }


        /* =====================================================
           BRAND
        ===================================================== */

        .brand {

            position: relative;

            display:
                inline-flex;

            align-items:
                center;

            gap:
                9px;

            text-decoration:
                none;

            color:
                #f8fafc;

            font-size:
                20px;

            font-weight:
                800;

            letter-spacing:
                -.4px;

            white-space:
                nowrap;

            transition:
                .25s ease;
        }


        .brand::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: -6px;

            width: 0;

            height: 2px;

            background:
                #22d3ee;

            box-shadow:
                0 0 10px
                rgba(34, 211, 238, .8);

            transition:
                .3s ease;
        }


        .brand:hover {

            color:
                #22d3ee;

            text-shadow:
                0 0 15px
                rgba(34, 211, 238, .35);
        }


        .brand:hover::after {

            width:
                100%;
        }


        /* =====================================================
           NAV LINKS
        ===================================================== */

        .nav-links {

            display:
                flex;

            align-items:
                center;

            gap:
                5px;
        }


        .nav-links a {

            position:
                relative;

            text-decoration:
                none;

            color:
                #94a3b8;

            padding:
                9px 13px;

            border-radius:
                10px;

            font-size:
                14px;

            font-weight:
                600;

            transition:
                .25s ease;
        }


        .nav-links a:hover {

            color:
                #22d3ee;

            background:
                rgba(34, 211, 238, .06);

            box-shadow:
                0 0 18px
                rgba(34, 211, 238, .06);
        }


        .nav-links a.active {

            color:
                #22d3ee;

            background:
                rgba(34, 211, 238, .09);

            border:
                1px solid
                rgba(34, 211, 238, .18);

            box-shadow:
                0 0 20px
                rgba(34, 211, 238, .07);

            text-shadow:
                0 0 10px
                rgba(34, 211, 238, .3);
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {

            position:
                relative;

            width:
                min(1100px, 92%);

            margin:
                auto;

            padding:
                40px 0 70px;

            min-height:
                calc(100vh - 68px);
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            width:
                100%;

            max-width:
                1100px;

            margin:
                0 auto;
        }


        /* =====================================================
           GENERAL CARD
        ===================================================== */

        .card {

            background:
                linear-gradient(
                    145deg,
                    rgba(15, 23, 42, .94),
                    rgba(2, 6, 23, .94)
                );

            border:
                1px solid
                rgba(148, 163, 184, .10);

            border-radius:
                18px;

            padding:
                24px;

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, .25);

            margin-bottom:
                20px;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {

            display:
                inline-block;

            padding:
                10px 18px;

            border-radius:
                10px;

            text-decoration:
                none;

            border:
                none;

            cursor:
                pointer;

            font-weight:
                700;

            transition:
                .25s ease;
        }


        .btn-primary {

            background:
                #22d3ee;

            color:
                #020617;

            box-shadow:
                0 0 20px
                rgba(34, 211, 238, .18);
        }


        .btn-primary:hover {

            background:
                #67e8f9;

            transform:
                translateY(-2px);

            box-shadow:
                0 0 30px
                rgba(34, 211, 238, .3);
        }


        .btn-success {

            background:
                #22c55e;

            color:
                #020617;
        }


        .btn-danger {

            background:
                #ef4444;

            color:
                white;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {

            overflow-x:
                auto;

            border-radius:
                14px;

            border:
                1px solid
                rgba(148, 163, 184, .08);
        }


        table {

            width:
                100%;

            border-collapse:
                collapse;

            background:
                rgba(15, 23, 42, .55);
        }


        th,
        td {

            padding:
                14px;

            text-align:
                left;

            border-bottom:
                1px solid
                rgba(148, 163, 184, .08);

            color:
                #cbd5e1;
        }


        th {

            background:
                rgba(34, 211, 238, .045);

            color:
                #22d3ee;

            font-weight:
                700;
        }


        tr:hover td {

            background:
                rgba(34, 211, 238, .025);
        }


        /* =====================================================
           DASHBOARD STATS
        ===================================================== */

        .stats-grid {

            display:
                grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap:
                18px;

            margin-bottom:
                25px;
        }


        .stat-card {

            position:
                relative;

            overflow:
                hidden;

            background:
                linear-gradient(
                    145deg,
                    rgba(15, 23, 42, .95),
                    rgba(2, 6, 23, .95)
                );

            border:
                1px solid
                rgba(148, 163, 184, .10);

            border-radius:
                16px;

            padding:
                20px;

            display:
                flex;

            align-items:
                center;

            gap:
                15px;

            box-shadow:
                0 15px 40px
                rgba(0, 0, 0, .22);

            transition:
                .25s ease;
        }


        .stat-card::before {

            content: "";

            position:
                absolute;

            width:
                100px;

            height:
                100px;

            right:
                -40px;

            top:
                -40px;

            border-radius:
                50%;

            background:
                #22d3ee;

            opacity:
                .035;

            filter:
                blur(25px);
        }


        .stat-card:hover {

            transform:
                translateY(-4px);

            border-color:
                rgba(34, 211, 238, .22);

            box-shadow:
                0 18px 45px
                rgba(0, 0, 0, .28),
                0 0 25px
                rgba(34, 211, 238, .04);
        }


        .stat-icon {

            width:
                48px;

            height:
                48px;

            flex-shrink:
                0;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            background:
                rgba(34, 211, 238, .07);

            border:
                1px solid
                rgba(34, 211, 238, .12);

            border-radius:
                12px;

            font-size:
                22px;

            box-shadow:
                0 0 20px
                rgba(34, 211, 238, .04);
        }


        .stat-label {

            font-size:
                13px;

            color:
                #94a3b8;

            margin-bottom:
                5px;
        }


        .stat-value {

            font-size:
                26px;

            font-weight:
                800;

            color:
                #f8fafc;

            text-shadow:
                0 0 12px
                rgba(34, 211, 238, .08);
        }


        /* =====================================================
           TEXT
        ===================================================== */

        h1,
        h2,
        h3,
        h4 {

            color:
                #f8fafc;
        }


        p {

            color:
                #94a3b8;
        }


        a {

            color:
                #22d3ee;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 850px) {

            .stats-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 650px) {

            .nav-container {

                min-height:
                    auto;

                padding:
                    12px 0;

                align-items:
                    flex-start;

                flex-direction:
                    column;

                gap:
                    10px;
            }


            .nav-links {

                width:
                    100%;

                overflow-x:
                    auto;

                padding-bottom:
                    3px;
            }


            .nav-links a {

                white-space:
                    nowrap;
            }


            .main {

                padding:
                    25px 0 50px;
            }


            .stats-grid {

                grid-template-columns:
                    1fr;
            }


            .card {

                padding:
                    16px;
            }


            th,
            td {

                padding:
                    10px;

                font-size:
                    14px;
            }

        }

    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>

</head>


<body>

    <nav class="navbar">

        <div class="nav-container">

            <a
                href="<?php echo e(route('dashboard')); ?>"
                class="brand">

                📚 Presensi QR

            </a>


            <div class="nav-links">

                <a
                    href="<?php echo e(route('dashboard')); ?>"
                    class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">

                    Dashboard

                </a>


                <a
                    href="<?php echo e(route('scanner')); ?>"
                    class="<?php echo e(request()->routeIs('scanner') ? 'active' : ''); ?>">

                    📷 Scan QR

                </a>


                <a
                    href="<?php echo e(route('mahasiswa.index')); ?>"
                    class="<?php echo e(request()->routeIs('mahasiswa.*') ? 'active' : ''); ?>">

                    Mahasiswa

                </a>


                <a
                    href="<?php echo e(route('presensi.index')); ?>"
                    class="<?php echo e(request()->routeIs('presensi.*') ? 'active' : ''); ?>">

                    Presensi

                </a>

            </div>

        </div>

    </nav>


    <main class="main">

        <?php echo $__env->yieldContent('content'); ?>

    </main>


    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html><?php /**PATH C:\laragon\www\presensi_qr\resources\views/layouts/app.blade.php ENDPATH**/ ?>