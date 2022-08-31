@extends('layout.scaffold')
    <style>
        .img{
            background-image: url(assets/img/man.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
            margin-top: 80px;

        }
        .img1{
            background-image: url(assets/img/he.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
            margin-top: 100px;
        }
        .contact{
            background-image: url(assets/img/vecteezy_white-background-with-blue-geometric-and-white-line-pattern_7677104.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
        }
    </style>
    
    

      <div class="container-fluid">
        <div class="img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div style="margin-top:150px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-6 ">
                        <h3>MED CENTER HEALTH</h3>
                        <h1 class="mt-3" style="font-size:60px;color: #3f96e8;"><b> HIGHEST QUALITY </b></h1>
                        <p style="margin-top: 50px; color: grey; font-size:18px;">To learn more about our clinical programs, <br> browse our list of medical services <br> alphabetically or search by keyword in the box <br> below.</p>
                        <button style="font-size: 20px;" class="mt-2 btn btn-outline-primary pt-3 pb-3 pl-5 pr-5 ">Contact-Us</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
            
      <div style="background-color:#3f96e8;" class="container p-5">
      <div class="row">
            <div  class="col-md-2">
                <img src="{{asset('assets/img/04.png')}}" alt="04">
            </div>
            <div class="col-md-4">
                <h4 class="mt-3" style="color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b> MEDICAL CARE </b></h4>
                <p style="margin-top: 20px; color: white;font-size: 13px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla <br> pariatur. Excepteur sint occaecat cupidatat non <br> proident, sunt</p>
            </div>
            <div  class="col-md-2">
            <img src="{{asset('assets/img/05.png')}}" alt="05">
             
            </div>
            <div class="col-md-4">
                <h4 class="mt-3" style="color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b> CARE PROGRAMS </b></h4>
                <p style="margin-top: 20px; color: white;font-size: 13px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla <br> pariatur. Excepteur sint occaecat cupidatat non <br> proident, sunt</p>
            </div>
        </div>
        </div>
      </div>
      <div style="margin-top: 100px;" class="container">
        <div class="row">
            <div style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;" class="col-md-12">
                <div class="text-center">
                <h1 class="mt-3" style=" font-size:50px;color: #3f96e8;">MEDICAL SERVICES</h1>
                <p style="color:gray ;margin-top:20px;" >Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. <br> Excepteur sint occaecat cupidatat non
                    proident, sunt</p>
                </div>
            </div>
        </div>
      </div>

      <div style="margin-top:100px;" class="container">
        <div class="row">
            <div class="col-md-3">
            <img style="width:250px;height:250px;" src="{{asset('assets/img/2.jpg')}}" alt="2">

            </div>
            <div style="margin-top: 20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-3">
                <h4 style="color:#3f96e8;"><b> HOSPITALISTS </b></h4>
                <p style="font-size: 13px;color:gray ;margin-top: 20px;">Sample text. Click to select the <br> text box. Click again or double <br> click to start editing the text.</p>            
                <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                </div>

                <div class="col-md-3">
            <img style="width:250px;height:250px;" src="{{asset('assets/img/template.jpg')}}" alt="template">
                </div>
                <div style="margin-top: 20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-3">
                    <h4 style="color:#3f96e8;"><b> PEDIATRICS </b></h4>
                    <p style="font-size: 13px;color:gray ;margin-top: 20px;">Sample text. Click to select the <br> text box. Click again or double <br> click to start editing the text.</p>            
                    <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                    </div>
        </div>
      </div> 

      
      <div style="margin-top:50px;" class="container">
        <div class="row">
            <div class="col-md-3">
            <img style="width:250px;height:250px;" src="{{asset('assets/img/3.jpg')}}" alt="3">
            </div>
            <div style="margin-top: 20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-3">
                <h4 style="color:#3f96e8;"><b> CRITICAL CARE </b></h4>
                <p style="font-size: 13px;color:gray ;margin-top: 20px;">Sample text. Click to select the <br> text box. Click again or double <br> click to start editing the text.</p>            
                <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                </div>

                <div class="col-md-3">
            <img style="width:250px;height:250px;" src="{{asset('assets/img/4.jpg')}}" alt="4">
                </div>
                <div style="margin-top: 20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-3">
                    <h4 style="color:#3f96e8;"><b> LABORATORY </b></h4>
                    <p style="font-size: 13px;color:gray ;margin-top: 20px;">Sample text. Click to select the <br> text box. Click again or double <br> click to start editing the text.</p>            
                    <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                    </div>
        </div>
      </div>

      <div style="background-color: lightgray;margin-top: 150px;height: 350px;" class="p-5 container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <img style="height:600px ;width:100%" src="{{asset('assets/img/5.jpg')}}" alt="5">
                </div>
            </div>
        </div>
    </div>
        <div style="background-color:#3f96e8 ;height: 800px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="container-fluid">
            <div class="row">
                <div style="margin-top:350px;" class="col-md-12 text-center text-light">
                    <h1><b> HOW WE WORK </b></h1>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 mt-5 text-light">
                    <p><b> Its departments are equipped with state-of-the-art diagnostic and therapeutic equipment and operated by top-category physicians, Ph.D. and Doctors of Medicine, associate professors and professors knowledgeable of the best available practices of European schools. Partnerships with specialized clinics and research centers in Russia and Europe make possible consultations by doctors of unique specialties. </b> </p>
                </div>
                    <div class="col-md-4 mt-5 text-light">
                        <p><b> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </b></p>
                        <button style="font-size: 20px;" class="mt-2 btn btn-outline-light pt-3 pb-3 pl-5 pr-5 ">Contact-Us</button>
                    </div>
            </div>
        </div>

        <div style="margin-top:100px;" class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                    <h1 style="color:#3f96e8 ;"><b> A </b></h1>
                    <h4 style="color:#3f96e8; margin-top: 20px;"><b> GOALS AND MISSION </b></h4>
                    <p style="color: grey;font-size:13px; margin-top:30px;"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                    <h1 style="color:#3f96e8 ;"><b> B </b></h1>
                    <h4 style="color:#3f96e8; margin-top: 20px;"><b> ABOUT CLINIC </b></h4>
                    <p style="color: grey;font-size:13px; margin-top:30px;"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                    <h1 style="color:#3f96e8 ;"><b> C </b></h1>
                    <h4 style="color:#3f96e8; margin-top: 20px;"><b> WORK WITH US </b></h4>
                    <p style="color: grey;font-size:13px; margin-top:30px;"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <button style="font-size:13px;" class="btn btn-outline-primary">LEARN MORE</button>
                </div>
                </div>
            </div>
        </div>
      
        <div class="container-fluid">
            <div class="img1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div style="margin-top:150px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-6 ">
                            <h3>MED CENTER HEALTH</h3>
                            <h1 class="mt-3" style="font-size:60px;color:black;"><b> HEALTH CARE SERVICES </b></h1>
                            <p style="margin-top: 50px; color: black; font-size:18px;">To learn more about our clinical programs, <br> browse our list of medical services <br> alphabetically or search by keyword in the box <br> below.</p>
                            <button style="font-size: 20px;" class="mt-2 btn btn-outline-dark pt-3 pb-3 pl-5 pr-5 ">LEARN MORE</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div style="color: white; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color:#3f96e8 ; height:720px;margin-top: 100px; " class="container-fluid">
            <div class="container">
                <div class="row">
                    <div style="margin-top:100px ;" class="col-md-12">
                        <div  class="text-center">
                            <h1><b> WE LIVE AND BREATHE OUR VALUES </b></h1>
                        </div>
                        </div>

                        
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                
            </div>
            <div class="text-center">
            <button style="font-size: 20px;" class="mt-5 btn btn-outline-light pt-3 pb-3 pl-5 pr-5 ">LEARN MORE</button>
        </div>
               
                
            </div>
          </div>

          <div style="margin-top: 100px;" class="container">
            <div class="text-center">
                <h1 class="mt-3" style=" font-size:50px;color: #3f96e8;">MEET THE TEAM</h1>
            </div>
          </div>

          <div style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: 200px; background-color:#3f96e8 ; height:150px;" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/01.png')}}" alt="01">
                            <h5 class="mt-3" ><b> DR.ADAM JONSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">CHEIF OPERATING OFFICER</h5>
                        </div>
                    </div>

                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/03.png')}}" alt="03">
                            <h5 class="mt-3" ><b> DR.SIMON LARSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">RELATIONSHIP MANAGER</h5>
                        </div>
                    </div>

                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/02.png')}}" alt="02">
                            <h5 class="mt-3" ><b> DR.MARRY HODSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">DIRECTER OF MARKETING</h5>
                        </div>
                    </div>

                </div>
            </div>
          </div>

          <div style="background-color:#3f96e8;height: 900px; margin-top: 250px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="text-center">
                <h1 class="mt-3" style=" font-size:40px;color: white;"><b> READ WHAT OUR CUSTOMER SAY </b></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px; background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/6.png')}}" alt="6">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> CELIA ALMEDA </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>CEO MAILCHARM</p>
                        </div>
                    </div>

                    <div style="margin-top:50px; background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/7.png')}}" alt="7">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> FRANK KENNY </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>FINANCIAL DIRECTOR</p>
                        </div>
                    </div>

                    <div style=" background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/8.png')}}" alt="8">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> PHOEBE NELSON</b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>SALES MANAGER</p>
                        </div>
                    </div>

                    <div style=" background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/9.png')}}" alt="9">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> JENNY ROBERTS </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>OFFICE MANAGER</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                <h1  style="margin-top: 80px; font-size:50px;color: #3f96e8;"><b> CONTACT US </b></h1>
                <p class="mt-3"><b>PLEASE FILL YOUR FORM</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-5">
                            <input  class="form-control p-4" style=" background-color: lightgrey;" type="text" placeholder="ENTER YOUR NAME">
                        </div>
                        <div class="col-md-3 mt-5">
                            <input class="form-control p-4" style="background-color: lightgrey;" type="text" placeholder="ENTER YOUR LAST NAME">
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-3">
                            <input  class="form-control p-4" style=" background-color: lightgrey;" type="text" placeholder="ENTER YOUR E-MAIL">
                        </div>
                        <div class="col-md-3 mt-3">
                            <input class="form-control p-4" style="background-color: lightgrey;" type="number" placeholder="ENTER YOUR NUMBER">
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-3">
                            <textarea style=" background-color: lightgrey;" class="form-control" name="message" id="message" cols="30" rows="7" placeholder="ENTER YOUR MESSAGE"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
            <button type="submit" style="font-size: 20px;" class="mt-5 btn btn-primary pt-3 pb-3 pl-5 pr-5 "><b> SEND MESSAGE</b></button>
        </div>
                </div>
            </div>
          </div>
                
   


