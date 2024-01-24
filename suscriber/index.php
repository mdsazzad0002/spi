<style type="text/css">
#news .footer-newsletter {
 background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.7)), url("/assets/img/count.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
  color: #fff;
  text-align: center;
  font-size: 15px;
}

#news .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #fff;
}

#news .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  text-align: left;
}

#news .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#news .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #49b5e7;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#news .footer-newsletter form input[type=submit]:hover {
  background: #1da2e0;
}
</style>

<footer id="news" class="">
	   <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p class="text-light">Get fast notification for suscribe</p>
            <form id="sub_from" action="forms/contact.php" method="post" class="sus">
              <input id="suscribe" required placeholder="Enter your email address" type="email" name="email"><input type="submit" value="Subscribe" id="btn-suscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
</footer>
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button hidden id="modalbtn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Verify box
</button>

<!-- Modal -->
<form id="verify_box" action="" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify your Email Address</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Check Email Inbox and Enter blew password:
        <input type="text-center" required class="form-control" placeholder="Enter Verify Code" name="verify_code">
        <input hidden id="verify_email" type="text-center" required class="form-control" placeholder="Enter Verify email" name="verify_email">
        
        <div class="verify_alert mt-2">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript" src="/assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/vendor/sweetalert/sweetalert.js"></script>
<script type="text/javascript">
$('#sub_from').on('submit',function(e){
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: '../suscriber/send_mail.php',
    processData:false,
    contentType:false,
    data: new FormData(this),

    statusCode: {
      404: function() {
        alert( "Something is Wrong" );
      }
    },
    success: function (data) {
      console.log(data);
      $('.verify_alert').html(data)
      $('#modalbtn').click();
      $('#verify_email').val($('#suscribe').val());
      setTimeout(function(){
        $('.verify_alert').html('')
      },5000)

    }
  });
})

$('#verify_box').on('submit',function(e){
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: '../suscriber/verify_mail.php',
    processData:false,
    contentType:false,
    data: new FormData(this),

    statusCode: {
      404: function() {
        alert( "Something is Wrong" );
      }
    },
    success: function (data) {
        $('.verify_alert').html(data);
      //$('#verify_box')[0].reset();
      //$('#modalbtn').click();
     setTimeout(function(){
        $('.verify_alert').html('')
      },5000)

    }
  });
})




</script>