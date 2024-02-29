
<html>
  <head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  </head>
  <body>
    <!-------code for footer---------->

    <div style="background-color:#06021e;padding:5px;margin-top:10px">
      <div class="container">
       <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-12">
              <h2>Any Query</h2><hr>
              <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
            </div>
          </div>
            <form method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name" class="text-primary">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email" class="text-primary">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email id" required>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="text-primary">Message</label>
                <textarea  class="message form-control" rows="4" placeholder="Message..." required></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-froup text-center">
                <input type="reset" class="btn btn-info text-white">
                <input type="submit" name="submit" id="send-btn" class="btn  btn-primary text-white">
              </div>
              <div id="qry-message" class="text-danger bg-white"></div>
            </form>
        </div>
        <div class="col-lg-4">
          <div class="contact-item">
            <h2>Contact Info</h2><hr>
            <p><b class="text-warning">Address</b><br>
                State : Assam <br>
                District : Sivasagar <br>
                Post Office : Nitaipukhuri <br>
                Land Mark : Nitai Bus Stand
            </p>
          </div>
          <div class="contact-item">
            <p><b class="text-warning">Phone : </b>&nbsp;&nbsp;
               <i>+91 8720927454</i>
             </p>
          </div>
          <div class="contact-item">
            <p><b class="text-warning">Email : </b>&nbsp;
              <i>keshabanandakonwar@gmail.com</i>
             </p>
          </div>
          <div class="contact-item">
            <p><b class="text-warning">Important Links</b> </p>
            <h4>---<a href="https://keshabthedeveloper.000webhost.com" class="text-danger">Developer Portfolio Website Link</a> ---</h4>
            <h4 class="text-warning">Social Media Links :--</h4>
            <ul class="text-center">
              <li><a href="https://www.facebook.com/devabrata.konwar" class="p-4 m-3 bg-white" style="width:50%;height:50%;border-radius:50%"><span class="fa fa-facebook textprimary"></span> </a>
              <a href="https://www.facebook.com/devabrata.konwar" class="p-4 m-3 bg-white" style="width:50%;height:50%;border-radius:50%"><span class="fa fa-linkedIn text-primary"></span></a>
              <a href="https://62a76f1a6df36.site123.me" class="p-4 m-3 bg-white" style="width:50%;height:50%;border-radius:50%"><span class="fa fa-instagram text-danger"></span></a>
            </li></ul>
          </div>
        </div>
      </div>


      </div>
    </div>
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#send-btn").on("click",function(){
        var name = $("#name").val();
        if(name.length=='' || name[0]==''){
          alert("Please enter your name.");
          exit();
        }
        var email = $("#email").val();
        if(email.length=='' || email[0]==''){
          alert("Please enter your email id.");
          exit();
        }
        var message=$(".message").val();
        if(message.length==''){
          alert("Please enter valid message.");
          exit();
        }
        alert("We have receved your query successfully and will response you very soon as possible.");
        $.ajax({
          url : "query_script.php",
          type : "post",
          data : {name : name, email : email, message : message},
          success : function(data){
          //  alert("We have receved your query successfully and will response you very soon as possible.");
            window.open('index.php','_self');
            exit();
          }
        });
      });
    });
  </script>
  </body>
</html>
