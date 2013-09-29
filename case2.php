<?php ?>
<html>
<head>
    <link href="css/case2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen and (min-width: 40.5em)">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.map"></script>
 
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div id="component">
    <script type="text/javascript">
    //<![CDATA[
    var httpRequest = new XMLHttpRequest(); 
    
    function validateFields(element){
        
        
        console.log($(element).closest('.table').find('.input').val());
        
    }
    
        function login(element){
            
            var url= "http://api.yoursite.com/login?username="+$('#username').val()+'&password='+$('#password').val();
        
        
        
        
     
requestConfig = {
url : "http://api.yoursite.com/login?username="+$('#username').val()+'&password='+$('#password').val(),
dataType : 'jsonp',
success : function (data) {
console.log(data);
} 
}
$.ajax(requestConfig)       
            
        
        
    httpRequest.onreadystatechange = alertContents;
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