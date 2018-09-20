<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
  <link rel="stylesheet" href="./stylesheet.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>

<body class="bg-primary">

  <section class="hero is-primary  is-large header-image">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <!--  <a class="navbar-item">
                          <img src="https://www.picz.in.th/images/2018/09/17/f8MP1q.png" alt="Logo"> 
                        </a>-->
            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroA" class="navbar-menu">

            <div class="navbar-end">
              <a class="navbar-item " href="login.php">
                เข้าใช้งาน
              </a>
              <a class="navbar-item" href="register.php">
                สมัครสมาชิก
              </a>
              <a class="navbar-item is-active" href="contact.php">
                ติดต่อเรา
              </a>
            </div>


          </div>

        </div>
    </div>
    </nav>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">




    </div>

  </section>



  <section class="section ei">

    <div class="columns">


      <div class="column is-half">
        <form>
        <div class="label">ชื่อจริง</div>
          

          <div calss="field">
            <input class="input " type="text" placeholder="ขื่อ">
          </div>
          <h3 class="navbar-item"> </h3>
          <div class="label">อีเมล</div>
          <div class="field">
            <p class="control has-icons-left is-primary">
              <input class="input" type="email" placeholder="อีเมล">
              <span class="icon is-small is-left">
                <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                </svg><!-- <i class="fas fa-envelope"></i> -->
              </span>
          </div>
          <div class="label">เรื่อง</div>
         

          <div class="select">
            <select>

              <option>ปัญหาการใช้งานระบบ</option>
              <option>รายงานความผิดพลาด</option>

            </select>
          </div>


        </form>
      </div>

      <div class="column is-half">
        <form>

<div class="label">นามสกุล</div>
         

          <div calss="field">
            <input class="input" type="text" placeholder="ขื่อ">
          </div>
          <h3 class="navbar-item"> </h3>


<div class="label">เบอร์โทรศัพท์</div>
        

          <div calss="field">
            <input class="input" type="text" placeholder="เบอร์โทร">
          </div>

          <h3 class="navbar-item"> </h3>


        </form>
      </div>




    </div><!-- column -->
<div class="colums">

<form>
    <textarea class="textarea" placeholder="รายละเอียด"></textarea>
</form>
 <h3 class="navbar-item"> </h3>

<div class="navbar-end">
   
    <a class="button is-primary is-inverted is-outlined">ยืนยัน</a>
    <h3 class="navbar-item"> </h3>
 
</div>


</div>


  </section>


</body>

</html>