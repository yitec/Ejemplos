/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 
Testing={
    common : {    
    init : function(){
        alert("entro1");
    },
    second : function(){
        alert("entro2");
    }
    }    
}


*/

$(document).ready(function() {

$("#check1").click(function(){
    alert("entro");
});

 $("body").delegate("p", "click", function(){
      $(this).after("<p>Another paragraph!</p>");
 });



});