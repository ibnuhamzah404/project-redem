<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <title>Royals Guard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Fjalla+One"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="https://gacha.royalsguard.com/css/style.css" />
    <link
      rel="icon"
      type="image/png"
      href="https://gacha.royalsguard.com/media/logo.png"
    />

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="media/logo.png">

    <!-- bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
    <meta name="author" content="hypernym.tech" />

    <style>

        :root{
            font-size: 16px;
        }
        body{
            color: #fff;
            background-image: url("img/background.png");
            background-size: cover;
          
            text-align: initial;
           
            background-repeat: no-repeat;
           
  display: flex;

  flex-direction: column;
  justify-content: space-between;
          
        }


       
       
      

        .card-text{
            background-color: #111827;
            color : #fff;
            text-align: initial;
            box-shadow: 3px 4px 10px -3px rgba(14, 13, 13, 0.84);
            border-radius: 10px;
            height: fit-content;
            padding : 50px 50px !important;
        }

        .card-text button{
            font-weight: bold;
            width: 100%;
        }

        .card-text h2{
            font-size: 3rem;
            line-height: 45px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin-bottom : 40px;
        }

        .card-wheel {
            width: 80%;
            
        }

        .card-wheel img{
            width : 100%;
        }


        marquee{
            background-color: #ffc107;
           
        }

     
    </style>
  </head>

  <body>
    <marquee><font color=" #1e2022;"><?php echo $winner_running_text; ?></font></marquee>
    <div class="con-wheel p-5">
    <div  class="container">
        <div class="row ">
            <div class="col-md-7  d-flex justify-content-center">
                <div class="card-wheel">
                <div id="container">
        <div class="wheelContainer">
            <svg class="wheelSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" text-rendering="optimizeSpeed" preserveAspectRatio="xMidYMin meet" viewBox="0 0 600 600">
                <defs>
                    <filter id="shadow" x="-100%" y="-100%" width="550%" height="550%">
                        <feOffset in="SourceAlpha" dx="0" dy="0" result="offsetOut"></feOffset>
                        <feGaussianBlur stdDeviation="9" in="offsetOut" result="drop" />
                        <feColorMatrix in="drop" result="color-out" type="matrix" values="0 0 0 0   0
              0 0 0 0   0 
              0 0 0 0   0 
              0 0 0 .3 0" />
                        <feBlend in="SourceGraphic" in2="color-out" mode="normal" />
                    </filter>
                </defs>
                <g class="mainContainer">
                    <g class="wheel">
                    </g>
                </g>
                <g class="centerCircle" />
                <g class="wheelOutline" />
                <g class="pegContainer" opacity="1">
                    <path class="peg" fill="#EEEEEE" d="M22.139,0C5.623,0-1.523,15.572,0.269,27.037c3.392,21.707,21.87,42.232,21.87,42.232 s18.478-20.525,21.87-42.232C45.801,15.572,38.623,0,22.139,0z" />
                </g>
                <g class="valueContainer" />
                <g class="centerCircleImageContainer" />
            </svg>
            <div class="toast">
                <p></p>
            </div>
        </div>
    </div>
            </div>
            </div>
            <div class="col-md-5 d-flex ">
                <div class="card-text ">
                    <h2>Spin The Wheel!</h2>
                    <p>kamu berkesempatan mendapatkan vocher, diskon atau hadiah spesial lainnya</p>
                    <p>cukup tekan tombol spin jika anda beruntung maka akan mendapatkan hadiah spesial</p>
                    <img style="width : 150px; margin : 0 auto; display : inherit;" src="https://cdn1.thesculptedvegan.com/wp-content/uploads/2020/05/07151301/Arrows-3-pointing-down-arrow-down-animated.gif" alt="">
                    <button class="spinBtn btn btn-md btn-warning"> SPIN SEKARANG</button>
                    <img style="width : 150px; margin : 0 auto; display : inherit; transform: rotate(180deg);" src="https://cdn1.thesculptedvegan.com/wp-content/uploads/2020/05/07151301/Arrows-3-pointing-down-arrow-down-animated.gif" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
