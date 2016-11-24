function ajaxGo(links,breadName){
     jQuery.ajax({'type':'POST','async':'true','beforeSend':function( request ) 
        { 
                
            history.pushState('', '', '/site/'+links);      
             
             },'complete':
    function( request ){
      
    }
    ,'success':function( data )
        {         
            $('#contets').html(data);// получили данные - обновили DIV
             
         
        },'data':{'val1':'1','val2':'2'},'cache':'false','url':'/site/'+links});return false;
  } 
  
  
  function call() {
   	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: '/index.php',
          data: msg,
          beforeSend:function(data) {
            $('.uk-button i').removeClass('uk-hidden');
          },
          success: function(data) {
          
            $('.uk-button i').addClass('uk-hidden');
              $('#formx')[0].reset();
            
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }