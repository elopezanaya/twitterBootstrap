function login (){
    
    var data='username:'+ $(''); 
    
    
     $.ajax({
        success : successCallback,
        error : errorCallback,
        data : body,
        url : "api.yoursite.com/login",
        type : 'POST',
        dataType : 'json'
    });
    
    
    
    }
    
    function successCallback (){
        
        
        alert(1)
    }
    
    function errorCallback (){
        
        alert(2)
    }