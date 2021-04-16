let btnborrar = document.querySelectorAll('.borrar');


//se recorre el array 
btnborrar.forEach(usuarioABorrar => {
    usuarioABorrar.addEventListener('click', (e)=>{

        let  borrar = e.target.getAttribute('idBorrar');
        let fila = e.target.parentElement.parentElement;
        borrarUsuario(borrar, fila);
    });
});

function borrarUsuario(idUsuario, fila){
   // console.log("elimina usuario con id: ", idUsuario);
    const data = new FormData();
    data.append('idBorrar',idUsuario);

    Swal.fire({
        title: 'estas seguro de borrar el usuario?',
        text: "Esta acción no tiene reversa!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar!'
    }).then((result) => {
        if (result.isConfirmed) {

            fetch('ajax/ajax.user.php', {
                    method: 'POST',
                    body: data

                }).then(res=> res.text())
                .then(data=> {

                    if(data== "ok"){
                        console.log(data); 
                        fila.remove();
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'usuario eliminado correctamente.',
                            showConfirmButton: false,
                            timer: 1500                           
                        });

                    }else{
                        console.log(data);
                        Swal.fire(
                            'Error!',
                            'no se pudo eliminar.',
                            'error'
                        );

                    }

                });  
            
                       
        }
    });
}

