alert('Ajax');
$.ajax("..controller/traerDatosController.php" ,{
    "type": "post",
    "data": {},
    "async":false,
    dataType:'json',
    "success": function(result){
        alert(result);
    },
    "error": function(result){
        console.error("no funciona el ajax", result);
    }

})

