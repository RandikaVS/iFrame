
<html>
<head>
<meta http-equiv="Access-Control-Allow-Origin" content="text/html; charset=UTF-8">
    <title>Send SMS</title>


<script src="./send.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

        
</head>

<body>


<script src="https://www.cognitoforms.com/f/seamless.js" data-key="jEwBGHZ_L0ehtr8LvvxNLA" data-form="2"></script>        

<script>
  Cognito.on("beforeSubmit", function (event) {


    if(event.data.entry.Name==null  || event.data.entry.DogName ==null ||  event.data.entry.Text==null){
       Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please fill required fields',
        footer: '<a href="">Why do I have this issue?</a>'
        })
        event.preventDefault();
    }else{
       sendSMS(event);
    }

   
 
});
</script>




</body>


</html>