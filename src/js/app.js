require('bootstrap');

var fetdatabtn = document.getElementById("fetchData");
var productFromApi = document.getElementById("product-from-api");

if(fetdatabtn){
fetdatabtn.addEventListener("click", function(){
    alert("fetching new data");
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','http://139.59.35.164:8081/categories/get-categories');
    ourRequest.onload = function(){
        alert("status"+ourRequest.status);
        if(ourRequest.status>=200 && ourRequest.status <400){
            var data = JSON.parse(ourRequest.responseText);
            alert("status"+ourRequest.status);

        }else{
            alert("We connected to the server, but it returned an error.");
        }

    };

    ourRequest.onerror = function(error){

        alert("Connection error"+ JSON.stringify(error));
    };

    ourRequest.send();
});
}