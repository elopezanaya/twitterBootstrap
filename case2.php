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

<style type="css">

form{
    
    margin-left:90px;
    
}
h1{
    position:relative;
    top:50px;
    left:100px;
    font-size:14px;
    color:#e8e8e8;
}
div {
    width :500px;
    font-family:Arial;
    font-size:12px;
}
input {
    width:300px;
}
div {
    background-color:#232323;
    width:700px;
    height:300px;
}
input[type=button]  {
    background-color:#db4a39;
    color:#e8e8e8;
    width:300px;
}
table{
    position:relative;
    top:50px;
    left:100px;
    
    
}

a{
    width:180px;
}
</style>
    <script type="text/javascript">
    //<![CDATA[
    var httpRequest = new XMLHttpRequest(); 
    
    function validateFields(element){
        
        
        console.log($(element).closest('.table').find('.input').val());
        
    }
    
        function login(element){
            
            var url= "http://api.yoursite.com/login?username="+$('#username').val()+'&password='+$('#password').val()+'&callback=?&q=';
        
requestConfig = {
url : "http://api.yoursite.com/login?username="+$('#username').val()+'&password='+$('#password').val(),
dataType :'jsonp',
xhrFields:{
withCredentials:true
},
jsonpCallback:'callbackResponse'
}
$.ajax(requestConfig).done(function (){console.log(':P')}); ;   
            
            }
            
         function callbackResponse(data){
        
        console.log('data ::: ' + data.answer);
         if (data.responseStatus == "200"){
         console.log('got it')
         }else{
         consolo.error(':X');
         
         }
         console.log(data.answer);
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