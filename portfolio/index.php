<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>keshabananda konwar</title>
    <style>
        .list li{
            list-style: none;
            float:left;
            padding:10px 30px;
            margin-top:10px;
        }
        ul li{
            margin-top:20px;
            font-weight:bold;
        }
        ul li a{
            text-decoration:none;
            font-size:20px;
            color:white;
            text-align:center;
            
        }
        ul li a:hover{
            color:red;
            font-style:bold;
            text-decoration:none;
        }
        @media (max-width:1024px) {
            section{
                background-color:white;
            }
            .list li{
                padding:0px;
                margin:9px 4px;
            }
        }
        @media (max-width:450px) {
            #skills img{
                display:none;
            }
        }
        hr{
            margin:0px;
            color:purple;
        }
    .glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
    </style>
</head>
<body>
    <section style="background-color:#0f0243">
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-2">
                    <h1><img src="logo.png" alt="" width="100%"></h1>
                </div>
                <div class="col-md-3">
                    <h3 class="text-uppercase text-center text-white">keshabananda konwar</h3>
                </div>
                <div class="col-md-7">
                    <ul class='list'>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#project">Projects</a></li>
                        <li><a href="#contact">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section style="background-color:#99c3ed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="papu.jpg" class="p-0 m-0 mt-5 mb-5" width="100%">
            </div>
            <div class="col-md-8 text-center text-dark mt-5">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Hello, My name is <b>KESHABANANDA KONWAR</b>, and I’ve just completed
             my graduated in <b>BCA</b> from <b>Sibsagar Commerce College(Dibrugarh University)</b>. Looking for 
            my first job, I decided to go with web development, since I understand that it is impossible 
            to succeed in almost any business without some online presence. Hence I know the 
            opportunities are there and will stay there. But I am not one who would opt for freelancing, 
            since I do not enjoy that part of the job–looking for clients, doing marketing, keeping books.
             I simply enjoy working on the code, developing beautiful websites.
             Besides that I am a normal guy who enjoys hiking and spending time with friends and family,
              while not working or studying, which takes most of my time of course.
             <br><a href="resume.php"><button class="glow-on-hover m-5" type="button">Resume</button></a>
            </p>
            </div>
        </div>
    </div>
</section><hr>    

<!--------skills------------->    
<section style="background-color:#86baef" id="skills">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">My skills</h3><hr>
            </div>
            <div class="col-md-7">
                <ul>
                    <li>DBMS</li>
                    <li>Core PHP</li>
                    <li>Web Development</li>
                    <li>JavaScript</li>
                    <li>Excel</li>
                </ul>
            </div>
            <div class="col-md-5" id="skills">
                <img src="skills.png" width="100%" class="m-2">
            </div>
        </div>
    </div>
</section><hr>
<!----------projects------------->    
<section style="background-color:#99c3ed" id="project">
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-4">
                <img src="project.jfif" width="100%" height="90%">
            </div>
            <div class="col-md-8">
                <table class="table table-bordered table-striped bg-light">
                    <tr><th colspan='2' class="text-center text-white bg-dark">Online Voting System</th></tr>
                    <tr>
                        <th style='vertical-align:middle'>Description</th>
                        <td>Front end :HTML,CSS,javascript,AJAX <br>
                            Back end: PHP <br>
                            Database: MYSQL <br>
                            Framework/Library : BOOTSTRAP,JQUERY
                        </td>
                    </tr>
                    <tr>
                        <th>Report</th>
                        <td><a href="reports/ovs.docx">Click here</a></td>
                    </tr>
                    <tr>
                        <th>Project</th>
                        <td><a href="projects/ovs.zip">Click here</a></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped bg-light">
                    <tr><th colspan='2' class="text-center text-white bg-dark">E-Commerce website</th></tr>
                    <tr>
                        <th style='vertical-align:middle'>Description</th>
                        <td>Front end :HTML,CSS,javascript<br>
                            Back end: PHP <br>
                            Database: MYSQL
                        </td>
                    </tr>
                    <tr>
                        <th>Report</th>
                        <td><a href="">Click here</a></td>
                    </tr>
                    <tr>
                        <th>Project</th>
                        <td><a href="">Click here</a></td>
                    </tr>
                </table>
                <table class="table table-bordered table-striped bg-light">
                    <tr><th colspan='2' class="text-center text-white bg-dark">Student Record System</th></tr>
                    <tr>
                        <th style='vertical-align:middle'>Description</th>
                        <td>Front end :HTML,CSS,javascript<br>
                            Back end: PHP <br>
                            Database: MYSQL
                        </td>
                    </tr>
                    <tr>
                        <th>Report</th>
                        <td><a href="">Click here</a></td>
                    </tr>
                    <tr>
                        <th>Project</th>
                        <td><a href="">Click here</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
    <!-----contact section--------->
<section style="background-color:black" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-white">Contact Me</h3><hr class="bg-white">
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-primary">Location</h3>
                    </div>
                    <div class="col-md-8">
                        <p class="text-danger">
                            State : Assam <br>
                            District : Sivasagar <br>
                            Police station: Demow <br>
                             Post Office : Nitai Pukhuri <br>
                             Village: Baputigarh <br>
                             Land Mark : Bank Of Nitai Pukhuri
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-primary">Phone</h3>
                    </div>
                    <div class="col-md-8">
                        <p class="text-danger">
                          8720927454
                         </p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-primary">Email</h3>
                    </div>
                    <div class="col-md-8">
                        <p class="text-danger">
                         devabrotkonwar69@gmail.com
                         <br>keshabanandakonwar@gmail.com
                         </p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-primary">Social media</h3>
                    </div>
                    <div class="col-md-8">
                         <p class="text-danger">
                          <i class='fa fa-facebook'></i><a href="click here">Facebook</a> <br>
                          <i class='fa fa-facebook'></i><a href="click here">LinkedIn</a> <br>
                          <i class='fa fa-facebook'></i><a href="click here">Instagram</a>
                         </p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
            <div class="contact-form">
          <form class="row mt-5">
            <div class="col-md-6">
              <div class="form-group"><input type="text" id="name" class="form-control" placeholder="Name" required></div>
                
            </div>
            <div class="col-md-6">
            <div class="form-group"><input type="email" id="email" class="form-control main" placeholder="Email" required></div>
            </div>
            <div class="col-lg-12">
            <div class="form-group"><textarea id="message" rows="10" class="form-control main" placeholder="Your message"></textarea></div>
            </div>
            <div class="col-md-12 text-right">
            <div class="form-group"><input type="submit" id="submit-btn" value="SEND MESSAGE" class="btn btn-custom btn-lg text-success border" style="box-shadow:0px 0px 9px 1px green;"></div>
            </div>
          </form>
        </div>
            </div>
        </div>
    </div>
</section>    
</body>
</html>