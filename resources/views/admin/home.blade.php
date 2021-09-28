@extends('admin.layouts.app')


@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Navbar overlap layout
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Create new report
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">75%</div>
                            <div class="d-flex mb-2">
                                <div>Conversion rate</div>
                                <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                        </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Revenue</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">$4,300</div>
                                <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                        </span>
                                </div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm" style="min-height: 40px;"><div id="apexchartsiwf65uce" class="apexcharts-canvas apexchartsiwf65uce apexcharts-theme-light" style="width: 304px; height: 40px;"><svg id="SvgjsSvg1801" width="304" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1803" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1802"><clipPath id="gridRectMaskiwf65uce"><rect id="SvgjsRect1839" width="310" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskiwf65uce"><rect id="SvgjsRect1840" width="308" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1808" x1="167.22413793103448" y1="0" x2="167.22413793103448" y2="40" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="167.22413793103448" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1847" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1848" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1856" class="apexcharts-grid"><g id="SvgjsG1857" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1859" x1="0" y1="0" x2="304" y2="0" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1860" x1="0" y1="8" x2="304" y2="8" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1861" x1="0" y1="16" x2="304" y2="16" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1862" x1="0" y1="24" x2="304" y2="24" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1863" x1="0" y1="32" x2="304" y2="32" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1864" x1="0" y1="40" x2="304" y2="40" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1858" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1866" x1="0" y1="40" x2="304" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1865" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1841" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1842" class="apexcharts-series" seriesName="Profits" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1845" d="M 0 40L 0 25.2C 3.668965517241379 25.2 6.813793103448276 26 10.482758620689655 26C 14.151724137931033 26 17.29655172413793 22.4 20.96551724137931 22.4C 24.63448275862069 22.4 27.779310344827586 28.8 31.448275862068964 28.8C 35.11724137931034 28.8 38.26206896551724 25.6 41.93103448275862 25.6C 45.6 25.6 48.744827586206895 30.4 52.41379310344828 30.4C 56.08275862068965 30.4 59.227586206896554 14 62.89655172413793 14C 66.56551724137931 14 69.71034482758621 27.6 73.37931034482759 27.6C 77.04827586206896 27.6 80.19310344827586 25.2 83.86206896551724 25.2C 87.53103448275861 25.2 90.67586206896551 24.4 94.34482758620689 24.4C 98.01379310344828 24.4 101.15862068965517 15.2 104.82758620689656 15.2C 108.49655172413793 15.2 111.64137931034483 19.6 115.3103448275862 19.6C 118.97931034482758 19.6 122.12413793103448 26 125.79310344827586 26C 129.46206896551723 26 132.60689655172413 23.6 136.27586206896552 23.6C 139.9448275862069 23.6 143.08965517241379 26 146.75862068965517 26C 150.42758620689656 26 153.57241379310344 29.2 157.24137931034483 29.2C 160.91034482758621 29.2 164.0551724137931 2.799999999999997 167.72413793103448 2.799999999999997C 171.39310344827587 2.799999999999997 174.53793103448274 18.8 178.20689655172413 18.8C 181.87586206896552 18.8 185.0206896551724 15.600000000000001 188.68965517241378 15.600000000000001C 192.35862068965517 15.600000000000001 195.50344827586207 29.2 199.17241379310346 29.2C 202.84137931034485 29.2 205.98620689655172 18.4 209.6551724137931 18.4C 213.3241379310345 18.4 216.46896551724137 22.8 220.13793103448276 22.8C 223.80689655172415 22.8 226.95172413793102 32.4 230.6206896551724 32.4C 234.2896551724138 32.4 237.43448275862067 21.6 241.10344827586206 21.6C 244.77241379310345 21.6 247.91724137931033 24.4 251.58620689655172 24.4C 255.2551724137931 24.4 258.40000000000003 15.2 262.0689655172414 15.2C 265.73793103448276 15.2 268.8827586206897 19.6 272.55172413793105 19.6C 276.2206896551724 19.6 279.36551724137934 26 283.0344827586207 26C 286.70344827586206 26 289.848275862069 23.6 293.51724137931035 23.6C 297.1862068965517 23.6 300.33103448275864 13.2 304 13.2C 304 13.2 304 13.2 304 40M 304 13.2z" fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskiwf65uce)" pathTo="M 0 40L 0 25.2C 3.668965517241379 25.2 6.813793103448276 26 10.482758620689655 26C 14.151724137931033 26 17.29655172413793 22.4 20.96551724137931 22.4C 24.63448275862069 22.4 27.779310344827586 28.8 31.448275862068964 28.8C 35.11724137931034 28.8 38.26206896551724 25.6 41.93103448275862 25.6C 45.6 25.6 48.744827586206895 30.4 52.41379310344828 30.4C 56.08275862068965 30.4 59.227586206896554 14 62.89655172413793 14C 66.56551724137931 14 69.71034482758621 27.6 73.37931034482759 27.6C 77.04827586206896 27.6 80.19310344827586 25.2 83.86206896551724 25.2C 87.53103448275861 25.2 90.67586206896551 24.4 94.34482758620689 24.4C 98.01379310344828 24.4 101.15862068965517 15.2 104.82758620689656 15.2C 108.49655172413793 15.2 111.64137931034483 19.6 115.3103448275862 19.6C 118.97931034482758 19.6 122.12413793103448 26 125.79310344827586 26C 129.46206896551723 26 132.60689655172413 23.6 136.27586206896552 23.6C 139.9448275862069 23.6 143.08965517241379 26 146.75862068965517 26C 150.42758620689656 26 153.57241379310344 29.2 157.24137931034483 29.2C 160.91034482758621 29.2 164.0551724137931 2.799999999999997 167.72413793103448 2.799999999999997C 171.39310344827587 2.799999999999997 174.53793103448274 18.8 178.20689655172413 18.8C 181.87586206896552 18.8 185.0206896551724 15.600000000000001 188.68965517241378 15.600000000000001C 192.35862068965517 15.600000000000001 195.50344827586207 29.2 199.17241379310346 29.2C 202.84137931034485 29.2 205.98620689655172 18.4 209.6551724137931 18.4C 213.3241379310345 18.4 216.46896551724137 22.8 220.13793103448276 22.8C 223.80689655172415 22.8 226.95172413793102 32.4 230.6206896551724 32.4C 234.2896551724138 32.4 237.43448275862067 21.6 241.10344827586206 21.6C 244.77241379310345 21.6 247.91724137931033 24.4 251.58620689655172 24.4C 255.2551724137931 24.4 258.40000000000003 15.2 262.0689655172414 15.2C 265.73793103448276 15.2 268.8827586206897 19.6 272.55172413793105 19.6C 276.2206896551724 19.6 279.36551724137934 26 283.0344827586207 26C 286.70344827586206 26 289.848275862069 23.6 293.51724137931035 23.6C 297.1862068965517 23.6 300.33103448275864 13.2 304 13.2C 304 13.2 304 13.2 304 40M 304 13.2z" pathFrom="M -1 40L -1 40L 10.482758620689655 40L 20.96551724137931 40L 31.448275862068964 40L 41.93103448275862 40L 52.41379310344828 40L 62.89655172413793 40L 73.37931034482759 40L 83.86206896551724 40L 94.34482758620689 40L 104.82758620689656 40L 115.3103448275862 40L 125.79310344827586 40L 136.27586206896552 40L 146.75862068965517 40L 157.24137931034483 40L 167.72413793103448 40L 178.20689655172413 40L 188.68965517241378 40L 199.17241379310346 40L 209.6551724137931 40L 220.13793103448276 40L 230.6206896551724 40L 241.10344827586206 40L 251.58620689655172 40L 262.0689655172414 40L 272.55172413793105 40L 283.0344827586207 40L 293.51724137931035 40L 304 40"></path><path id="SvgjsPath1846" d="M 0 25.2C 3.668965517241379 25.2 6.813793103448276 26 10.482758620689655 26C 14.151724137931033 26 17.29655172413793 22.4 20.96551724137931 22.4C 24.63448275862069 22.4 27.779310344827586 28.8 31.448275862068964 28.8C 35.11724137931034 28.8 38.26206896551724 25.6 41.93103448275862 25.6C 45.6 25.6 48.744827586206895 30.4 52.41379310344828 30.4C 56.08275862068965 30.4 59.227586206896554 14 62.89655172413793 14C 66.56551724137931 14 69.71034482758621 27.6 73.37931034482759 27.6C 77.04827586206896 27.6 80.19310344827586 25.2 83.86206896551724 25.2C 87.53103448275861 25.2 90.67586206896551 24.4 94.34482758620689 24.4C 98.01379310344828 24.4 101.15862068965517 15.2 104.82758620689656 15.2C 108.49655172413793 15.2 111.64137931034483 19.6 115.3103448275862 19.6C 118.97931034482758 19.6 122.12413793103448 26 125.79310344827586 26C 129.46206896551723 26 132.60689655172413 23.6 136.27586206896552 23.6C 139.9448275862069 23.6 143.08965517241379 26 146.75862068965517 26C 150.42758620689656 26 153.57241379310344 29.2 157.24137931034483 29.2C 160.91034482758621 29.2 164.0551724137931 2.799999999999997 167.72413793103448 2.799999999999997C 171.39310344827587 2.799999999999997 174.53793103448274 18.8 178.20689655172413 18.8C 181.87586206896552 18.8 185.0206896551724 15.600000000000001 188.68965517241378 15.600000000000001C 192.35862068965517 15.600000000000001 195.50344827586207 29.2 199.17241379310346 29.2C 202.84137931034485 29.2 205.98620689655172 18.4 209.6551724137931 18.4C 213.3241379310345 18.4 216.46896551724137 22.8 220.13793103448276 22.8C 223.80689655172415 22.8 226.95172413793102 32.4 230.6206896551724 32.4C 234.2896551724138 32.4 237.43448275862067 21.6 241.10344827586206 21.6C 244.77241379310345 21.6 247.91724137931033 24.4 251.58620689655172 24.4C 255.2551724137931 24.4 258.40000000000003 15.2 262.0689655172414 15.2C 265.73793103448276 15.2 268.8827586206897 19.6 272.55172413793105 19.6C 276.2206896551724 19.6 279.36551724137934 26 283.0344827586207 26C 286.70344827586206 26 289.848275862069 23.6 293.51724137931035 23.6C 297.1862068965517 23.6 300.33103448275864 13.2 304 13.2" fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskiwf65uce)" pathTo="M 0 25.2C 3.668965517241379 25.2 6.813793103448276 26 10.482758620689655 26C 14.151724137931033 26 17.29655172413793 22.4 20.96551724137931 22.4C 24.63448275862069 22.4 27.779310344827586 28.8 31.448275862068964 28.8C 35.11724137931034 28.8 38.26206896551724 25.6 41.93103448275862 25.6C 45.6 25.6 48.744827586206895 30.4 52.41379310344828 30.4C 56.08275862068965 30.4 59.227586206896554 14 62.89655172413793 14C 66.56551724137931 14 69.71034482758621 27.6 73.37931034482759 27.6C 77.04827586206896 27.6 80.19310344827586 25.2 83.86206896551724 25.2C 87.53103448275861 25.2 90.67586206896551 24.4 94.34482758620689 24.4C 98.01379310344828 24.4 101.15862068965517 15.2 104.82758620689656 15.2C 108.49655172413793 15.2 111.64137931034483 19.6 115.3103448275862 19.6C 118.97931034482758 19.6 122.12413793103448 26 125.79310344827586 26C 129.46206896551723 26 132.60689655172413 23.6 136.27586206896552 23.6C 139.9448275862069 23.6 143.08965517241379 26 146.75862068965517 26C 150.42758620689656 26 153.57241379310344 29.2 157.24137931034483 29.2C 160.91034482758621 29.2 164.0551724137931 2.799999999999997 167.72413793103448 2.799999999999997C 171.39310344827587 2.799999999999997 174.53793103448274 18.8 178.20689655172413 18.8C 181.87586206896552 18.8 185.0206896551724 15.600000000000001 188.68965517241378 15.600000000000001C 192.35862068965517 15.600000000000001 195.50344827586207 29.2 199.17241379310346 29.2C 202.84137931034485 29.2 205.98620689655172 18.4 209.6551724137931 18.4C 213.3241379310345 18.4 216.46896551724137 22.8 220.13793103448276 22.8C 223.80689655172415 22.8 226.95172413793102 32.4 230.6206896551724 32.4C 234.2896551724138 32.4 237.43448275862067 21.6 241.10344827586206 21.6C 244.77241379310345 21.6 247.91724137931033 24.4 251.58620689655172 24.4C 255.2551724137931 24.4 258.40000000000003 15.2 262.0689655172414 15.2C 265.73793103448276 15.2 268.8827586206897 19.6 272.55172413793105 19.6C 276.2206896551724 19.6 279.36551724137934 26 283.0344827586207 26C 286.70344827586206 26 289.848275862069 23.6 293.51724137931035 23.6C 297.1862068965517 23.6 300.33103448275864 13.2 304 13.2" pathFrom="M -1 40L -1 40L 10.482758620689655 40L 20.96551724137931 40L 31.448275862068964 40L 41.93103448275862 40L 52.41379310344828 40L 62.89655172413793 40L 73.37931034482759 40L 83.86206896551724 40L 94.34482758620689 40L 104.82758620689656 40L 115.3103448275862 40L 125.79310344827586 40L 136.27586206896552 40L 146.75862068965517 40L 157.24137931034483 40L 167.72413793103448 40L 178.20689655172413 40L 188.68965517241378 40L 199.17241379310346 40L 209.6551724137931 40L 220.13793103448276 40L 230.6206896551724 40L 241.10344827586206 40L 251.58620689655172 40L 262.0689655172414 40L 272.55172413793105 40L 283.0344827586207 40L 293.51724137931035 40L 304 40"></path><g id="SvgjsG1843" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1872" r="0" cx="167.72413793103448" cy="2.799999999999997" class="apexcharts-marker w053x0efbh no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1844" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1867" x1="0" y1="0" x2="304" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1868" x1="0" y1="0" x2="304" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1869" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1870" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1871" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1807" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1855" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1804" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 49.6929px; top: 5.8px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">07 Jul</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Profits: </span><span class="apexcharts-tooltip-text-value">93</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 305px; height: 137px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <div class="d-flex align-items-center">
                                <div class="subheader">New clients</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">6,782</div>
                                <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                          0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </span>
                                </div>
                            </div>
                            <div id="chart-new-clients" class="chart-sm" style="min-height: 40px;"><div id="apexchartsu7heq3s1" class="apexcharts-canvas apexchartsu7heq3s1 apexcharts-theme-light" style="width: 272px; height: 40px;"><svg id="SvgjsSvg1875" width="272" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1877" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1876"><clipPath id="gridRectMasku7heq3s1"><rect id="SvgjsRect1913" width="278" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasku7heq3s1"><rect id="SvgjsRect1914" width="276" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1882" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1924" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1925" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1932" class="apexcharts-grid"><g id="SvgjsG1933" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1935" x1="0" y1="0" x2="272" y2="0" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1936" x1="0" y1="8" x2="272" y2="8" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1937" x1="0" y1="16" x2="272" y2="16" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1938" x1="0" y1="24" x2="272" y2="24" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1939" x1="0" y1="32" x2="272" y2="32" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1940" x1="0" y1="40" x2="272" y2="40" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1934" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1942" x1="0" y1="40" x2="272" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1941" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1915" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1916" class="apexcharts-series" seriesName="May" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1919" d="M 0 25.2C 3.2827586206896546 25.2 6.096551724137931 26 9.379310344827585 26C 12.66206896551724 26 15.475862068965515 22.4 18.75862068965517 22.4C 22.041379310344826 22.4 24.855172413793102 28.8 28.137931034482758 28.8C 31.420689655172414 28.8 34.234482758620686 25.6 37.51724137931034 25.6C 40.8 25.6 43.61379310344827 30.4 46.89655172413793 30.4C 50.179310344827584 30.4 52.99310344827586 14 56.275862068965516 14C 59.55862068965517 14 62.37241379310344 27.6 65.6551724137931 27.6C 68.93793103448274 27.6 71.75172413793103 25.2 75.03448275862068 25.2C 78.31724137931033 25.2 81.13103448275862 24.4 84.41379310344827 24.4C 87.69655172413792 24.4 90.51034482758621 15.2 93.79310344827586 15.2C 97.0758620689655 15.2 99.8896551724138 19.6 103.17241379310344 19.6C 106.4551724137931 19.6 109.26896551724138 26 112.55172413793103 26C 115.83448275862068 26 118.64827586206896 23.6 121.9310344827586 23.6C 125.21379310344827 23.6 128.02758620689653 26 131.3103448275862 26C 134.59310344827585 26 137.40689655172412 29.2 140.68965517241378 29.2C 143.97241379310344 29.2 146.7862068965517 2.799999999999997 150.06896551724137 2.799999999999997C 153.35172413793103 2.799999999999997 156.1655172413793 18.8 159.44827586206895 18.8C 162.73103448275862 18.8 165.54482758620688 15.600000000000001 168.82758620689654 15.600000000000001C 172.1103448275862 15.600000000000001 174.92413793103447 29.2 178.20689655172413 29.2C 181.4896551724138 29.2 184.30344827586205 18.4 187.58620689655172 18.4C 190.86896551724138 18.4 193.68275862068964 22.8 196.9655172413793 22.8C 200.24827586206897 22.8 203.06206896551723 38.4 206.3448275862069 38.4C 209.62758620689655 38.4 212.44137931034481 21.6 215.72413793103448 21.6C 219.00689655172414 21.6 221.8206896551724 24.4 225.10344827586206 24.4C 228.3862068965517 24.4 231.2 15.2 234.48275862068962 15.2C 237.76551724137929 15.2 240.57931034482755 19.6 243.8620689655172 19.6C 247.14482758620687 19.6 249.95862068965513 26 253.2413793103448 26C 256.52413793103443 26 259.3379310344827 23.6 262.6206896551724 23.6C 265.90344827586205 23.6 268.71724137931034 13.2 272 13.2" fill="none" fill-opacity="1" stroke="rgba(32,107,196,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasku7heq3s1)" pathTo="M 0 25.2C 3.2827586206896546 25.2 6.096551724137931 26 9.379310344827585 26C 12.66206896551724 26 15.475862068965515 22.4 18.75862068965517 22.4C 22.041379310344826 22.4 24.855172413793102 28.8 28.137931034482758 28.8C 31.420689655172414 28.8 34.234482758620686 25.6 37.51724137931034 25.6C 40.8 25.6 43.61379310344827 30.4 46.89655172413793 30.4C 50.179310344827584 30.4 52.99310344827586 14 56.275862068965516 14C 59.55862068965517 14 62.37241379310344 27.6 65.6551724137931 27.6C 68.93793103448274 27.6 71.75172413793103 25.2 75.03448275862068 25.2C 78.31724137931033 25.2 81.13103448275862 24.4 84.41379310344827 24.4C 87.69655172413792 24.4 90.51034482758621 15.2 93.79310344827586 15.2C 97.0758620689655 15.2 99.8896551724138 19.6 103.17241379310344 19.6C 106.4551724137931 19.6 109.26896551724138 26 112.55172413793103 26C 115.83448275862068 26 118.64827586206896 23.6 121.9310344827586 23.6C 125.21379310344827 23.6 128.02758620689653 26 131.3103448275862 26C 134.59310344827585 26 137.40689655172412 29.2 140.68965517241378 29.2C 143.97241379310344 29.2 146.7862068965517 2.799999999999997 150.06896551724137 2.799999999999997C 153.35172413793103 2.799999999999997 156.1655172413793 18.8 159.44827586206895 18.8C 162.73103448275862 18.8 165.54482758620688 15.600000000000001 168.82758620689654 15.600000000000001C 172.1103448275862 15.600000000000001 174.92413793103447 29.2 178.20689655172413 29.2C 181.4896551724138 29.2 184.30344827586205 18.4 187.58620689655172 18.4C 190.86896551724138 18.4 193.68275862068964 22.8 196.9655172413793 22.8C 200.24827586206897 22.8 203.06206896551723 38.4 206.3448275862069 38.4C 209.62758620689655 38.4 212.44137931034481 21.6 215.72413793103448 21.6C 219.00689655172414 21.6 221.8206896551724 24.4 225.10344827586206 24.4C 228.3862068965517 24.4 231.2 15.2 234.48275862068962 15.2C 237.76551724137929 15.2 240.57931034482755 19.6 243.8620689655172 19.6C 247.14482758620687 19.6 249.95862068965513 26 253.2413793103448 26C 256.52413793103443 26 259.3379310344827 23.6 262.6206896551724 23.6C 265.90344827586205 23.6 268.71724137931034 13.2 272 13.2" pathFrom="M -1 40L -1 40L 9.379310344827585 40L 18.75862068965517 40L 28.137931034482758 40L 37.51724137931034 40L 46.89655172413793 40L 56.275862068965516 40L 65.6551724137931 40L 75.03448275862068 40L 84.41379310344827 40L 93.79310344827586 40L 103.17241379310344 40L 112.55172413793103 40L 121.9310344827586 40L 131.3103448275862 40L 140.68965517241378 40L 150.06896551724137 40L 159.44827586206895 40L 168.82758620689654 40L 178.20689655172413 40L 187.58620689655172 40L 196.9655172413793 40L 206.3448275862069 40L 215.72413793103448 40L 225.10344827586206 40L 234.48275862068962 40L 243.8620689655172 40L 253.2413793103448 40L 262.6206896551724 40L 272 40"></path><g id="SvgjsG1917" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1948" r="0" cx="0" cy="0" class="apexcharts-marker wb2lxz7x2 no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1920" class="apexcharts-series" seriesName="April" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1923" d="M 0 2.799999999999997C 3.2827586206896546 2.799999999999997 6.096551724137931 18.4 9.379310344827585 18.4C 12.66206896551724 18.4 15.475862068965515 19.6 18.75862068965517 19.6C 22.041379310344826 19.6 24.855172413793102 30.4 28.137931034482758 30.4C 31.420689655172414 30.4 34.234482758620686 26 37.51724137931034 26C 40.8 26 43.61379310344827 26 46.89655172413793 26C 50.179310344827584 26 52.99310344827586 27.6 56.275862068965516 27.6C 59.55862068965517 27.6 62.37241379310344 13.2 65.6551724137931 13.2C 68.93793103448274 13.2 71.75172413793103 32.4 75.03448275862068 32.4C 78.31724137931033 32.4 81.13103448275862 22.8 84.41379310344827 22.8C 87.69655172413792 22.8 90.51034482758621 28.8 93.79310344827586 28.8C 97.0758620689655 28.8 99.8896551724138 25.6 103.17241379310344 25.6C 106.4551724137931 25.6 109.26896551724138 15.2 112.55172413793103 15.2C 115.83448275862068 15.2 118.64827586206896 15.600000000000001 121.9310344827586 15.600000000000001C 125.21379310344827 15.600000000000001 128.02758620689653 29.2 131.3103448275862 29.2C 134.59310344827585 29.2 137.40689655172412 24.4 140.68965517241378 24.4C 143.97241379310344 24.4 146.7862068965517 26 150.06896551724137 26C 153.35172413793103 26 156.1655172413793 23.6 159.44827586206895 23.6C 162.73103448275862 23.6 165.54482758620688 29.2 168.82758620689654 29.2C 172.1103448275862 29.2 174.92413793103447 26 178.20689655172413 26C 181.4896551724138 26 184.30344827586205 19.6 187.58620689655172 19.6C 190.86896551724138 19.6 193.68275862068964 21.6 196.9655172413793 21.6C 200.24827586206897 21.6 203.06206896551723 15.2 206.3448275862069 15.2C 209.62758620689655 15.2 212.44137931034481 25.2 215.72413793103448 25.2C 219.00689655172414 25.2 221.8206896551724 22.4 225.10344827586206 22.4C 228.3862068965517 22.4 231.2 18.8 234.48275862068962 18.8C 237.76551724137929 18.8 240.57931034482755 23.6 243.8620689655172 23.6C 247.14482758620687 23.6 249.95862068965513 14 253.2413793103448 14C 256.52413793103443 14 259.3379310344827 24.4 262.6206896551724 24.4C 265.90344827586205 24.4 268.71724137931034 25.2 272 25.2" fill="none" fill-opacity="1" stroke="rgba(168,174,183,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="3" class="apexcharts-line" index="1" clip-path="url(#gridRectMasku7heq3s1)" pathTo="M 0 2.799999999999997C 3.2827586206896546 2.799999999999997 6.096551724137931 18.4 9.379310344827585 18.4C 12.66206896551724 18.4 15.475862068965515 19.6 18.75862068965517 19.6C 22.041379310344826 19.6 24.855172413793102 30.4 28.137931034482758 30.4C 31.420689655172414 30.4 34.234482758620686 26 37.51724137931034 26C 40.8 26 43.61379310344827 26 46.89655172413793 26C 50.179310344827584 26 52.99310344827586 27.6 56.275862068965516 27.6C 59.55862068965517 27.6 62.37241379310344 13.2 65.6551724137931 13.2C 68.93793103448274 13.2 71.75172413793103 32.4 75.03448275862068 32.4C 78.31724137931033 32.4 81.13103448275862 22.8 84.41379310344827 22.8C 87.69655172413792 22.8 90.51034482758621 28.8 93.79310344827586 28.8C 97.0758620689655 28.8 99.8896551724138 25.6 103.17241379310344 25.6C 106.4551724137931 25.6 109.26896551724138 15.2 112.55172413793103 15.2C 115.83448275862068 15.2 118.64827586206896 15.600000000000001 121.9310344827586 15.600000000000001C 125.21379310344827 15.600000000000001 128.02758620689653 29.2 131.3103448275862 29.2C 134.59310344827585 29.2 137.40689655172412 24.4 140.68965517241378 24.4C 143.97241379310344 24.4 146.7862068965517 26 150.06896551724137 26C 153.35172413793103 26 156.1655172413793 23.6 159.44827586206895 23.6C 162.73103448275862 23.6 165.54482758620688 29.2 168.82758620689654 29.2C 172.1103448275862 29.2 174.92413793103447 26 178.20689655172413 26C 181.4896551724138 26 184.30344827586205 19.6 187.58620689655172 19.6C 190.86896551724138 19.6 193.68275862068964 21.6 196.9655172413793 21.6C 200.24827586206897 21.6 203.06206896551723 15.2 206.3448275862069 15.2C 209.62758620689655 15.2 212.44137931034481 25.2 215.72413793103448 25.2C 219.00689655172414 25.2 221.8206896551724 22.4 225.10344827586206 22.4C 228.3862068965517 22.4 231.2 18.8 234.48275862068962 18.8C 237.76551724137929 18.8 240.57931034482755 23.6 243.8620689655172 23.6C 247.14482758620687 23.6 249.95862068965513 14 253.2413793103448 14C 256.52413793103443 14 259.3379310344827 24.4 262.6206896551724 24.4C 265.90344827586205 24.4 268.71724137931034 25.2 272 25.2" pathFrom="M -1 40L -1 40L 9.379310344827585 40L 18.75862068965517 40L 28.137931034482758 40L 37.51724137931034 40L 46.89655172413793 40L 56.275862068965516 40L 65.6551724137931 40L 75.03448275862068 40L 84.41379310344827 40L 93.79310344827586 40L 103.17241379310344 40L 112.55172413793103 40L 121.9310344827586 40L 131.3103448275862 40L 140.68965517241378 40L 150.06896551724137 40L 159.44827586206895 40L 168.82758620689654 40L 178.20689655172413 40L 187.58620689655172 40L 196.9655172413793 40L 206.3448275862069 40L 215.72413793103448 40L 225.10344827586206 40L 234.48275862068962 40L 243.8620689655172 40L 253.2413793103448 40L 262.6206896551724 40L 272 40"></path><g id="SvgjsG1921" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1949" r="0" cx="0" cy="0" class="apexcharts-marker wk4tufu8d no-pointer-events" stroke="#ffffff" fill="#a8aeb7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1918" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1922" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1943" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1944" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1945" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1946" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1947" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1881" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1931" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1878" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(168, 174, 183);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 305px; height: 137px;"></div></div><div class="contract-trigger"></div></div></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Active users</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">2,986</div>
                                <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                        </span>
                                </div>
                            </div>
                            <div id="chart-active-users" class="chart-sm" style="min-height: 40px;"><div id="apexchartswlzmu16y" class="apexcharts-canvas apexchartswlzmu16y apexcharts-theme-light" style="width: 272px; height: 40px;"><svg id="SvgjsSvg1950" width="272" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1952" class="apexcharts-inner apexcharts-graphical" transform="translate(12.126436781609195, 0)"><defs id="SvgjsDefs1951"><linearGradient id="SvgjsLinearGradient1956" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1957" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1958" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1959" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskwlzmu16y"><rect id="SvgjsRect1991" width="276" height="40" x="-10.126436781609195" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwlzmu16y"><rect id="SvgjsRect1992" width="259.7471264367816" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1960" width="4.409433214427269" height="40" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1956)" class="apexcharts-xcrosshairs" y2="40" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2026" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2027" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2034" class="apexcharts-grid"><g id="SvgjsG2035" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2037" x1="-8.126436781609195" y1="0" x2="263.8735632183908" y2="0" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2038" x1="-8.126436781609195" y1="8" x2="263.8735632183908" y2="8" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2039" x1="-8.126436781609195" y1="16" x2="263.8735632183908" y2="16" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2040" x1="-8.126436781609195" y1="24" x2="263.8735632183908" y2="24" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2041" x1="-8.126436781609195" y1="32" x2="263.8735632183908" y2="32" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2042" x1="-8.126436781609195" y1="40" x2="263.8735632183908" y2="40" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG2036" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2044" x1="0" y1="40" x2="255.7471264367816" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2043" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1993" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1994" class="apexcharts-series" rel="1" seriesName="Profits" data:realIndex="0"><path id="SvgjsPath1996" d="M -2.2047166072136344 40L -2.2047166072136344 25.2Q -2.2047166072136344 25.2 -2.2047166072136344 25.2L 2.2047166072136344 25.2Q 2.2047166072136344 25.2 2.2047166072136344 25.2L 2.2047166072136344 25.2L 2.2047166072136344 40L 2.2047166072136344 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M -2.2047166072136344 40L -2.2047166072136344 25.2Q -2.2047166072136344 25.2 -2.2047166072136344 25.2L 2.2047166072136344 25.2Q 2.2047166072136344 25.2 2.2047166072136344 25.2L 2.2047166072136344 25.2L 2.2047166072136344 40L 2.2047166072136344 40z" pathFrom="M -2.2047166072136344 40L -2.2047166072136344 40L 2.2047166072136344 40L 2.2047166072136344 40L 2.2047166072136344 40L 2.2047166072136344 40L 2.2047166072136344 40L -2.2047166072136344 40" cy="25.2" cx="2.2047166072136344" j="0" val="37" barHeight="14.8" barWidth="4.409433214427269"></path><path id="SvgjsPath1997" d="M 6.614149821640903 40L 6.614149821640903 26Q 6.614149821640903 26 6.614149821640903 26L 11.023583036068171 26Q 11.023583036068171 26 11.023583036068171 26L 11.023583036068171 26L 11.023583036068171 40L 11.023583036068171 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 6.614149821640903 40L 6.614149821640903 26Q 6.614149821640903 26 6.614149821640903 26L 11.023583036068171 26Q 11.023583036068171 26 11.023583036068171 26L 11.023583036068171 26L 11.023583036068171 40L 11.023583036068171 40z" pathFrom="M 6.614149821640903 40L 6.614149821640903 40L 11.023583036068171 40L 11.023583036068171 40L 11.023583036068171 40L 11.023583036068171 40L 11.023583036068171 40L 6.614149821640903 40" cy="26" cx="11.023583036068171" j="1" val="35" barHeight="14" barWidth="4.409433214427269"></path><path id="SvgjsPath1998" d="M 15.433016250495442 40L 15.433016250495442 22.4Q 15.433016250495442 22.4 15.433016250495442 22.4L 19.84244946492271 22.4Q 19.84244946492271 22.4 19.84244946492271 22.4L 19.84244946492271 22.4L 19.84244946492271 40L 19.84244946492271 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 15.433016250495442 40L 15.433016250495442 22.4Q 15.433016250495442 22.4 15.433016250495442 22.4L 19.84244946492271 22.4Q 19.84244946492271 22.4 19.84244946492271 22.4L 19.84244946492271 22.4L 19.84244946492271 40L 19.84244946492271 40z" pathFrom="M 15.433016250495442 40L 15.433016250495442 40L 19.84244946492271 40L 19.84244946492271 40L 19.84244946492271 40L 19.84244946492271 40L 19.84244946492271 40L 15.433016250495442 40" cy="22.4" cx="19.84244946492271" j="2" val="44" barHeight="17.6" barWidth="4.409433214427269"></path><path id="SvgjsPath1999" d="M 24.25188267934998 40L 24.25188267934998 28.8Q 24.25188267934998 28.8 24.25188267934998 28.8L 28.66131589377725 28.8Q 28.66131589377725 28.8 28.66131589377725 28.8L 28.66131589377725 28.8L 28.66131589377725 40L 28.66131589377725 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 24.25188267934998 40L 24.25188267934998 28.8Q 24.25188267934998 28.8 24.25188267934998 28.8L 28.66131589377725 28.8Q 28.66131589377725 28.8 28.66131589377725 28.8L 28.66131589377725 28.8L 28.66131589377725 40L 28.66131589377725 40z" pathFrom="M 24.25188267934998 40L 24.25188267934998 40L 28.66131589377725 40L 28.66131589377725 40L 28.66131589377725 40L 28.66131589377725 40L 28.66131589377725 40L 24.25188267934998 40" cy="28.8" cx="28.66131589377725" j="3" val="28" barHeight="11.2" barWidth="4.409433214427269"></path><path id="SvgjsPath2000" d="M 33.07074910820452 40L 33.07074910820452 25.6Q 33.07074910820452 25.6 33.07074910820452 25.6L 37.480182322631784 25.6Q 37.480182322631784 25.6 37.480182322631784 25.6L 37.480182322631784 25.6L 37.480182322631784 40L 37.480182322631784 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 33.07074910820452 40L 33.07074910820452 25.6Q 33.07074910820452 25.6 33.07074910820452 25.6L 37.480182322631784 25.6Q 37.480182322631784 25.6 37.480182322631784 25.6L 37.480182322631784 25.6L 37.480182322631784 40L 37.480182322631784 40z" pathFrom="M 33.07074910820452 40L 33.07074910820452 40L 37.480182322631784 40L 37.480182322631784 40L 37.480182322631784 40L 37.480182322631784 40L 37.480182322631784 40L 33.07074910820452 40" cy="25.6" cx="37.480182322631784" j="4" val="36" barHeight="14.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2001" d="M 41.88961553705906 40L 41.88961553705906 30.4Q 41.88961553705906 30.4 41.88961553705906 30.4L 46.299048751486325 30.4Q 46.299048751486325 30.4 46.299048751486325 30.4L 46.299048751486325 30.4L 46.299048751486325 40L 46.299048751486325 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 41.88961553705906 40L 41.88961553705906 30.4Q 41.88961553705906 30.4 41.88961553705906 30.4L 46.299048751486325 30.4Q 46.299048751486325 30.4 46.299048751486325 30.4L 46.299048751486325 30.4L 46.299048751486325 40L 46.299048751486325 40z" pathFrom="M 41.88961553705906 40L 41.88961553705906 40L 46.299048751486325 40L 46.299048751486325 40L 46.299048751486325 40L 46.299048751486325 40L 46.299048751486325 40L 41.88961553705906 40" cy="30.4" cx="46.299048751486325" j="5" val="24" barHeight="9.6" barWidth="4.409433214427269"></path><path id="SvgjsPath2002" d="M 50.70848196591359 40L 50.70848196591359 14Q 50.70848196591359 14 50.70848196591359 14L 55.11791518034086 14Q 55.11791518034086 14 55.11791518034086 14L 55.11791518034086 14L 55.11791518034086 40L 55.11791518034086 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 50.70848196591359 40L 50.70848196591359 14Q 50.70848196591359 14 50.70848196591359 14L 55.11791518034086 14Q 55.11791518034086 14 55.11791518034086 14L 55.11791518034086 14L 55.11791518034086 40L 55.11791518034086 40z" pathFrom="M 50.70848196591359 40L 50.70848196591359 40L 55.11791518034086 40L 55.11791518034086 40L 55.11791518034086 40L 55.11791518034086 40L 55.11791518034086 40L 50.70848196591359 40" cy="14" cx="55.11791518034086" j="6" val="65" barHeight="26" barWidth="4.409433214427269"></path><path id="SvgjsPath2003" d="M 59.52734839476813 40L 59.52734839476813 27.6Q 59.52734839476813 27.6 59.52734839476813 27.6L 63.9367816091954 27.6Q 63.9367816091954 27.6 63.9367816091954 27.6L 63.9367816091954 27.6L 63.9367816091954 40L 63.9367816091954 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 59.52734839476813 40L 59.52734839476813 27.6Q 59.52734839476813 27.6 59.52734839476813 27.6L 63.9367816091954 27.6Q 63.9367816091954 27.6 63.9367816091954 27.6L 63.9367816091954 27.6L 63.9367816091954 40L 63.9367816091954 40z" pathFrom="M 59.52734839476813 40L 59.52734839476813 40L 63.9367816091954 40L 63.9367816091954 40L 63.9367816091954 40L 63.9367816091954 40L 63.9367816091954 40L 59.52734839476813 40" cy="27.6" cx="63.9367816091954" j="7" val="31" barHeight="12.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2004" d="M 68.34621482362266 40L 68.34621482362266 25.2Q 68.34621482362266 25.2 68.34621482362266 25.2L 72.75564803804993 25.2Q 72.75564803804993 25.2 72.75564803804993 25.2L 72.75564803804993 25.2L 72.75564803804993 40L 72.75564803804993 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 68.34621482362266 40L 68.34621482362266 25.2Q 68.34621482362266 25.2 68.34621482362266 25.2L 72.75564803804993 25.2Q 72.75564803804993 25.2 72.75564803804993 25.2L 72.75564803804993 25.2L 72.75564803804993 40L 72.75564803804993 40z" pathFrom="M 68.34621482362266 40L 68.34621482362266 40L 72.75564803804993 40L 72.75564803804993 40L 72.75564803804993 40L 72.75564803804993 40L 72.75564803804993 40L 68.34621482362266 40" cy="25.2" cx="72.75564803804993" j="8" val="37" barHeight="14.8" barWidth="4.409433214427269"></path><path id="SvgjsPath2005" d="M 77.1650812524772 40L 77.1650812524772 24.4Q 77.1650812524772 24.4 77.1650812524772 24.4L 81.57451446690446 24.4Q 81.57451446690446 24.4 81.57451446690446 24.4L 81.57451446690446 24.4L 81.57451446690446 40L 81.57451446690446 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 77.1650812524772 40L 77.1650812524772 24.4Q 77.1650812524772 24.4 77.1650812524772 24.4L 81.57451446690446 24.4Q 81.57451446690446 24.4 81.57451446690446 24.4L 81.57451446690446 24.4L 81.57451446690446 40L 81.57451446690446 40z" pathFrom="M 77.1650812524772 40L 77.1650812524772 40L 81.57451446690446 40L 81.57451446690446 40L 81.57451446690446 40L 81.57451446690446 40L 81.57451446690446 40L 77.1650812524772 40" cy="24.4" cx="81.57451446690446" j="9" val="39" barHeight="15.6" barWidth="4.409433214427269"></path><path id="SvgjsPath2006" d="M 85.98394768133174 40L 85.98394768133174 15.2Q 85.98394768133174 15.2 85.98394768133174 15.2L 90.39338089575901 15.2Q 90.39338089575901 15.2 90.39338089575901 15.2L 90.39338089575901 15.2L 90.39338089575901 40L 90.39338089575901 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 85.98394768133174 40L 85.98394768133174 15.2Q 85.98394768133174 15.2 85.98394768133174 15.2L 90.39338089575901 15.2Q 90.39338089575901 15.2 90.39338089575901 15.2L 90.39338089575901 15.2L 90.39338089575901 40L 90.39338089575901 40z" pathFrom="M 85.98394768133174 40L 85.98394768133174 40L 90.39338089575901 40L 90.39338089575901 40L 90.39338089575901 40L 90.39338089575901 40L 90.39338089575901 40L 85.98394768133174 40" cy="15.2" cx="90.39338089575901" j="10" val="62" barHeight="24.8" barWidth="4.409433214427269"></path><path id="SvgjsPath2007" d="M 94.80281411018628 40L 94.80281411018628 19.6Q 94.80281411018628 19.6 94.80281411018628 19.6L 99.21224732461354 19.6Q 99.21224732461354 19.6 99.21224732461354 19.6L 99.21224732461354 19.6L 99.21224732461354 40L 99.21224732461354 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 94.80281411018628 40L 94.80281411018628 19.6Q 94.80281411018628 19.6 94.80281411018628 19.6L 99.21224732461354 19.6Q 99.21224732461354 19.6 99.21224732461354 19.6L 99.21224732461354 19.6L 99.21224732461354 40L 99.21224732461354 40z" pathFrom="M 94.80281411018628 40L 94.80281411018628 40L 99.21224732461354 40L 99.21224732461354 40L 99.21224732461354 40L 99.21224732461354 40L 99.21224732461354 40L 94.80281411018628 40" cy="19.6" cx="99.21224732461354" j="11" val="51" barHeight="20.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2008" d="M 103.62168053904081 40L 103.62168053904081 26Q 103.62168053904081 26 103.62168053904081 26L 108.03111375346808 26Q 108.03111375346808 26 108.03111375346808 26L 108.03111375346808 26L 108.03111375346808 40L 108.03111375346808 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 103.62168053904081 40L 103.62168053904081 26Q 103.62168053904081 26 103.62168053904081 26L 108.03111375346808 26Q 108.03111375346808 26 108.03111375346808 26L 108.03111375346808 26L 108.03111375346808 40L 108.03111375346808 40z" pathFrom="M 103.62168053904081 40L 103.62168053904081 40L 108.03111375346808 40L 108.03111375346808 40L 108.03111375346808 40L 108.03111375346808 40L 108.03111375346808 40L 103.62168053904081 40" cy="26" cx="108.03111375346808" j="12" val="35" barHeight="14" barWidth="4.409433214427269"></path><path id="SvgjsPath2009" d="M 112.44054696789534 40L 112.44054696789534 23.6Q 112.44054696789534 23.6 112.44054696789534 23.6L 116.84998018232261 23.6Q 116.84998018232261 23.6 116.84998018232261 23.6L 116.84998018232261 23.6L 116.84998018232261 40L 116.84998018232261 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 112.44054696789534 40L 112.44054696789534 23.6Q 112.44054696789534 23.6 112.44054696789534 23.6L 116.84998018232261 23.6Q 116.84998018232261 23.6 116.84998018232261 23.6L 116.84998018232261 23.6L 116.84998018232261 40L 116.84998018232261 40z" pathFrom="M 112.44054696789534 40L 112.44054696789534 40L 116.84998018232261 40L 116.84998018232261 40L 116.84998018232261 40L 116.84998018232261 40L 116.84998018232261 40L 112.44054696789534 40" cy="23.6" cx="116.84998018232261" j="13" val="41" barHeight="16.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2010" d="M 121.25941339674989 40L 121.25941339674989 26Q 121.25941339674989 26 121.25941339674989 26L 125.66884661117716 26Q 125.66884661117716 26 125.66884661117716 26L 125.66884661117716 26L 125.66884661117716 40L 125.66884661117716 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 121.25941339674989 40L 121.25941339674989 26Q 121.25941339674989 26 121.25941339674989 26L 125.66884661117716 26Q 125.66884661117716 26 125.66884661117716 26L 125.66884661117716 26L 125.66884661117716 40L 125.66884661117716 40z" pathFrom="M 121.25941339674989 40L 121.25941339674989 40L 125.66884661117716 40L 125.66884661117716 40L 125.66884661117716 40L 125.66884661117716 40L 125.66884661117716 40L 121.25941339674989 40" cy="26" cx="125.66884661117716" j="14" val="35" barHeight="14" barWidth="4.409433214427269"></path><path id="SvgjsPath2011" d="M 130.07827982560443 40L 130.07827982560443 29.2Q 130.07827982560443 29.2 130.07827982560443 29.2L 134.4877130400317 29.2Q 134.4877130400317 29.2 134.4877130400317 29.2L 134.4877130400317 29.2L 134.4877130400317 40L 134.4877130400317 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 130.07827982560443 40L 130.07827982560443 29.2Q 130.07827982560443 29.2 130.07827982560443 29.2L 134.4877130400317 29.2Q 134.4877130400317 29.2 134.4877130400317 29.2L 134.4877130400317 29.2L 134.4877130400317 40L 134.4877130400317 40z" pathFrom="M 130.07827982560443 40L 130.07827982560443 40L 134.4877130400317 40L 134.4877130400317 40L 134.4877130400317 40L 134.4877130400317 40L 134.4877130400317 40L 130.07827982560443 40" cy="29.2" cx="134.4877130400317" j="15" val="27" barHeight="10.8" barWidth="4.409433214427269"></path><path id="SvgjsPath2012" d="M 138.89714625445896 40L 138.89714625445896 2.799999999999997Q 138.89714625445896 2.799999999999997 138.89714625445896 2.799999999999997L 143.30657946888624 2.799999999999997Q 143.30657946888624 2.799999999999997 143.30657946888624 2.799999999999997L 143.30657946888624 2.799999999999997L 143.30657946888624 40L 143.30657946888624 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 138.89714625445896 40L 138.89714625445896 2.799999999999997Q 138.89714625445896 2.799999999999997 138.89714625445896 2.799999999999997L 143.30657946888624 2.799999999999997Q 143.30657946888624 2.799999999999997 143.30657946888624 2.799999999999997L 143.30657946888624 2.799999999999997L 143.30657946888624 40L 143.30657946888624 40z" pathFrom="M 138.89714625445896 40L 138.89714625445896 40L 143.30657946888624 40L 143.30657946888624 40L 143.30657946888624 40L 143.30657946888624 40L 143.30657946888624 40L 138.89714625445896 40" cy="2.799999999999997" cx="143.30657946888624" j="16" val="93" barHeight="37.2" barWidth="4.409433214427269"></path><path id="SvgjsPath2013" d="M 147.7160126833135 40L 147.7160126833135 18.8Q 147.7160126833135 18.8 147.7160126833135 18.8L 152.12544589774078 18.8Q 152.12544589774078 18.8 152.12544589774078 18.8L 152.12544589774078 18.8L 152.12544589774078 40L 152.12544589774078 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 147.7160126833135 40L 147.7160126833135 18.8Q 147.7160126833135 18.8 147.7160126833135 18.8L 152.12544589774078 18.8Q 152.12544589774078 18.8 152.12544589774078 18.8L 152.12544589774078 18.8L 152.12544589774078 40L 152.12544589774078 40z" pathFrom="M 147.7160126833135 40L 147.7160126833135 40L 152.12544589774078 40L 152.12544589774078 40L 152.12544589774078 40L 152.12544589774078 40L 152.12544589774078 40L 147.7160126833135 40" cy="18.8" cx="152.12544589774078" j="17" val="53" barHeight="21.2" barWidth="4.409433214427269"></path><path id="SvgjsPath2014" d="M 156.53487911216803 40L 156.53487911216803 15.600000000000001Q 156.53487911216803 15.600000000000001 156.53487911216803 15.600000000000001L 160.9443123265953 15.600000000000001Q 160.9443123265953 15.600000000000001 160.9443123265953 15.600000000000001L 160.9443123265953 15.600000000000001L 160.9443123265953 40L 160.9443123265953 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 156.53487911216803 40L 156.53487911216803 15.600000000000001Q 156.53487911216803 15.600000000000001 156.53487911216803 15.600000000000001L 160.9443123265953 15.600000000000001Q 160.9443123265953 15.600000000000001 160.9443123265953 15.600000000000001L 160.9443123265953 15.600000000000001L 160.9443123265953 40L 160.9443123265953 40z" pathFrom="M 156.53487911216803 40L 156.53487911216803 40L 160.9443123265953 40L 160.9443123265953 40L 160.9443123265953 40L 160.9443123265953 40L 160.9443123265953 40L 156.53487911216803 40" cy="15.600000000000001" cx="160.9443123265953" j="18" val="61" barHeight="24.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2015" d="M 165.35374554102256 40L 165.35374554102256 29.2Q 165.35374554102256 29.2 165.35374554102256 29.2L 169.76317875544984 29.2Q 169.76317875544984 29.2 169.76317875544984 29.2L 169.76317875544984 29.2L 169.76317875544984 40L 169.76317875544984 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 165.35374554102256 40L 165.35374554102256 29.2Q 165.35374554102256 29.2 165.35374554102256 29.2L 169.76317875544984 29.2Q 169.76317875544984 29.2 169.76317875544984 29.2L 169.76317875544984 29.2L 169.76317875544984 40L 169.76317875544984 40z" pathFrom="M 165.35374554102256 40L 165.35374554102256 40L 169.76317875544984 40L 169.76317875544984 40L 169.76317875544984 40L 169.76317875544984 40L 169.76317875544984 40L 165.35374554102256 40" cy="29.2" cx="169.76317875544984" j="19" val="27" barHeight="10.8" barWidth="4.409433214427269"></path><path id="SvgjsPath2016" d="M 174.17261196987712 40L 174.17261196987712 18.4Q 174.17261196987712 18.4 174.17261196987712 18.4L 178.5820451843044 18.4Q 178.5820451843044 18.4 178.5820451843044 18.4L 178.5820451843044 18.4L 178.5820451843044 40L 178.5820451843044 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 174.17261196987712 40L 174.17261196987712 18.4Q 174.17261196987712 18.4 174.17261196987712 18.4L 178.5820451843044 18.4Q 178.5820451843044 18.4 178.5820451843044 18.4L 178.5820451843044 18.4L 178.5820451843044 40L 178.5820451843044 40z" pathFrom="M 174.17261196987712 40L 174.17261196987712 40L 178.5820451843044 40L 178.5820451843044 40L 178.5820451843044 40L 178.5820451843044 40L 178.5820451843044 40L 174.17261196987712 40" cy="18.4" cx="178.5820451843044" j="20" val="54" barHeight="21.6" barWidth="4.409433214427269"></path><path id="SvgjsPath2017" d="M 182.99147839873166 40L 182.99147839873166 22.8Q 182.99147839873166 22.8 182.99147839873166 22.8L 187.40091161315894 22.8Q 187.40091161315894 22.8 187.40091161315894 22.8L 187.40091161315894 22.8L 187.40091161315894 40L 187.40091161315894 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 182.99147839873166 40L 182.99147839873166 22.8Q 182.99147839873166 22.8 182.99147839873166 22.8L 187.40091161315894 22.8Q 187.40091161315894 22.8 187.40091161315894 22.8L 187.40091161315894 22.8L 187.40091161315894 40L 187.40091161315894 40z" pathFrom="M 182.99147839873166 40L 182.99147839873166 40L 187.40091161315894 40L 187.40091161315894 40L 187.40091161315894 40L 187.40091161315894 40L 187.40091161315894 40L 182.99147839873166 40" cy="22.8" cx="187.40091161315894" j="21" val="43" barHeight="17.2" barWidth="4.409433214427269"></path><path id="SvgjsPath2018" d="M 191.8103448275862 40L 191.8103448275862 32.4Q 191.8103448275862 32.4 191.8103448275862 32.4L 196.21977804201347 32.4Q 196.21977804201347 32.4 196.21977804201347 32.4L 196.21977804201347 32.4L 196.21977804201347 40L 196.21977804201347 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 191.8103448275862 40L 191.8103448275862 32.4Q 191.8103448275862 32.4 191.8103448275862 32.4L 196.21977804201347 32.4Q 196.21977804201347 32.4 196.21977804201347 32.4L 196.21977804201347 32.4L 196.21977804201347 40L 196.21977804201347 40z" pathFrom="M 191.8103448275862 40L 191.8103448275862 40L 196.21977804201347 40L 196.21977804201347 40L 196.21977804201347 40L 196.21977804201347 40L 196.21977804201347 40L 191.8103448275862 40" cy="32.4" cx="196.21977804201347" j="22" val="19" barHeight="7.6" barWidth="4.409433214427269"></path><path id="SvgjsPath2019" d="M 200.62921125644073 40L 200.62921125644073 21.6Q 200.62921125644073 21.6 200.62921125644073 21.6L 205.038644470868 21.6Q 205.038644470868 21.6 205.038644470868 21.6L 205.038644470868 21.6L 205.038644470868 40L 205.038644470868 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 200.62921125644073 40L 200.62921125644073 21.6Q 200.62921125644073 21.6 200.62921125644073 21.6L 205.038644470868 21.6Q 205.038644470868 21.6 205.038644470868 21.6L 205.038644470868 21.6L 205.038644470868 40L 205.038644470868 40z" pathFrom="M 200.62921125644073 40L 200.62921125644073 40L 205.038644470868 40L 205.038644470868 40L 205.038644470868 40L 205.038644470868 40L 205.038644470868 40L 200.62921125644073 40" cy="21.6" cx="205.038644470868" j="23" val="46" barHeight="18.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2020" d="M 209.44807768529526 40L 209.44807768529526 24.4Q 209.44807768529526 24.4 209.44807768529526 24.4L 213.85751089972254 24.4Q 213.85751089972254 24.4 213.85751089972254 24.4L 213.85751089972254 24.4L 213.85751089972254 40L 213.85751089972254 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 209.44807768529526 40L 209.44807768529526 24.4Q 209.44807768529526 24.4 209.44807768529526 24.4L 213.85751089972254 24.4Q 213.85751089972254 24.4 213.85751089972254 24.4L 213.85751089972254 24.4L 213.85751089972254 40L 213.85751089972254 40z" pathFrom="M 209.44807768529526 40L 209.44807768529526 40L 213.85751089972254 40L 213.85751089972254 40L 213.85751089972254 40L 213.85751089972254 40L 213.85751089972254 40L 209.44807768529526 40" cy="24.4" cx="213.85751089972254" j="24" val="39" barHeight="15.6" barWidth="4.409433214427269"></path><path id="SvgjsPath2021" d="M 218.2669441141498 40L 218.2669441141498 15.2Q 218.2669441141498 15.2 218.2669441141498 15.2L 222.67637732857708 15.2Q 222.67637732857708 15.2 222.67637732857708 15.2L 222.67637732857708 15.2L 222.67637732857708 40L 222.67637732857708 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 218.2669441141498 40L 218.2669441141498 15.2Q 218.2669441141498 15.2 218.2669441141498 15.2L 222.67637732857708 15.2Q 222.67637732857708 15.2 222.67637732857708 15.2L 222.67637732857708 15.2L 222.67637732857708 40L 222.67637732857708 40z" pathFrom="M 218.2669441141498 40L 218.2669441141498 40L 222.67637732857708 40L 222.67637732857708 40L 222.67637732857708 40L 222.67637732857708 40L 222.67637732857708 40L 218.2669441141498 40" cy="15.2" cx="222.67637732857708" j="25" val="62" barHeight="24.8" barWidth="4.409433214427269"></path><path id="SvgjsPath2022" d="M 227.08581054300433 40L 227.08581054300433 19.6Q 227.08581054300433 19.6 227.08581054300433 19.6L 231.4952437574316 19.6Q 231.4952437574316 19.6 231.4952437574316 19.6L 231.4952437574316 19.6L 231.4952437574316 40L 231.4952437574316 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 227.08581054300433 40L 227.08581054300433 19.6Q 227.08581054300433 19.6 227.08581054300433 19.6L 231.4952437574316 19.6Q 231.4952437574316 19.6 231.4952437574316 19.6L 231.4952437574316 19.6L 231.4952437574316 40L 231.4952437574316 40z" pathFrom="M 227.08581054300433 40L 227.08581054300433 40L 231.4952437574316 40L 231.4952437574316 40L 231.4952437574316 40L 231.4952437574316 40L 231.4952437574316 40L 227.08581054300433 40" cy="19.6" cx="231.4952437574316" j="26" val="51" barHeight="20.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2023" d="M 235.90467697185886 40L 235.90467697185886 26Q 235.90467697185886 26 235.90467697185886 26L 240.31411018628614 26Q 240.31411018628614 26 240.31411018628614 26L 240.31411018628614 26L 240.31411018628614 40L 240.31411018628614 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 235.90467697185886 40L 235.90467697185886 26Q 235.90467697185886 26 235.90467697185886 26L 240.31411018628614 26Q 240.31411018628614 26 240.31411018628614 26L 240.31411018628614 26L 240.31411018628614 40L 240.31411018628614 40z" pathFrom="M 235.90467697185886 40L 235.90467697185886 40L 240.31411018628614 40L 240.31411018628614 40L 240.31411018628614 40L 240.31411018628614 40L 240.31411018628614 40L 235.90467697185886 40" cy="26" cx="240.31411018628614" j="27" val="35" barHeight="14" barWidth="4.409433214427269"></path><path id="SvgjsPath2024" d="M 244.72354340071342 40L 244.72354340071342 23.6Q 244.72354340071342 23.6 244.72354340071342 23.6L 249.1329766151407 23.6Q 249.1329766151407 23.6 249.1329766151407 23.6L 249.1329766151407 23.6L 249.1329766151407 40L 249.1329766151407 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 244.72354340071342 40L 244.72354340071342 23.6Q 244.72354340071342 23.6 244.72354340071342 23.6L 249.1329766151407 23.6Q 249.1329766151407 23.6 249.1329766151407 23.6L 249.1329766151407 23.6L 249.1329766151407 40L 249.1329766151407 40z" pathFrom="M 244.72354340071342 40L 244.72354340071342 40L 249.1329766151407 40L 249.1329766151407 40L 249.1329766151407 40L 249.1329766151407 40L 249.1329766151407 40L 244.72354340071342 40" cy="23.6" cx="249.1329766151407" j="28" val="41" barHeight="16.4" barWidth="4.409433214427269"></path><path id="SvgjsPath2025" d="M 253.54240982956796 40L 253.54240982956796 13.2Q 253.54240982956796 13.2 253.54240982956796 13.2L 257.9518430439952 13.2Q 257.9518430439952 13.2 257.9518430439952 13.2L 257.9518430439952 13.2L 257.9518430439952 40L 257.9518430439952 40z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskwlzmu16y)" pathTo="M 253.54240982956796 40L 253.54240982956796 13.2Q 253.54240982956796 13.2 253.54240982956796 13.2L 257.9518430439952 13.2Q 257.9518430439952 13.2 257.9518430439952 13.2L 257.9518430439952 13.2L 257.9518430439952 40L 257.9518430439952 40z" pathFrom="M 253.54240982956796 40L 253.54240982956796 40L 257.9518430439952 40L 257.9518430439952 40L 257.9518430439952 40L 257.9518430439952 40L 257.9518430439952 40L 253.54240982956796 40" cy="13.2" cx="257.9518430439952" j="29" val="67" barHeight="26.8" barWidth="4.409433214427269"></path></g><g id="SvgjsG1995" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2045" x1="-8.126436781609195" y1="0" x2="263.8735632183908" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2046" x1="-8.126436781609195" y1="0" x2="263.8735632183908" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2047" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2048" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2049" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2033" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1953" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 305px; height: 137px;"></div></div><div class="contract-trigger"></div></div></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="position: relative;">
                                    <h3 class="card-title">Traffic summary</h3>
                                    <div id="chart-mentions" class="chart-lg" style="min-height: 240px;"><div id="apexcharts3q8fq5tp" class="apexcharts-canvas apexcharts3q8fq5tp apexcharts-theme-light" style="width: 594px; height: 240px;"><svg id="SvgjsSvg2050" width="594" height="240" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2052" class="apexcharts-inner apexcharts-graphical" transform="translate(44.08289930555556, 10)"><defs id="SvgjsDefs2051"><linearGradient id="SvgjsLinearGradient2057" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2058" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2059" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2060" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask3q8fq5tp"><rect id="SvgjsRect2068" width="568.140625" height="201.6" x="-12.223524305555554" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask3q8fq5tp"><rect id="SvgjsRect2069" width="547.6935763888889" height="205.6" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2061" width="7.551299672067902" height="201.6" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2057)" class="apexcharts-xcrosshairs" y2="201.6" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2188" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2189" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2191" font-family="inherit" x="45.30779803240741" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2192">24 Jun</tspan><title>24 Jun</title></text><text id="SvgjsText2194" font-family="inherit" x="151.025993441358" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2195">Jul '20</tspan><title>Jul '20</title></text><text id="SvgjsText2197" font-family="inherit" x="256.7441888503086" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2198">08 Jul</tspan><title>08 Jul</title></text><text id="SvgjsText2200" font-family="inherit" x="377.564983603395" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2201">16 Jul</tspan><title>16 Jul</title></text><text id="SvgjsText2203" font-family="inherit" x="498.38577835648135" y="230.6" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2204">24 Jul</tspan><title>24 Jul</title></text></g></g><g id="SvgjsG2219" class="apexcharts-grid"><g id="SvgjsG2220" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2232" x1="-10.223524305555554" y1="0" x2="553.9171006944445" y2="0" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2233" x1="-10.223524305555554" y1="40.32" x2="553.9171006944445" y2="40.32" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2234" x1="-10.223524305555554" y1="80.64" x2="553.9171006944445" y2="80.64" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2235" x1="-10.223524305555554" y1="120.96000000000001" x2="553.9171006944445" y2="120.96000000000001" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2236" x1="-10.223524305555554" y1="161.28" x2="553.9171006944445" y2="161.28" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2237" x1="-10.223524305555554" y1="201.6" x2="553.9171006944445" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG2221" class="apexcharts-gridlines-vertical"><line id="SvgjsLine2222" x1="45.30779803240741" y1="0" x2="45.30779803240741" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2224" x1="151.025993441358" y1="0" x2="151.025993441358" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2226" x1="256.7441888503086" y1="0" x2="256.7441888503086" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2228" x1="377.564983603395" y1="0" x2="377.564983603395" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2230" x1="498.38577835648135" y1="0" x2="498.38577835648135" y2="201.6" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><line id="SvgjsLine2223" x1="45.30779803240741" y1="202.6" x2="45.30779803240741" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2225" x1="151.025993441358" y1="202.6" x2="151.025993441358" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2227" x1="256.7441888503086" y1="202.6" x2="256.7441888503086" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2229" x1="377.564983603395" y1="202.6" x2="377.564983603395" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2231" x1="498.38577835648135" y1="202.6" x2="498.38577835648135" y2="208.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2239" x1="0" y1="201.6" x2="543.6935763888889" y2="201.6" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2238" x1="0" y1="1" x2="0" y2="201.6" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2070" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2071" class="apexcharts-series" seriesName="Web" rel="1" data:realIndex="0"><path id="SvgjsPath2073" d="M -3.775649836033951 201.6L -3.775649836033951 199.584Q -3.775649836033951 199.584 -3.775649836033951 199.584L 3.775649836033951 199.584Q 3.775649836033951 199.584 3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 201.6L 3.775649836033951 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M -3.775649836033951 201.6L -3.775649836033951 199.584Q -3.775649836033951 199.584 -3.775649836033951 199.584L 3.775649836033951 199.584Q 3.775649836033951 199.584 3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 201.6L 3.775649836033951 201.6z" pathFrom="M -3.775649836033951 201.6L -3.775649836033951 201.6L 3.775649836033951 201.6L 3.775649836033951 201.6L 3.775649836033951 201.6L 3.775649836033951 201.6L 3.775649836033951 201.6L -3.775649836033951 201.6" cy="199.584" cx="3.775649836033951" j="0" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2074" d="M 11.326949508101853 201.6L 11.326949508101853 201.6Q 11.326949508101853 201.6 11.326949508101853 201.6L 18.878249180169753 201.6Q 18.878249180169753 201.6 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 11.326949508101853 201.6L 11.326949508101853 201.6Q 11.326949508101853 201.6 11.326949508101853 201.6L 18.878249180169753 201.6Q 18.878249180169753 201.6 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6z" pathFrom="M 11.326949508101853 201.6L 11.326949508101853 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 11.326949508101853 201.6" cy="201.6" cx="18.878249180169757" j="1" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2075" d="M 26.42954885223766 201.6L 26.42954885223766 201.6Q 26.42954885223766 201.6 26.42954885223766 201.6L 33.98084852430556 201.6Q 33.98084852430556 201.6 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 26.42954885223766 201.6L 26.42954885223766 201.6Q 26.42954885223766 201.6 26.42954885223766 201.6L 33.98084852430556 201.6Q 33.98084852430556 201.6 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6z" pathFrom="M 26.42954885223766 201.6L 26.42954885223766 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 26.42954885223766 201.6" cy="201.6" cx="33.98084852430556" j="2" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2076" d="M 41.53214819637346 201.6L 41.53214819637346 201.6Q 41.53214819637346 201.6 41.53214819637346 201.6L 49.08344786844137 201.6Q 49.08344786844137 201.6 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 41.53214819637346 201.6L 41.53214819637346 201.6Q 41.53214819637346 201.6 41.53214819637346 201.6L 49.08344786844137 201.6Q 49.08344786844137 201.6 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6z" pathFrom="M 41.53214819637346 201.6L 41.53214819637346 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 41.53214819637346 201.6" cy="201.6" cx="49.08344786844137" j="3" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2077" d="M 56.63474754050927 201.6L 56.63474754050927 201.6Q 56.63474754050927 201.6 56.63474754050927 201.6L 64.18604721257717 201.6Q 64.18604721257717 201.6 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 56.63474754050927 201.6L 56.63474754050927 201.6Q 56.63474754050927 201.6 56.63474754050927 201.6L 64.18604721257717 201.6Q 64.18604721257717 201.6 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6z" pathFrom="M 56.63474754050927 201.6L 56.63474754050927 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 56.63474754050927 201.6" cy="201.6" cx="64.18604721257717" j="4" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2078" d="M 71.73734688464506 201.6L 71.73734688464506 199.584Q 71.73734688464506 199.584 71.73734688464506 199.584L 79.28864655671296 199.584Q 79.28864655671296 199.584 79.28864655671296 199.584L 79.28864655671296 199.584L 79.28864655671296 201.6L 79.28864655671296 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 71.73734688464506 201.6L 71.73734688464506 199.584Q 71.73734688464506 199.584 71.73734688464506 199.584L 79.28864655671296 199.584Q 79.28864655671296 199.584 79.28864655671296 199.584L 79.28864655671296 199.584L 79.28864655671296 201.6L 79.28864655671296 201.6z" pathFrom="M 71.73734688464506 201.6L 71.73734688464506 201.6L 79.28864655671296 201.6L 79.28864655671296 201.6L 79.28864655671296 201.6L 79.28864655671296 201.6L 79.28864655671296 201.6L 71.73734688464506 201.6" cy="199.584" cx="79.28864655671296" j="5" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2079" d="M 86.83994622878087 201.6L 86.83994622878087 199.584Q 86.83994622878087 199.584 86.83994622878087 199.584L 94.39124590084877 199.584Q 94.39124590084877 199.584 94.39124590084877 199.584L 94.39124590084877 199.584L 94.39124590084877 201.6L 94.39124590084877 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 86.83994622878087 201.6L 86.83994622878087 199.584Q 86.83994622878087 199.584 86.83994622878087 199.584L 94.39124590084877 199.584Q 94.39124590084877 199.584 94.39124590084877 199.584L 94.39124590084877 199.584L 94.39124590084877 201.6L 94.39124590084877 201.6z" pathFrom="M 86.83994622878087 201.6L 86.83994622878087 201.6L 94.39124590084877 201.6L 94.39124590084877 201.6L 94.39124590084877 201.6L 94.39124590084877 201.6L 94.39124590084877 201.6L 86.83994622878087 201.6" cy="199.584" cx="94.39124590084879" j="6" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2080" d="M 101.94254557291667 201.6L 101.94254557291667 201.6Q 101.94254557291667 201.6 101.94254557291667 201.6L 109.49384524498457 201.6Q 109.49384524498457 201.6 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 101.94254557291667 201.6L 101.94254557291667 201.6Q 101.94254557291667 201.6 101.94254557291667 201.6L 109.49384524498457 201.6Q 109.49384524498457 201.6 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6z" pathFrom="M 101.94254557291667 201.6L 101.94254557291667 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 101.94254557291667 201.6" cy="201.6" cx="109.49384524498458" j="7" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2081" d="M 117.04514491705248 201.6L 117.04514491705248 201.6Q 117.04514491705248 201.6 117.04514491705248 201.6L 124.59644458912038 201.6Q 124.59644458912038 201.6 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 117.04514491705248 201.6L 117.04514491705248 201.6Q 117.04514491705248 201.6 117.04514491705248 201.6L 124.59644458912038 201.6Q 124.59644458912038 201.6 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6z" pathFrom="M 117.04514491705248 201.6L 117.04514491705248 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 117.04514491705248 201.6" cy="201.6" cx="124.59644458912038" j="8" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2082" d="M 132.14774426118828 201.6L 132.14774426118828 201.6Q 132.14774426118828 201.6 132.14774426118828 201.6L 139.69904393325618 201.6Q 139.69904393325618 201.6 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 132.14774426118828 201.6L 132.14774426118828 201.6Q 132.14774426118828 201.6 132.14774426118828 201.6L 139.69904393325618 201.6Q 139.69904393325618 201.6 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6z" pathFrom="M 132.14774426118828 201.6L 132.14774426118828 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 132.14774426118828 201.6" cy="201.6" cx="139.69904393325618" j="9" val="0" barHeight="0" barWidth="7.551299672067902"></path><path id="SvgjsPath2083" d="M 147.25034360532408 201.6L 147.25034360532408 197.56799999999998Q 147.25034360532408 197.56799999999998 147.25034360532408 197.56799999999998L 154.80164327739197 197.56799999999998Q 154.80164327739197 197.56799999999998 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 201.6L 154.80164327739197 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 147.25034360532408 201.6L 147.25034360532408 197.56799999999998Q 147.25034360532408 197.56799999999998 147.25034360532408 197.56799999999998L 154.80164327739197 197.56799999999998Q 154.80164327739197 197.56799999999998 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 201.6L 154.80164327739197 201.6z" pathFrom="M 147.25034360532408 201.6L 147.25034360532408 201.6L 154.80164327739197 201.6L 154.80164327739197 201.6L 154.80164327739197 201.6L 154.80164327739197 201.6L 154.80164327739197 201.6L 147.25034360532408 201.6" cy="197.56799999999998" cx="154.80164327739197" j="10" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2084" d="M 162.3529429494599 201.6L 162.3529429494599 177.408Q 162.3529429494599 177.408 162.3529429494599 177.408L 169.9042426215278 177.408Q 169.9042426215278 177.408 169.9042426215278 177.408L 169.9042426215278 177.408L 169.9042426215278 201.6L 169.9042426215278 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 162.3529429494599 201.6L 162.3529429494599 177.408Q 162.3529429494599 177.408 162.3529429494599 177.408L 169.9042426215278 177.408Q 169.9042426215278 177.408 169.9042426215278 177.408L 169.9042426215278 177.408L 169.9042426215278 201.6L 169.9042426215278 201.6z" pathFrom="M 162.3529429494599 201.6L 162.3529429494599 201.6L 169.9042426215278 201.6L 169.9042426215278 201.6L 169.9042426215278 201.6L 169.9042426215278 201.6L 169.9042426215278 201.6L 162.3529429494599 201.6" cy="177.408" cx="169.9042426215278" j="11" val="12" barHeight="24.192" barWidth="7.551299672067902"></path><path id="SvgjsPath2085" d="M 177.4555422935957 201.6L 177.4555422935957 191.51999999999998Q 177.4555422935957 191.51999999999998 177.4555422935957 191.51999999999998L 185.0068419656636 191.51999999999998Q 185.0068419656636 191.51999999999998 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 201.6L 185.0068419656636 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 177.4555422935957 201.6L 177.4555422935957 191.51999999999998Q 177.4555422935957 191.51999999999998 177.4555422935957 191.51999999999998L 185.0068419656636 191.51999999999998Q 185.0068419656636 191.51999999999998 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 201.6L 185.0068419656636 201.6z" pathFrom="M 177.4555422935957 201.6L 177.4555422935957 201.6L 185.0068419656636 201.6L 185.0068419656636 201.6L 185.0068419656636 201.6L 185.0068419656636 201.6L 185.0068419656636 201.6L 177.4555422935957 201.6" cy="191.51999999999998" cx="185.0068419656636" j="12" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2086" d="M 192.5581416377315 201.6L 192.5581416377315 185.47199999999998Q 192.5581416377315 185.47199999999998 192.5581416377315 185.47199999999998L 200.1094413097994 185.47199999999998Q 200.1094413097994 185.47199999999998 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 201.6L 200.1094413097994 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 192.5581416377315 201.6L 192.5581416377315 185.47199999999998Q 192.5581416377315 185.47199999999998 192.5581416377315 185.47199999999998L 200.1094413097994 185.47199999999998Q 200.1094413097994 185.47199999999998 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 201.6L 200.1094413097994 201.6z" pathFrom="M 192.5581416377315 201.6L 192.5581416377315 201.6L 200.1094413097994 201.6L 200.1094413097994 201.6L 200.1094413097994 201.6L 200.1094413097994 201.6L 200.1094413097994 201.6L 192.5581416377315 201.6" cy="185.47199999999998" cx="200.1094413097994" j="13" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2087" d="M 207.6607409818673 201.6L 207.6607409818673 157.248Q 207.6607409818673 157.248 207.6607409818673 157.248L 215.2120406539352 157.248Q 215.2120406539352 157.248 215.2120406539352 157.248L 215.2120406539352 157.248L 215.2120406539352 201.6L 215.2120406539352 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 207.6607409818673 201.6L 207.6607409818673 157.248Q 207.6607409818673 157.248 207.6607409818673 157.248L 215.2120406539352 157.248Q 215.2120406539352 157.248 215.2120406539352 157.248L 215.2120406539352 157.248L 215.2120406539352 201.6L 215.2120406539352 201.6z" pathFrom="M 207.6607409818673 201.6L 207.6607409818673 201.6L 215.2120406539352 201.6L 215.2120406539352 201.6L 215.2120406539352 201.6L 215.2120406539352 201.6L 215.2120406539352 201.6L 207.6607409818673 201.6" cy="157.248" cx="215.2120406539352" j="14" val="22" barHeight="44.352" barWidth="7.551299672067902"></path><path id="SvgjsPath2088" d="M 222.7633403260031 201.6L 222.7633403260031 189.504Q 222.7633403260031 189.504 222.7633403260031 189.504L 230.314639998071 189.504Q 230.314639998071 189.504 230.314639998071 189.504L 230.314639998071 189.504L 230.314639998071 201.6L 230.314639998071 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 222.7633403260031 201.6L 222.7633403260031 189.504Q 222.7633403260031 189.504 222.7633403260031 189.504L 230.314639998071 189.504Q 230.314639998071 189.504 230.314639998071 189.504L 230.314639998071 189.504L 230.314639998071 201.6L 230.314639998071 201.6z" pathFrom="M 222.7633403260031 201.6L 222.7633403260031 201.6L 230.314639998071 201.6L 230.314639998071 201.6L 230.314639998071 201.6L 230.314639998071 201.6L 230.314639998071 201.6L 222.7633403260031 201.6" cy="189.504" cx="230.314639998071" j="15" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2089" d="M 237.8659396701389 201.6L 237.8659396701389 185.47199999999998Q 237.8659396701389 185.47199999999998 237.8659396701389 185.47199999999998L 245.4172393422068 185.47199999999998Q 245.4172393422068 185.47199999999998 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 201.6L 245.4172393422068 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 237.8659396701389 201.6L 237.8659396701389 185.47199999999998Q 237.8659396701389 185.47199999999998 237.8659396701389 185.47199999999998L 245.4172393422068 185.47199999999998Q 245.4172393422068 185.47199999999998 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 201.6L 245.4172393422068 201.6z" pathFrom="M 237.8659396701389 201.6L 237.8659396701389 201.6L 245.4172393422068 201.6L 245.4172393422068 201.6L 245.4172393422068 201.6L 245.4172393422068 201.6L 245.4172393422068 201.6L 237.8659396701389 201.6" cy="185.47199999999998" cx="245.4172393422068" j="16" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2090" d="M 252.9685390142747 201.6L 252.9685390142747 189.504Q 252.9685390142747 189.504 252.9685390142747 189.504L 260.5198386863426 189.504Q 260.5198386863426 189.504 260.5198386863426 189.504L 260.5198386863426 189.504L 260.5198386863426 201.6L 260.5198386863426 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 252.9685390142747 201.6L 252.9685390142747 189.504Q 252.9685390142747 189.504 252.9685390142747 189.504L 260.5198386863426 189.504Q 260.5198386863426 189.504 260.5198386863426 189.504L 260.5198386863426 189.504L 260.5198386863426 201.6L 260.5198386863426 201.6z" pathFrom="M 252.9685390142747 201.6L 252.9685390142747 201.6L 260.5198386863426 201.6L 260.5198386863426 201.6L 260.5198386863426 201.6L 260.5198386863426 201.6L 260.5198386863426 201.6L 252.9685390142747 201.6" cy="189.504" cx="260.5198386863426" j="17" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2091" d="M 268.0711383584105 201.6L 268.0711383584105 193.536Q 268.0711383584105 193.536 268.0711383584105 193.536L 275.6224380304784 193.536Q 275.6224380304784 193.536 275.6224380304784 193.536L 275.6224380304784 193.536L 275.6224380304784 201.6L 275.6224380304784 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 268.0711383584105 201.6L 268.0711383584105 193.536Q 268.0711383584105 193.536 268.0711383584105 193.536L 275.6224380304784 193.536Q 275.6224380304784 193.536 275.6224380304784 193.536L 275.6224380304784 193.536L 275.6224380304784 201.6L 275.6224380304784 201.6z" pathFrom="M 268.0711383584105 201.6L 268.0711383584105 201.6L 275.6224380304784 201.6L 275.6224380304784 201.6L 275.6224380304784 201.6L 275.6224380304784 201.6L 275.6224380304784 201.6L 268.0711383584105 201.6" cy="193.536" cx="275.6224380304784" j="18" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2092" d="M 283.1737377025463 201.6L 283.1737377025463 199.584Q 283.1737377025463 199.584 283.1737377025463 199.584L 290.7250373746142 199.584Q 290.7250373746142 199.584 290.7250373746142 199.584L 290.7250373746142 199.584L 290.7250373746142 201.6L 290.7250373746142 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 283.1737377025463 201.6L 283.1737377025463 199.584Q 283.1737377025463 199.584 283.1737377025463 199.584L 290.7250373746142 199.584Q 290.7250373746142 199.584 290.7250373746142 199.584L 290.7250373746142 199.584L 290.7250373746142 201.6L 290.7250373746142 201.6z" pathFrom="M 283.1737377025463 201.6L 283.1737377025463 201.6L 290.7250373746142 201.6L 290.7250373746142 201.6L 290.7250373746142 201.6L 290.7250373746142 201.6L 290.7250373746142 201.6L 283.1737377025463 201.6" cy="199.584" cx="290.7250373746142" j="19" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2093" d="M 298.2763370466821 201.6L 298.2763370466821 185.47199999999998Q 298.2763370466821 185.47199999999998 298.2763370466821 185.47199999999998L 305.82763671875 185.47199999999998Q 305.82763671875 185.47199999999998 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 201.6L 305.82763671875 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 298.2763370466821 201.6L 298.2763370466821 185.47199999999998Q 298.2763370466821 185.47199999999998 298.2763370466821 185.47199999999998L 305.82763671875 185.47199999999998Q 305.82763671875 185.47199999999998 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 201.6L 305.82763671875 201.6z" pathFrom="M 298.2763370466821 201.6L 298.2763370466821 201.6L 305.82763671875 201.6L 305.82763671875 201.6L 305.82763671875 201.6L 305.82763671875 201.6L 305.82763671875 201.6L 298.2763370466821 201.6" cy="185.47199999999998" cx="305.82763671875" j="20" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2094" d="M 313.3789363908179 201.6L 313.3789363908179 153.216Q 313.3789363908179 153.216 313.3789363908179 153.216L 320.9302360628858 153.216Q 320.9302360628858 153.216 320.9302360628858 153.216L 320.9302360628858 153.216L 320.9302360628858 201.6L 320.9302360628858 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 313.3789363908179 201.6L 313.3789363908179 153.216Q 313.3789363908179 153.216 313.3789363908179 153.216L 320.9302360628858 153.216Q 320.9302360628858 153.216 320.9302360628858 153.216L 320.9302360628858 153.216L 320.9302360628858 201.6L 320.9302360628858 201.6z" pathFrom="M 313.3789363908179 201.6L 313.3789363908179 201.6L 320.9302360628858 201.6L 320.9302360628858 201.6L 320.9302360628858 201.6L 320.9302360628858 201.6L 320.9302360628858 201.6L 313.3789363908179 201.6" cy="153.216" cx="320.9302360628858" j="21" val="24" barHeight="48.384" barWidth="7.551299672067902"></path><path id="SvgjsPath2095" d="M 328.48153573495375 201.6L 328.48153573495375 143.136Q 328.48153573495375 143.136 328.48153573495375 143.136L 336.03283540702165 143.136Q 336.03283540702165 143.136 336.03283540702165 143.136L 336.03283540702165 143.136L 336.03283540702165 201.6L 336.03283540702165 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 328.48153573495375 201.6L 328.48153573495375 143.136Q 328.48153573495375 143.136 328.48153573495375 143.136L 336.03283540702165 143.136Q 336.03283540702165 143.136 336.03283540702165 143.136L 336.03283540702165 143.136L 336.03283540702165 201.6L 336.03283540702165 201.6z" pathFrom="M 328.48153573495375 201.6L 328.48153573495375 201.6L 336.03283540702165 201.6L 336.03283540702165 201.6L 336.03283540702165 201.6L 336.03283540702165 201.6L 336.03283540702165 201.6L 328.48153573495375 201.6" cy="143.136" cx="336.03283540702165" j="22" val="29" barHeight="58.464" barWidth="7.551299672067902"></path><path id="SvgjsPath2096" d="M 343.58413507908955 201.6L 343.58413507908955 98.78399999999999Q 343.58413507908955 98.78399999999999 343.58413507908955 98.78399999999999L 351.13543475115745 98.78399999999999Q 351.13543475115745 98.78399999999999 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 201.6L 351.13543475115745 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 343.58413507908955 201.6L 343.58413507908955 98.78399999999999Q 343.58413507908955 98.78399999999999 343.58413507908955 98.78399999999999L 351.13543475115745 98.78399999999999Q 351.13543475115745 98.78399999999999 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 201.6L 351.13543475115745 201.6z" pathFrom="M 343.58413507908955 201.6L 343.58413507908955 201.6L 351.13543475115745 201.6L 351.13543475115745 201.6L 351.13543475115745 201.6L 351.13543475115745 201.6L 351.13543475115745 201.6L 343.58413507908955 201.6" cy="98.78399999999999" cx="351.13543475115745" j="23" val="51" barHeight="102.816" barWidth="7.551299672067902"></path><path id="SvgjsPath2097" d="M 358.68673442322535 201.6L 358.68673442322535 120.96Q 358.68673442322535 120.96 358.68673442322535 120.96L 366.23803409529324 120.96Q 366.23803409529324 120.96 366.23803409529324 120.96L 366.23803409529324 120.96L 366.23803409529324 201.6L 366.23803409529324 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 358.68673442322535 201.6L 358.68673442322535 120.96Q 358.68673442322535 120.96 358.68673442322535 120.96L 366.23803409529324 120.96Q 366.23803409529324 120.96 366.23803409529324 120.96L 366.23803409529324 120.96L 366.23803409529324 201.6L 366.23803409529324 201.6z" pathFrom="M 358.68673442322535 201.6L 358.68673442322535 201.6L 366.23803409529324 201.6L 366.23803409529324 201.6L 366.23803409529324 201.6L 366.23803409529324 201.6L 366.23803409529324 201.6L 358.68673442322535 201.6" cy="120.96" cx="366.23803409529324" j="24" val="40" barHeight="80.64" barWidth="7.551299672067902"></path><path id="SvgjsPath2098" d="M 373.78933376736114 201.6L 373.78933376736114 106.848Q 373.78933376736114 106.848 373.78933376736114 106.848L 381.34063343942904 106.848Q 381.34063343942904 106.848 381.34063343942904 106.848L 381.34063343942904 106.848L 381.34063343942904 201.6L 381.34063343942904 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 373.78933376736114 201.6L 373.78933376736114 106.848Q 373.78933376736114 106.848 373.78933376736114 106.848L 381.34063343942904 106.848Q 381.34063343942904 106.848 381.34063343942904 106.848L 381.34063343942904 106.848L 381.34063343942904 201.6L 381.34063343942904 201.6z" pathFrom="M 373.78933376736114 201.6L 373.78933376736114 201.6L 381.34063343942904 201.6L 381.34063343942904 201.6L 381.34063343942904 201.6L 381.34063343942904 201.6L 381.34063343942904 201.6L 373.78933376736114 201.6" cy="106.848" cx="381.34063343942904" j="25" val="47" barHeight="94.752" barWidth="7.551299672067902"></path><path id="SvgjsPath2099" d="M 388.89193311149694 201.6L 388.89193311149694 155.232Q 388.89193311149694 155.232 388.89193311149694 155.232L 396.44323278356484 155.232Q 396.44323278356484 155.232 396.44323278356484 155.232L 396.44323278356484 155.232L 396.44323278356484 201.6L 396.44323278356484 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 388.89193311149694 201.6L 388.89193311149694 155.232Q 388.89193311149694 155.232 388.89193311149694 155.232L 396.44323278356484 155.232Q 396.44323278356484 155.232 396.44323278356484 155.232L 396.44323278356484 155.232L 396.44323278356484 201.6L 396.44323278356484 201.6z" pathFrom="M 388.89193311149694 201.6L 388.89193311149694 201.6L 396.44323278356484 201.6L 396.44323278356484 201.6L 396.44323278356484 201.6L 396.44323278356484 201.6L 396.44323278356484 201.6L 388.89193311149694 201.6" cy="155.232" cx="396.44323278356484" j="26" val="23" barHeight="46.368" barWidth="7.551299672067902"></path><path id="SvgjsPath2100" d="M 403.99453245563274 201.6L 403.99453245563274 149.184Q 403.99453245563274 149.184 403.99453245563274 149.184L 411.54583212770063 149.184Q 411.54583212770063 149.184 411.54583212770063 149.184L 411.54583212770063 149.184L 411.54583212770063 201.6L 411.54583212770063 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 403.99453245563274 201.6L 403.99453245563274 149.184Q 403.99453245563274 149.184 403.99453245563274 149.184L 411.54583212770063 149.184Q 411.54583212770063 149.184 411.54583212770063 149.184L 411.54583212770063 149.184L 411.54583212770063 201.6L 411.54583212770063 201.6z" pathFrom="M 403.99453245563274 201.6L 403.99453245563274 201.6L 411.54583212770063 201.6L 411.54583212770063 201.6L 411.54583212770063 201.6L 411.54583212770063 201.6L 411.54583212770063 201.6L 403.99453245563274 201.6" cy="149.184" cx="411.54583212770063" j="27" val="26" barHeight="52.416" barWidth="7.551299672067902"></path><path id="SvgjsPath2101" d="M 419.09713179976853 201.6L 419.09713179976853 100.8Q 419.09713179976853 100.8 419.09713179976853 100.8L 426.64843147183643 100.8Q 426.64843147183643 100.8 426.64843147183643 100.8L 426.64843147183643 100.8L 426.64843147183643 201.6L 426.64843147183643 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 419.09713179976853 201.6L 419.09713179976853 100.8Q 419.09713179976853 100.8 419.09713179976853 100.8L 426.64843147183643 100.8Q 426.64843147183643 100.8 426.64843147183643 100.8L 426.64843147183643 100.8L 426.64843147183643 201.6L 426.64843147183643 201.6z" pathFrom="M 419.09713179976853 201.6L 419.09713179976853 201.6L 426.64843147183643 201.6L 426.64843147183643 201.6L 426.64843147183643 201.6L 426.64843147183643 201.6L 426.64843147183643 201.6L 419.09713179976853 201.6" cy="100.8" cx="426.64843147183643" j="28" val="50" barHeight="100.8" barWidth="7.551299672067902"></path><path id="SvgjsPath2102" d="M 434.19973114390433 201.6L 434.19973114390433 149.184Q 434.19973114390433 149.184 434.19973114390433 149.184L 441.75103081597223 149.184Q 441.75103081597223 149.184 441.75103081597223 149.184L 441.75103081597223 149.184L 441.75103081597223 201.6L 441.75103081597223 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 434.19973114390433 201.6L 434.19973114390433 149.184Q 434.19973114390433 149.184 434.19973114390433 149.184L 441.75103081597223 149.184Q 441.75103081597223 149.184 441.75103081597223 149.184L 441.75103081597223 149.184L 441.75103081597223 201.6L 441.75103081597223 201.6z" pathFrom="M 434.19973114390433 201.6L 434.19973114390433 201.6L 441.75103081597223 201.6L 441.75103081597223 201.6L 441.75103081597223 201.6L 441.75103081597223 201.6L 441.75103081597223 201.6L 434.19973114390433 201.6" cy="149.184" cx="441.75103081597223" j="29" val="26" barHeight="52.416" barWidth="7.551299672067902"></path><path id="SvgjsPath2103" d="M 449.3023304880401 201.6L 449.3023304880401 118.944Q 449.3023304880401 118.944 449.3023304880401 118.944L 456.853630160108 118.944Q 456.853630160108 118.944 456.853630160108 118.944L 456.853630160108 118.944L 456.853630160108 201.6L 456.853630160108 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 449.3023304880401 201.6L 449.3023304880401 118.944Q 449.3023304880401 118.944 449.3023304880401 118.944L 456.853630160108 118.944Q 456.853630160108 118.944 456.853630160108 118.944L 456.853630160108 118.944L 456.853630160108 201.6L 456.853630160108 201.6z" pathFrom="M 449.3023304880401 201.6L 449.3023304880401 201.6L 456.853630160108 201.6L 456.853630160108 201.6L 456.853630160108 201.6L 456.853630160108 201.6L 456.853630160108 201.6L 449.3023304880401 201.6" cy="118.944" cx="456.853630160108" j="30" val="41" barHeight="82.65599999999999" barWidth="7.551299672067902"></path><path id="SvgjsPath2104" d="M 464.404929832176 201.6L 464.404929832176 157.248Q 464.404929832176 157.248 464.404929832176 157.248L 471.9562295042439 157.248Q 471.9562295042439 157.248 471.9562295042439 157.248L 471.9562295042439 157.248L 471.9562295042439 201.6L 471.9562295042439 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 464.404929832176 201.6L 464.404929832176 157.248Q 464.404929832176 157.248 464.404929832176 157.248L 471.9562295042439 157.248Q 471.9562295042439 157.248 471.9562295042439 157.248L 471.9562295042439 157.248L 471.9562295042439 201.6L 471.9562295042439 201.6z" pathFrom="M 464.404929832176 201.6L 464.404929832176 201.6L 471.9562295042439 201.6L 471.9562295042439 201.6L 471.9562295042439 201.6L 471.9562295042439 201.6L 471.9562295042439 201.6L 464.404929832176 201.6" cy="157.248" cx="471.9562295042439" j="31" val="22" barHeight="44.352" barWidth="7.551299672067902"></path><path id="SvgjsPath2105" d="M 479.5075291763118 201.6L 479.5075291763118 108.86399999999999Q 479.5075291763118 108.86399999999999 479.5075291763118 108.86399999999999L 487.0588288483797 108.86399999999999Q 487.0588288483797 108.86399999999999 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 201.6L 487.0588288483797 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 479.5075291763118 201.6L 479.5075291763118 108.86399999999999Q 479.5075291763118 108.86399999999999 479.5075291763118 108.86399999999999L 487.0588288483797 108.86399999999999Q 487.0588288483797 108.86399999999999 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 201.6L 487.0588288483797 201.6z" pathFrom="M 479.5075291763118 201.6L 479.5075291763118 201.6L 487.0588288483797 201.6L 487.0588288483797 201.6L 487.0588288483797 201.6L 487.0588288483797 201.6L 487.0588288483797 201.6L 479.5075291763118 201.6" cy="108.86399999999999" cx="487.0588288483797" j="32" val="46" barHeight="92.736" barWidth="7.551299672067902"></path><path id="SvgjsPath2106" d="M 494.6101285204476 201.6L 494.6101285204476 106.848Q 494.6101285204476 106.848 494.6101285204476 106.848L 502.1614281925155 106.848Q 502.1614281925155 106.848 502.1614281925155 106.848L 502.1614281925155 106.848L 502.1614281925155 201.6L 502.1614281925155 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 494.6101285204476 201.6L 494.6101285204476 106.848Q 494.6101285204476 106.848 494.6101285204476 106.848L 502.1614281925155 106.848Q 502.1614281925155 106.848 502.1614281925155 106.848L 502.1614281925155 106.848L 502.1614281925155 201.6L 502.1614281925155 201.6z" pathFrom="M 494.6101285204476 201.6L 494.6101285204476 201.6L 502.1614281925155 201.6L 502.1614281925155 201.6L 502.1614281925155 201.6L 502.1614281925155 201.6L 502.1614281925155 201.6L 494.6101285204476 201.6" cy="106.848" cx="502.1614281925155" j="33" val="47" barHeight="94.752" barWidth="7.551299672067902"></path><path id="SvgjsPath2107" d="M 509.71272786458337 201.6L 509.71272786458337 38.304Q 509.71272786458337 38.304 509.71272786458337 38.304L 517.2640275366513 38.304Q 517.2640275366513 38.304 517.2640275366513 38.304L 517.2640275366513 38.304L 517.2640275366513 201.6L 517.2640275366513 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 509.71272786458337 201.6L 509.71272786458337 38.304Q 509.71272786458337 38.304 509.71272786458337 38.304L 517.2640275366513 38.304Q 517.2640275366513 38.304 517.2640275366513 38.304L 517.2640275366513 38.304L 517.2640275366513 201.6L 517.2640275366513 201.6z" pathFrom="M 509.71272786458337 201.6L 509.71272786458337 201.6L 517.2640275366513 201.6L 517.2640275366513 201.6L 517.2640275366513 201.6L 517.2640275366513 201.6L 517.2640275366513 201.6L 509.71272786458337 201.6" cy="38.304" cx="517.2640275366513" j="34" val="81" barHeight="163.296" barWidth="7.551299672067902"></path><path id="SvgjsPath2108" d="M 524.8153272087192 201.6L 524.8153272087192 108.86399999999999Q 524.8153272087192 108.86399999999999 524.8153272087192 108.86399999999999L 532.3666268807871 108.86399999999999Q 532.3666268807871 108.86399999999999 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 201.6L 532.3666268807871 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 524.8153272087192 201.6L 524.8153272087192 108.86399999999999Q 524.8153272087192 108.86399999999999 524.8153272087192 108.86399999999999L 532.3666268807871 108.86399999999999Q 532.3666268807871 108.86399999999999 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 201.6L 532.3666268807871 201.6z" pathFrom="M 524.8153272087192 201.6L 524.8153272087192 201.6L 532.3666268807871 201.6L 532.3666268807871 201.6L 532.3666268807871 201.6L 532.3666268807871 201.6L 532.3666268807871 201.6L 524.8153272087192 201.6" cy="108.86399999999999" cx="532.3666268807871" j="35" val="46" barHeight="92.736" barWidth="7.551299672067902"></path><path id="SvgjsPath2109" d="M 539.917926552855 201.6L 539.917926552855 189.504Q 539.917926552855 189.504 539.917926552855 189.504L 547.4692262249229 189.504Q 547.4692262249229 189.504 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 201.6L 547.4692262249229 201.6z" fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 539.917926552855 201.6L 539.917926552855 189.504Q 539.917926552855 189.504 539.917926552855 189.504L 547.4692262249229 189.504Q 547.4692262249229 189.504 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 201.6L 547.4692262249229 201.6z" pathFrom="M 539.917926552855 201.6L 539.917926552855 201.6L 547.4692262249229 201.6L 547.4692262249229 201.6L 547.4692262249229 201.6L 547.4692262249229 201.6L 547.4692262249229 201.6L 539.917926552855 201.6" cy="189.504" cx="547.4692262249229" j="36" val="6" barHeight="12.096" barWidth="7.551299672067902"></path></g><g id="SvgjsG2110" class="apexcharts-series" seriesName="Social" rel="2" data:realIndex="1"><path id="SvgjsPath2112" d="M -3.775649836033951 199.584L -3.775649836033951 195.552Q -3.775649836033951 195.552 -3.775649836033951 195.552L 3.775649836033951 195.552Q 3.775649836033951 195.552 3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 199.584L 3.775649836033951 199.584z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M -3.775649836033951 199.584L -3.775649836033951 195.552Q -3.775649836033951 195.552 -3.775649836033951 195.552L 3.775649836033951 195.552Q 3.775649836033951 195.552 3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 199.584L 3.775649836033951 199.584z" pathFrom="M -3.775649836033951 199.584L -3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 199.584L 3.775649836033951 199.584L -3.775649836033951 199.584" cy="195.552" cx="3.775649836033951" j="0" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2113" d="M 11.326949508101853 201.6L 11.326949508101853 191.51999999999998Q 11.326949508101853 191.51999999999998 11.326949508101853 191.51999999999998L 18.878249180169753 191.51999999999998Q 18.878249180169753 191.51999999999998 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 201.6L 18.878249180169753 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 11.326949508101853 201.6L 11.326949508101853 191.51999999999998Q 11.326949508101853 191.51999999999998 11.326949508101853 191.51999999999998L 18.878249180169753 191.51999999999998Q 18.878249180169753 191.51999999999998 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 201.6L 18.878249180169753 201.6z" pathFrom="M 11.326949508101853 201.6L 11.326949508101853 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 18.878249180169753 201.6L 11.326949508101853 201.6" cy="191.51999999999998" cx="18.878249180169757" j="1" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2114" d="M 26.42954885223766 201.6L 26.42954885223766 193.536Q 26.42954885223766 193.536 26.42954885223766 193.536L 33.98084852430556 193.536Q 33.98084852430556 193.536 33.98084852430556 193.536L 33.98084852430556 193.536L 33.98084852430556 201.6L 33.98084852430556 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 26.42954885223766 201.6L 26.42954885223766 193.536Q 26.42954885223766 193.536 26.42954885223766 193.536L 33.98084852430556 193.536Q 33.98084852430556 193.536 33.98084852430556 193.536L 33.98084852430556 193.536L 33.98084852430556 201.6L 33.98084852430556 201.6z" pathFrom="M 26.42954885223766 201.6L 26.42954885223766 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 33.98084852430556 201.6L 26.42954885223766 201.6" cy="193.536" cx="33.98084852430556" j="2" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2115" d="M 41.53214819637346 201.6L 41.53214819637346 195.552Q 41.53214819637346 195.552 41.53214819637346 195.552L 49.08344786844137 195.552Q 49.08344786844137 195.552 49.08344786844137 195.552L 49.08344786844137 195.552L 49.08344786844137 201.6L 49.08344786844137 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 41.53214819637346 201.6L 41.53214819637346 195.552Q 41.53214819637346 195.552 41.53214819637346 195.552L 49.08344786844137 195.552Q 49.08344786844137 195.552 49.08344786844137 195.552L 49.08344786844137 195.552L 49.08344786844137 201.6L 49.08344786844137 201.6z" pathFrom="M 41.53214819637346 201.6L 41.53214819637346 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 49.08344786844137 201.6L 41.53214819637346 201.6" cy="195.552" cx="49.08344786844137" j="3" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2116" d="M 56.63474754050927 201.6L 56.63474754050927 195.552Q 56.63474754050927 195.552 56.63474754050927 195.552L 64.18604721257717 195.552Q 64.18604721257717 195.552 64.18604721257717 195.552L 64.18604721257717 195.552L 64.18604721257717 201.6L 64.18604721257717 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 56.63474754050927 201.6L 56.63474754050927 195.552Q 56.63474754050927 195.552 56.63474754050927 195.552L 64.18604721257717 195.552Q 64.18604721257717 195.552 64.18604721257717 195.552L 64.18604721257717 195.552L 64.18604721257717 201.6L 64.18604721257717 201.6z" pathFrom="M 56.63474754050927 201.6L 56.63474754050927 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 64.18604721257717 201.6L 56.63474754050927 201.6" cy="195.552" cx="64.18604721257717" j="4" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2117" d="M 71.73734688464506 199.584L 71.73734688464506 197.568Q 71.73734688464506 197.568 71.73734688464506 197.568L 79.28864655671296 197.568Q 79.28864655671296 197.568 79.28864655671296 197.568L 79.28864655671296 197.568L 79.28864655671296 199.584L 79.28864655671296 199.584z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 71.73734688464506 199.584L 71.73734688464506 197.568Q 71.73734688464506 197.568 71.73734688464506 197.568L 79.28864655671296 197.568Q 79.28864655671296 197.568 79.28864655671296 197.568L 79.28864655671296 197.568L 79.28864655671296 199.584L 79.28864655671296 199.584z" pathFrom="M 71.73734688464506 199.584L 71.73734688464506 199.584L 79.28864655671296 199.584L 79.28864655671296 199.584L 79.28864655671296 199.584L 79.28864655671296 199.584L 79.28864655671296 199.584L 71.73734688464506 199.584" cy="197.568" cx="79.28864655671296" j="5" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2118" d="M 86.83994622878087 199.584L 86.83994622878087 191.52Q 86.83994622878087 191.52 86.83994622878087 191.52L 94.39124590084877 191.52Q 94.39124590084877 191.52 94.39124590084877 191.52L 94.39124590084877 191.52L 94.39124590084877 199.584L 94.39124590084877 199.584z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 86.83994622878087 199.584L 86.83994622878087 191.52Q 86.83994622878087 191.52 86.83994622878087 191.52L 94.39124590084877 191.52Q 94.39124590084877 191.52 94.39124590084877 191.52L 94.39124590084877 191.52L 94.39124590084877 199.584L 94.39124590084877 199.584z" pathFrom="M 86.83994622878087 199.584L 86.83994622878087 199.584L 94.39124590084877 199.584L 94.39124590084877 199.584L 94.39124590084877 199.584L 94.39124590084877 199.584L 94.39124590084877 199.584L 86.83994622878087 199.584" cy="191.52" cx="94.39124590084879" j="6" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2119" d="M 101.94254557291667 201.6L 101.94254557291667 187.488Q 101.94254557291667 187.488 101.94254557291667 187.488L 109.49384524498457 187.488Q 109.49384524498457 187.488 109.49384524498457 187.488L 109.49384524498457 187.488L 109.49384524498457 201.6L 109.49384524498457 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 101.94254557291667 201.6L 101.94254557291667 187.488Q 101.94254557291667 187.488 101.94254557291667 187.488L 109.49384524498457 187.488Q 109.49384524498457 187.488 109.49384524498457 187.488L 109.49384524498457 187.488L 109.49384524498457 201.6L 109.49384524498457 201.6z" pathFrom="M 101.94254557291667 201.6L 101.94254557291667 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 109.49384524498457 201.6L 101.94254557291667 201.6" cy="187.488" cx="109.49384524498458" j="7" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2120" d="M 117.04514491705248 201.6L 117.04514491705248 191.51999999999998Q 117.04514491705248 191.51999999999998 117.04514491705248 191.51999999999998L 124.59644458912038 191.51999999999998Q 124.59644458912038 191.51999999999998 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 201.6L 124.59644458912038 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 117.04514491705248 201.6L 117.04514491705248 191.51999999999998Q 117.04514491705248 191.51999999999998 117.04514491705248 191.51999999999998L 124.59644458912038 191.51999999999998Q 124.59644458912038 191.51999999999998 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 201.6L 124.59644458912038 201.6z" pathFrom="M 117.04514491705248 201.6L 117.04514491705248 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 124.59644458912038 201.6L 117.04514491705248 201.6" cy="191.51999999999998" cx="124.59644458912038" j="8" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2121" d="M 132.14774426118828 201.6L 132.14774426118828 199.584Q 132.14774426118828 199.584 132.14774426118828 199.584L 139.69904393325618 199.584Q 139.69904393325618 199.584 139.69904393325618 199.584L 139.69904393325618 199.584L 139.69904393325618 201.6L 139.69904393325618 201.6z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 132.14774426118828 201.6L 132.14774426118828 199.584Q 132.14774426118828 199.584 132.14774426118828 199.584L 139.69904393325618 199.584Q 139.69904393325618 199.584 139.69904393325618 199.584L 139.69904393325618 199.584L 139.69904393325618 201.6L 139.69904393325618 201.6z" pathFrom="M 132.14774426118828 201.6L 132.14774426118828 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 139.69904393325618 201.6L 132.14774426118828 201.6" cy="199.584" cx="139.69904393325618" j="9" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2122" d="M 147.25034360532408 197.56799999999998L 147.25034360532408 193.53599999999997Q 147.25034360532408 193.53599999999997 147.25034360532408 193.53599999999997L 154.80164327739197 193.53599999999997Q 154.80164327739197 193.53599999999997 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 147.25034360532408 197.56799999999998L 147.25034360532408 193.53599999999997Q 147.25034360532408 193.53599999999997 147.25034360532408 193.53599999999997L 154.80164327739197 193.53599999999997Q 154.80164327739197 193.53599999999997 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998z" pathFrom="M 147.25034360532408 197.56799999999998L 147.25034360532408 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 154.80164327739197 197.56799999999998L 147.25034360532408 197.56799999999998" cy="193.53599999999997" cx="154.80164327739197" j="10" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2123" d="M 162.3529429494599 177.408L 162.3529429494599 167.32799999999997Q 162.3529429494599 167.32799999999997 162.3529429494599 167.32799999999997L 169.9042426215278 167.32799999999997Q 169.9042426215278 167.32799999999997 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 177.408L 169.9042426215278 177.408z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 162.3529429494599 177.408L 162.3529429494599 167.32799999999997Q 162.3529429494599 167.32799999999997 162.3529429494599 167.32799999999997L 169.9042426215278 167.32799999999997Q 169.9042426215278 167.32799999999997 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 177.408L 169.9042426215278 177.408z" pathFrom="M 162.3529429494599 177.408L 162.3529429494599 177.408L 169.9042426215278 177.408L 169.9042426215278 177.408L 169.9042426215278 177.408L 169.9042426215278 177.408L 169.9042426215278 177.408L 162.3529429494599 177.408" cy="167.32799999999997" cx="169.9042426215278" j="11" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2124" d="M 177.4555422935957 191.51999999999998L 177.4555422935957 185.47199999999998Q 177.4555422935957 185.47199999999998 177.4555422935957 185.47199999999998L 185.0068419656636 185.47199999999998Q 185.0068419656636 185.47199999999998 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 177.4555422935957 191.51999999999998L 177.4555422935957 185.47199999999998Q 177.4555422935957 185.47199999999998 177.4555422935957 185.47199999999998L 185.0068419656636 185.47199999999998Q 185.0068419656636 185.47199999999998 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998z" pathFrom="M 177.4555422935957 191.51999999999998L 177.4555422935957 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 185.0068419656636 191.51999999999998L 177.4555422935957 191.51999999999998" cy="185.47199999999998" cx="185.0068419656636" j="12" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2125" d="M 192.5581416377315 185.47199999999998L 192.5581416377315 181.43999999999997Q 192.5581416377315 181.43999999999997 192.5581416377315 181.43999999999997L 200.1094413097994 181.43999999999997Q 200.1094413097994 181.43999999999997 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 192.5581416377315 185.47199999999998L 192.5581416377315 181.43999999999997Q 192.5581416377315 181.43999999999997 192.5581416377315 181.43999999999997L 200.1094413097994 181.43999999999997Q 200.1094413097994 181.43999999999997 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998z" pathFrom="M 192.5581416377315 185.47199999999998L 192.5581416377315 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 200.1094413097994 185.47199999999998L 192.5581416377315 185.47199999999998" cy="181.43999999999997" cx="200.1094413097994" j="13" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2126" d="M 207.6607409818673 157.248L 207.6607409818673 145.152Q 207.6607409818673 145.152 207.6607409818673 145.152L 215.2120406539352 145.152Q 215.2120406539352 145.152 215.2120406539352 145.152L 215.2120406539352 145.152L 215.2120406539352 157.248L 215.2120406539352 157.248z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 207.6607409818673 157.248L 207.6607409818673 145.152Q 207.6607409818673 145.152 207.6607409818673 145.152L 215.2120406539352 145.152Q 215.2120406539352 145.152 215.2120406539352 145.152L 215.2120406539352 145.152L 215.2120406539352 157.248L 215.2120406539352 157.248z" pathFrom="M 207.6607409818673 157.248L 207.6607409818673 157.248L 215.2120406539352 157.248L 215.2120406539352 157.248L 215.2120406539352 157.248L 215.2120406539352 157.248L 215.2120406539352 157.248L 207.6607409818673 157.248" cy="145.152" cx="215.2120406539352" j="14" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2127" d="M 222.7633403260031 189.504L 222.7633403260031 175.392Q 222.7633403260031 175.392 222.7633403260031 175.392L 230.314639998071 175.392Q 230.314639998071 175.392 230.314639998071 175.392L 230.314639998071 175.392L 230.314639998071 189.504L 230.314639998071 189.504z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 222.7633403260031 189.504L 222.7633403260031 175.392Q 222.7633403260031 175.392 222.7633403260031 175.392L 230.314639998071 175.392Q 230.314639998071 175.392 230.314639998071 175.392L 230.314639998071 175.392L 230.314639998071 189.504L 230.314639998071 189.504z" pathFrom="M 222.7633403260031 189.504L 222.7633403260031 189.504L 230.314639998071 189.504L 230.314639998071 189.504L 230.314639998071 189.504L 230.314639998071 189.504L 230.314639998071 189.504L 222.7633403260031 189.504" cy="175.392" cx="230.314639998071" j="15" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2128" d="M 237.8659396701389 185.47199999999998L 237.8659396701389 171.35999999999999Q 237.8659396701389 171.35999999999999 237.8659396701389 171.35999999999999L 245.4172393422068 171.35999999999999Q 245.4172393422068 171.35999999999999 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 237.8659396701389 185.47199999999998L 237.8659396701389 171.35999999999999Q 237.8659396701389 171.35999999999999 237.8659396701389 171.35999999999999L 245.4172393422068 171.35999999999999Q 245.4172393422068 171.35999999999999 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998z" pathFrom="M 237.8659396701389 185.47199999999998L 237.8659396701389 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 245.4172393422068 185.47199999999998L 237.8659396701389 185.47199999999998" cy="171.35999999999999" cx="245.4172393422068" j="16" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2129" d="M 252.9685390142747 189.504L 252.9685390142747 187.488Q 252.9685390142747 187.488 252.9685390142747 187.488L 260.5198386863426 187.488Q 260.5198386863426 187.488 260.5198386863426 187.488L 260.5198386863426 187.488L 260.5198386863426 189.504L 260.5198386863426 189.504z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 252.9685390142747 189.504L 252.9685390142747 187.488Q 252.9685390142747 187.488 252.9685390142747 187.488L 260.5198386863426 187.488Q 260.5198386863426 187.488 260.5198386863426 187.488L 260.5198386863426 187.488L 260.5198386863426 189.504L 260.5198386863426 189.504z" pathFrom="M 252.9685390142747 189.504L 252.9685390142747 189.504L 260.5198386863426 189.504L 260.5198386863426 189.504L 260.5198386863426 189.504L 260.5198386863426 189.504L 260.5198386863426 189.504L 252.9685390142747 189.504" cy="187.488" cx="260.5198386863426" j="17" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2130" d="M 268.0711383584105 193.536L 268.0711383584105 183.456Q 268.0711383584105 183.456 268.0711383584105 183.456L 275.6224380304784 183.456Q 275.6224380304784 183.456 275.6224380304784 183.456L 275.6224380304784 183.456L 275.6224380304784 193.536L 275.6224380304784 193.536z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 268.0711383584105 193.536L 268.0711383584105 183.456Q 268.0711383584105 183.456 268.0711383584105 183.456L 275.6224380304784 183.456Q 275.6224380304784 183.456 275.6224380304784 183.456L 275.6224380304784 183.456L 275.6224380304784 193.536L 275.6224380304784 193.536z" pathFrom="M 268.0711383584105 193.536L 268.0711383584105 193.536L 275.6224380304784 193.536L 275.6224380304784 193.536L 275.6224380304784 193.536L 275.6224380304784 193.536L 275.6224380304784 193.536L 268.0711383584105 193.536" cy="183.456" cx="275.6224380304784" j="18" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2131" d="M 283.1737377025463 199.584L 283.1737377025463 189.504Q 283.1737377025463 189.504 283.1737377025463 189.504L 290.7250373746142 189.504Q 290.7250373746142 189.504 290.7250373746142 189.504L 290.7250373746142 189.504L 290.7250373746142 199.584L 290.7250373746142 199.584z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 283.1737377025463 199.584L 283.1737377025463 189.504Q 283.1737377025463 189.504 283.1737377025463 189.504L 290.7250373746142 189.504Q 290.7250373746142 189.504 290.7250373746142 189.504L 290.7250373746142 189.504L 290.7250373746142 199.584L 290.7250373746142 199.584z" pathFrom="M 283.1737377025463 199.584L 283.1737377025463 199.584L 290.7250373746142 199.584L 290.7250373746142 199.584L 290.7250373746142 199.584L 290.7250373746142 199.584L 290.7250373746142 199.584L 283.1737377025463 199.584" cy="189.504" cx="290.7250373746142" j="19" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2132" d="M 298.2763370466821 185.47199999999998L 298.2763370466821 181.43999999999997Q 298.2763370466821 181.43999999999997 298.2763370466821 181.43999999999997L 305.82763671875 181.43999999999997Q 305.82763671875 181.43999999999997 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 298.2763370466821 185.47199999999998L 298.2763370466821 181.43999999999997Q 298.2763370466821 181.43999999999997 298.2763370466821 181.43999999999997L 305.82763671875 181.43999999999997Q 305.82763671875 181.43999999999997 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998z" pathFrom="M 298.2763370466821 185.47199999999998L 298.2763370466821 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 305.82763671875 185.47199999999998L 298.2763370466821 185.47199999999998" cy="181.43999999999997" cx="305.82763671875" j="20" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2133" d="M 313.3789363908179 153.216L 313.3789363908179 129.024Q 313.3789363908179 129.024 313.3789363908179 129.024L 320.9302360628858 129.024Q 320.9302360628858 129.024 320.9302360628858 129.024L 320.9302360628858 129.024L 320.9302360628858 153.216L 320.9302360628858 153.216z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 313.3789363908179 153.216L 313.3789363908179 129.024Q 313.3789363908179 129.024 313.3789363908179 129.024L 320.9302360628858 129.024Q 320.9302360628858 129.024 320.9302360628858 129.024L 320.9302360628858 129.024L 320.9302360628858 153.216L 320.9302360628858 153.216z" pathFrom="M 313.3789363908179 153.216L 313.3789363908179 153.216L 320.9302360628858 153.216L 320.9302360628858 153.216L 320.9302360628858 153.216L 320.9302360628858 153.216L 320.9302360628858 153.216L 313.3789363908179 153.216" cy="129.024" cx="320.9302360628858" j="21" val="12" barHeight="24.192" barWidth="7.551299672067902"></path><path id="SvgjsPath2134" d="M 328.48153573495375 143.136L 328.48153573495375 135.072Q 328.48153573495375 135.072 328.48153573495375 135.072L 336.03283540702165 135.072Q 336.03283540702165 135.072 336.03283540702165 135.072L 336.03283540702165 135.072L 336.03283540702165 143.136L 336.03283540702165 143.136z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 328.48153573495375 143.136L 328.48153573495375 135.072Q 328.48153573495375 135.072 328.48153573495375 135.072L 336.03283540702165 135.072Q 336.03283540702165 135.072 336.03283540702165 135.072L 336.03283540702165 135.072L 336.03283540702165 143.136L 336.03283540702165 143.136z" pathFrom="M 328.48153573495375 143.136L 328.48153573495375 143.136L 336.03283540702165 143.136L 336.03283540702165 143.136L 336.03283540702165 143.136L 336.03283540702165 143.136L 336.03283540702165 143.136L 328.48153573495375 143.136" cy="135.072" cx="336.03283540702165" j="22" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2135" d="M 343.58413507908955 98.78399999999999L 343.58413507908955 86.68799999999999Q 343.58413507908955 86.68799999999999 343.58413507908955 86.68799999999999L 351.13543475115745 86.68799999999999Q 351.13543475115745 86.68799999999999 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 343.58413507908955 98.78399999999999L 343.58413507908955 86.68799999999999Q 343.58413507908955 86.68799999999999 343.58413507908955 86.68799999999999L 351.13543475115745 86.68799999999999Q 351.13543475115745 86.68799999999999 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999z" pathFrom="M 343.58413507908955 98.78399999999999L 343.58413507908955 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 351.13543475115745 98.78399999999999L 343.58413507908955 98.78399999999999" cy="86.68799999999999" cx="351.13543475115745" j="23" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2136" d="M 358.68673442322535 120.96L 358.68673442322535 84.672Q 358.68673442322535 84.672 358.68673442322535 84.672L 366.23803409529324 84.672Q 366.23803409529324 84.672 366.23803409529324 84.672L 366.23803409529324 84.672L 366.23803409529324 120.96L 366.23803409529324 120.96z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 358.68673442322535 120.96L 358.68673442322535 84.672Q 358.68673442322535 84.672 358.68673442322535 84.672L 366.23803409529324 84.672Q 366.23803409529324 84.672 366.23803409529324 84.672L 366.23803409529324 84.672L 366.23803409529324 120.96L 366.23803409529324 120.96z" pathFrom="M 358.68673442322535 120.96L 358.68673442322535 120.96L 366.23803409529324 120.96L 366.23803409529324 120.96L 366.23803409529324 120.96L 366.23803409529324 120.96L 366.23803409529324 120.96L 358.68673442322535 120.96" cy="84.672" cx="366.23803409529324" j="24" val="18" barHeight="36.288" barWidth="7.551299672067902"></path><path id="SvgjsPath2137" d="M 373.78933376736114 106.848L 373.78933376736114 100.8Q 373.78933376736114 100.8 373.78933376736114 100.8L 381.34063343942904 100.8Q 381.34063343942904 100.8 381.34063343942904 100.8L 381.34063343942904 100.8L 381.34063343942904 106.848L 381.34063343942904 106.848z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 373.78933376736114 106.848L 373.78933376736114 100.8Q 373.78933376736114 100.8 373.78933376736114 100.8L 381.34063343942904 100.8Q 381.34063343942904 100.8 381.34063343942904 100.8L 381.34063343942904 100.8L 381.34063343942904 106.848L 381.34063343942904 106.848z" pathFrom="M 373.78933376736114 106.848L 373.78933376736114 106.848L 381.34063343942904 106.848L 381.34063343942904 106.848L 381.34063343942904 106.848L 381.34063343942904 106.848L 381.34063343942904 106.848L 373.78933376736114 106.848" cy="100.8" cx="381.34063343942904" j="25" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2138" d="M 388.89193311149694 155.232L 388.89193311149694 145.152Q 388.89193311149694 145.152 388.89193311149694 145.152L 396.44323278356484 145.152Q 396.44323278356484 145.152 396.44323278356484 145.152L 396.44323278356484 145.152L 396.44323278356484 155.232L 396.44323278356484 155.232z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 388.89193311149694 155.232L 388.89193311149694 145.152Q 388.89193311149694 145.152 388.89193311149694 145.152L 396.44323278356484 145.152Q 396.44323278356484 145.152 396.44323278356484 145.152L 396.44323278356484 145.152L 396.44323278356484 155.232L 396.44323278356484 155.232z" pathFrom="M 388.89193311149694 155.232L 388.89193311149694 155.232L 396.44323278356484 155.232L 396.44323278356484 155.232L 396.44323278356484 155.232L 396.44323278356484 155.232L 396.44323278356484 155.232L 388.89193311149694 155.232" cy="145.152" cx="396.44323278356484" j="26" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2139" d="M 403.99453245563274 149.184L 403.99453245563274 145.152Q 403.99453245563274 145.152 403.99453245563274 145.152L 411.54583212770063 145.152Q 411.54583212770063 145.152 411.54583212770063 145.152L 411.54583212770063 145.152L 411.54583212770063 149.184L 411.54583212770063 149.184z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 403.99453245563274 149.184L 403.99453245563274 145.152Q 403.99453245563274 145.152 403.99453245563274 145.152L 411.54583212770063 145.152Q 411.54583212770063 145.152 411.54583212770063 145.152L 411.54583212770063 145.152L 411.54583212770063 149.184L 411.54583212770063 149.184z" pathFrom="M 403.99453245563274 149.184L 403.99453245563274 149.184L 411.54583212770063 149.184L 411.54583212770063 149.184L 411.54583212770063 149.184L 411.54583212770063 149.184L 411.54583212770063 149.184L 403.99453245563274 149.184" cy="145.152" cx="411.54583212770063" j="27" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2140" d="M 419.09713179976853 100.8L 419.09713179976853 74.592Q 419.09713179976853 74.592 419.09713179976853 74.592L 426.64843147183643 74.592Q 426.64843147183643 74.592 426.64843147183643 74.592L 426.64843147183643 74.592L 426.64843147183643 100.8L 426.64843147183643 100.8z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 419.09713179976853 100.8L 419.09713179976853 74.592Q 419.09713179976853 74.592 419.09713179976853 74.592L 426.64843147183643 74.592Q 426.64843147183643 74.592 426.64843147183643 74.592L 426.64843147183643 74.592L 426.64843147183643 100.8L 426.64843147183643 100.8z" pathFrom="M 419.09713179976853 100.8L 419.09713179976853 100.8L 426.64843147183643 100.8L 426.64843147183643 100.8L 426.64843147183643 100.8L 426.64843147183643 100.8L 426.64843147183643 100.8L 419.09713179976853 100.8" cy="74.592" cx="426.64843147183643" j="28" val="13" barHeight="26.208" barWidth="7.551299672067902"></path><path id="SvgjsPath2141" d="M 434.19973114390433 149.184L 434.19973114390433 118.944Q 434.19973114390433 118.944 434.19973114390433 118.944L 441.75103081597223 118.944Q 441.75103081597223 118.944 441.75103081597223 118.944L 441.75103081597223 118.944L 441.75103081597223 149.184L 441.75103081597223 149.184z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 434.19973114390433 149.184L 434.19973114390433 118.944Q 434.19973114390433 118.944 434.19973114390433 118.944L 441.75103081597223 118.944Q 441.75103081597223 118.944 441.75103081597223 118.944L 441.75103081597223 118.944L 441.75103081597223 149.184L 441.75103081597223 149.184z" pathFrom="M 434.19973114390433 149.184L 434.19973114390433 149.184L 441.75103081597223 149.184L 441.75103081597223 149.184L 441.75103081597223 149.184L 441.75103081597223 149.184L 441.75103081597223 149.184L 434.19973114390433 149.184" cy="118.944" cx="441.75103081597223" j="29" val="15" barHeight="30.24" barWidth="7.551299672067902"></path><path id="SvgjsPath2142" d="M 449.3023304880401 118.944L 449.3023304880401 78.624Q 449.3023304880401 78.624 449.3023304880401 78.624L 456.853630160108 78.624Q 456.853630160108 78.624 456.853630160108 78.624L 456.853630160108 78.624L 456.853630160108 118.944L 456.853630160108 118.944z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 449.3023304880401 118.944L 449.3023304880401 78.624Q 449.3023304880401 78.624 449.3023304880401 78.624L 456.853630160108 78.624Q 456.853630160108 78.624 456.853630160108 78.624L 456.853630160108 78.624L 456.853630160108 118.944L 456.853630160108 118.944z" pathFrom="M 449.3023304880401 118.944L 449.3023304880401 118.944L 456.853630160108 118.944L 456.853630160108 118.944L 456.853630160108 118.944L 456.853630160108 118.944L 456.853630160108 118.944L 449.3023304880401 118.944" cy="78.624" cx="456.853630160108" j="30" val="20" barHeight="40.32" barWidth="7.551299672067902"></path><path id="SvgjsPath2143" d="M 464.404929832176 157.248L 464.404929832176 62.495999999999995Q 464.404929832176 62.495999999999995 464.404929832176 62.495999999999995L 471.9562295042439 62.495999999999995Q 471.9562295042439 62.495999999999995 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 157.248L 471.9562295042439 157.248z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 464.404929832176 157.248L 464.404929832176 62.495999999999995Q 464.404929832176 62.495999999999995 464.404929832176 62.495999999999995L 471.9562295042439 62.495999999999995Q 471.9562295042439 62.495999999999995 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 157.248L 471.9562295042439 157.248z" pathFrom="M 464.404929832176 157.248L 464.404929832176 157.248L 471.9562295042439 157.248L 471.9562295042439 157.248L 471.9562295042439 157.248L 471.9562295042439 157.248L 471.9562295042439 157.248L 464.404929832176 157.248" cy="62.495999999999995" cx="471.9562295042439" j="31" val="47" barHeight="94.752" barWidth="7.551299672067902"></path><path id="SvgjsPath2144" d="M 479.5075291763118 108.86399999999999L 479.5075291763118 72.576Q 479.5075291763118 72.576 479.5075291763118 72.576L 487.0588288483797 72.576Q 487.0588288483797 72.576 487.0588288483797 72.576L 487.0588288483797 72.576L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 479.5075291763118 108.86399999999999L 479.5075291763118 72.576Q 479.5075291763118 72.576 479.5075291763118 72.576L 487.0588288483797 72.576Q 487.0588288483797 72.576 487.0588288483797 72.576L 487.0588288483797 72.576L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999z" pathFrom="M 479.5075291763118 108.86399999999999L 479.5075291763118 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 487.0588288483797 108.86399999999999L 479.5075291763118 108.86399999999999" cy="72.576" cx="487.0588288483797" j="32" val="18" barHeight="36.288" barWidth="7.551299672067902"></path><path id="SvgjsPath2145" d="M 494.6101285204476 106.848L 494.6101285204476 76.608Q 494.6101285204476 76.608 494.6101285204476 76.608L 502.1614281925155 76.608Q 502.1614281925155 76.608 502.1614281925155 76.608L 502.1614281925155 76.608L 502.1614281925155 106.848L 502.1614281925155 106.848z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 494.6101285204476 106.848L 494.6101285204476 76.608Q 494.6101285204476 76.608 494.6101285204476 76.608L 502.1614281925155 76.608Q 502.1614281925155 76.608 502.1614281925155 76.608L 502.1614281925155 76.608L 502.1614281925155 106.848L 502.1614281925155 106.848z" pathFrom="M 494.6101285204476 106.848L 494.6101285204476 106.848L 502.1614281925155 106.848L 502.1614281925155 106.848L 502.1614281925155 106.848L 502.1614281925155 106.848L 502.1614281925155 106.848L 494.6101285204476 106.848" cy="76.608" cx="502.1614281925155" j="33" val="15" barHeight="30.24" barWidth="7.551299672067902"></path><path id="SvgjsPath2146" d="M 509.71272786458337 38.304L 509.71272786458337 16.128000000000004Q 509.71272786458337 16.128000000000004 509.71272786458337 16.128000000000004L 517.2640275366513 16.128000000000004Q 517.2640275366513 16.128000000000004 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 38.304L 517.2640275366513 38.304z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 509.71272786458337 38.304L 509.71272786458337 16.128000000000004Q 509.71272786458337 16.128000000000004 509.71272786458337 16.128000000000004L 517.2640275366513 16.128000000000004Q 517.2640275366513 16.128000000000004 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 38.304L 517.2640275366513 38.304z" pathFrom="M 509.71272786458337 38.304L 509.71272786458337 38.304L 517.2640275366513 38.304L 517.2640275366513 38.304L 517.2640275366513 38.304L 517.2640275366513 38.304L 517.2640275366513 38.304L 509.71272786458337 38.304" cy="16.128000000000004" cx="517.2640275366513" j="34" val="11" barHeight="22.176" barWidth="7.551299672067902"></path><path id="SvgjsPath2147" d="M 524.8153272087192 108.86399999999999L 524.8153272087192 88.704Q 524.8153272087192 88.704 524.8153272087192 88.704L 532.3666268807871 88.704Q 532.3666268807871 88.704 532.3666268807871 88.704L 532.3666268807871 88.704L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 524.8153272087192 108.86399999999999L 524.8153272087192 88.704Q 524.8153272087192 88.704 524.8153272087192 88.704L 532.3666268807871 88.704Q 532.3666268807871 88.704 532.3666268807871 88.704L 532.3666268807871 88.704L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999z" pathFrom="M 524.8153272087192 108.86399999999999L 524.8153272087192 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 532.3666268807871 108.86399999999999L 524.8153272087192 108.86399999999999" cy="88.704" cx="532.3666268807871" j="35" val="10" barHeight="20.16" barWidth="7.551299672067902"></path><path id="SvgjsPath2148" d="M 539.917926552855 189.504L 539.917926552855 189.504Q 539.917926552855 189.504 539.917926552855 189.504L 547.4692262249229 189.504Q 547.4692262249229 189.504 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504z" fill="rgba(121,166,220,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 539.917926552855 189.504L 539.917926552855 189.504Q 539.917926552855 189.504 539.917926552855 189.504L 547.4692262249229 189.504Q 547.4692262249229 189.504 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504z" pathFrom="M 539.917926552855 189.504L 539.917926552855 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 539.917926552855 189.504" cy="189.504" cx="547.4692262249229" j="36" val="0" barHeight="0" barWidth="7.551299672067902"></path></g><g id="SvgjsG2149" class="apexcharts-series" seriesName="Other" rel="3" data:realIndex="2"><path id="SvgjsPath2151" d="M -3.775649836033951 195.552L -3.775649836033951 191.51999999999998Q -3.775649836033951 191.51999999999998 -3.775649836033951 191.51999999999998L 3.775649836033951 191.51999999999998Q 3.775649836033951 191.51999999999998 3.775649836033951 191.51999999999998L 3.775649836033951 191.51999999999998L 3.775649836033951 195.552L 3.775649836033951 195.552z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M -3.775649836033951 195.552L -3.775649836033951 191.51999999999998Q -3.775649836033951 191.51999999999998 -3.775649836033951 191.51999999999998L 3.775649836033951 191.51999999999998Q 3.775649836033951 191.51999999999998 3.775649836033951 191.51999999999998L 3.775649836033951 191.51999999999998L 3.775649836033951 195.552L 3.775649836033951 195.552z" pathFrom="M -3.775649836033951 195.552L -3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 195.552L 3.775649836033951 195.552L -3.775649836033951 195.552" cy="191.51999999999998" cx="3.775649836033951" j="0" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2152" d="M 11.326949508101853 191.51999999999998L 11.326949508101853 173.37599999999998Q 11.326949508101853 173.37599999999998 11.326949508101853 173.37599999999998L 18.878249180169753 173.37599999999998Q 18.878249180169753 173.37599999999998 18.878249180169753 173.37599999999998L 18.878249180169753 173.37599999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 11.326949508101853 191.51999999999998L 11.326949508101853 173.37599999999998Q 11.326949508101853 173.37599999999998 11.326949508101853 173.37599999999998L 18.878249180169753 173.37599999999998Q 18.878249180169753 173.37599999999998 18.878249180169753 173.37599999999998L 18.878249180169753 173.37599999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998z" pathFrom="M 11.326949508101853 191.51999999999998L 11.326949508101853 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 18.878249180169753 191.51999999999998L 11.326949508101853 191.51999999999998" cy="173.37599999999998" cx="18.878249180169757" j="1" val="9" barHeight="18.144" barWidth="7.551299672067902"></path><path id="SvgjsPath2153" d="M 26.42954885223766 193.536L 26.42954885223766 191.52Q 26.42954885223766 191.52 26.42954885223766 191.52L 33.98084852430556 191.52Q 33.98084852430556 191.52 33.98084852430556 191.52L 33.98084852430556 191.52L 33.98084852430556 193.536L 33.98084852430556 193.536z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 26.42954885223766 193.536L 26.42954885223766 191.52Q 26.42954885223766 191.52 26.42954885223766 191.52L 33.98084852430556 191.52Q 33.98084852430556 191.52 33.98084852430556 191.52L 33.98084852430556 191.52L 33.98084852430556 193.536L 33.98084852430556 193.536z" pathFrom="M 26.42954885223766 193.536L 26.42954885223766 193.536L 33.98084852430556 193.536L 33.98084852430556 193.536L 33.98084852430556 193.536L 33.98084852430556 193.536L 33.98084852430556 193.536L 26.42954885223766 193.536" cy="191.52" cx="33.98084852430556" j="2" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2154" d="M 41.53214819637346 195.552L 41.53214819637346 181.44Q 41.53214819637346 181.44 41.53214819637346 181.44L 49.08344786844137 181.44Q 49.08344786844137 181.44 49.08344786844137 181.44L 49.08344786844137 181.44L 49.08344786844137 195.552L 49.08344786844137 195.552z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 41.53214819637346 195.552L 41.53214819637346 181.44Q 41.53214819637346 181.44 41.53214819637346 181.44L 49.08344786844137 181.44Q 49.08344786844137 181.44 49.08344786844137 181.44L 49.08344786844137 181.44L 49.08344786844137 195.552L 49.08344786844137 195.552z" pathFrom="M 41.53214819637346 195.552L 41.53214819637346 195.552L 49.08344786844137 195.552L 49.08344786844137 195.552L 49.08344786844137 195.552L 49.08344786844137 195.552L 49.08344786844137 195.552L 41.53214819637346 195.552" cy="181.44" cx="49.08344786844137" j="3" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2155" d="M 56.63474754050927 195.552L 56.63474754050927 179.42399999999998Q 56.63474754050927 179.42399999999998 56.63474754050927 179.42399999999998L 64.18604721257717 179.42399999999998Q 64.18604721257717 179.42399999999998 64.18604721257717 179.42399999999998L 64.18604721257717 179.42399999999998L 64.18604721257717 195.552L 64.18604721257717 195.552z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 56.63474754050927 195.552L 56.63474754050927 179.42399999999998Q 56.63474754050927 179.42399999999998 56.63474754050927 179.42399999999998L 64.18604721257717 179.42399999999998Q 64.18604721257717 179.42399999999998 64.18604721257717 179.42399999999998L 64.18604721257717 179.42399999999998L 64.18604721257717 195.552L 64.18604721257717 195.552z" pathFrom="M 56.63474754050927 195.552L 56.63474754050927 195.552L 64.18604721257717 195.552L 64.18604721257717 195.552L 64.18604721257717 195.552L 64.18604721257717 195.552L 64.18604721257717 195.552L 56.63474754050927 195.552" cy="179.42399999999998" cx="64.18604721257717" j="4" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2156" d="M 71.73734688464506 197.568L 71.73734688464506 191.52Q 71.73734688464506 191.52 71.73734688464506 191.52L 79.28864655671296 191.52Q 79.28864655671296 191.52 79.28864655671296 191.52L 79.28864655671296 191.52L 79.28864655671296 197.568L 79.28864655671296 197.568z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 71.73734688464506 197.568L 71.73734688464506 191.52Q 71.73734688464506 191.52 71.73734688464506 191.52L 79.28864655671296 191.52Q 79.28864655671296 191.52 79.28864655671296 191.52L 79.28864655671296 191.52L 79.28864655671296 197.568L 79.28864655671296 197.568z" pathFrom="M 71.73734688464506 197.568L 71.73734688464506 197.568L 79.28864655671296 197.568L 79.28864655671296 197.568L 79.28864655671296 197.568L 79.28864655671296 197.568L 79.28864655671296 197.568L 71.73734688464506 197.568" cy="191.52" cx="79.28864655671296" j="5" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2157" d="M 86.83994622878087 191.52L 86.83994622878087 179.424Q 86.83994622878087 179.424 86.83994622878087 179.424L 94.39124590084877 179.424Q 94.39124590084877 179.424 94.39124590084877 179.424L 94.39124590084877 179.424L 94.39124590084877 191.52L 94.39124590084877 191.52z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 86.83994622878087 191.52L 86.83994622878087 179.424Q 86.83994622878087 179.424 86.83994622878087 179.424L 94.39124590084877 179.424Q 94.39124590084877 179.424 94.39124590084877 179.424L 94.39124590084877 179.424L 94.39124590084877 191.52L 94.39124590084877 191.52z" pathFrom="M 86.83994622878087 191.52L 86.83994622878087 191.52L 94.39124590084877 191.52L 94.39124590084877 191.52L 94.39124590084877 191.52L 94.39124590084877 191.52L 94.39124590084877 191.52L 86.83994622878087 191.52" cy="179.424" cx="94.39124590084879" j="6" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2158" d="M 101.94254557291667 187.488L 101.94254557291667 177.408Q 101.94254557291667 177.408 101.94254557291667 177.408L 109.49384524498457 177.408Q 109.49384524498457 177.408 109.49384524498457 177.408L 109.49384524498457 177.408L 109.49384524498457 187.488L 109.49384524498457 187.488z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 101.94254557291667 187.488L 101.94254557291667 177.408Q 101.94254557291667 177.408 101.94254557291667 177.408L 109.49384524498457 177.408Q 109.49384524498457 177.408 109.49384524498457 177.408L 109.49384524498457 177.408L 109.49384524498457 187.488L 109.49384524498457 187.488z" pathFrom="M 101.94254557291667 187.488L 101.94254557291667 187.488L 109.49384524498457 187.488L 109.49384524498457 187.488L 109.49384524498457 187.488L 109.49384524498457 187.488L 109.49384524498457 187.488L 101.94254557291667 187.488" cy="177.408" cx="109.49384524498458" j="7" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2159" d="M 117.04514491705248 191.51999999999998L 117.04514491705248 181.43999999999997Q 117.04514491705248 181.43999999999997 117.04514491705248 181.43999999999997L 124.59644458912038 181.43999999999997Q 124.59644458912038 181.43999999999997 124.59644458912038 181.43999999999997L 124.59644458912038 181.43999999999997L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 117.04514491705248 191.51999999999998L 117.04514491705248 181.43999999999997Q 117.04514491705248 181.43999999999997 117.04514491705248 181.43999999999997L 124.59644458912038 181.43999999999997Q 124.59644458912038 181.43999999999997 124.59644458912038 181.43999999999997L 124.59644458912038 181.43999999999997L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998z" pathFrom="M 117.04514491705248 191.51999999999998L 117.04514491705248 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 124.59644458912038 191.51999999999998L 117.04514491705248 191.51999999999998" cy="181.43999999999997" cx="124.59644458912038" j="8" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2160" d="M 132.14774426118828 199.584L 132.14774426118828 191.52Q 132.14774426118828 191.52 132.14774426118828 191.52L 139.69904393325618 191.52Q 139.69904393325618 191.52 139.69904393325618 191.52L 139.69904393325618 191.52L 139.69904393325618 199.584L 139.69904393325618 199.584z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 132.14774426118828 199.584L 132.14774426118828 191.52Q 132.14774426118828 191.52 132.14774426118828 191.52L 139.69904393325618 191.52Q 139.69904393325618 191.52 139.69904393325618 191.52L 139.69904393325618 191.52L 139.69904393325618 199.584L 139.69904393325618 199.584z" pathFrom="M 132.14774426118828 199.584L 132.14774426118828 199.584L 139.69904393325618 199.584L 139.69904393325618 199.584L 139.69904393325618 199.584L 139.69904393325618 199.584L 139.69904393325618 199.584L 132.14774426118828 199.584" cy="191.52" cx="139.69904393325618" j="9" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2161" d="M 147.25034360532408 193.53599999999997L 147.25034360532408 181.43999999999997Q 147.25034360532408 181.43999999999997 147.25034360532408 181.43999999999997L 154.80164327739197 181.43999999999997Q 154.80164327739197 181.43999999999997 154.80164327739197 181.43999999999997L 154.80164327739197 181.43999999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 147.25034360532408 193.53599999999997L 147.25034360532408 181.43999999999997Q 147.25034360532408 181.43999999999997 147.25034360532408 181.43999999999997L 154.80164327739197 181.43999999999997Q 154.80164327739197 181.43999999999997 154.80164327739197 181.43999999999997L 154.80164327739197 181.43999999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997z" pathFrom="M 147.25034360532408 193.53599999999997L 147.25034360532408 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 154.80164327739197 193.53599999999997L 147.25034360532408 193.53599999999997" cy="181.43999999999997" cx="154.80164327739197" j="10" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2162" d="M 162.3529429494599 167.32799999999997L 162.3529429494599 159.26399999999998Q 162.3529429494599 159.26399999999998 162.3529429494599 159.26399999999998L 169.9042426215278 159.26399999999998Q 169.9042426215278 159.26399999999998 169.9042426215278 159.26399999999998L 169.9042426215278 159.26399999999998L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 162.3529429494599 167.32799999999997L 162.3529429494599 159.26399999999998Q 162.3529429494599 159.26399999999998 162.3529429494599 159.26399999999998L 169.9042426215278 159.26399999999998Q 169.9042426215278 159.26399999999998 169.9042426215278 159.26399999999998L 169.9042426215278 159.26399999999998L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997z" pathFrom="M 162.3529429494599 167.32799999999997L 162.3529429494599 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 169.9042426215278 167.32799999999997L 162.3529429494599 167.32799999999997" cy="159.26399999999998" cx="169.9042426215278" j="11" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2163" d="M 177.4555422935957 185.47199999999998L 177.4555422935957 183.456Q 177.4555422935957 183.456 177.4555422935957 183.456L 185.0068419656636 183.456Q 185.0068419656636 183.456 185.0068419656636 183.456L 185.0068419656636 183.456L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 177.4555422935957 185.47199999999998L 177.4555422935957 183.456Q 177.4555422935957 183.456 177.4555422935957 183.456L 185.0068419656636 183.456Q 185.0068419656636 183.456 185.0068419656636 183.456L 185.0068419656636 183.456L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998z" pathFrom="M 177.4555422935957 185.47199999999998L 177.4555422935957 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 185.0068419656636 185.47199999999998L 177.4555422935957 185.47199999999998" cy="183.456" cx="185.0068419656636" j="12" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2164" d="M 192.5581416377315 181.43999999999997L 192.5581416377315 163.29599999999996Q 192.5581416377315 163.29599999999996 192.5581416377315 163.29599999999996L 200.1094413097994 163.29599999999996Q 200.1094413097994 163.29599999999996 200.1094413097994 163.29599999999996L 200.1094413097994 163.29599999999996L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 192.5581416377315 181.43999999999997L 192.5581416377315 163.29599999999996Q 192.5581416377315 163.29599999999996 192.5581416377315 163.29599999999996L 200.1094413097994 163.29599999999996Q 200.1094413097994 163.29599999999996 200.1094413097994 163.29599999999996L 200.1094413097994 163.29599999999996L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997z" pathFrom="M 192.5581416377315 181.43999999999997L 192.5581416377315 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 200.1094413097994 181.43999999999997L 192.5581416377315 181.43999999999997" cy="163.29599999999996" cx="200.1094413097994" j="13" val="9" barHeight="18.144" barWidth="7.551299672067902"></path><path id="SvgjsPath2165" d="M 207.6607409818673 145.152L 207.6607409818673 139.10399999999998Q 207.6607409818673 139.10399999999998 207.6607409818673 139.10399999999998L 215.2120406539352 139.10399999999998Q 215.2120406539352 139.10399999999998 215.2120406539352 139.10399999999998L 215.2120406539352 139.10399999999998L 215.2120406539352 145.152L 215.2120406539352 145.152z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 207.6607409818673 145.152L 207.6607409818673 139.10399999999998Q 207.6607409818673 139.10399999999998 207.6607409818673 139.10399999999998L 215.2120406539352 139.10399999999998Q 215.2120406539352 139.10399999999998 215.2120406539352 139.10399999999998L 215.2120406539352 139.10399999999998L 215.2120406539352 145.152L 215.2120406539352 145.152z" pathFrom="M 207.6607409818673 145.152L 207.6607409818673 145.152L 215.2120406539352 145.152L 215.2120406539352 145.152L 215.2120406539352 145.152L 215.2120406539352 145.152L 215.2120406539352 145.152L 207.6607409818673 145.152" cy="139.10399999999998" cx="215.2120406539352" j="14" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2166" d="M 222.7633403260031 175.392L 222.7633403260031 163.296Q 222.7633403260031 163.296 222.7633403260031 163.296L 230.314639998071 163.296Q 230.314639998071 163.296 230.314639998071 163.296L 230.314639998071 163.296L 230.314639998071 175.392L 230.314639998071 175.392z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 222.7633403260031 175.392L 222.7633403260031 163.296Q 222.7633403260031 163.296 222.7633403260031 163.296L 230.314639998071 163.296Q 230.314639998071 163.296 230.314639998071 163.296L 230.314639998071 163.296L 230.314639998071 175.392L 230.314639998071 175.392z" pathFrom="M 222.7633403260031 175.392L 222.7633403260031 175.392L 230.314639998071 175.392L 230.314639998071 175.392L 230.314639998071 175.392L 230.314639998071 175.392L 230.314639998071 175.392L 222.7633403260031 175.392" cy="163.296" cx="230.314639998071" j="15" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2167" d="M 237.8659396701389 171.35999999999999L 237.8659396701389 157.248Q 237.8659396701389 157.248 237.8659396701389 157.248L 245.4172393422068 157.248Q 245.4172393422068 157.248 245.4172393422068 157.248L 245.4172393422068 157.248L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 237.8659396701389 171.35999999999999L 237.8659396701389 157.248Q 237.8659396701389 157.248 237.8659396701389 157.248L 245.4172393422068 157.248Q 245.4172393422068 157.248 245.4172393422068 157.248L 245.4172393422068 157.248L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999z" pathFrom="M 237.8659396701389 171.35999999999999L 237.8659396701389 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 245.4172393422068 171.35999999999999L 237.8659396701389 171.35999999999999" cy="157.248" cx="245.4172393422068" j="16" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2168" d="M 252.9685390142747 187.488L 252.9685390142747 177.408Q 252.9685390142747 177.408 252.9685390142747 177.408L 260.5198386863426 177.408Q 260.5198386863426 177.408 260.5198386863426 177.408L 260.5198386863426 177.408L 260.5198386863426 187.488L 260.5198386863426 187.488z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 252.9685390142747 187.488L 252.9685390142747 177.408Q 252.9685390142747 177.408 252.9685390142747 177.408L 260.5198386863426 177.408Q 260.5198386863426 177.408 260.5198386863426 177.408L 260.5198386863426 177.408L 260.5198386863426 187.488L 260.5198386863426 187.488z" pathFrom="M 252.9685390142747 187.488L 252.9685390142747 187.488L 260.5198386863426 187.488L 260.5198386863426 187.488L 260.5198386863426 187.488L 260.5198386863426 187.488L 260.5198386863426 187.488L 252.9685390142747 187.488" cy="177.408" cx="260.5198386863426" j="17" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2169" d="M 268.0711383584105 183.456L 268.0711383584105 179.42399999999998Q 268.0711383584105 179.42399999999998 268.0711383584105 179.42399999999998L 275.6224380304784 179.42399999999998Q 275.6224380304784 179.42399999999998 275.6224380304784 179.42399999999998L 275.6224380304784 179.42399999999998L 275.6224380304784 183.456L 275.6224380304784 183.456z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 268.0711383584105 183.456L 268.0711383584105 179.42399999999998Q 268.0711383584105 179.42399999999998 268.0711383584105 179.42399999999998L 275.6224380304784 179.42399999999998Q 275.6224380304784 179.42399999999998 275.6224380304784 179.42399999999998L 275.6224380304784 179.42399999999998L 275.6224380304784 183.456L 275.6224380304784 183.456z" pathFrom="M 268.0711383584105 183.456L 268.0711383584105 183.456L 275.6224380304784 183.456L 275.6224380304784 183.456L 275.6224380304784 183.456L 275.6224380304784 183.456L 275.6224380304784 183.456L 268.0711383584105 183.456" cy="179.42399999999998" cx="275.6224380304784" j="18" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2170" d="M 283.1737377025463 189.504L 283.1737377025463 173.37599999999998Q 283.1737377025463 173.37599999999998 283.1737377025463 173.37599999999998L 290.7250373746142 173.37599999999998Q 290.7250373746142 173.37599999999998 290.7250373746142 173.37599999999998L 290.7250373746142 173.37599999999998L 290.7250373746142 189.504L 290.7250373746142 189.504z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 283.1737377025463 189.504L 283.1737377025463 173.37599999999998Q 283.1737377025463 173.37599999999998 283.1737377025463 173.37599999999998L 290.7250373746142 173.37599999999998Q 290.7250373746142 173.37599999999998 290.7250373746142 173.37599999999998L 290.7250373746142 173.37599999999998L 290.7250373746142 189.504L 290.7250373746142 189.504z" pathFrom="M 283.1737377025463 189.504L 283.1737377025463 189.504L 290.7250373746142 189.504L 290.7250373746142 189.504L 290.7250373746142 189.504L 290.7250373746142 189.504L 290.7250373746142 189.504L 283.1737377025463 189.504" cy="173.37599999999998" cx="290.7250373746142" j="19" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2171" d="M 298.2763370466821 181.43999999999997L 298.2763370466821 173.37599999999998Q 298.2763370466821 173.37599999999998 298.2763370466821 173.37599999999998L 305.82763671875 173.37599999999998Q 305.82763671875 173.37599999999998 305.82763671875 173.37599999999998L 305.82763671875 173.37599999999998L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 298.2763370466821 181.43999999999997L 298.2763370466821 173.37599999999998Q 298.2763370466821 173.37599999999998 298.2763370466821 173.37599999999998L 305.82763671875 173.37599999999998Q 305.82763671875 173.37599999999998 305.82763671875 173.37599999999998L 305.82763671875 173.37599999999998L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997z" pathFrom="M 298.2763370466821 181.43999999999997L 298.2763370466821 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 305.82763671875 181.43999999999997L 298.2763370466821 181.43999999999997" cy="173.37599999999998" cx="305.82763671875" j="20" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2172" d="M 313.3789363908179 129.024L 313.3789363908179 110.88Q 313.3789363908179 110.88 313.3789363908179 110.88L 320.9302360628858 110.88Q 320.9302360628858 110.88 320.9302360628858 110.88L 320.9302360628858 110.88L 320.9302360628858 129.024L 320.9302360628858 129.024z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 313.3789363908179 129.024L 313.3789363908179 110.88Q 313.3789363908179 110.88 313.3789363908179 110.88L 320.9302360628858 110.88Q 320.9302360628858 110.88 320.9302360628858 110.88L 320.9302360628858 110.88L 320.9302360628858 129.024L 320.9302360628858 129.024z" pathFrom="M 313.3789363908179 129.024L 313.3789363908179 129.024L 320.9302360628858 129.024L 320.9302360628858 129.024L 320.9302360628858 129.024L 320.9302360628858 129.024L 320.9302360628858 129.024L 313.3789363908179 129.024" cy="110.88" cx="320.9302360628858" j="21" val="9" barHeight="18.144" barWidth="7.551299672067902"></path><path id="SvgjsPath2173" d="M 328.48153573495375 135.072L 328.48153573495375 133.056Q 328.48153573495375 133.056 328.48153573495375 133.056L 336.03283540702165 133.056Q 336.03283540702165 133.056 336.03283540702165 133.056L 336.03283540702165 133.056L 336.03283540702165 135.072L 336.03283540702165 135.072z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 328.48153573495375 135.072L 328.48153573495375 133.056Q 328.48153573495375 133.056 328.48153573495375 133.056L 336.03283540702165 133.056Q 336.03283540702165 133.056 336.03283540702165 133.056L 336.03283540702165 133.056L 336.03283540702165 135.072L 336.03283540702165 135.072z" pathFrom="M 328.48153573495375 135.072L 328.48153573495375 135.072L 336.03283540702165 135.072L 336.03283540702165 135.072L 336.03283540702165 135.072L 336.03283540702165 135.072L 336.03283540702165 135.072L 328.48153573495375 135.072" cy="133.056" cx="336.03283540702165" j="22" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2174" d="M 343.58413507908955 86.68799999999999L 343.58413507908955 82.65599999999999Q 343.58413507908955 82.65599999999999 343.58413507908955 82.65599999999999L 351.13543475115745 82.65599999999999Q 351.13543475115745 82.65599999999999 351.13543475115745 82.65599999999999L 351.13543475115745 82.65599999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 343.58413507908955 86.68799999999999L 343.58413507908955 82.65599999999999Q 343.58413507908955 82.65599999999999 343.58413507908955 82.65599999999999L 351.13543475115745 82.65599999999999Q 351.13543475115745 82.65599999999999 351.13543475115745 82.65599999999999L 351.13543475115745 82.65599999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999z" pathFrom="M 343.58413507908955 86.68799999999999L 343.58413507908955 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 351.13543475115745 86.68799999999999L 343.58413507908955 86.68799999999999" cy="82.65599999999999" cx="351.13543475115745" j="23" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2175" d="M 358.68673442322535 84.672L 358.68673442322535 72.576Q 358.68673442322535 72.576 358.68673442322535 72.576L 366.23803409529324 72.576Q 366.23803409529324 72.576 366.23803409529324 72.576L 366.23803409529324 72.576L 366.23803409529324 84.672L 366.23803409529324 84.672z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 358.68673442322535 84.672L 358.68673442322535 72.576Q 358.68673442322535 72.576 358.68673442322535 72.576L 366.23803409529324 72.576Q 366.23803409529324 72.576 366.23803409529324 72.576L 366.23803409529324 72.576L 366.23803409529324 84.672L 366.23803409529324 84.672z" pathFrom="M 358.68673442322535 84.672L 358.68673442322535 84.672L 366.23803409529324 84.672L 366.23803409529324 84.672L 366.23803409529324 84.672L 366.23803409529324 84.672L 366.23803409529324 84.672L 358.68673442322535 84.672" cy="72.576" cx="366.23803409529324" j="24" val="6" barHeight="12.096" barWidth="7.551299672067902"></path><path id="SvgjsPath2176" d="M 373.78933376736114 100.8L 373.78933376736114 86.688Q 373.78933376736114 86.688 373.78933376736114 86.688L 381.34063343942904 86.688Q 381.34063343942904 86.688 381.34063343942904 86.688L 381.34063343942904 86.688L 381.34063343942904 100.8L 381.34063343942904 100.8z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 373.78933376736114 100.8L 373.78933376736114 86.688Q 373.78933376736114 86.688 373.78933376736114 86.688L 381.34063343942904 86.688Q 381.34063343942904 86.688 381.34063343942904 86.688L 381.34063343942904 86.688L 381.34063343942904 100.8L 381.34063343942904 100.8z" pathFrom="M 373.78933376736114 100.8L 373.78933376736114 100.8L 381.34063343942904 100.8L 381.34063343942904 100.8L 381.34063343942904 100.8L 381.34063343942904 100.8L 381.34063343942904 100.8L 373.78933376736114 100.8" cy="86.688" cx="381.34063343942904" j="25" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2177" d="M 388.89193311149694 145.152L 388.89193311149694 135.07199999999997Q 388.89193311149694 135.07199999999997 388.89193311149694 135.07199999999997L 396.44323278356484 135.07199999999997Q 396.44323278356484 135.07199999999997 396.44323278356484 135.07199999999997L 396.44323278356484 135.07199999999997L 396.44323278356484 145.152L 396.44323278356484 145.152z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 388.89193311149694 145.152L 388.89193311149694 135.07199999999997Q 388.89193311149694 135.07199999999997 388.89193311149694 135.07199999999997L 396.44323278356484 135.07199999999997Q 396.44323278356484 135.07199999999997 396.44323278356484 135.07199999999997L 396.44323278356484 135.07199999999997L 396.44323278356484 145.152L 396.44323278356484 145.152z" pathFrom="M 388.89193311149694 145.152L 388.89193311149694 145.152L 396.44323278356484 145.152L 396.44323278356484 145.152L 396.44323278356484 145.152L 396.44323278356484 145.152L 396.44323278356484 145.152L 388.89193311149694 145.152" cy="135.07199999999997" cx="396.44323278356484" j="26" val="5" barHeight="10.08" barWidth="7.551299672067902"></path><path id="SvgjsPath2178" d="M 403.99453245563274 145.152L 403.99453245563274 143.136Q 403.99453245563274 143.136 403.99453245563274 143.136L 411.54583212770063 143.136Q 411.54583212770063 143.136 411.54583212770063 143.136L 411.54583212770063 143.136L 411.54583212770063 145.152L 411.54583212770063 145.152z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 403.99453245563274 145.152L 403.99453245563274 143.136Q 403.99453245563274 143.136 403.99453245563274 143.136L 411.54583212770063 143.136Q 411.54583212770063 143.136 411.54583212770063 143.136L 411.54583212770063 143.136L 411.54583212770063 145.152L 411.54583212770063 145.152z" pathFrom="M 403.99453245563274 145.152L 403.99453245563274 145.152L 411.54583212770063 145.152L 411.54583212770063 145.152L 411.54583212770063 145.152L 411.54583212770063 145.152L 411.54583212770063 145.152L 403.99453245563274 145.152" cy="143.136" cx="411.54583212770063" j="27" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2179" d="M 419.09713179976853 74.592L 419.09713179976853 58.464Q 419.09713179976853 58.464 419.09713179976853 58.464L 426.64843147183643 58.464Q 426.64843147183643 58.464 426.64843147183643 58.464L 426.64843147183643 58.464L 426.64843147183643 74.592L 426.64843147183643 74.592z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 419.09713179976853 74.592L 419.09713179976853 58.464Q 419.09713179976853 58.464 419.09713179976853 58.464L 426.64843147183643 58.464Q 426.64843147183643 58.464 426.64843147183643 58.464L 426.64843147183643 58.464L 426.64843147183643 74.592L 426.64843147183643 74.592z" pathFrom="M 419.09713179976853 74.592L 419.09713179976853 74.592L 426.64843147183643 74.592L 426.64843147183643 74.592L 426.64843147183643 74.592L 426.64843147183643 74.592L 426.64843147183643 74.592L 419.09713179976853 74.592" cy="58.464" cx="426.64843147183643" j="28" val="8" barHeight="16.128" barWidth="7.551299672067902"></path><path id="SvgjsPath2180" d="M 434.19973114390433 118.944L 434.19973114390433 112.896Q 434.19973114390433 112.896 434.19973114390433 112.896L 441.75103081597223 112.896Q 441.75103081597223 112.896 441.75103081597223 112.896L 441.75103081597223 112.896L 441.75103081597223 118.944L 441.75103081597223 118.944z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 434.19973114390433 118.944L 434.19973114390433 112.896Q 434.19973114390433 112.896 434.19973114390433 112.896L 441.75103081597223 112.896Q 441.75103081597223 112.896 441.75103081597223 112.896L 441.75103081597223 112.896L 441.75103081597223 118.944L 441.75103081597223 118.944z" pathFrom="M 434.19973114390433 118.944L 434.19973114390433 118.944L 441.75103081597223 118.944L 441.75103081597223 118.944L 441.75103081597223 118.944L 441.75103081597223 118.944L 441.75103081597223 118.944L 434.19973114390433 118.944" cy="112.896" cx="441.75103081597223" j="29" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2181" d="M 449.3023304880401 78.624L 449.3023304880401 74.592Q 449.3023304880401 74.592 449.3023304880401 74.592L 456.853630160108 74.592Q 456.853630160108 74.592 456.853630160108 74.592L 456.853630160108 74.592L 456.853630160108 78.624L 456.853630160108 78.624z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 449.3023304880401 78.624L 449.3023304880401 74.592Q 449.3023304880401 74.592 449.3023304880401 74.592L 456.853630160108 74.592Q 456.853630160108 74.592 456.853630160108 74.592L 456.853630160108 74.592L 456.853630160108 78.624L 456.853630160108 78.624z" pathFrom="M 449.3023304880401 78.624L 449.3023304880401 78.624L 456.853630160108 78.624L 456.853630160108 78.624L 456.853630160108 78.624L 456.853630160108 78.624L 456.853630160108 78.624L 449.3023304880401 78.624" cy="74.592" cx="456.853630160108" j="30" val="2" barHeight="4.032" barWidth="7.551299672067902"></path><path id="SvgjsPath2182" d="M 464.404929832176 62.495999999999995L 464.404929832176 56.44799999999999Q 464.404929832176 56.44799999999999 464.404929832176 56.44799999999999L 471.9562295042439 56.44799999999999Q 471.9562295042439 56.44799999999999 471.9562295042439 56.44799999999999L 471.9562295042439 56.44799999999999L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 464.404929832176 62.495999999999995L 464.404929832176 56.44799999999999Q 464.404929832176 56.44799999999999 464.404929832176 56.44799999999999L 471.9562295042439 56.44799999999999Q 471.9562295042439 56.44799999999999 471.9562295042439 56.44799999999999L 471.9562295042439 56.44799999999999L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995z" pathFrom="M 464.404929832176 62.495999999999995L 464.404929832176 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 471.9562295042439 62.495999999999995L 464.404929832176 62.495999999999995" cy="56.44799999999999" cx="471.9562295042439" j="31" val="3" barHeight="6.048" barWidth="7.551299672067902"></path><path id="SvgjsPath2183" d="M 479.5075291763118 72.576L 479.5075291763118 64.512Q 479.5075291763118 64.512 479.5075291763118 64.512L 487.0588288483797 64.512Q 487.0588288483797 64.512 487.0588288483797 64.512L 487.0588288483797 64.512L 487.0588288483797 72.576L 487.0588288483797 72.576z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 479.5075291763118 72.576L 479.5075291763118 64.512Q 479.5075291763118 64.512 479.5075291763118 64.512L 487.0588288483797 64.512Q 487.0588288483797 64.512 487.0588288483797 64.512L 487.0588288483797 64.512L 487.0588288483797 72.576L 487.0588288483797 72.576z" pathFrom="M 479.5075291763118 72.576L 479.5075291763118 72.576L 487.0588288483797 72.576L 487.0588288483797 72.576L 487.0588288483797 72.576L 487.0588288483797 72.576L 487.0588288483797 72.576L 479.5075291763118 72.576" cy="64.512" cx="487.0588288483797" j="32" val="4" barHeight="8.064" barWidth="7.551299672067902"></path><path id="SvgjsPath2184" d="M 494.6101285204476 76.608L 494.6101285204476 58.464000000000006Q 494.6101285204476 58.464000000000006 494.6101285204476 58.464000000000006L 502.1614281925155 58.464000000000006Q 502.1614281925155 58.464000000000006 502.1614281925155 58.464000000000006L 502.1614281925155 58.464000000000006L 502.1614281925155 76.608L 502.1614281925155 76.608z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 494.6101285204476 76.608L 494.6101285204476 58.464000000000006Q 494.6101285204476 58.464000000000006 494.6101285204476 58.464000000000006L 502.1614281925155 58.464000000000006Q 502.1614281925155 58.464000000000006 502.1614281925155 58.464000000000006L 502.1614281925155 58.464000000000006L 502.1614281925155 76.608L 502.1614281925155 76.608z" pathFrom="M 494.6101285204476 76.608L 494.6101285204476 76.608L 502.1614281925155 76.608L 502.1614281925155 76.608L 502.1614281925155 76.608L 502.1614281925155 76.608L 502.1614281925155 76.608L 494.6101285204476 76.608" cy="58.464000000000006" cx="502.1614281925155" j="33" val="9" barHeight="18.144" barWidth="7.551299672067902"></path><path id="SvgjsPath2185" d="M 509.71272786458337 16.128000000000004L 509.71272786458337 2.0160000000000036Q 509.71272786458337 2.0160000000000036 509.71272786458337 2.0160000000000036L 517.2640275366513 2.0160000000000036Q 517.2640275366513 2.0160000000000036 517.2640275366513 2.0160000000000036L 517.2640275366513 2.0160000000000036L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 509.71272786458337 16.128000000000004L 509.71272786458337 2.0160000000000036Q 509.71272786458337 2.0160000000000036 509.71272786458337 2.0160000000000036L 517.2640275366513 2.0160000000000036Q 517.2640275366513 2.0160000000000036 517.2640275366513 2.0160000000000036L 517.2640275366513 2.0160000000000036L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004z" pathFrom="M 509.71272786458337 16.128000000000004L 509.71272786458337 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 517.2640275366513 16.128000000000004L 509.71272786458337 16.128000000000004" cy="2.0160000000000036" cx="517.2640275366513" j="34" val="7" barHeight="14.112" barWidth="7.551299672067902"></path><path id="SvgjsPath2186" d="M 524.8153272087192 88.704L 524.8153272087192 86.68799999999999Q 524.8153272087192 86.68799999999999 524.8153272087192 86.68799999999999L 532.3666268807871 86.68799999999999Q 532.3666268807871 86.68799999999999 532.3666268807871 86.68799999999999L 532.3666268807871 86.68799999999999L 532.3666268807871 88.704L 532.3666268807871 88.704z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 524.8153272087192 88.704L 524.8153272087192 86.68799999999999Q 524.8153272087192 86.68799999999999 524.8153272087192 86.68799999999999L 532.3666268807871 86.68799999999999Q 532.3666268807871 86.68799999999999 532.3666268807871 86.68799999999999L 532.3666268807871 86.68799999999999L 532.3666268807871 88.704L 532.3666268807871 88.704z" pathFrom="M 524.8153272087192 88.704L 524.8153272087192 88.704L 532.3666268807871 88.704L 532.3666268807871 88.704L 532.3666268807871 88.704L 532.3666268807871 88.704L 532.3666268807871 88.704L 524.8153272087192 88.704" cy="86.68799999999999" cx="532.3666268807871" j="35" val="1" barHeight="2.016" barWidth="7.551299672067902"></path><path id="SvgjsPath2187" d="M 539.917926552855 189.504L 539.917926552855 177.408Q 539.917926552855 177.408 539.917926552855 177.408L 547.4692262249229 177.408Q 547.4692262249229 177.408 547.4692262249229 177.408L 547.4692262249229 177.408L 547.4692262249229 189.504L 547.4692262249229 189.504z" fill="rgba(191,227,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask3q8fq5tp)" pathTo="M 539.917926552855 189.504L 539.917926552855 177.408Q 539.917926552855 177.408 539.917926552855 177.408L 547.4692262249229 177.408Q 547.4692262249229 177.408 547.4692262249229 177.408L 547.4692262249229 177.408L 547.4692262249229 189.504L 547.4692262249229 189.504z" pathFrom="M 539.917926552855 189.504L 539.917926552855 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 547.4692262249229 189.504L 539.917926552855 189.504" cy="177.408" cx="547.4692262249229" j="36" val="6" barHeight="12.096" barWidth="7.551299672067902"></path></g><g id="SvgjsG2072" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2111" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG2150" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine2240" x1="-10.223524305555554" y1="0" x2="553.9171006944445" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2241" x1="-10.223524305555554" y1="0" x2="553.9171006944445" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2242" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2243" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2244" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2245" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2246" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG2205" class="apexcharts-yaxis" rel="0" transform="translate(15.859375, 0)"><g id="SvgjsG2206" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2207" font-family="inherit" x="4" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2208">100</tspan></text><text id="SvgjsText2209" font-family="inherit" x="4" y="51.82" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2210">80</tspan></text><text id="SvgjsText2211" font-family="inherit" x="4" y="92.14" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2212">60</tspan></text><text id="SvgjsText2213" font-family="inherit" x="4" y="132.46" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2214">40</tspan></text><text id="SvgjsText2215" font-family="inherit" x="4" y="172.78" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2216">20</tspan></text><text id="SvgjsText2217" font-family="inherit" x="4" y="213.1" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan2218">0</tspan></text></g></g><g id="SvgjsG2053" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 120px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(121, 166, 220);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(191, 227, 153);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 627px; height: 313px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                                    <div class="progress progress-separated mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 19%"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 9%"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-center pe-2">
                                            <span class="legend me-2 bg-primary"></span>
                                            <span>Regular</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-info"></span>
                                            <span>System</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-success"></span>
                                            <span>Shared</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center ps-2">
                                            <span class="legend me-2"></span>
                                            <span>Free</span>
                                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-green">
                          <span class="text-green d-inline-flex align-items-center lh-1">
                            6% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                          </span>
                                    </div>
                                    <div class="h1 m-0">43</div>
                                    <div class="text-muted mb-3">New Tickets</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-red">
                          <span class="text-red d-inline-flex align-items-center lh-1">
                            -2% <!-- Download SVG icon from http://tabler-icons.io/i/trending-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 7 9 13 13 9 21 17"></polyline><polyline points="21 10 21 17 14 17"></polyline></svg>
                          </span>
                                    </div>
                                    <div class="h1 m-0">95</div>
                                    <div class="text-muted mb-3">Daily Earnings</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-green">
                          <span class="text-green d-inline-flex align-items-center lh-1">
                            9% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                          </span>
                                    </div>
                                    <div class="h1 m-0">7</div>
                                    <div class="text-muted mb-3">New Replies</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="card-title">Development activity</div>
                        </div>
                        <div class="position-relative">
                            <div class="position-absolute top-0 left-0 px-3 mt-1 w-50">
                                <div class="row g-2">
                                    <div class="col-auto" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity" style="min-height: 41px;"><div id="apexchartszdp3ytzjh" class="apexcharts-canvas apexchartszdp3ytzjh apexcharts-theme-light" style="width: 40px; height: 41px;"><svg id="SvgjsSvg2247" width="40" height="41" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2249" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2248"><clipPath id="gridRectMaskzdp3ytzjh"><rect id="SvgjsRect2251" width="46" height="42" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskzdp3ytzjh"><rect id="SvgjsRect2252" width="44" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2253" class="apexcharts-radialbar"><g id="SvgjsG2254"><g id="SvgjsG2255" class="apexcharts-tracks"><g id="SvgjsG2256" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.3658536585365857" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565"></path></g></g><g id="SvgjsG2258"><g id="SvgjsG2260" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2261" d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555" fill="none" fill-opacity="0.85" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.439024390243903" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="126" data:value="35" index="0" j="0" data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555"></path></g><circle id="SvgjsCircle2259" r="14.670731707317076" cx="20" cy="20" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine2262" x1="0" y1="0" x2="40" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2263" x1="0" y1="0" x2="40" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2250" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 49px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="col">
                                        <div>Today's Earning: $4,262.40</div>
                                        <div class="text-muted"><!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="3 17 9 11 13 15 21 7"></polyline><polyline points="14 7 21 7 21 14"></polyline></svg>
                                            +5% more than yesterday</div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-development-activity" style="min-height: 192px;"><div id="apexcharts1r4dny33" class="apexcharts-canvas apexcharts1r4dny33 apexcharts-theme-light" style="width: 626px; height: 192px;"><svg id="SvgjsSvg2265" width="626" height="192" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2267" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2266"><clipPath id="gridRectMask1r4dny33"><rect id="SvgjsRect2303" width="632" height="194" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask1r4dny33"><rect id="SvgjsRect2304" width="630" height="196" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2272" x1="0" y1="0" x2="0" y2="192" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="192" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2311" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2312" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2324" class="apexcharts-grid"><g id="SvgjsG2325" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2327" x1="0" y1="0" x2="626" y2="0" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2328" x1="0" y1="48" x2="626" y2="48" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2329" x1="0" y1="96" x2="626" y2="96" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2330" x1="0" y1="144" x2="626" y2="144" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine2331" x1="0" y1="192" x2="626" y2="192" stroke="#e0e0e0" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG2326" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2333" x1="0" y1="192" x2="626" y2="192" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2332" x1="0" y1="1" x2="0" y2="192" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2305" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2306" class="apexcharts-series" seriesName="Purchases" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2309" d="M 0 192L 0 184.8C 7.555172413793103 184.8 14.03103448275862 180 21.586206896551722 180C 29.141379310344824 180 35.61724137931034 182.4 43.172413793103445 182.4C 50.72758620689655 182.4 57.20344827586207 177.6 64.75862068965517 177.6C 72.31379310344828 177.6 78.78965517241379 175.2 86.34482758620689 175.2C 93.89999999999999 175.2 100.37586206896552 180 107.93103448275862 180C 115.48620689655172 180 121.96206896551725 177.6 129.51724137931035 177.6C 137.07241379310344 177.6 143.54827586206898 172.8 151.10344827586206 172.8C 158.65862068965515 172.8 165.1344827586207 134.4 172.68965517241378 134.4C 180.24482758620687 134.4 186.7206896551724 175.2 194.2758620689655 175.2C 201.8310344827586 175.2 208.30689655172412 163.2 215.86206896551724 163.2C 223.41724137931033 163.2 229.89310344827587 180 237.44827586206895 180C 245.00344827586207 180 251.47931034482758 177.6 259.0344827586207 177.6C 266.5896551724138 177.6 273.06551724137927 184.8 280.6206896551724 184.8C 288.1758620689655 184.8 294.651724137931 172.8 302.2068965517241 172.8C 309.76206896551724 172.8 316.23793103448276 182.4 323.7931034482759 182.4C 331.348275862069 182.4 337.82413793103444 158.4 345.37931034482756 158.4C 352.9344827586207 158.4 359.4103448275862 120 366.9655172413793 120C 374.5206896551724 120 380.9965517241379 151.2 388.551724137931 151.2C 396.1068965517241 151.2 402.5827586206896 146.4 410.13793103448273 146.4C 417.69310344827585 146.4 424.16896551724136 156 431.7241379310345 156C 439.2793103448276 156 445.75517241379305 158.4 453.31034482758616 158.4C 460.8655172413793 158.4 467.3413793103448 132 474.8965517241379 132C 482.451724137931 132 488.92758620689654 115.2 496.48275862068965 115.2C 504.03793103448277 115.2 510.5137931034483 96 518.0689655172414 96C 525.6241379310345 96 532.0999999999999 60 539.655172413793 60C 547.2103448275861 60 553.6862068965517 48 561.2413793103448 48C 568.7965517241379 48 575.2724137931034 76.80000000000001 582.8275862068965 76.80000000000001C 590.3827586206896 76.80000000000001 596.8586206896551 67.2 604.4137931034483 67.2C 611.9689655172414 67.2 618.4448275862069 24 626 24C 626 24 626 24 626 192M 626 24z" fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1r4dny33)" pathTo="M 0 192L 0 184.8C 7.555172413793103 184.8 14.03103448275862 180 21.586206896551722 180C 29.141379310344824 180 35.61724137931034 182.4 43.172413793103445 182.4C 50.72758620689655 182.4 57.20344827586207 177.6 64.75862068965517 177.6C 72.31379310344828 177.6 78.78965517241379 175.2 86.34482758620689 175.2C 93.89999999999999 175.2 100.37586206896552 180 107.93103448275862 180C 115.48620689655172 180 121.96206896551725 177.6 129.51724137931035 177.6C 137.07241379310344 177.6 143.54827586206898 172.8 151.10344827586206 172.8C 158.65862068965515 172.8 165.1344827586207 134.4 172.68965517241378 134.4C 180.24482758620687 134.4 186.7206896551724 175.2 194.2758620689655 175.2C 201.8310344827586 175.2 208.30689655172412 163.2 215.86206896551724 163.2C 223.41724137931033 163.2 229.89310344827587 180 237.44827586206895 180C 245.00344827586207 180 251.47931034482758 177.6 259.0344827586207 177.6C 266.5896551724138 177.6 273.06551724137927 184.8 280.6206896551724 184.8C 288.1758620689655 184.8 294.651724137931 172.8 302.2068965517241 172.8C 309.76206896551724 172.8 316.23793103448276 182.4 323.7931034482759 182.4C 331.348275862069 182.4 337.82413793103444 158.4 345.37931034482756 158.4C 352.9344827586207 158.4 359.4103448275862 120 366.9655172413793 120C 374.5206896551724 120 380.9965517241379 151.2 388.551724137931 151.2C 396.1068965517241 151.2 402.5827586206896 146.4 410.13793103448273 146.4C 417.69310344827585 146.4 424.16896551724136 156 431.7241379310345 156C 439.2793103448276 156 445.75517241379305 158.4 453.31034482758616 158.4C 460.8655172413793 158.4 467.3413793103448 132 474.8965517241379 132C 482.451724137931 132 488.92758620689654 115.2 496.48275862068965 115.2C 504.03793103448277 115.2 510.5137931034483 96 518.0689655172414 96C 525.6241379310345 96 532.0999999999999 60 539.655172413793 60C 547.2103448275861 60 553.6862068965517 48 561.2413793103448 48C 568.7965517241379 48 575.2724137931034 76.80000000000001 582.8275862068965 76.80000000000001C 590.3827586206896 76.80000000000001 596.8586206896551 67.2 604.4137931034483 67.2C 611.9689655172414 67.2 618.4448275862069 24 626 24C 626 24 626 24 626 192M 626 24z" pathFrom="M -1 192L -1 192L 21.586206896551722 192L 43.172413793103445 192L 64.75862068965517 192L 86.34482758620689 192L 107.93103448275862 192L 129.51724137931035 192L 151.10344827586206 192L 172.68965517241378 192L 194.2758620689655 192L 215.86206896551724 192L 237.44827586206895 192L 259.0344827586207 192L 280.6206896551724 192L 302.2068965517241 192L 323.7931034482759 192L 345.37931034482756 192L 366.9655172413793 192L 388.551724137931 192L 410.13793103448273 192L 431.7241379310345 192L 453.31034482758616 192L 474.8965517241379 192L 496.48275862068965 192L 518.0689655172414 192L 539.655172413793 192L 561.2413793103448 192L 582.8275862068965 192L 604.4137931034483 192L 626 192"></path><path id="SvgjsPath2310" d="M 0 184.8C 7.555172413793103 184.8 14.03103448275862 180 21.586206896551722 180C 29.141379310344824 180 35.61724137931034 182.4 43.172413793103445 182.4C 50.72758620689655 182.4 57.20344827586207 177.6 64.75862068965517 177.6C 72.31379310344828 177.6 78.78965517241379 175.2 86.34482758620689 175.2C 93.89999999999999 175.2 100.37586206896552 180 107.93103448275862 180C 115.48620689655172 180 121.96206896551725 177.6 129.51724137931035 177.6C 137.07241379310344 177.6 143.54827586206898 172.8 151.10344827586206 172.8C 158.65862068965515 172.8 165.1344827586207 134.4 172.68965517241378 134.4C 180.24482758620687 134.4 186.7206896551724 175.2 194.2758620689655 175.2C 201.8310344827586 175.2 208.30689655172412 163.2 215.86206896551724 163.2C 223.41724137931033 163.2 229.89310344827587 180 237.44827586206895 180C 245.00344827586207 180 251.47931034482758 177.6 259.0344827586207 177.6C 266.5896551724138 177.6 273.06551724137927 184.8 280.6206896551724 184.8C 288.1758620689655 184.8 294.651724137931 172.8 302.2068965517241 172.8C 309.76206896551724 172.8 316.23793103448276 182.4 323.7931034482759 182.4C 331.348275862069 182.4 337.82413793103444 158.4 345.37931034482756 158.4C 352.9344827586207 158.4 359.4103448275862 120 366.9655172413793 120C 374.5206896551724 120 380.9965517241379 151.2 388.551724137931 151.2C 396.1068965517241 151.2 402.5827586206896 146.4 410.13793103448273 146.4C 417.69310344827585 146.4 424.16896551724136 156 431.7241379310345 156C 439.2793103448276 156 445.75517241379305 158.4 453.31034482758616 158.4C 460.8655172413793 158.4 467.3413793103448 132 474.8965517241379 132C 482.451724137931 132 488.92758620689654 115.2 496.48275862068965 115.2C 504.03793103448277 115.2 510.5137931034483 96 518.0689655172414 96C 525.6241379310345 96 532.0999999999999 60 539.655172413793 60C 547.2103448275861 60 553.6862068965517 48 561.2413793103448 48C 568.7965517241379 48 575.2724137931034 76.80000000000001 582.8275862068965 76.80000000000001C 590.3827586206896 76.80000000000001 596.8586206896551 67.2 604.4137931034483 67.2C 611.9689655172414 67.2 618.4448275862069 24 626 24" fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1r4dny33)" pathTo="M 0 184.8C 7.555172413793103 184.8 14.03103448275862 180 21.586206896551722 180C 29.141379310344824 180 35.61724137931034 182.4 43.172413793103445 182.4C 50.72758620689655 182.4 57.20344827586207 177.6 64.75862068965517 177.6C 72.31379310344828 177.6 78.78965517241379 175.2 86.34482758620689 175.2C 93.89999999999999 175.2 100.37586206896552 180 107.93103448275862 180C 115.48620689655172 180 121.96206896551725 177.6 129.51724137931035 177.6C 137.07241379310344 177.6 143.54827586206898 172.8 151.10344827586206 172.8C 158.65862068965515 172.8 165.1344827586207 134.4 172.68965517241378 134.4C 180.24482758620687 134.4 186.7206896551724 175.2 194.2758620689655 175.2C 201.8310344827586 175.2 208.30689655172412 163.2 215.86206896551724 163.2C 223.41724137931033 163.2 229.89310344827587 180 237.44827586206895 180C 245.00344827586207 180 251.47931034482758 177.6 259.0344827586207 177.6C 266.5896551724138 177.6 273.06551724137927 184.8 280.6206896551724 184.8C 288.1758620689655 184.8 294.651724137931 172.8 302.2068965517241 172.8C 309.76206896551724 172.8 316.23793103448276 182.4 323.7931034482759 182.4C 331.348275862069 182.4 337.82413793103444 158.4 345.37931034482756 158.4C 352.9344827586207 158.4 359.4103448275862 120 366.9655172413793 120C 374.5206896551724 120 380.9965517241379 151.2 388.551724137931 151.2C 396.1068965517241 151.2 402.5827586206896 146.4 410.13793103448273 146.4C 417.69310344827585 146.4 424.16896551724136 156 431.7241379310345 156C 439.2793103448276 156 445.75517241379305 158.4 453.31034482758616 158.4C 460.8655172413793 158.4 467.3413793103448 132 474.8965517241379 132C 482.451724137931 132 488.92758620689654 115.2 496.48275862068965 115.2C 504.03793103448277 115.2 510.5137931034483 96 518.0689655172414 96C 525.6241379310345 96 532.0999999999999 60 539.655172413793 60C 547.2103448275861 60 553.6862068965517 48 561.2413793103448 48C 568.7965517241379 48 575.2724137931034 76.80000000000001 582.8275862068965 76.80000000000001C 590.3827586206896 76.80000000000001 596.8586206896551 67.2 604.4137931034483 67.2C 611.9689655172414 67.2 618.4448275862069 24 626 24" pathFrom="M -1 192L -1 192L 21.586206896551722 192L 43.172413793103445 192L 64.75862068965517 192L 86.34482758620689 192L 107.93103448275862 192L 129.51724137931035 192L 151.10344827586206 192L 172.68965517241378 192L 194.2758620689655 192L 215.86206896551724 192L 237.44827586206895 192L 259.0344827586207 192L 280.6206896551724 192L 302.2068965517241 192L 323.7931034482759 192L 345.37931034482756 192L 366.9655172413793 192L 388.551724137931 192L 410.13793103448273 192L 431.7241379310345 192L 453.31034482758616 192L 474.8965517241379 192L 496.48275862068965 192L 518.0689655172414 192L 539.655172413793 192L 561.2413793103448 192L 582.8275862068965 192L 604.4137931034483 192L 626 192"></path><g id="SvgjsG2307" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2339" r="0" cx="0" cy="0" class="apexcharts-marker wyji9d7kz no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2308" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2334" x1="0" y1="0" x2="626" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2335" x1="0" y1="0" x2="626" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2336" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2337" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2338" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2271" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2323" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2268" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 96px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 107, 196);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 627px; height: 193px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Commit</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Fix dart Sass compatibility (#29755)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">28 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm">JL</span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Change deprecated html tags to text decoration classes (#29604)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">27 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            justify-content:between ⇒ justify-content:space-between (#29734)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">26 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Update change-version.js (#29736)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">26 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Regenerate package-lock.json (#29730)
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">25 Nov 2019</td>
                                </tr>
                                <tr>
                                    <td class="w-1">
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                    </td>
                                    <td class="td-truncate">
                                        <div class="text-truncate">
                                            Some minor text tweaks
                                        </div>
                                    </td>
                                    <td class="text-nowrap text-muted">24 Nov 2019</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card" style="height: calc(24rem + 10px)">
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">JL</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                                            </div>
                                            <div class="text-muted">today</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Maryjo Lebarree</strong> liked your photo.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">EP</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">HS</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                                            </div>
                                            <div class="text-muted">today</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                                            </div>
                                            <div class="text-muted">yesterday</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Leesa Beaty</strong> posted new video.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Perren Keemar</strong> and 3 others followed you.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">SA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Thatcher Keel</strong> created a profile.
                                            </div>
                                            <div class="text-muted">3 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                                            </div>
                                            <div class="text-muted">4 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="avatar">AA</span>
                                        </div>
                                        <div class="col">
                                            <div class="text-truncate">
                                                <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                                            </div>
                                            <div class="text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                            <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                132 Sales
                                            </div>
                                            <div class="text-muted">
                                                12 waiting payments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="6" cy="19" r="2"></circle><circle cx="17" cy="19" r="2"></circle><path d="M17 17h-11v-14h-2"></path><path d="M6 5l14 1l-1 7h-13"></path></svg>
                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                78 Orders
                                            </div>
                                            <div class="text-muted">
                                                32 shipped
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                            <span class="bg-yellow text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/users -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="9" cy="7" r="4"></circle><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path><path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path></svg>
                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                1352 Members
                                            </div>
                                            <div class="text-muted">
                                                163 registered today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                            <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path></svg>
                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                623 Shares
                                            </div>
                                            <div class="text-muted">
                                                16 today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                            <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                132 Likes
                                            </div>
                                            <div class="text-muted">
                                                21 today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Most Visited Pages</h3>
                        </div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                <tr>
                                    <th>Page name</th>
                                    <th>Visitors</th>
                                    <th>Unique</th>
                                    <th colspan="2">Bounce rate</th>
                                </tr>
                                </thead>
                                <tbody><tr>
                                    <td>
                                        /about.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">4,896</td>
                                    <td class="text-muted">3,654</td>
                                    <td class="text-muted">82.54%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1" style="min-height: 24px;"><div id="apexchartscd36w0dz" class="apexcharts-canvas apexchartscd36w0dz apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2340" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2342" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2341"><clipPath id="gridRectMaskcd36w0dz"><rect id="SvgjsRect2348" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcd36w0dz"><rect id="SvgjsRect2349" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2347" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2355" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2356" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2367" class="apexcharts-grid"><g id="SvgjsG2368" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2370" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2371" x1="0" y1="6" x2="64" y2="6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2372" x1="0" y1="12" x2="64" y2="12" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2373" x1="0" y1="18" x2="64" y2="18" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2374" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2369" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2376" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2375" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2350" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2351" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2354" d="M 0 7L 8 0L 16 4L 24 14L 32 19L 40 23L 48 20L 56 6L 64 11" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskcd36w0dz)" pathTo="M 0 7L 8 0L 16 4L 24 14L 32 19L 40 23L 48 20L 56 6L 64 11" pathFrom="M -1 24L -1 24L 8 24L 16 24L 24 24L 32 24L 40 24L 48 24L 56 24L 64 24"></path><g id="SvgjsG2352" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2353" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2377" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2378" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2379" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2380" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2381" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2346" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2366" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2343" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        /special-promo.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">3,652</td>
                                    <td class="text-muted">3,215</td>
                                    <td class="text-muted">76.29%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2" style="min-height: 24px;"><div id="apexchartsclrkftbv" class="apexcharts-canvas apexchartsclrkftbv apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2382" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2384" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2383"><clipPath id="gridRectMaskclrkftbv"><rect id="SvgjsRect2390" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskclrkftbv"><rect id="SvgjsRect2391" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2389" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2397" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2398" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2409" class="apexcharts-grid"><g id="SvgjsG2410" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2412" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2413" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2414" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2415" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2416" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2417" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2411" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2419" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2418" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2392" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2393" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2396" d="M 0 11.520000000000001L 8 13.440000000000001L 16 5.760000000000002L 24 2.8800000000000026L 32 12.48L 40 17.28L 48 10.56L 56 21.12L 64 3.84" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskclrkftbv)" pathTo="M 0 11.520000000000001L 8 13.440000000000001L 16 5.760000000000002L 24 2.8800000000000026L 32 12.48L 40 17.28L 48 10.56L 56 21.12L 64 3.84" pathFrom="M -1 24L -1 24L 8 24L 16 24L 24 24L 32 24L 40 24L 48 24L 56 24L 64 24"></path><g id="SvgjsG2394" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2395" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2420" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2421" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2422" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2423" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2424" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2388" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2408" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2385" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        /news/1,new-ui-kit.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">3,256</td>
                                    <td class="text-muted">2,865</td>
                                    <td class="text-muted">72.65%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3" style="min-height: 24px;"><div id="apexchartsnwwaq9o6" class="apexcharts-canvas apexchartsnwwaq9o6 apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2425" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2427" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2426"><clipPath id="gridRectMasknwwaq9o6"><rect id="SvgjsRect2433" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknwwaq9o6"><rect id="SvgjsRect2434" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2432" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2440" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2441" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2452" class="apexcharts-grid"><g id="SvgjsG2453" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2455" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2456" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2457" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2458" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2459" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2460" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2454" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2462" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2461" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2435" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2436" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2439" d="M 0 14.4L 8 11.520000000000001L 16 14.4L 24 20.16L 32 7.68L 40 21.12L 48 1.9200000000000017L 56 2.8800000000000026L 64 5.760000000000002" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasknwwaq9o6)" pathTo="M 0 14.4L 8 11.520000000000001L 16 14.4L 24 20.16L 32 7.68L 40 21.12L 48 1.9200000000000017L 56 2.8800000000000026L 64 5.760000000000002" pathFrom="M -1 24L -1 24L 8 24L 16 24L 24 24L 32 24L 40 24L 48 24L 56 24L 64 24"></path><g id="SvgjsG2437" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2438" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2463" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2464" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2465" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2466" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2467" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2431" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2451" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2428" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        /lorem-ipsum-dolor-sit-amet-very-long-url.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">986</td>
                                    <td class="text-muted">865</td>
                                    <td class="text-muted">44.89%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4" style="min-height: 24px;"><div id="apexcharts8mtci4eg" class="apexcharts-canvas apexcharts8mtci4eg apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2468" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2470" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2469"><clipPath id="gridRectMask8mtci4eg"><rect id="SvgjsRect2476" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask8mtci4eg"><rect id="SvgjsRect2477" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2475" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2483" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2484" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2495" class="apexcharts-grid"><g id="SvgjsG2496" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2498" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2499" x1="0" y1="6" x2="64" y2="6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2500" x1="0" y1="12" x2="64" y2="12" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2501" x1="0" y1="18" x2="64" y2="18" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2502" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2497" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2504" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2503" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2478" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2479" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2482" d="M 0 21L 8 7.5L 16 10.5L 24 10.5L 32 22.5L 40 19.5L 48 4.5L 56 0L 64 1.5" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask8mtci4eg)" pathTo="M 0 21L 8 7.5L 16 10.5L 24 10.5L 32 22.5L 40 19.5L 48 4.5L 56 0L 64 1.5" pathFrom="M -1 30L -1 30L 8 30L 16 30L 24 30L 32 30L 40 30L 48 30L 56 30L 64 30"></path><g id="SvgjsG2480" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2481" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2505" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2506" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2507" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2508" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2509" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2474" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2494" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2471" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        /colors.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">912</td>
                                    <td class="text-muted">822</td>
                                    <td class="text-muted">41.12%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5" style="min-height: 24px;"><div id="apexchartsqsyg7u4p" class="apexcharts-canvas apexchartsqsyg7u4p apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2510" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2512" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2511"><clipPath id="gridRectMaskqsyg7u4p"><rect id="SvgjsRect2518" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskqsyg7u4p"><rect id="SvgjsRect2519" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2517" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2525" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2526" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2538" class="apexcharts-grid"><g id="SvgjsG2539" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2541" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2542" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2543" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2544" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2545" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2546" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2540" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2548" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2547" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2520" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2521" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2524" d="M 0 22.08L 7.111111111111111 13.440000000000001L 14.222222222222221 9.600000000000001L 21.333333333333332 10.56L 28.444444444444443 3.84L 35.55555555555556 4.800000000000001L 42.666666666666664 16.32L 49.77777777777778 1.9200000000000017L 56.888888888888886 6.720000000000002L 64 10.56" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqsyg7u4p)" pathTo="M 0 22.08L 7.111111111111111 13.440000000000001L 14.222222222222221 9.600000000000001L 21.333333333333332 10.56L 28.444444444444443 3.84L 35.55555555555556 4.800000000000001L 42.666666666666664 16.32L 49.77777777777778 1.9200000000000017L 56.888888888888886 6.720000000000002L 64 10.56" pathFrom="M -1 24L -1 24L 7.111111111111111 24L 14.222222222222221 24L 21.333333333333332 24L 28.444444444444443 24L 35.55555555555556 24L 42.666666666666664 24L 49.77777777777778 24L 56.888888888888886 24L 64 24"></path><g id="SvgjsG2522" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2523" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2549" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2550" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2551" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2552" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2553" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2516" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2537" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2513" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        /docs/index.html
                                        <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path></svg>
                                        </a>
                                    </td>
                                    <td class="text-muted">855</td>
                                    <td class="text-muted">798</td>
                                    <td class="text-muted">32.65%</td>
                                    <td class="text-end w-1" style="position: relative;">
                                        <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6" style="min-height: 24px;"><div id="apexchartstnalz5ds" class="apexcharts-canvas apexchartstnalz5ds apexcharts-theme-light" style="width: 64px; height: 24px;"><svg id="SvgjsSvg2554" width="64" height="24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2556" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2555"><clipPath id="gridRectMasktnalz5ds"><rect id="SvgjsRect2562" width="70" height="26" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasktnalz5ds"><rect id="SvgjsRect2563" width="68" height="28" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2561" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2569" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2570" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2582" class="apexcharts-grid"><g id="SvgjsG2583" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2585" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2586" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2587" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2588" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2589" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2590" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2584" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2592" x1="0" y1="24" x2="64" y2="24" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2591" x1="0" y1="1" x2="0" y2="24" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2564" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2565" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2568" d="M 0 2.8800000000000026L 7.111111111111111 12.48L 14.222222222222221 17.28L 21.333333333333332 10.56L 28.444444444444443 21.12L 35.55555555555556 3.84L 42.666666666666664 16.32L 49.77777777777778 1.9200000000000017L 56.888888888888886 6.720000000000002L 64 10.56" fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasktnalz5ds)" pathTo="M 0 2.8800000000000026L 7.111111111111111 12.48L 14.222222222222221 17.28L 21.333333333333332 10.56L 28.444444444444443 21.12L 35.55555555555556 3.84L 42.666666666666664 16.32L 49.77777777777778 1.9200000000000017L 56.888888888888886 6.720000000000002L 64 10.56" pathFrom="M -1 24L -1 24L 7.111111111111111 24L 14.222222222222221 24L 21.333333333333332 24L 28.444444444444443 24L 35.55555555555556 24L 42.666666666666664 24L 49.77777777777778 24L 56.888888888888886 24L 64 24"></path><g id="SvgjsG2566" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2567" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2593" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2594" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2595" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2596" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2597" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2560" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2581" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2557" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 12px;"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 89px; height: 41px;"></div></div><div class="contract-trigger"></div></div></td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener" style="background-image: url(./static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
                        <div class="card-body"></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Social Media Traffic</h3>
                        </div>
                        <table class="table card-table table-vcenter">
                            <thead>
                            <tr>
                                <th>Network</th>
                                <th colspan="2">Visitors</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Instagram</td>
                                <td>3,550</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>1,798</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td>1,245</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TikTok</td>
                                <td>986</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pinterest</td>
                                <td>854</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>VK</td>
                                <td>650</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pinterest</td>
                                <td>420</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tasks</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                                <tbody><tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Extend the data model.</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            2/7
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            3</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Verify the event flow.</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            3/10
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            6</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm">JL</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Database backup and maintenance</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            0/6
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            1</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Identify the implementation team.</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            6/10
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            12</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Define users and workflow</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            3/7
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            5</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">Check Pull Requests</a>
                                    </td>
                                    <td class="text-nowrap text-muted">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                        January 01, 2019
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                            2/9
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path><line x1="8" y1="9" x2="16" y2="9"></line><line x1="8" y1="13" x2="14" y2="13"></line></svg>
                                            3</a>
                                    </td>
                                    <td>
                                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoices</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 15 12 9 18 15"></polyline></svg>
                                    </th>
                                    <th>Invoice Subject</th>
                                    <th>Client</th>
                                    <th>VAT No.</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001401</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        Carlson Limited
                                    </td>
                                    <td>
                                        87956621
                                    </td>
                                    <td>
                                        15 Dec 2017
                                    </td>
                                    <td>
                                        <span class="badge bg-success me-1"></span> Paid
                                    </td>
                                    <td>$887</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001402</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                                    <td>
                                        <span class="flag flag-country-gb"></span>
                                        Adobe
                                    </td>
                                    <td>
                                        87956421
                                    </td>
                                    <td>
                                        12 Apr 2017
                                    </td>
                                    <td>
                                        <span class="badge bg-warning me-1"></span> Pending
                                    </td>
                                    <td>$1200</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001403</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                                    <td>
                                        <span class="flag flag-country-de"></span>
                                        Bluewolf
                                    </td>
                                    <td>
                                        87952621
                                    </td>
                                    <td>
                                        23 Oct 2017
                                    </td>
                                    <td>
                                        <span class="badge bg-warning me-1"></span> Pending
                                    </td>
                                    <td>$534</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001404</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                                    <td>
                                        <span class="flag flag-country-br"></span>
                                        Salesforce
                                    </td>
                                    <td>
                                        87953421
                                    </td>
                                    <td>
                                        2 Sep 2017
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                                    </td>
                                    <td>$1500</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001405</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                                    <td>
                                        <span class="flag flag-country-pl"></span>
                                        Printic
                                    </td>
                                    <td>
                                        87956621
                                    </td>
                                    <td>
                                        29 Jan 2018
                                    </td>
                                    <td>
                                        <span class="badge bg-danger me-1"></span> Paid Today
                                    </td>
                                    <td>$648</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001406</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                                    <td>
                                        <span class="flag flag-country-br"></span>
                                        Tabdaq
                                    </td>
                                    <td>
                                        87956621
                                    </td>
                                    <td>
                                        4 Feb 2018
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                                    </td>
                                    <td>$300</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001407</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                                    <td>
                                        <span class="flag flag-country-us"></span>
                                        Apple
                                    </td>
                                    <td>
                                        87956621
                                    </td>
                                    <td>
                                        22 Mar 2018
                                    </td>
                                    <td>
                                        <span class="badge bg-success me-1"></span> Paid Today
                                    </td>
                                    <td>$2500</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-muted">001408</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                                    <td>
                                        <span class="flag flag-country-pl"></span>
                                        Tookapic
                                    </td>
                                    <td>
                                        87956621
                                    </td>
                                    <td>
                                        13 May 2018
                                    </td>
                                    <td>
                                        <span class="badge bg-success me-1"></span> Paid Today
                                    </td>
                                    <td>$940</td>
                                    <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                            <ul class="pagination m-0 ms-auto">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                    </div>
                    <label class="form-label">Report type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Simple</span>
                      <span class="d-block text-muted">Provide only basic data needed for the report</span>
                    </span>
                  </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Advanced</span>
                      <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                    </span>
                  </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Report url</label>
                                <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Visibility</label>
                                <select class="form-select">
                                    <option value="1" selected>Private</option>
                                    <option value="2">Public</option>
                                    <option value="3">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Client name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Reporting period</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional information</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Create new report
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
                }],
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: ["#206bc4"],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                stroke: {
                    width: [2, 1],
                    dashArray: [0, 3],
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "May",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
                },{
                    name: "April",
                    data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
                }],
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: ["#206bc4", "#a8aeb7"],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
                }],
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: ["#206bc4"],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 240,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: false
                    },
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Web",
                    data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
                },{
                    name: "Social",
                    data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
                },{
                    name: "Other",
                    data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
                }],
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: -4,
                        bottom: -4
                    },
                    strokeDashArray: 4,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
                ],
                colors: ["#206bc4", "#79a6dc", "#bfe399"],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
                chart: {
                    type: "radialBar",
                    fontFamily: 'inherit',
                    height: 40,
                    width: 40,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 0,
                            size: '75%'
                        },
                        track: {
                            margin: 0
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                },
                colors: ["#206bc4"],
                series: [35],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 192,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Purchases",
                    data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
                }],
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: ["#206bc4"],
                legend: {
                    show: false,
                },
                point: {
                    show: false
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: "#206bc4",
                    data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
@endpush
