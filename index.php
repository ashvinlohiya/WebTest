<!DOCTYPE html>

<html lang="en">
  <head>
      <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>Anekto</title>
    <style>

        @font-face {
            font-family: Precious;
            src: url('Precious.ttf');
        }

        body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #777;

      }

     .evenDiv {
        background-color: #1A1A1A;
       min-height: 100%;
         z-index: 2;

      }

      /*.oddDiv {*/
        /*background-color: #770D0D;*/
        /*min-height: 100%;*/
      /*}*/

      .logo1, .logo2, .logo3, .logo4, .logo5 {
        min-height: 100%;

        position: relative;
          opacity: 0.90;


          background-size: cover;
      }

        .logo1 {
            background: url("img10.png") no-repeat fixed center;


        }

        .logo2 {
            background: url("img2.png") fixed center;
        }

        .logo4 {
            background: url("img3.jpg") fixed center;
        }

        .logo3 {
            background: url("img4.jpg") fixed center;
            min-height: 100%;
        }

        .logo5 {
            background: url("img5.png") fixed center;
        }

      .caption {
          position: absolute;
          left: 0;
          top: 50%;
          width: 100%;
          text-align: center;
          color: #000000;
      }

      .caption span.border {
          background-color: #111;
          color: #fff;
          padding: 18px;
          font-size: 25px;
          letter-spacing: 10px;
      }

        #opacityCheck {
            font-size: 200px;
            color: white;
            font-family: Precious;
            line-height: 15%;
            text-align: center;

        }

        .check {
            background-color: #770D0D;
            min-height: 100%;
            opacity: 0.7;



        }

        #specialA {
            animation: change 3s both;
        }

        @keyframes change {
            from { color: white }
            to   { color: #8c1212}
        }


        .header {
            width:100%;
            position:fixed;
            top:0px;
            margin:0px auto;
            z-index: 1;
            height:50px;
            color: white;

        }




        .logoLeft {
            float: left;
            font-family: Precious;
            color: white;
            font-size: 20px;
            list-style-type: none;
            z-index: 0;

        }

        .navOptions {
            float: left;
            margin-left: 400px;
            position: absolute;
            list-style-type: none;
            margin-top: 0;
        }




    </style>
  </head>
  <body>


  <div class="header">
      <div>
      <ul>
          <li class="logoLeft">  Anekto </li>

      </ul>
      </div>
      <div>
          <ul class="navOptions">
              <!--<li><a href="#About"> About </a></li>-->
          </ul>
      </div>

  </div>



      <div class="evenDiv">
        <div class="caption">
            <span id="opacityCheck"> <span id="specialA">A</span>nekto </span>
        </div>
      </div>


  <a name="About"></a>
      <div class="logo1">


      </div>

    <div class="logo2">
        <div class="caption">
            <span class="border opacityCheck">This is text </span>
        </div>
    </div>

    </div>

    <div class="logo3">

    </div>

    <div class="logo4">

    </div>

      <div class="logo5">

      </div>






      <script type="text/javascript">
          (function($) {

              $(".logoLeft").hide();

              $(document).ready(function(){
                  $(window).scroll(function(){
                      if ($(this).scrollTop() > 550) {
                          $('.logoLeft').fadeIn(50);
                      } else {
                          $('.logoLeft').fadeOut(50);
                      }
                  });
              });
          })(jQuery);
      </script>


  </body>
</html>
