function sendSMS(event) {
  $.ajax({
    type: "POST",
    url: "controller/send.php",
    data: {
      name: event.data.entry.Name,
      phone: event.data.entry.Phone,
      dogName: event.data.entry.DogName,
      text: event.data.entry.Text,
    },
    dataType: "json",
    //if received a response from the server
    success: function (result) {
      console.log(result);
      if (result.status == "fail") {
        Swal.fire({
          icon: "error",
          title: "Failed",
          text: "Failed to send message",
        });
      } else if (result.status == "success") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Sended...",
          showConfirmButton: false,
          timer: 1500,
        });
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(`Error ${xhr.status}`);
      console.log(`Error ${ajaxOptions}`);
      console.log(`Error ${thrownError}`);
    },
  });
}
