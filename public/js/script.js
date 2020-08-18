$(document).ready(function(){
    $('[name="text_search"]').keyup(function(e){
        e.preventDefault();
        texto = $(this).val().toLowerCase();
        $.each($('table tbody tr'),function(){
            if($(this).text().toLowerCase().indexOf(texto) === -1){
                $(this).hide();
            }
            else {
                $(this).show();
            }
        });
    });
});
