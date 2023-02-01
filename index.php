<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Access-Control-Allow-Origin" content="text/html; charset=UTF-8">
    <title>registration | Cognito Forms</title>


<script src="./index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

        
</head>

<body>


<script src="https://www.cognitoforms.com/f/seamless.js" data-key="jEwBGHZ_L0ehtr8LvvxNLA" data-form="1"></script>        

<script>
  Cognito.on("beforeSubmit", function (event) {

    if(event.data.entry.Name.First==null ||
      event.data.entry.Name.Last == null ||
      event.data.entry.Address.Line1 == null ||
      event.data.entry.Address.Line2 == null ||
      event.data.entry.Address.City == null ||
      event.data.entry.Address.State == null ||
      event.data.entry.Address.PostalCode == null ||
      event.data.entry.Email ==null ||
      event.data.entry.PhoneName == null ||
      event.data.entry.YourDogName == null ||
      event.data.entry.Phone == null ||
      event.data.entry.PhoneUnit == null){
        
       Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please fill all the fiels!',
        footer: '<a href="">Why do I have this issue?</a>'
      })
        event.preventDefault();
      }
      else{
      sendRegister(event);
      }
 
});
</script>




</body>


</html>