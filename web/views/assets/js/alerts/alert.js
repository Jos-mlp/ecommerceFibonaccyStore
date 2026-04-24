/*=============================================
Formatear envio del forumulario lado servidor
=============================================*/

function fncFormatInput() {
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
}

/*=============================================
Alerta Notie
=============================================*/

function fncNotieAlert(type, text) {
  notie.alert({
    type: type,
    text: text,
    time: 2
  });

}

/*=============================================
SweetAlert V2
=============================================*/

function fncSweetAlert(type, text, url) {
  switch (type) {
    
      case 'error':
        if (url == "") {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: text,
            timer: 2000,
            showConfirmButton: false
          });

        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: text,
            timer: 2000,
            showConfirmButton: false
          }).then((result) => {

            if (result.value){
              window.open(url, 'top');
            }

          });

        }
      break;

      case 'success':
        if (url == "") {
          Swal.fire({
            icon: 'success',
            title: 'Correcto',
            text: text,
            timer: 2000,
            showConfirmButton: false
          });

        } else {
          Swal.fire({
            icon: 'success',
            title: 'Correcto',
            text: text,
            timer: 2000,
            showConfirmButton: false
          }).then((result) => {

            if (result.value){
              window.open(url, 'top');
            }

          });

        }
      break;
  }
}


/*=============================================
Toastr 
=============================================*/

function fncToastr(type, text) {
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: type,
    title: text
  })
}