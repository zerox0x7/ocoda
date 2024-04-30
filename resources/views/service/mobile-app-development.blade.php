@extends('layout.service')

@section('content')
<header class="header mb-3">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-12 col-lg-6">
          <div class="header__text mb-5">
            <h1 class="header__text__title">تطوير تطبيقات الجوال</h1>
            <p class="header__text__desc">
                احصل على تطبيق هاتف محمول يلبي تطلعاتك مع خدمات أوكودا لتطبيقات الجوال!
            </p>
          </div>
          <div class="d-flex gap-5 align-items-center d-lg-flex d-none">
            <a href="#" class="main-link text-center" type="button" data-bs-toggle="modal"
              data-bs-target="#formModal">اطلب خدمة</a>
            <a href="#" class="second-color watchVideo_btn" data-src="#">
              <div class="d-flex align-items-center gap-3">
                <div class="header__video-icon second-color rounded-circle">
                  <i class="fa-solid fa-circle-play fa-2x border-1"></i>
                </div>
                <span class="second-color fw-bold">
                    مشاهدة الفيديو
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="header__circle"> <div class="header__circle__butterfly p-5 m-5 mt-0 mt-md-5"> <div class="rotated-animation"></div> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="221.523" height="253.007" viewBox="0 0 221.523 253.007"> <defs> <linearGradient id="linear-gradient" x1="6.945" y1="3.772" x2="8.082" y2="3.772" gradientUnits="objectBoundingBox"> <stop offset="0" stop-color="#fff" /> <stop offset="1" stop-color="#10bae7" /> </linearGradient> <linearGradient id="linear-gradient-2" x1="-0.111" y1="4.821" x2="1.398" y2="5.129" gradientUnits="objectBoundingBox"> <stop offset="0" stop-color="#ae4593" /> <stop offset="1" stop-color="#10bae7" /> </linearGradient> </defs> <g id="Group_252" data-name="Group 252" transform="translate(6135.779 2050.889) rotate(14)"> <g id="Butterfly" transform="translate(-6400 -520)"> <path id="Path_63" data-name="Path 63" d="M187.418,28.2s41.258,39.086,32.176,110.455c-5.669,44.538-41.866,111.188-154.028,110.131,0,0,42.873-5.886,71.47-22.028,0,0-5.778-10.14-40.218-9.457-45.163.9-39.194-10.648-30.145-32.883C79.4,153.112,92.58,137.12,179.817,168.6c0,0-36.83-25.9-46.769-68.822C126.13,69.912,143.3,25.482,187.418,28.2Z" transform="translate(-52.204 -28.077)" fill="url(#linear-gradient)" /> <path id="Path_64" data-name="Path 64" d="M206.087,41.5s23.426,23.293,14.76,88.261c-7.234,54.2-83.166,118.714-163.327,109.165,0,0,50.449-.333,76.822-18.515,0,0-3.338-7.892-32.317-2.181-38,7.492-31.277-3.372-20.379-23.909,15.326-28.921,28.746-44.672,97.21-30.469,0,0-27.031-16.883-28.987-52.464C148.5,86.621,169.507,45.712,206.087,41.5Z" transform="translate(-51.734 -30.326)" fill="url(#linear-gradient-2)" /> <path id="Path_65" data-name="Path 65" d="M210.675,37.731s31.335,42.4,8.158,108.715c-14.469,41.383-71.553,89.759-168.264,96.7,0,0,50.274-10.6,71.686-24.226,0,0-3.43-10.356-36.38-14.244-43.206-5.095-35.156-15.235-22.019-35.065,18.506-27.93,34.307-41.325,110.988-.067,0,0-29.812-29.337-30.536-71.253C143.809,69.108,169.209,29.339,210.675,37.731Z" transform="translate(-50.57 -29.504)" fill="#ae4593" opacity="0.3" /> </g> </g> </svg> </div> <div class="header__circle__agent d-md-block d-none"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve"> <style type="text/css"> .st0 { fill: #5B3483; } </style> <g> <g> <g> <g> <g> <path class="st0" d="M91.01,132.46c-1.06,0-1.91-0.86-1.91-1.91c0-19.61,10.46-31.85,13.87-35.32L81.54,48.26L60.16,95.23 c3.41,3.47,13.87,15.71,13.87,35.32c0,1.06-0.86,1.91-1.91,1.91c-1.06,0-1.91-0.86-1.91-1.91c0-21.21-13.47-33.33-13.61-33.45 c-0.63-0.56-0.83-1.46-0.48-2.23L79.8,42.85c0.31-0.68,0.99-1.12,1.74-1.12h0c0.75,0,1.43,0.44,1.74,1.12l23.72,52.02 c0.35,0.77,0.16,1.67-0.48,2.23c-0.13,0.12-13.61,12.31-13.61,33.45C92.92,131.6,92.06,132.46,91.01,132.46z" /> </g> <g> <path class="st0" d="M81.54,96.73c-0.85,0-1.53-0.69-1.53-1.53V43.64c0-0.85,0.69-1.53,1.53-1.53s1.53,0.69,1.53,1.53V95.2 C83.07,96.04,82.39,96.73,81.54,96.73z" /> </g> <path class="st0" d="M87.58,95.2c0,3.33-2.71,6.04-6.04,6.04c-3.33,0-6.04-2.7-6.04-6.04c0-3.34,2.7-6.04,6.04-6.04 C84.88,89.16,87.58,91.86,87.58,95.2z" /> </g> <g> <g> <path class="st0" d="M23.77,70.38c-0.01,0-0.01,0-0.02,0c-0.84-0.01-1.52-0.7-1.51-1.54c0-0.44,0.19-10.81,9.28-18.97 c8.55-7.68,21.83-10.7,39.48-8.96c19.37,1.9,34.38-1.25,43.39-9.13c7.47-6.53,8.84-14.38,8.99-18.47 c0.03-0.84,0.71-1.52,1.59-1.47c0.84,0.03,1.51,0.74,1.47,1.59c-0.17,4.59-1.69,13.37-10.03,20.66 c-9.67,8.45-25.47,11.86-45.7,9.87c-16.73-1.65-29.21,1.1-37.09,8.15c-8.09,7.24-8.31,16.67-8.31,16.77 C25.29,69.7,24.6,70.38,23.77,70.38z" /> </g> <rect x="115.73" y="8.27" class="st0" width="14.26" height="14.26" /> <rect x="13.78" y="58.86" class="st0" width="19.97" height="19.98" /> </g> <g> <g> <path class="st0" d="M117.3,67.19c-0.07,0-0.14-0.02-0.2-0.06L48.98,20.06c-0.16-0.11-0.2-0.33-0.09-0.49 c0.11-0.16,0.33-0.2,0.49-0.09l68.12,47.07c0.16,0.11,0.2,0.33,0.09,0.49C117.53,67.13,117.42,67.19,117.3,67.19z" /> </g> <g> <path class="st0" d="M121.05,66.84c0,2.07-1.68,3.74-3.74,3.74c-2.06,0-3.74-1.67-3.74-3.74s1.67-3.74,3.74-3.74 C119.37,63.1,121.05,64.77,121.05,66.84z" /> <path class="st0" d="M53.85,19.91c0,2.07-1.68,3.74-3.74,3.74c-2.07,0-3.74-1.68-3.74-3.74c0-2.07,1.67-3.74,3.74-3.74 C52.17,16.17,53.85,17.84,53.85,19.91z" /> </g> </g> </g> <rect x="56.53" y="130.57" class="st0" width="50.16" height="11.16" /> </g> </g> </svg> </div> <div class="header__circle__agent d-md-block d-none"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.22 279.88" style="enable-background:new 0 0 321.22 279.88;" xml:space="preserve"> <style type="text/css"> .st0 { fill: #5B3483; } </style> <g> <path class="st0" d="M27.69,220.68c0.44-1.87,0.79-3.77,1.33-5.61c4.28-14.5,13.51-24.2,28.12-28.47c2.08-0.61,2.28-1.67,2.27-3.42 c-0.03-27.72-0.02-55.44-0.02-83.16c0-1.06-0.04-2.13,0.1-3.18c0.26-2.03,1.53-3.18,3.54-3.33c2.13-0.15,3.61,0.86,4.11,2.96 c0.24,1.02,0.23,2.11,0.23,3.16c0.01,19.22,0.01,38.44,0.01,57.66c0,0.96,0,1.92,0,3.49c0.81-0.93,1.26-1.38,1.64-1.89 c4.34-5.95,9.64-10.86,16.09-14.42c1.75-0.96,2.21-2.07,2.21-3.96c-0.06-31.26-0.04-62.53-0.04-93.79c0-4.5,0.69-5.36,5.27-6.39 c-5.05-5.38-10.01-10.65-15.2-16.18c-5.08,5.4-10.07,10.7-15.14,16.09c4.66,1.32,5.18,2.01,5.18,6.72c0,10.8,0.01,21.61-0.01,32.41 c0,1.05-0.02,2.15-0.28,3.15c-0.52,1.97-1.97,2.91-3.98,2.79c-2.01-0.12-3.29-1.23-3.61-3.25c-0.14-0.87-0.11-1.77-0.11-2.65 c-0.01-9.21,0-18.42,0-27.63c0-0.95,0-1.9,0-3.16c-2.45,0-4.61,0.29-6.63-0.1c-1.36-0.26-3.13-1.22-3.63-2.35 c-0.5-1.13-0.17-3.33,0.68-4.26c8.06-8.83,16.28-17.51,24.52-26.17c1.87-1.96,4.18-1.93,6.07,0.06 c8.17,8.6,16.34,17.21,24.33,25.99c0.9,0.99,1.25,3.25,0.76,4.49c-0.43,1.1-2.32,1.99-3.7,2.25c-1.95,0.38-4.04,0.1-6.3,0.1 c0,30.42,0,60.65,0,90.51c6.82-0.66,13.71-1.32,20.81-2.01c0-17.57,0-35.6,0-54.06c-2.01,0-4.15,0.3-6.15-0.1 c-1.45-0.29-3.37-1.23-3.87-2.4c-0.51-1.17-0.03-3.45,0.88-4.45c7.87-8.64,15.92-17.12,23.96-25.61c2.2-2.33,4.48-2.37,6.64-0.09 c8.04,8.49,16.02,17.03,24.05,25.53c1.28,1.35,1.83,2.81,1.09,4.58c-0.78,1.86-2.22,2.62-4.22,2.55c-1.93-0.07-3.87-0.01-5.99-0.01 c0,6.67,0,13.15,0,19.27c6.82-2.22,13.67-4.45,20.84-6.79c0-13,0-26.59,0-40.63c-2.1,0-4.24,0.3-6.24-0.1 c-1.45-0.29-3.36-1.22-3.87-2.39c-0.51-1.17-0.05-3.46,0.87-4.46c7.93-8.7,16.04-17.25,24.15-25.79c2.02-2.13,4.43-2.09,6.49,0.08 c8.04,8.49,16.02,17.03,24.04,25.54c1.35,1.44,2.1,3.21,0.89,4.77c-0.89,1.14-2.58,1.96-4.04,2.26c-1.87,0.38-3.87,0.09-6.06,0.09 c-0.07,0.89-0.19,1.65-0.19,2.4c-0.01,14.7-0.03,29.4,0.05,44.1c0.01,0.95,0.6,2.32,1.35,2.79c7.88,4.91,14.28,11.28,19.54,19.6 c0-10.05,0-19.58,0-29.51c-2.01,0-4.1-0.04-6.19,0.01c-1.91,0.05-3.54-0.72-3.87-2.52c-0.24-1.36,0.01-3.35,0.88-4.3 c7.94-8.7,16.05-17.24,24.15-25.79c2.18-2.3,4.44-2.27,6.65,0.06c8.04,8.49,16.09,16.97,23.96,25.61c0.91,1,1.2,3.08,0.95,4.52 c-0.32,1.81-2.03,2.48-3.93,2.42c-2.01-0.06-4.03-0.01-6.34-0.01c0,2.73,0,5.19,0,7.64c0,7.26,0.04,14.52-0.02,21.79 c-0.02,3.28-2.31,5.26-5.08,4.45c-2.34-0.69-2.91-2.51-2.9-4.77c0.04-10.27,0.02-20.55,0.02-30.82c0-4.84,0.36-5.32,5.12-6.67 c-5.02-5.34-9.97-10.59-15.13-16.07c-5.12,5.43-10.08,10.68-14.94,15.83c1.49,0.87,3.3,1.37,4.1,2.55 c0.79,1.16,0.76,3.01,0.77,4.56c0.05,16.74,0.03,33.48,0.03,50.22c0,0.96,0,1.92,0,2.71c6.71,0.99,13.21,1.96,20.05,2.97 c0-2.49-0.02-5.19,0.01-7.89c0.03-3.05,1.36-4.66,3.82-4.73c2.56-0.07,4.1,1.65,4.14,4.74c0.04,3.19,0.1,6.38-0.03,9.56 c-0.07,1.64,0.5,2.51,1.93,3.31c15.6,8.73,25.54,21.81,29.61,39.23c7.86,33.62-15.66,67.61-49.95,71.85 c-7.43,0.92-15.02,0.54-22.54,0.67c-5.58,0.09-11.16,0.02-16.74,0.02c-4.39,0-6.26-1.17-6.29-3.92c-0.03-2.76,1.98-4.08,6.21-4.08 c10.36,0,20.72,0.04,31.09-0.01c29.64-0.14,52.68-24.09,51.7-53.74c-0.92-27.83-25.38-50.54-53.18-49.35 c-0.71,0.03-1.41,0.09-2.12,0.1c-4.38,0.07-5.46-0.92-5.78-5.31c-1.65-22.48-20.86-42.14-43.11-44.93 c-26.64-3.35-51.13,14.53-55.86,40.25c-0.71,3.84-2.77,4.76-6.95,3.37c-24.6-8.15-50.42,6.2-56.39,31.41 c-0.65,2.74-0.9,5.59-1.13,8.4c-0.35,4.43-0.94,5.03-5.17,5.92c-13.16,2.79-21.89,10.69-25.28,23.66 c-5.39,20.63,9.95,40.13,31.31,40.19c25.59,0.07,51.19,0.02,76.78,0.02c14.61,0,29.23,0,43.84,0.01c0.97,0,1.97-0.03,2.9,0.21 c2.06,0.53,3.15,1.94,3,4.1c-0.15,2.15-1.4,3.38-3.54,3.62c-0.96,0.11-1.95,0.07-2.92,0.07c-39.32,0-78.65-0.34-117.97,0.13 c-24.12,0.28-40.2-17.37-42.13-34.88c-0.04-0.34-0.26-0.65-0.39-0.98C27.69,226.71,27.69,223.7,27.69,220.68z M176.32,46.7 c4.47,0.75,5.35,1.81,5.36,6.08c0.01,13.37,0,26.74,0,40.11c0,0.94,0,1.87,0,2.34c6.89,1.32,13.32,2.55,19.88,3.81 c0-0.85,0-1.82,0-2.79c0-14.43,0-28.86,0-43.29c0-4.43,0.77-5.39,5.29-6.33c-5.11-5.44-10.12-10.76-15.22-16.19 C186.53,35.85,181.57,41.13,176.32,46.7z M124.46,138.28c0.35-0.37,0.49-0.46,0.56-0.6c0.13-0.23,0.24-0.48,0.32-0.73 c3.3-10.87,9.34-19.94,17.89-27.4c0.77-0.67,1.21-2.11,1.22-3.2c0.1-8.14,0.02-16.29,0.08-24.43c0.01-1.64-0.09-3.58,0.72-4.84 c0.79-1.23,2.67-1.77,4.15-2.67c-4.86-5.15-9.86-10.45-14.93-15.83c-5.24,5.57-10.19,10.84-15.25,16.22 c4.49,0.85,5.23,1.74,5.23,6.02c0,18.24,0,36.47,0,54.71C124.46,136.36,124.46,137.19,124.46,138.28z" /> <path class="st0" d="M238.8,203.29c-0.01,14.56-11.83,26.39-26.35,26.38c-14.46-0.02-26.37-11.95-26.37-26.41 c0-14.51,11.85-26.31,26.41-26.31C227.11,176.95,238.82,188.68,238.8,203.29z M230.82,203.28c0.01-10.22-8.11-18.35-18.33-18.35 c-10.15,0-18.42,8.23-18.42,18.33c0,10.07,8.35,18.43,18.4,18.43C222.58,221.7,230.81,213.43,230.82,203.28z" /> <path class="st0" d="M130.27,176.95c5.24-0.01,9.87,1.81,14.12,4.73c2.47,1.7,3.09,4.14,1.66,6.11c-1.39,1.93-3.64,2.15-6.1,0.51 c-3.49-2.33-7.23-3.9-11.47-3.2c-1.75,0.29-3.65,1.01-4.98,2.14c-2.99,2.54-2.2,6.55,1.41,8.09c3.74,1.6,7.57,2.99,11.28,4.64 c2.17,0.96,4.38,2.01,6.24,3.44c7.84,6.04,7.83,16.04,0.09,22.23c-9.74,7.79-24.37,3.12-30.42-4.25c-1.45-1.76-1.14-3.67,0.45-5.25 c1.59-1.58,3.84-1.52,5.69,0.31c2.96,2.93,6.48,4.58,10.55,5.1c3.48,0.45,6.73-0.17,9.36-2.68c2.98-2.85,2.91-6.36-0.3-8.92 c-1.36-1.08-3-1.87-4.6-2.56c-3.73-1.61-7.5-3.13-11.3-4.59c-4.76-1.83-7.5-5.32-8.08-10.27c-0.6-5.04,1.38-9.18,5.43-12.26 C122.53,177.8,126.27,176.92,130.27,176.95z" /> <path class="st0" d="M163.61,207.3c0,4.83,0,9.3,0,14.14c1.17,0,2.2,0,3.23,0c3.81,0.02,7.62-0.06,11.42,0.09 c2.33,0.09,3.88,1.84,3.89,3.92c0,2.08-1.53,3.88-3.87,3.92c-6.28,0.13-12.57,0.15-18.85,0c-2.86-0.07-3.94-1.68-3.95-5.19 c-0.02-13.99-0.01-27.98-0.01-41.97c0-0.18,0-0.35,0.01-0.53c0.16-3.13,1.53-4.55,4.61-4.57c5.84-0.05,11.69-0.05,17.53,0 c2.82,0.02,4.62,1.73,4.54,4.1c-0.08,2.27-1.83,3.83-4.53,3.86c-4.59,0.05-9.18,0.01-13.96,0.01c0,4.76,0,9.3,0,14.25 c3.56,0,7.07,0,10.57,0c0.97,0,1.96-0.06,2.92,0.05c2.27,0.26,3.48,1.63,3.57,3.88c0.08,2.13-1.47,3.84-3.82,3.97 c-3,0.16-6.02,0.06-9.03,0.06C166.56,207.31,165.24,207.3,163.61,207.3z" /> </g> </svg> </div> <div class="header__circle__agent d-md-block d-none"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve"> <style type="text/css"> .st0 { fill: #5B3483; } </style> <g> <g> <path class="st0" d="M8.35,20.78c0-0.87,0-1.74,0-2.6c0.08-0.33,0.18-0.66,0.25-0.99c1.3-6.25,7.74-10.23,13.72-8.47 c8.59,2.52,11.04,12.69,4.52,18.89c-0.56,0.53-0.58,0.91-0.27,1.55c1.74,3.59,3.44,7.19,5.16,10.79c0.18,0.38,0.38,0.75,0.6,1.18 c6.31-2.25,12.55-2.3,18.76,0.05c6.26,2.37,10.89,6.63,14.17,12.47c8.17-3.46,16.26-6.89,24.45-10.36 c-1.66-5.14-1.79-10.27-0.33-15.41c-2.48-0.91-4.79-1.77-7.12-2.63c-0.18,0.23-0.32,0.39-0.45,0.56 c-4.67,6.16-13.05,6.27-17.86,0.23c-2.7-3.39-2.96-8.3-0.64-12.35C65.37,10.08,69.89,7.84,74,8.4c6.08,0.82,10.08,5.59,9.87,11.71 c-0.01,0.37,0.12,1,0.35,1.09c2.19,0.88,4.42,1.66,6.62,2.46C98.22,9.33,113.3,5.4,125.28,10.34 c12.04,4.97,18.71,18.38,15.63,31.07c-2.86,11.81-15.89,23.52-32.86,19.35c-3.59,9.95-7.18,19.92-10.82,30.01 c3.96,1.85,7.21,4.47,9.92,7.86c4.06-2.64,8.05-5.23,12.05-7.82c0.18-0.12,0.47-0.2,0.52-0.36c0.14-0.4,0.35-0.88,0.24-1.24 c-2.03-6.54,2.6-13.4,9.39-14.16c4.19-0.47,8.66,1.7,10.76,5.42c2.29,4.06,1.98,8.92-0.77,12.33c-4.11,5.09-10.8,5.8-15.92,1.67 c-0.57-0.46-0.95-0.56-1.57-0.11c-1.05,0.77-2.17,1.44-3.26,2.15c-2.97,1.93-5.95,3.87-8.97,5.83c0.27,0.59,0.49,1.1,0.73,1.6 c6.45,13.93-0.49,30.69-14.92,35.94c-2.14,0.78-4.41,1.17-6.62,1.75c-1.74,0-3.47,0-5.21,0c-0.24-0.08-0.48-0.19-0.73-0.23 c-7.18-0.93-13.11-4.18-17.53-9.89c-1.88-2.43-3.25-5.27-4.96-8.11c0.19,0,0.01-0.03-0.15,0c-2.99,0.7-6,1.37-8.97,2.16 c-0.34,0.09-0.7,0.78-0.74,1.21c-0.64,6.65-6.09,11.05-12.71,10.22c-7.13-0.9-11.59-8.96-8.48-15.44 c1.94-4.05,5.19-6.34,9.72-6.52c4.37-0.17,7.68,1.78,9.93,5.49c0.42,0.7,0.79,0.83,1.55,0.62c1.71-0.47,3.46-0.82,5.18-1.23 c1.33-0.32,2.66-0.66,4.02-1c-1.07-8.5,1.3-15.82,6.86-22.12c-2.95-3.25-5.81-6.38-8.7-9.56c-8.49,6.05-17.53,7.08-27.19,3.17 c-1.21,2.17-2.36,4.3-3.59,6.38c-0.42,0.71-0.27,1.13,0.25,1.68c0.62,0.66,1.17,1.39,1.65,2.16c2.93,4.77,1.52,11.1-3.23,14.54 c-4.38,3.18-11.02,2.39-14.56-1.66c-1.59-1.82-2.42-3.95-2.9-6.26c0-0.78,0-1.56,0-2.34c0.08-0.28,0.16-0.56,0.22-0.85 c0.71-3.48,2.6-6.08,5.73-7.77c2.69-1.45,5.52-1.63,8.49-0.79c1.36-2.45,2.69-4.85,4.02-7.25c-15.66-10.52-16.06-35.02,1.41-45.3 c-2.03-4.27-4.07-8.54-6.08-12.77c-4.97,0.84-8.84-0.48-11.53-4.24C9.54,24.44,9.08,22.51,8.35,20.78z M93.06,89.24 c3.65-10.13,7.24-20.09,10.85-30.09c-5.51-2.62-9.59-6.56-12.45-11.72c-0.25,0.07-0.38,0.1-0.5,0.15 c-7.7,3.26-15.39,6.53-23.1,9.75c-0.89,0.37-0.73,0.84-0.55,1.51c1.95,7.21,1.14,14.09-2.63,20.56c-0.99,1.7-2.24,3.25-3.4,4.92 c2.87,3.15,5.75,6.31,8.64,9.48C76.98,88.68,84.62,87.13,93.06,89.24z M102.86,129.43c8.25-9.17,6.94-23.9-2.66-31.65 c-10.01-8.09-24.36-6.24-32.02,4.13c-7.07,9.57-4.37,22.05,1.24,27.27c1.71-4.07,4.66-6.91,8.67-8.7 c-4.9-5.67-3.35-12.36,0.4-15.81c4.38-4.02,10.67-4.04,15.11-0.06c3.64,3.27,5.51,10.02,0.47,15.88 C98.15,122.28,101.08,125.22,102.86,129.43z M131.76,49.32c7.14-7.7,7.86-21.46-1.31-30.29c-9.27-8.92-23.62-8.33-32.14,1.33 c-8.27,9.37-6.33,22.51-0.21,28.7c1.22-1.67,2.29-3.54,3.75-5.01c1.46-1.46,3.31-2.53,4.99-3.77c-4.71-5.54-3.1-12.01,0.39-15.45 c3.82-3.76,10.01-4.25,14.2-1.15c2.28,1.69,3.81,3.9,4.4,6.69c0.8,3.81-0.29,7.15-2.87,10.11 C127.16,42.31,130.01,45.26,131.76,49.32z M58.46,80.41c7.04-7.51,7.86-21.35-1.28-30.22c-9.27-9-23.77-8.38-32.32,1.42 c-8.13,9.31-6.18,22.47,0.09,28.76c1.71-4.07,4.62-6.96,8.65-8.73c-5.15-6.26-2.88-12.68,0.32-15.73c3.86-3.68,9.76-4.18,14-1.19 c2.28,1.61,3.82,3.77,4.46,6.5c0.92,3.9-0.13,7.34-2.72,10.34C54.63,74.39,54.63,74.39,58.46,80.41z M54.68,83.92 c-1.35-5.12-4.77-8.37-9.61-8.83c-2.44-0.23-4.97-0.27-7.39,0.09c-4.52,0.68-7.41,3.46-8.85,7.79c-0.23,0.69-0.14,1.07,0.48,1.51 C36.6,89.7,47.54,89.49,54.68,83.92z M85.96,123.91c-0.87,0-1.87-0.05-2.87,0.01c-4.43,0.24-8.48,3.5-9.77,7.75 c-0.28,0.91-0.08,1.38,0.7,1.9c7.37,4.88,17.28,4.81,24.47-0.28c0.3-0.21,0.51-0.87,0.42-1.24c-0.6-2.39-1.95-4.31-3.87-5.84 C92.4,124.1,89.32,123.66,85.96,123.91z M115.12,43.95c-1.13,0-2.26-0.06-3.38,0.01c-4.34,0.28-8.46,3.76-9.57,7.98 c-0.18,0.69-0.04,1.08,0.56,1.5c7.12,4.95,17.6,4.93,24.63-0.04c0.56-0.39,0.7-0.75,0.51-1.38c-0.7-2.42-2.05-4.37-4.03-5.9 C121.26,44.09,118.26,43.69,115.12,43.95z M72.78,26.03c3.65,0,6.63-2.95,6.66-6.59c0.02-3.63-2.95-6.65-6.57-6.71 c-3.66-0.05-6.72,3-6.71,6.69C66.16,23.07,69.13,26.02,72.78,26.03z M121.65,32.7c-0.01-3.64-3-6.63-6.63-6.64 c-3.6-0.01-6.64,3.01-6.66,6.63c-0.03,3.68,3.02,6.71,6.72,6.67C118.76,39.32,121.66,36.37,121.65,32.7z M19.48,99.42 c-3.64-0.01-6.65,2.95-6.69,6.58c-0.04,3.66,3.03,6.73,6.71,6.71c3.65-0.02,6.6-3,6.59-6.66C26.09,102.4,23.13,99.43,19.48,99.42z M32.82,126.07c0,3.63,3,6.64,6.62,6.66c3.6,0.02,6.65-3,6.68-6.61c0.03-3.7-2.98-6.71-6.69-6.69 C35.75,119.46,32.81,122.41,32.82,126.07z M26.09,19.38c-0.01-3.64-2.99-6.63-6.62-6.65c-3.6-0.02-6.65,3-6.68,6.61 c-0.03,3.67,3.01,6.7,6.71,6.68C23.16,26,26.1,23.04,26.09,19.38z M130.57,92.7c3.64,0,6.64-2.96,6.67-6.59 c0.03-3.6-2.97-6.66-6.59-6.71c-3.66-0.05-6.72,2.99-6.71,6.69C123.95,89.75,126.9,92.69,130.57,92.7z M86.08,106.09 c-3.65,0.01-6.63,2.97-6.64,6.62c-0.01,3.64,2.93,6.63,6.59,6.69c3.65,0.06,6.72-3.01,6.7-6.7 C92.71,109.04,89.73,106.08,86.08,106.09z M48.27,63.81c-0.02-3.67-2.96-6.6-6.63-6.6c-3.64,0-6.64,2.96-6.67,6.6 c-0.04,3.62,3.1,6.74,6.73,6.7C45.33,70.46,48.29,67.45,48.27,63.81z" /> </g> </g> </svg> </div> <div class="header__circle__agent d-md-block d-none"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve"> <style type="text/css"> .st0 { fill: #5B3483; } </style> <g> <g> <path class="st0" d="M5.65,24.67c0.09-0.34,0.19-0.68,0.26-1.03c0.56-2.79,2.92-4.8,5.78-4.86c2.01-0.04,4.02-0.01,6.03-0.01 c30.35,0,60.7,0,91.05,0c2.15,0,3.13,0.64,3.1,2.05c-0.03,1.37-0.96,1.97-3.05,1.97c-31.96,0-63.92,0-95.88,0 c-2.63,0-3.13,0.49-3.13,3.12c0,25.12,0,50.24,0,75.36c0,0.48,0,0.97,0,1.65c0.65,0,1.17,0,1.69,0c10.55,0,21.1,0,31.65,0 c0.4,0,0.81-0.01,1.21,0.01c1.33,0.06,2.09,0.75,2.13,1.92c0.04,1.2-0.76,2.04-2.13,2.08c-1.83,0.06-3.66,0.02-5.5,0.02 c-0.48,0-0.96,0-1.52,0c0,6.77,0,13.4,0,20.18c0.56,0,1.08,0,1.61,0c23.2,0,46.4,0,69.6,0c0.4,0,0.81-0.02,1.21,0.01 c1.27,0.07,2.09,0.84,2.11,1.96c0.03,1.18-0.82,1.99-2.16,2.05c-0.4,0.02-0.8,0-1.21,0c-31.6,0-63.2,0-94.81,0 c-5.25,0-6.57-0.97-8.06-5.9C5.65,91.73,5.65,58.2,5.65,24.67z M9.91,107.03c-0.03,0.42-0.08,0.76-0.08,1.11 c0,5.45-0.01,10.9,0,16.36c0,1.99,0.68,2.64,2.67,2.64c6.48,0.01,12.96,0,19.44,0c0.39,0,0.78-0.04,1.24-0.06 c0-6.71,0-13.34,0-20.04C25.4,107.03,17.69,107.03,9.91,107.03z" /> <path class="st0" d="M138.99,106.96c-0.64,0-1.21,0-1.78,0c-27.76,0-55.51,0-83.27,0c-0.58,0-1.18,0.03-1.73-0.09 c-1.11-0.24-1.69-1-1.59-2.14c0.1-1.07,0.75-1.69,1.84-1.77c0.49-0.04,0.98-0.02,1.47-0.02c27.76,0,55.51,0,83.27,0 c0.57,0,1.14,0,1.88,0c0-0.64,0-1.12,0-1.6c0-25.16,0-50.33,0-75.49c0-2.53-0.53-3.04-3.08-3.04c-5.68,0-11.35,0-17.03,0 c-0.36,0-0.72,0.02-1.07-0.01c-1.15-0.1-1.96-0.93-1.97-1.98c-0.01-1.05,0.8-1.9,1.94-2.02c0.27-0.03,0.54-0.01,0.8-0.01 c5.99,0,11.98,0.09,17.97-0.04c3.34-0.07,6.42,2.66,6.41,6.35c-0.1,33.3-0.1,66.6,0,99.9c0.01,3.28-2.77,6.23-6.14,6.2 c-6.17-0.07-12.34-0.01-18.5-0.02c-1.54,0-2.48-0.8-2.47-2.03c0.02-1.23,0.95-1.98,2.51-1.99c5.94-0.01,11.89,0,17.83,0 c2.17,0,2.8-0.62,2.8-2.78c0.01-5.36,0-10.73,0-16.09C139.08,107.88,139.03,107.49,138.99,106.96z" /> <path class="st0" d="M70.29,61.61c0,2.75,0.01,5.12,0,7.48c-0.01,2-0.67,2.71-2.62,2.72c-4.65,0.02-9.3,0.02-13.94,0 c-1.6-0.01-2.47-0.75-2.48-2.02c-0.01-1.24,0.82-2,2.32-2.01c3.71-0.03,7.42-0.01,11.13-0.01c0.48,0,0.96,0,1.57,0 c0-2.83,0.14-5.51-0.04-8.16c-0.16-2.43,0.5-4.4,2.04-6.26c1.61-1.95,2.99-4.1,4.69-6.47c-1.48,0-2.72,0.16-3.9-0.03 c-3.18-0.53-5.48,0.59-7.13,3.32c-0.55,0.91-1.34,1.67-2.07,2.46c-0.85,0.93-2.01,1.05-2.87,0.37c-0.91-0.72-1.02-1.94-0.17-2.97 c1.76-2.14,3.54-4.27,5.4-6.31c0.42-0.46,1.22-0.81,1.85-0.82c4.2-0.07,8.4-0.08,12.6,0c0.68,0.01,1.46,0.4,2.01,0.85 c2.75,2.21,5.41,4.53,8.17,6.74c0.54,0.43,1.32,0.72,2.01,0.76c2.1,0.1,4.2,0.02,6.3,0.04c1.59,0.01,2.49,0.74,2.51,1.99 c0.03,1.31-0.86,2.04-2.56,2.04c-2.23,0.01-4.47-0.07-6.7,0.03c-1.48,0.06-2.64-0.35-3.75-1.35c-2.36-2.1-4.84-4.07-7.38-6.2 c-2.14,2.98-4.22,5.86-6.04,8.39c2,2.18,3.82,4.26,5.74,6.25c1.55,1.61,3.26,3.06,4.78,4.7c0.52,0.56,0.93,1.46,0.95,2.21 c0.1,3.71,0.06,7.42,0.03,11.13c-0.01,1.46-0.81,2.37-1.98,2.37c-1.17,0.01-2.01-0.91-2.03-2.35c-0.03-3.17,0.04-6.35-0.05-9.52 c-0.02-0.7-0.37-1.56-0.86-2.06C75.45,66.51,72.98,64.2,70.29,61.61z" /> <path class="st0" d="M108.13,119.07c-6.97,0-13.95,0.02-20.92-0.02c-0.94,0-1.47,0.18-1.96,1.11c-1.22,2.32-3.26,3.52-5.9,3.48 c-2.6-0.04-4.54-1.3-5.72-3.57c-0.43-0.83-0.89-1.02-1.73-1.01c-7.78,0.03-15.56,0.02-23.33,0.02c-0.4,0-0.81,0.02-1.21-0.03 c-1.15-0.14-1.93-1-1.91-2.05c0.02-1.07,0.82-1.86,1.99-1.94c0.4-0.03,0.8-0.01,1.21-0.01c7.69,0,15.38-0.02,23.07,0.02 c0.95,0.01,1.46-0.22,1.94-1.12c1.22-2.31,3.23-3.53,5.89-3.5c2.6,0.03,4.56,1.25,5.73,3.53c0.45,0.87,0.95,1.08,1.85,1.08 c13.86-0.02,27.71-0.02,41.57-0.02c0.45,0,0.9-0.02,1.34,0.01c1.19,0.09,1.95,0.85,1.96,1.95c0.02,1.09-0.72,1.91-1.89,2.05 c-0.4,0.05-0.8,0.02-1.21,0.02C121.99,119.07,115.06,119.07,108.13,119.07z M79.51,114.48c-1.45-0.02-2.57,1.05-2.6,2.49 c-0.03,1.47,1.14,2.67,2.6,2.65c1.38-0.02,2.56-1.21,2.56-2.59C82.07,115.64,80.93,114.5,79.51,114.48z" /> <path class="st0" d="M32.13,89.39c-0.38,0.59-0.63,1.17-1.04,1.6c-1.7,1.76-3.44,3.5-5.2,5.21c-1.13,1.1-2.15,1.1-3.26,0.02 c-1.79-1.75-3.55-3.51-5.3-5.3c-1.02-1.05-1.03-2.13-0.02-3.18c1.78-1.82,3.57-3.62,5.4-5.39c1.01-0.98,2.05-1,3.07-0.01 c1.86,1.8,3.69,3.63,5.48,5.49C31.64,88.22,31.81,88.8,32.13,89.39z M21.76,89.21c0.84,0.94,1.68,1.89,2.37,2.66 c0.96-0.9,1.87-1.74,2.79-2.61c-0.88-0.89-1.75-1.76-2.69-2.7C23.36,87.5,22.51,88.4,21.76,89.21z" /> <path class="st0" d="M132.49,89.33c-0.31,0.56-0.49,1.13-0.86,1.52c-1.76,1.83-3.56,3.63-5.38,5.4c-1.07,1.04-2.1,1.04-3.17,0 c-1.82-1.77-3.62-3.57-5.39-5.39c-1-1.03-1-2.04-0.01-3.07c1.8-1.86,3.63-3.69,5.49-5.48c0.96-0.93,2-0.94,2.97-0.01 c1.89,1.83,3.75,3.7,5.57,5.59C132.06,88.24,132.2,88.78,132.49,89.33z M124.68,91.93c0.89-0.87,1.77-1.74,2.52-2.48 c-0.84-0.96-1.67-1.92-2.44-2.8c-0.98,0.94-1.87,1.79-2.78,2.67C122.9,90.2,123.79,91.06,124.68,91.93z" /> <path class="st0" d="M82.35,42.73c-3.88-0.01-6.98-3.13-6.95-7c0.02-3.79,3.12-6.89,6.92-6.93c3.82-0.04,7.02,3.12,7.02,6.96 C89.35,39.63,86.23,42.74,82.35,42.73z M82.4,38.69c1.6-0.01,2.89-1.28,2.91-2.87c0.02-1.62-1.33-2.98-2.97-2.96 c-1.58,0.02-2.89,1.31-2.91,2.89C79.41,37.37,80.74,38.7,82.4,38.69z" /> <path class="st0" d="M36.87,91.34c-1.52,0.02-2.47-0.74-2.51-1.98c-0.03-1.24,0.92-2.06,2.41-2.07c1.54-0.02,2.46,0.71,2.48,1.98 C39.29,90.55,38.39,91.33,36.87,91.34z" /> <path class="st0" d="M61.88,91.34c-1.52-0.01-2.42-0.79-2.4-2.07c0.02-1.26,0.94-2,2.48-1.99c1.48,0.01,2.45,0.84,2.42,2.07 C64.35,90.58,63.38,91.36,61.88,91.34z" /> <path class="st0" d="M70.34,91.34c-1.55,0.02-2.46-0.69-2.5-1.96c-0.04-1.29,0.84-2.07,2.37-2.09c1.54-0.02,2.47,0.71,2.51,1.96 C72.76,90.53,71.85,91.32,70.34,91.34z" /> <path class="st0" d="M78.58,91.34c-1.52-0.02-2.42-0.8-2.39-2.08c0.03-1.26,0.96-1.99,2.5-1.97c1.53,0.02,2.41,0.79,2.38,2.08 C81.04,90.64,80.13,91.36,78.58,91.34z" /> <path class="st0" d="M86.95,87.29c1.53-0.02,2.46,0.72,2.48,1.98c0.03,1.28-0.88,2.06-2.39,2.07c-1.5,0.02-2.48-0.76-2.51-1.98 C84.5,88.13,85.46,87.31,86.95,87.29z" /> <path class="st0" d="M112.06,91.34c-1.52-0.01-2.42-0.78-2.41-2.06c0.02-1.27,0.93-2.01,2.46-2c1.5,0.01,2.45,0.81,2.43,2.05 C114.52,90.59,113.57,91.35,112.06,91.34z" /> <path class="st0" d="M45.2,91.35c-1.49,0.01-2.48-0.79-2.49-2.01c-0.01-1.22,0.97-2.04,2.45-2.04c1.5-0.01,2.47,0.77,2.48,2.01 C47.66,90.54,46.7,91.34,45.2,91.35z" /> <path class="st0" d="M53.53,91.34c-1.49-0.01-2.46-0.82-2.45-2.05c0.01-1.23,0.99-2.01,2.49-2c1.48,0.01,2.47,0.83,2.45,2.05 C56.01,90.56,55.02,91.35,53.53,91.34z" /> <path class="st0" d="M95.3,91.34c-1.48-0.02-2.46-0.86-2.42-2.08c0.04-1.21,1.03-1.99,2.53-1.97c1.48,0.02,2.45,0.85,2.41,2.08 C97.79,90.6,96.81,91.36,95.3,91.34z" /> <path class="st0" d="M103.71,91.35c-1.5,0-2.46-0.8-2.45-2.04c0.01-1.23,0.97-2.02,2.48-2.01c1.48,0.01,2.47,0.82,2.46,2.04 C106.18,90.55,105.2,91.35,103.71,91.35z" /> <path class="st0" d="M15.3,116.96c0-1.16-0.03-2.32,0.01-3.48c0.04-1.19,0.81-1.97,1.89-2.02c1.13-0.05,2.07,0.74,2.1,1.97 c0.06,2.41,0.06,4.82,0,7.23c-0.03,1.23-0.96,2-2.1,1.95c-1.08-0.05-1.84-0.83-1.88-2.02C15.27,119.37,15.3,118.17,15.3,116.96z" /> <path class="st0" d="M27.41,117.06c0,1.16,0.03,2.32-0.01,3.48c-0.04,1.28-0.82,2.06-1.98,2.07c-1.14,0-1.99-0.78-2.02-2.04 c-0.05-2.36-0.06-4.73,0-7.09c0.03-1.24,0.94-2.04,2.06-2.01c1.13,0.03,1.87,0.84,1.94,2.12c0,0.09,0,0.18,0,0.27 C27.42,114.92,27.42,115.99,27.41,117.06C27.41,117.06,27.41,117.06,27.41,117.06z" /> </g> </g> </svg> </div> </div>
          <div class="d-flex gap-5 align-items-center d-lg-none d-flex mt-4 justify-content-center">
            <a href="#" class="main-link text-center" type="button" data-bs-toggle="modal"
              data-bs-target="#formModal">اطلب خدمة
            </a>
            <a href="#" class="second-color watchVideo_btn" data-src="#">
              <div class="d-flex align-items-center gap-3">
                <div class="header__video-icon second-color rounded-circle">
                  <i class="fa-solid fa-circle-play fa-2x border-1"></i>
                </div>
                <span class="second-color fw-bold">
                    مشاهدة الفيديو
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
</header>


<section class="cover py-5 mb-5">
  <div class="container">
    <div class="cover__content flout-butterfly">
      <div class="main-title text-center">
        <h2 class="main-title__text text--color mb-2">
          تطوير تطبيقات الجوال
          <sup class="butterfly_icon"><img alt="" class="img-fluid lazy" height="100%" width="100%" src="{{ asset('assets/img/small_dark_butterfly.svg') }} "></sup>
        </h2>
        <p style="text-align:right"><span style="color:#ffffff"><strong>فكرتك تتحق بافضل شكل ممكن</strong></span></p>

<p style="text-align:right"><span style="color:#ffffff">في &quot;<u><strong>أوكودا</strong></u>&quot;، نؤمن بأن أفضل الأفكار تستحق أفضل التنفيذ. مهما كانت فكرتك لتطبيق للهاتف المحمول، فإن قسم التطوير لدينا مستعد لتحويلها إلى واقع ملموس. من خلال الجمع بين إبداعنا وخبرتنا، نعدك أن نقدم لك تجربة تطبيق استثنائية تلبي تطلعاتك وتفوق توقعاتك.</span></p>

<p style="text-align:right"><span style="color:#ffffff">مهما كانت فكرتك معقدة أو بسيطة، فإن فريقنا من المطورين المحترفين جاهز لبناء تطبيقك المثالي. سواء كنت تهدف إلى تحسين تجربة المستخدم، تسهيل الوصول إلى خدماتك، أو حتى إحداث ثورة في سوقك، فإننا نقدم حلول تطوير مخصصة لتحقيق أهدافك.</span></p>
      </div>
    </div>
  </div>
</section>




@endsection
