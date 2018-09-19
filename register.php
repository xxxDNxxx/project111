<!DOCTYPE html>
<html lang="en" class="bg-primary">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
  <link rel="stylesheet" href="./stylesheet.css"> 
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>
<body>
  
    <section class="hero is-primary  is-fullheight header-image">
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
                    <a class="navbar-item "href="login.php">
                         เข้าใช้งาน
                      </a>
                      <a class="navbar-item is-active"href="register.php">
                         สมัครสมาชิก
                        </a>
                      <a class="navbar-item">
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
    
    
        <!--  <div class="container has-text-centered">
      <h1 class="title">
              Title
            </h1>
            <h2 class="subtitle">
              Subtitle
            </h2>
          </div>
        -->
    
        </div>
      
        <!-- Hero footer: will stick at the bottom -->
        <!--<div class="hero-foot">
          <nav class="tabs">
            <div class="container">
              <ul>
                <li class="is-active"><a>Overview</a></li>
                <li><a>Modifiers</a></li>
                <li><a>Grid</a></li>
                <li><a>Elements</a></li>
                <li><a>Components</a></li>
                <li><a>Layout</a></li>
              </ul>
            </div>
          </nav>
        </div> -->
      </section>


      <section class="section bg-login">
        <div class="Columns">

          <div class="Column">

            <form class="eiei">


                <div class="label is-large">ลงชื่อเข้าใช้งาน</div>
                <div class="field">
            
                    <div class="control has-icons-left has-icons-right">
                      <input class="input" type="text" placeholder="ชื่อผู้ใช้งาน" value="">
                      <span class="icon is-small is-left">
                        <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user"></i> -->
                      </span>
                    </div>
                  </div>
        
                  <div class="field">
                      <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="รหัสผ่าน">
                        <span class="icon is-small is-left">
                          <svg class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg><!-- <i class="fas fa-lock"></i> -->
                        </span>
                      </p>
                    </div>
                    
                    <div class="field">
                        <p class="control has-icons-left">
                          <input class="input" type="password" placeholder="ยืนยันรหัสผ่าน">
                          <span class="icon is-small is-left">
                            <svg class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg><!-- <i class="fas fa-lock"></i> -->
                          </span>
                        </p>
                      </div>

                      <div class="field">
                          <p class="control has-icons-left has-icons-right">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                              <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope"></i> -->
                            </span>
                            
                          </p>
                        </div>
                    
                    <div class="control">
                        <div class="label">เพศ</div>
                        <label class="radio">
                          <input type="radio" name="foobar">
                      <span>   ชาย </span>
                        </label>
                        <label class="radio">
                          <input type="radio" name="foobar" >
                          หญิง
                        </label>
                        <label class="radio">
                            <input type="radio" name="foobar" >
                          อื่นๆ
                          </label>
                      </div>



                    <div class="navbar-end">
                        <a href="register.php" class="button  is-inverted">
                            <span class="icon">
                              <img src="./img/regis.png">
                            </span>
                            <span>สมัครสมาชิก</span>
                          </a>
                    </div>

                   
            </form>

          </div>



        </div>
      </section>


</body>
</html>