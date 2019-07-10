
function paginate(offset, limit)
{
    //obtenemos los posts via get con jQuery
    $.get("data_director_2.php/?offset=" + offset + "&limit=" + limit, function(data){
        if(data)
        {
            $html = "<table class='table'><tr><th>Cedula</th> <th>Nombre</th><th>Apellido</th><th>Departamento</th><th>Cargo</th></tr>";
            //parseamos el json
            json = JSON.parse(data);
            //lo recorremos e insertamos en la variable $html
            for(datos in json.products)
            {
                $html += " <tr> <td> " + json.products[datos].cedper + " </td><td> " + json.products[datos].nombres + "</td><td> " + json.products[datos].apellido + "</td><td> " + json.products[datos].desuniadm + " </td><td> " + json.products[datos].cargo + " </td></tr>";
                
            }

 
            //cargamos los posts en el div paginacion
            $("#paginacion").html($html);
            //cargamos los links en el div links
            $(".links").html("");
            $(".links").html(json.links);
    
            //hacemos una sencilla animacion
            $(document.body).animate({opacity: 0.3}, 400);
            $("html, body").animate({ scrollTop: 0 }, 400);
            $(document.body).animate({opacity: 1}, 400);        
        }
    })
}
 
//al cargar la página llamamos a la función paginate
$(window).bind("load", function(){
    paginate();
})