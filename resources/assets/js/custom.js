let axios=require('axios');

$('body').on('click','.delete-bookmark',function(){
   let bookmark_id=$(this).data('id');

   axios.delete('/bookmark/'+bookmark_id)
   .then(function(){
     window.location.reload();  
   })
   .catch(function(error){
console.log(error);
   });

});