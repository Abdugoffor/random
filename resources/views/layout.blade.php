<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Клиенты</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #R_N {
            display: flex;
        }

        #R_N b {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        .num {
            margin-right: 5px;
        }

        #R_N span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 1px solid red;
            border-color: #ffffff00 red red red;
            animation: rotate1 2s linear infinite;
            position: relative;
        }

        #R_N span::before {
            content: "";
            display: block;
            width: 70%;
            height: 70%;
            border-radius: 50%;
            border: 1px solid red;
            border-color: red #ffffff00 red red;
            position: absolute;
            animation: rotate2 2s linear infinite;
        }

        #R_N span::after {
            content: "";
            display: block;
            width: 45%;
            height: 45%;
            border-radius: 50%;
            border: 1px solid red;
            border-color: red red #ffffff00 red;
            position: absolute;
            animation: rotate3 1.5s linear infinite;
        }

        @keyframes rotate1 {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes rotate2 {
            from {
                transform: rotate(360deg);
            }

            to {
                transform: rotate(-360deg);
            }
        }

        @keyframes rotate3 {
            100% {
                transform: rotate(360deg);
            }
        }

        #p_num {
            transition: .2s linear;
            width: 18px;
        }

        #p_num p {
            animation: viewP .5s linear 1;

        }

        @keyframes viewP {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }
    </style>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>

<body>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                        viewBox="0 0 118 94" role="img">
                        <title>Бонусы</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Бонусы</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Случайный</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none"
                        href="{{ route('winners') }}">Победителей</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('mijoz') }}">Клиенты</a>
                    <a class="btn btn-outline-primary mr-2"
                        href="{{ route('edit') }}">Профиль</a>
                    <form action="{{ route('logaut') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">Выход</button>
                    </form>
                </nav>
            </div>
            @yield('hed')
        </header>

        <main>

            @yield('con')

        </main>

    </div>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</html>
