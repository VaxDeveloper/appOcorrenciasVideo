<?php include('../../config/session_start.php'); ?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>deshboard</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="../view.php"><i class="fas fa-table"></i><span>Ocorrências</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../relatorios/relatorioVideo.html"><i class="fas fa-tachometer-alt"></i><span>Vídeo</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../relatorios/relatorioFinanceiro.php"><i class="fas fa-tachometer-alt"></i><span>Financeiro</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../relatorios/relatorioOp.php"><i class="fas fa-tachometer-alt"></i><span>Operacional</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light border-0 form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img id="id-logo" src="../../assets/img/logo/logo.png" alt="saoMiguel" width="140"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard Relatório Financeiro</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="../../config/logout.php"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Fazer Logout</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Pag. Acumulado (julho)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>&nbsp;R$ 245.012,00&nbsp;</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>VT. Acumulado (julho)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>&nbsp;R$ 348.012,00&nbsp;</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Ranking SM x VM (julho)</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>70%</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="visually-hidden">70%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Total receita</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>&nbsp;R$ 593.024,00&nbsp;</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Comparação pagantes - SM &amp; VM</h4>
                                    <div><canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;SM&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;57459840 &quot;,&quot;51411360 &quot;,&quot;52844160 &quot;,&quot; 49997760 &quot;,&quot;51360960 &quot;,&quot;46716960 &quot;]},{&quot;label&quot;:&quot;VM&quot;,&quot;backgroundColor&quot;:&quot;rgb(255,134,134)&quot;,&quot;borderColor&quot;:&quot;rgb(255,134,134)&quot;,&quot;data&quot;:[&quot;63958080 &quot;,&quot;60069600 &quot;,&quot;63729600 &quot;,&quot;59165760 &quot;,&quot;61107360 &quot;,&quot;57798240 &quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;fontColor&quot;:&quot;#474747&quot;},&quot;reverse&quot;:false,&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;bold&quot;,&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgba(147,144,144,0.29)&quot;,&quot;zeroLineColor&quot;:&quot;rgba(147,144,144,0.29)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#666&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgba(147,144,144,0.29)&quot;,&quot;zeroLineColor&quot;:&quot;rgba(147,144,144,0.29)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#666&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pag. Acumulado - SM x VM (Julho)</h4>
                                    <div><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Pagantes SM&quot;,&quot;Pagantes VM&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;rgb(78,115,223)&quot;,&quot;rgb(255,134,134)&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;24501200 &quot;,&quot;29557440 &quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;position&quot;:&quot;right&quot;},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;bold&quot;,&quot;display&quot;:false,&quot;text&quot;:&quot;&quot;}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Acompanhamento diário - Pagantes SM x VM (Julho)</h4>
                                    <div><canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;01/07/2024&quot;,&quot;02/07/2024&quot;,&quot;03/07/2024&quot;,&quot;04/07/2024&quot;,&quot;05/07/2024&quot;,&quot;06/07/2022&quot;,&quot;07/07/2024&quot;,&quot;08/07/2024&quot;,&quot;09/07/2024&quot;,&quot;10/07/2024&quot;,&quot;11/07/2004&quot;,&quot;12/07/2024&quot;,&quot;13/07/2024&quot;,&quot;14/07/2022&quot;,&quot;15/07/2024&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;SM&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot; 2040480 &quot;,&quot; 517920 &quot;,&quot; 2393760 &quot;,&quot; 2055840 &quot;,&quot;2215200&quot;,&quot; 1328640 &quot;,&quot; 461280 &quot;,&quot; 2248320 &quot;,&quot; 2008320 &quot;,&quot; 1937360 &quot;,&quot;1853279&quot;,&quot; 1787040 &quot;,&quot; 1278240 &quot;,&quot;518400 &quot;,&quot;1857120\t&quot;]},{&quot;label&quot;:&quot;VM&quot;,&quot;backgroundColor&quot;:&quot;rgb(255,134,134)&quot;,&quot;borderColor&quot;:&quot;rgb(255,134,134)&quot;,&quot;data&quot;:[&quot;2437440 &quot;,&quot;606720 &quot;,&quot;2725440 &quot;,&quot;2366880 &quot;,&quot;2517600 &quot;,&quot;1682880 &quot;,&quot;642240 &quot;,&quot;2673120 &quot;,&quot;2419680 &quot;,&quot;2309280 &quot;,&quot;2216640 &quot;,&quot;2312160 &quot;,&quot;1604160 &quot;,&quot;647520 &quot;,&quot;2395680 &quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;bold&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;ticks&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}],&quot;yAxes&quot;:[{&quot;ticks&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Acompanhamento São Miguel</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Pagantes</th>
                                            <th>Vale Transporte</th>
                                            <th>Total Receita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01/07/24</td>
                                            <td>20.404,80&nbsp;</td>
                                            <td>20.223,00&nbsp;</td>
                                            <td>40.627,80&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>02/07/24</td>
                                            <td>5.179,20&nbsp;</td>
                                            <td>4.932,00&nbsp;</td>
                                            <td>10.111,20&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>03/07/24</td>
                                            <td>23.937,60&nbsp;</td>
                                            <td>31.961,25&nbsp;</td>
                                            <td>55.898,85&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>04/07/24</td>
                                            <td>20.558,40&nbsp;</td>
                                            <td>31.311,00&nbsp;</td>
                                            <td>51.869,40&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>05/07/24</td>
                                            <td>22.152,00&nbsp;</td>
                                            <td>31.547,25&nbsp;</td>
                                            <td>53.699,25&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>06/07/24</td>
                                            <td>13.286,40&nbsp;</td>
                                            <td>13.749,75&nbsp;</td>
                                            <td>27.036,15&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>07/07/24</td>
                                            <td>4.612,80&nbsp;</td>
                                            <td>3.411,00&nbsp;</td>
                                            <td>8.023,80&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>08/07/24</td>
                                            <td>22.483,20&nbsp;</td>
                                            <td>33.108,75&nbsp;</td>
                                            <td>55.591,95&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>09/07/24</td>
                                            <td>20.083,20&nbsp;</td>
                                            <td>33.687,00&nbsp;</td>
                                            <td>53.770,20&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>10/07/24</td>
                                            <td>19.373,60&nbsp;</td>
                                            <td>33.322,50&nbsp;</td>
                                            <td>52.696,10&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>11/07/24</td>
                                            <td>18.532,80&nbsp;</td>
                                            <td>32.152,50&nbsp;</td>
                                            <td>50.685,30&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>12/07/24</td>
                                            <td>17.870,40&nbsp;</td>
                                            <td>30.766,50&nbsp;</td>
                                            <td>48.636,90&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>13/07/24</td>
                                            <td>12.782,40&nbsp;</td>
                                            <td>14.463,00&nbsp;</td>
                                            <td>27.245,40&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>14/07/24</td>
                                            <td>5.184,00&nbsp;</td>
                                            <td>3.699,00&nbsp;</td>
                                            <td>8.883,00&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>15/07/24</td>
                                            <td>18.571,20</td>
                                            <td>29.677,50</td>
                                            <td>48.248,70</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col">
                            <h4>Acompanhamento Viametro</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Pagantes</th>
                                            <th>Vale Transporte</th>
                                            <th>Total Receita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01/07/24</td>
                                            <td>24.374,40&nbsp;</td>
                                            <td>26.226,00&nbsp;</td>
                                            <td>50.600,40&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>02/07/24</td>
                                            <td>6.067,20&nbsp;</td>
                                            <td>6.603,75&nbsp;</td>
                                            <td>12.670,95&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>03/07/24</td>
                                            <td>27.254,40&nbsp;</td>
                                            <td>40.853,25&nbsp;</td>
                                            <td>68.107,65&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>04/07/24</td>
                                            <td>23.668,80&nbsp;</td>
                                            <td>42.153,75&nbsp;</td>
                                            <td>65.822,55&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>05/07/24</td>
                                            <td>25.176,00&nbsp;</td>
                                            <td>41.202,00&nbsp;</td>
                                            <td>66.378,00&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>06/07/24</td>
                                            <td>16.828,80&nbsp;</td>
                                            <td>18.839,25&nbsp;</td>
                                            <td>35.668,05&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>07/07/24</td>
                                            <td>6.422,40&nbsp;</td>
                                            <td>5.782,50&nbsp;</td>
                                            <td>12.204,90&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>08/07/24</td>
                                            <td>26.731,20&nbsp;</td>
                                            <td>45.407,25&nbsp;</td>
                                            <td>72.138,45&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>09/07/24</td>
                                            <td>24.196,80&nbsp;</td>
                                            <td>46.860,75&nbsp;</td>
                                            <td>71.057,55&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>10/07/24</td>
                                            <td>23.092,80&nbsp;</td>
                                            <td>46.199,25&nbsp;</td>
                                            <td>69.292,05&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>11/07/24</td>
                                            <td>22.166,40&nbsp;</td>
                                            <td>47.169,00&nbsp;</td>
                                            <td>69.335,40&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>12/07/24</td>
                                            <td>23.121,60&nbsp;</td>
                                            <td>45.024,75&nbsp;</td>
                                            <td>68.146,35&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>13/07/24</td>
                                            <td>16.041,60&nbsp;</td>
                                            <td>20.731,50&nbsp;</td>
                                            <td>36.773,10&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>14/07/24</td>
                                            <td>6.475,20&nbsp;</td>
                                            <td>5.526,00&nbsp;</td>
                                            <td>12.001,20&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>15/07/24</td>
                                            <td>23.956,80&nbsp;</td>
                                            <td>46.262,25&nbsp;</td>
                                            <td>70.219,05&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>© Criado por Victor Xavier 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/chart.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="../../assets/js/relatorio.js"></script>
    <script src="../../assets/js/script.js"></script>
    <script src="../../assets/js/theme.js"></script>
</body>

</html>