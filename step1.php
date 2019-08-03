<!DOCTYPE html>
<html>
<head>
    <title>authentication system</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/step.css">
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
<div class="step">
        <div class="row well">
            <ul id="progressbar" class="progressbar">
                <li class="current">ຂັ້ນຕອນທີ 1</li>
                <li class="active">Step 2</li>
                <li class="danger">Step 3</li>
                <li class="">Step 4</li>            
            </ul>
        </div>
    </div>
<div class="container">
    <div class="exactCenter">
    <h1 class="text-center">ຖ່າຍຮູບພາບຂອງທ່ານ</h1>
    <form method="POST" action="storeImage.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="ຖ່າຍຮູບ" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
                <input type="text" name="name">
            </div>
            <div class="col-md-6">
                <div id="results">ກະລຸນາໃຫ້ເຫັນໜ້າຕາທີ່ຊັດເຈນ</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success">ລົງທະບຽນ</button>
            </div>
        </div>
    </form>
</div>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>
</html>