<footer class="foot">
    <svg
      width="100%"
      height="100%"
      id="svg"
      viewBox="0 0 1440 390"
      xmlns="http://www.w3.org/2000/svg"
      class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24"
    >
      <path
        d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z"
        stroke="none"
        stroke-width="0"
        fill="#1e2022"
        fill-opacity="1"
        class="path-0 transition-all delay-150 duration-300 ease-in-out"
      ></path>
    </svg>
    <div style="background-color: #1e2022">
      <footer class="py-2 container">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Royals Guard</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About Us</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Our Product</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Our Seller</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Social Media</h5>
            <ul class="nav flex-row">
              <li class="nav-item mb-2">
                <a
                  style="cursor: pointer; text-decoration: none"
                  href="https://www.facebook.com/royalsguard.id"
                  rel="noopener noreferrer me"
                  aria-label="-"
                  target="_blank"
                  ><svg
                    viewBox="0 0 512 512"
                    class=""
                    width="24"
                    height="24"
                    style="
                      color: #f5f5f5;
                      position: relative;
                      font-size: 24px;
                      width: 24px;
                      height: 24px;
                      text-align: center;
                      fill: #f5f5f5;
                    "
                  >
                    <path
                      d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z"
                    ></path></svg
                ></a>
              </li>
              <li class="nav-item mb-2">
                <a
                  style="cursor: pointer; text-decoration: none"
                  href="https://www.instagram.com/royalsguard.id"
                  rel="noopener noreferrer me"
                  aria-label="-"
                  target="_blank"
                  ><svg
                    viewBox="0 0 512 512"
                    class=""
                    width="24"
                    height="24"
                    style="
                      color: #f5f5f5;
                      position: relative;
                      font-size: 24px;
                      width: 24px;
                      height: 24px;
                      text-align: center;
                      fill: #f5f5f5;
                    "
                  >
                    <circle cx="256" cy="255.833" r="80"></circle>
                    <path
                      d="M177.805 176.887c21.154-21.154 49.28-32.93 79.195-32.93s58.04 11.838 79.195 32.992c13.422 13.42 23.01 29.55 28.232 47.55H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51 0-49 20.49-49 47v113h85.072c5.222-18 14.81-34.19 28.233-47.613zM416.5 147.7c0 7.07-5.73 12.8-12.8 12.8h-38.4c-7.07 0-12.8-5.73-12.8-12.8v-38.4c0-7.07 5.73-12.8 12.8-12.8h38.4c7.07 0 12.8 5.73 12.8 12.8v38.4zM336.195 335.28c-21.154 21.153-49.28 32.678-79.195 32.678s-58.04-11.462-79.195-32.616c-21.115-21.115-32.76-49.842-32.803-78.842H64.5v143c0 26.51 22.49 49 49 49h288c26.51 0 47-22.49 47-49v-143h-79.502c-.043 29-11.687 57.664-32.803 78.78z"
                    ></path></svg
                ></a>
              </li>
              <li class="nav-item mb-2">
                <a
                  style="cursor: pointer; text-decoration: none"
                  href="https://www.tiktok.com/@royalsguardofficial"
                  rel="noopener noreferrer me"
                  aria-label="-"
                  target="_blank"
                  ><svg
                    viewBox="0 0 512 512"
                    class=""
                    width="24"
                    height="24"
                    style="
                      color: #f5f5f5;
                      position: relative;
                      font-size: 24px;
                      width: 24px;
                      height: 24px;
                      text-align: center;
                      fill: #f5f5f5;
                    ">
                    <path
                      d="m406.8 171.1c-.3 0-30.7-.6-56.6-19.6-22.6-16.5-30.4-52.4-31.6-65.7v-1.8h-55v237.3c0 28.5-23.2 51.7-51.7 51.7s-51.7-23.2-51.7-51.7 23.2-51.7 51.7-51.7h17.4v-55h-17.4c-58.8 0-106.7 47.9-106.7 106.7s47.9 106.7 106.7 106.7 106.7-47.9 106.7-106.7v-124.8c39.9 28.7 83.1 29.6 88.1 29.6v-55z">
                    </path></svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-3">
            <h5>Contact Us</h5>
            <ul class="nav flex-row">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">
                    <svg
                    viewBox="30 30 450 450"
                    class=""
                    width="18"
                    height="18"
                    style="
                      color: #f5f5f5;
                      position: relative;
                      font-size: 18px;
                      width: 18px;
                      height: 18px;
                      text-align: center;
                      margin-right: 6px;
                      fill: #f5f5f5;
                    ">
                    <path d="M448 384V141.8l-131.1 99.8L385 319l-2 2-78.9-69.6L256 288l-48.1-36.6L129 321l-2-2 68-77.4L64 142v242z">
                </path>
                    <path d="M439.7 128H72l184 139.9z"></path></svg>
                  royalsguard.id@gmail.com</a>
              </li>
            </ul>
          </div>

          <div class="col-md-4 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"
                  >Email address</label
                >
                <input
                  id="newsletter1"
                  type="text"
                  class="form-control"
                  placeholder="Email address"
                />
                <button class="btn btn-primary" type="button">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-footer">
          <p>@2023 Royalsguard Inc.</p>
        </div>
      </footer>
    </div>
  </footer>
</div>
      
    

 
  </body>

  <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='js/Draggable.min.js'></script>
    <script src='js/InertiaPlugin.min.js'></script>
    <script src='js/TextPlugin.min.js'></script>
    <script src='js/Spin2WinWheel.min.js'></script>
    <script src="js/index.js"></script>
</html>