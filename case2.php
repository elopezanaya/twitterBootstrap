<?php
    header('Content-type: text/html');
    header('Access-Control-Allow-Origin:http://api.yoursite.com');
    ?>
<html>
<head>
    
    <!-- Bootstrap -->
    <link href="css/case2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen and (min-width: 40.5em)">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.map"></script>
 
    <script src="js/bootstrap.min.js"></script>
    

    <script>
   
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).load(function() {
        console.log( "window loaded" );
    });
    </script></head>
<body>
<div id="component">
    <script type="text/javascript">
    //<![CDATA[
    var httpRequest = new XMLHttpRequest(); 
    
    function validateFields(element){
        
        
        console.log($(element).closest('.table').find('.input').val());
        
    }
        function login(element){
            
            var tmp = $(element).closest("input[type=text]").attr('value');
  console.log('tmp : ' +tmp);
            console.log('login');
            validateFields(element)
            var data;
          
          
            var url= "http://api.yoursite.com/login?username="+$('#username').val()+'&password='+$('#password').val()
        
  //  httpRequest.onreadystatechange = alertContents;
    httpRequest.open("GET", url, true);
    httpRequest.withCredentials = true;
    httpRequest.send();
            
            }
            
            function alertContents(){
               
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
        alert('There was a problem with the request.');
      }
    }
            }
            
     
     
            
     requestConfig = {
url : url,
dataType : 'jsonp',
success : function (data) {
console.log(data);
} 
}
$.ajax(requestConfig)       
            
            /* Loading JSON objects using JSONP */
(function($) {
var url = 'http://api.yoursite.com/login';
$.ajax({
type: 'GET',
 url: url,
 async: false,
contentType: "application/json",
 dataType: 'jsonp'
 });
})(jQuery);
    //]]>
    
    
    </script>
    <form>
        <h1>User Login</h1>
        <table>
            <tr>
                <td>
                    <input type="text" id="username" placeholder="Apple Id" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="password" placeholder="Password" />
                </td>
            </tr>
            <tr>
                <td>
            <a class="btn btn-lg btn-danger" onclick="login(this);">Login to your Account</a>
                   
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>