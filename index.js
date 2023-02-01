function sendRegister(event) {
  $.ajax({
    type: "POST",
    url: "controller/register.php",
    data: {
      fname: event.data.entry.Name.First,
      lname: event.data.entry.Name.Last,
      addressL1: event.data.entry.Address.Line1,
      addressL2: event.data.entry.Address.Line2,
      city: event.data.entry.Address.City,
      state: event.data.entry.Address.State,
      postCode: event.data.entry.Address.PostalCode,
      email: event.data.entry.Email,
      phoneName: event.data.entry.PhoneName,
      dogName: event.data.entry.YourDogName,
      phone: event.data.entry.Phone,
      phoneUnit: event.data.entry.PhoneUnit,
    },
    dataType: "json",
    //if received a response from the server
    success: function (result) {
      if (result.status == "fail") {
        Swal.fire({
          icon: "error",
          title: "Failed",
          text: "Failed to insert database",
        });
      } else if (result.status == "success") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Registered!!!",
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
