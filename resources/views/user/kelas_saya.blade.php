@extends('user.app')
@section('title', 'Kelas Saya')
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="avatar avatar-lg rounded"
                            style="background-image: url(./static/avatars/003m.jpg)"></span>
                    </div>
                    <div class="col">
                        <h1 class="fw-bold">Paweł Kuna</h1>
                        <div class="my-2">Unemployed. Building a $1M solo business while traveling the world.
                            Currently at $400k/yr.
                        </div>
                        <div class="list-inline list-inline-dots text-secondary">
                            <div class="list-inline-item">
                                <!-- Download SVG icon from http://tabler-icons.io/i/map -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" />
                                    <path d="M9 4v13" />
                                    <path d="M15 7v13" />
                                </svg>
                                Harbin University of Civil Engineering & Architecture, China
                            </div>
                            <div class="list-inline-item">
                                <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                    <path d="M3 7l9 6l9 -6" />
                                </svg>
                                <a href="#" class="text-reset">dslane3@epa.gov</a>
                            </div>
                            <div class="list-inline-item">
                                <!-- Download SVG icon from http://tabler-icons.io/i/cake -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" />
                                    <path
                                        d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" />
                                    <path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" />
                                </svg>
                                15/10/1972
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-auto ms-auto">
                            <div class="btn-list">
                                <a href="#" class="btn btn-icon" aria-label="Button">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-icon" aria-label="Button">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 9h8" />
                                        <path d="M8 13h6" />
                                        <path
                                            d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-primary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                    Following
                                </a>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row g-3">
                    <div class="col">
                        <ul class="timeline">
                            <p>Kelas</p>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="timeline">
                            <p>Ruang Diskusi</p>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="timeline">
                            <p>Mentoring</p>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-event">
                                <div class="timeline-event-icon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </div>
                                <div class="card timeline-event-card">
                                    <div class="card-body">
                                        <div class="text-secondary float-end">2 hrs ago</div>
                                        <h4>+3 New Products were added!</h4>
                                        <p class="text-secondary">Congratulations!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">Basic info</div>
                                        <div class="mb-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                                <path d="M3 6l0 13" />
                                                <path d="M12 6l0 13" />
                                                <path d="M21 6l0 13" />
                                            </svg>
                                            Went to: <strong>University of Ljubljana</strong>
                                        </div>
                                        <div class="mb-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                <path d="M12 12l0 .01" />
                                                <path d="M3 13a20 20 0 0 0 18 0" />
                                            </svg>
                                            Worked at: <strong>Devpulse</strong>
                                        </div>
                                        <div class="mb-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                            </svg>
                                            Lives in: <strong>Šentilj v Slov. Goricah, Slovenia</strong>
                                        </div>
                                        <div class="mb-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path
                                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                            </svg>
                                            From: <strong><span class="flag flag-country-si"></span>
                                                Slovenia</strong>
                                        </div>
                                        <div class="mb-2">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                <path d="M16 3v4" />
                                                <path d="M8 3v4" />
                                                <path d="M4 11h16" />
                                                <path d="M11 15h1" />
                                                <path d="M12 15v3" />
                                            </svg>
                                            Birth date: <strong>13/01/1985</strong>
                                        </div>
                                        <div>
                                            <!-- Download SVG icon from http://tabler-icons.io/i/clock -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                <path d="M12 7v5l3 3" />
                                            </svg>
                                            Time zone: <strong>Europe/Ljubljana</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">About Me</h2>
                                        <div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                aliquid beatae eaque eius
                                                esse fugit, hic id illo itaque modi molestias nemo perferendis quae
                                                rerum soluta. Blanditiis
                                                laborum minima molestiae molestias nemo nesciunt nisi pariatur quae
                                                sapiente ut. Aut consectetur
                                                doloremque, error impedit, ipsum labore laboriosam minima non omnis
                                                perspiciatis possimus
                                                praesentium provident quo recusandae suscipit tempore totam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
                                    class="link-secondary" rel="noopener">Documentation</a></li>
                            <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                            <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                    class="link-secondary" rel="noopener">Source code</a></li>
                            <li class="list-inline-item">
                                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                                    rel="noopener">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    Sponsor
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2023
                                <a href="." class="link-secondary">Tabler</a>.
                                All rights reserved.
                            </li>
                            <li class="list-inline-item">
                                <a href="./changelog.html" class="link-secondary" rel="noopener">
                                    v1.0.0-beta20
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
