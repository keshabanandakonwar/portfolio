<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <title>resume</title>
    <style>
        .text{
            text-shadow: 2px 0px 10px purple;
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
 <section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Resume</h2><hr>
            </div>
            <div class="col-md-4 text-center">
                <img src="papu.jpg" alt="" width="100%" height="auto">
                <h1 class="text"><b>KESHABANANDA KONWAR</b></h1>
                <a href="Keshabananda_Resume_800.pdf"><button class="glow-on-hover m-5">Download Resume</button></a>
            </div>
            <div class="col-md-8">
                <table class="table text-center table-bordered">
                    <tr>
                        <th style="vertical-align:middle">Personal Information</th>
                        <td>
                            <li>Nationality : <b>Indian</b></li>
                            <li>Religion : <b>Hindu</b></li>
                            <li>Cast : <b>OBC</b></li>
                            <li>Date of Birth : <b>02.07.2000</b></li>
                            <li>Gender : <b>Male</b></li>
                            <li>Phone : <b>8720927454</b></li>
                            <li>Email : <b>devabrotkonwar69@gmail.com</b><br><b>keshabanandakonwar@gmail.com</b> </li>
                            
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Address</th>
                        <td>
                            <li>State : <b>Assam</b></li>
                            <li>District : <b>Sivasagar</b></li>
                            <li>Police Station : <b>Demow</b></li>
                            <li>Post office : <b>Nitai Pukhuri</b></li>
                            <li>Pin No: <b>785671</b></li>
                            <li>Village : <b>Baputigarh</b></li>
                            <li>Land Mark : <b>Bank of Nitai post office</b></li>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Educational Details</th>
                        <td>
                            <h5 class="text">HSLC</h5>
                            <li>Nitai Pukhuri Higher Secondary School</li>
                            <li>Percentage : <b>63.17%</b></li>
                            <li>Year : <b>2016</b></li><hr>
                            <h5 class="text">HS</h5>
                            <li>Nitai Pukhuri Higher Secondary School</li>
                            <li>Stream : Science</li>
                            <li>Percentage : <b>54.2%</b></li>
                            <li>Year : <b>2018</b></li><hr>
                            <h5 class="text">Graduation</h5>
                            <li>Bachelor of Computer Application (BCA)</li>
                            <li>Sibsagar Commerce College, Dibrugarh University</li>
                            <li>Percentage : <b>72.4%</b></li>
                            <li>Year : <b>2018-2021</b></li><hr>
                            <h5 class="text">Post Graduation</h5>
                            <li>Master of Computer Application (MCA)</li>
                            <li>Assam Rajiv Gandhi University of Cooperative Management</li>
                            <li>Percentage : <b></b></li>
                            <li>Year : <b>2022-2024</b></li>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Skills</th>
                        <td>
                             <li>DBMS </li>
                             <LI>Core PHP  </LI>
                             <li>Web Development</li>
                             <li>JavaScript</li>
                             <li>Excel</li>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Interests</th>
                        <td>
                            <h6>Music</h6><h6>Chess</h6><h6>Badminton</h6>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Experience</th>
                        <td>
                             Job role : <b>Web developer(Internship)</b><br>
                             Company : <b>Peace Solution</b><br>
                             Duration : <b>20.01.2022</b> to <b>20.02.2022</b><br>
                             <a href="Experiencecertificate.pdf" class="btn btn-sm btn-success">Experience Certificate</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </section>
</body>
</html>