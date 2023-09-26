<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Música en Familia | Admin</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL;?>Assets/img/log.png" type="image/png" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>Assets/css/admin.css">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>

<body>
    <div class="app-container">
        <div class="app-header">
            <div class="app-header-left">
                <span class="app-icon"></span>
                <p class="app-name"></p>
                <div class="search-wrapper">
                    <input class="search-input" type="text" placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search"
                        viewBox="0 0 24 24">
                        <defs></defs>
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                </div>
            </div>
            <div class="app-header-right">
                <button style="display: none;" class="mode-switch" title="Switch Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button class="profile-btn">
                    <span>En Memoria de Mi</span>
                </button>
            </div>
            <button class="messages-btn">
                Directiva
            </button>
        </div>
        <div class="app-content">
            <div class="app-sidebar">
                <a href="" class="app-sidebar-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" /></svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-pie-chart" viewBox="0 0 24 24">
                        <defs />
                        <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
                    </svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                        <line x1="16" y1="2" x2="16" y2="6" />
                        <line x1="8" y1="2" x2="8" y2="6" />
                        <line x1="3" y1="10" x2="21" y2="10" /></svg>
                </a>
                <a href="" class="app-sidebar-link">
                    <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="feather feather-settings" viewBox="0 0 24 24">
                        <defs />
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                    </svg>
                </a>
            </div>
            <div class="projects-section">
                <div class="projects-section-header">
                    <p>Administración</p>
                </div>
                <div class="projects-section-line">
                    <div class="projects-status">
                        <div class="item-status">
                            <span class="status-number"></span>
                            <span class="status-type"></span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"></span>
                            <span class="status-type"></span>
                        </div>
                    </div>
                    <div class="view-actions">
                        <button class="view-btn list-view" title="List View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6" />
                                <line x1="8" y1="12" x2="21" y2="12" />
                                <line x1="8" y1="18" x2="21" y2="18" />
                                <line x1="3" y1="6" x2="3.01" y2="6" />
                                <line x1="3" y1="12" x2="3.01" y2="12" />
                                <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
                        </button>
                        <button class="view-btn grid-view active" title="Grid View">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" /></svg>
                        </button>
                    </div>
                </div>





                <div class="content-overflow">
                    <div class="main-parent-subtabs-gj8 main-global-users-subtabs-gj8">
                        <div class="main-triggers-subtabs-gj8 main-subtabs-gj8">
                            <div class="tab-trigger-subtabs-gj8 active">
                                <span class="total-only total-assistants"></span> Asistentes 
                            </div>
                            <div class="tab-trigger-subtabs-gj8">
                                <span class="total-only total-participants">20</span>Participantes
                            </div>
                        </div>
                        <div class="main-subtabs-content-gj8">
                            <div class="tab-content-subtabs-gj8">
                                <div class="total-main">
                                    <div class="item">
                                        <div class="total adventists">20</div>
                                        <div class="title">Adventistas</div>
                                    </div>
                                    <div class="item">
                                        <div class="total no-adventists">20</div>
                                        <div class="title">No Adventistas</div>
                                    </div>
                                </div>
                                <div class="project-boxes jsGridView assistants-list"></div>
                            </div>
                            <div class="tab-content-subtabs-gj8">
                                <div class="tag-filter-main d-flex wrap">
                                    <span class="tag-filter active"><span class="all-count"></span> Todos</span>
                                    <span class="tag-filter"><span class="all-instruments"></span> Instrumentos</span>
                                    <span class="tag-filter"><span class="all-sopranos"></span> Sopranos</span>
                                    <span class="tag-filter"><span class="all-contraltos"></span> Contraltos</span>
                                    <span class="tag-filter"><span class="all-tenores"></span> Tenores</span>
                                    <span class="tag-filter"><span class="all-baritonos"></span> Barítonos</span>
                                    <span class="tag-filter"><span class="all-bajos"></span> Bajos</span>
                                </div>
                                <div class="tag-filter-content block ">
                                    <div class="project-boxes jsGridView members-list"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-instruments"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-sopranos"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-contraltos"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-tenores"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-baritonos"></div>
                                </div>
                                <div class="tag-filter-content">
                                    <div class="project-boxes jsGridView members-bajos"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>











            </div>
            <div class="messages-section">
                <button class="messages-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" /></svg>
                </button>
                <div class="projects-section-header">
                    <p>Directiva</p>
                </div>
                <div class="messages">
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                    <div class="message-box">
                        <img src="https://musicaenfamilia2023.com/registro/Assets/img/log.png"
                            alt="profile image">
                        <div class="message-content">
                            <div class="message-header">
                                <div class="name">Director</div>
                            </div>
                            <p class="message-line">
                                Efrén Saavedra
                            </p>
                            <p class="message-line time">
                                Número telefónico
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const BASE_URL = "<?php echo BASE_URL; ?>"
    </script>
    <script src="<?php echo BASE_URL;?>Assets/js/admin.js"></script>
</body>

</html>



