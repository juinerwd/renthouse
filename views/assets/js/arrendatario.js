// const fileInput = document.querySelector(".image");

// // listen for the change event so we can capture the file
// fileInput.addEventListener("change", (e) => {
//     // get a reference to the file
//     const file = e.target.files[0];
//     //   console.log(file);

//     // encode the file using the FileReader API
//     const reader = new FileReader();
//     reader.onloadend = () => {
//         // use a regex to remove data url part
//         const base64String = reader.result
//         .replace("data:", "")
//         .replace(/^.+,/, "");

//         // log to console
//         // logs wL2dvYWwgbW9yZ...
//         console.log(base64String);
//     };
//     reader.readAsDataURL(file);
// });

// $.ajax({
//     url:"service/url/process.php",
//     // Enviar un parámetro post con el nombre base64 y con la imagen en el
//     data:{
//         base64: image
//     },
//     // Método POST
//     type:"post",
//     complete:function(){
//         console.log("Todo en orden");
//     }
// });