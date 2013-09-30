$(document).ready(function() {
    var myItems;

    $.getJSON('js/case.json', function(data) {
        
        console.log(data.customers.customer)
        var customers=data.customers.customer;
        
        console.log('customers : ' +customers);
        
        var customer ;
        console.log(customers.length)
        for (var i=0;i<customers.length; i++){
            
            customer =  customers[i];
            
            console.log(customer);
            document.getElementById('customerTable').appendChild(getRow(customer));
            
        }
        
        console.log( data);
        
    });
});

function getRow(customer){
    
    var row = document.createElement('tr');
            row.appendChild(createName(customer.name));
            row.appendChild(createAgeField(customer.age));
            row.appendChild(createTel(customer.tel));
            row.appendChild(createCountry(customer.country));
    
    return row;
}

function createAgeField(age){
    
    
    var content =document.createElement('td');
    var cellTextContent = document.createTextNode(age); 
    content.appendChild(cellTextContent);
    
    
return content;
}
function createCountry(country){
    
    
    var content =document.createElement('td');
    var cellTextContent = document.createTextNode(country); 
    content.appendChild(cellTextContent);
    
    
return content;
    
}
function createName(name){
    
    var content =document.createElement('td');
    var cellTextContent = document.createTextNode(name); 
    content.appendChild(cellTextContent);
    
    
return content;
}
function createTel(tel){
    
    var content =document.createElement('td');
    var cellTextContent = document.createTextNode(tel[0]+"-"+tel[1]); 
    content.appendChild(cellTextContent);
    
    
return content;
}
