<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>

<html>
  

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Artanis Cloud Admin Page </title>
        <script src="https://kit.fontawesome.com/108ac02d1f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="devstyle.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,400&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            video{
              width: 100vw;
              height: 100vh;
              object-fit: cover;
              position: fixed;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              z-index: -1;
            } 
            

            body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
            background: #232427;
            }

            body .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 40px 0;
            }

            body .container .card {
            position: relative;
            min-width: 320px;
            height: 300px;
            box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            margin: 30px;
            transition: 0.5s;
            }

            body .container .card:nth-child(1) .box .content a {
            background: #000000;
            }

            body .container .card:nth-child(2) .box .content a {
            background: #000000;
            }

            body .container .card:nth-child(3) .box .content a {
            background: #000000;
            }

            body .container .card .box {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: #2a2b2f;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s;
            }

            body .container .card .box:hover {
            transform: translateY(-30px);
            }

            /* body .container .card .box:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, 0.03);
            } */

            body .container .card .box .content {
            padding: 20px;
            text-align: center;
            }

            body .container .card .box .content h2 {
            position: absolute;
            top: -10px;
            right: 30px;
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.1);
            }

            body .container .card .box .content h3 {
            font-size: 1rem;
            color: #fff;
            z-index: 1;
            transition: 0.5s;
            margin-bottom: 15px;
            }

            /* body .container .card .box .content p {
            font-size: 1rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            z-index: 1;
            transition: 0.5s;
            } */

            body .container .card .box .content a {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: black;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            margin-top: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            }
            body .container .card .box .content a:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            background: #fff;
            color: #000;
            }
            .logo{
                /* display: block; */
                margin-left: 530px;
                margin-right: auto; 
                width: 180px;
                padding-top:25px;
                padding-bottom:10px; 
                padding-left:20px;
                cursor:pointer;
            }
                      
          i{
            color:skyblue;
            margin:10px;
          }
          
          .logout a  {
            background-color: #2a2b2f;         
            border-radius:10px;
            color: white;
            padding: 1em 1.5em;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            margin-right:100px;
            border: 2px solid #fff;
            font-size:15px;
          }



          a:hover {
            background-color: #ce0606;
            cursor: pointer;
            background-color:white;
            color:#232427;
            border: 2px solid #2a2b2f; 
          }

          a:active {
            box-shadow: none;
            top: 5px;
          }
        </style>
        
    </head>

    <body>
<?php
    if(empty($_SESSION["username"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
          header("LOCATION:login.php"); /* REDIRECT USER TO LOGIN PAGE */
          ob_end_flush();
    }
    else{
      header("LOCATION:devmain.php"); 

    }
?>
      
        <img src="logo.png" class="logo" onclick="window.location.href='main.html'">

        <video src="devmain.mp4" muted loop autoplay></video>
        <div class="logout">
            <br><a href="http://localhost/Artanis/logout.php">Log out</a>
        </div>
 
      
          
          
         <div class="container">
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br>ACES | 4.0<br> VERSION 2</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://acesv2.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> SHOW CAR</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.showcar.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> HTCKL 2.0</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://htckl-mockup-1.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br>ACES | 4.0 <br>PRO VERSION </h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://webpro.aces.ecerdc.com.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>E-KILANG <br><br> MALAYSIAN PALM OIL BOARD (MPOB)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://ekilang.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> UNESCO IHP MALAYSIA</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.unescoihp.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3>E-KBK <br><br> JABATAN PERHUTANAN SEMENANJUNG MALAYSIA (JPSM)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.ekbk.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> JABATAN ALAM SEKITAR</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://doe.gov.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>ASSET MANAGEMENT <br><br> R&D</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.asset-management.ezran.my/login">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3>SISTEM BANTUAN KEWANGAN RUMAH IBADAT SELAIN ISLAM (RISI) <br><br> UNIT PERANCANG EKONOMI NEGERI (UPEN) SELANGOR</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.upen.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>VENUE MANAGEMENT SYSTEM <br><br> INTERNATIONAL CONFERENCE AND EXHIBITION PROFESIONALS (iCEP)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://vms.icep.com.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>E-COST <br><br> MALAYSIA PALM OIL BOARD (MPOB)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.ecost.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br> MARKETPLACE</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://dev.ezran.my/marketplace/home">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3><br>ACES | 4.0</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://webapp.aces.ecerdc.com.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> BAHAGIAN ISTIADAT DAN URUSETIA ANTARABANGSA (BIUPA)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="http://www.istiadat.gov.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br> E-SPATIAL <br><br>JABATAN PERHUTANAN SEMENANJUNG MALAYSIA (JPSM) </h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://espatial.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3><br> E-DECLARE <br><br>MALAYSIAN COMMUNICATIONS AND MULTIMEDIA COMMISION (MCMC)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://edeclare.ezran.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> KEMENTERIAN PEMBANGUNAN LUAR BANDAR (KPLB)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://www.rurallink.gov.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br> POKLI E-COMMERCE</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://pokli.com.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3>PORTAL <br><br> HUMID TROPICS CENTER KUALA LUMPUR (HTCKL)</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://htckl.water.gov.my/">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3><br> MAINTENANCE MANAGEMENT SYSTEM</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://ezran.my/mms2/login.php">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3><br>MAMPU MYGDX</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://mygdx.malaysia.gov.my/ms">Go Now</a>
                </div>
              </div>
            </div>
          
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:100%"></h2> -->
                  <h3><br>WATER RESOURCE INDEX SYSTEM</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="http://waris.water.gov.my/">Go Now</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="box">
                <div class="content">
                  <!-- <h2><img src="logoword.png" alt="Avatar" style="width:40%" ></h2><br> -->
                  <h3><br> CAAM DRONE</h3>
                  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p> -->
                  <a href="https://ezran.my/drone/">Go Now</a>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>