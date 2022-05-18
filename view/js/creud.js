function erase(obj){
  
    codigo = obj.children[0].innerHTML;
    

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: '¿estas seguro?',
        text: "no podras deshacer este cambio",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'si, borralo',
        cancelButtonText: 'no,cancelar',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {

          window.location="index.php?ruta=erase&codigo="+codigo;

         
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'cancelado',
            'tu registro esta intacto',
            'error'
          )
        }
      })
}

function getData(obj) {
  let cod = obj.children[0].innerHTML;
  let nombre = obj.children[1].innerHTML;
  let apell = obj.children[2].innerHTML;
  let usuario = obj.children[3].innerHTML;
  let clave = obj.children[4].innerHTML;

  document.getElementById("txtCode").value = cod;
  document.getElementById("txtNameM").value = nombre;
  document.getElementById("txtLNameM").value = apell;
  document.getElementById("txtUserM").value = usuario;
  document.getElementById("txtPWordM").value = clave;

}

function getGenerarReporte(e){
  window.open("view/module/allUser.php","_blank");
  e.preventDefault();

  
}