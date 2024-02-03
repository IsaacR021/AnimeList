function mostrar() {
      
    var senhajs = document.getElementById("senha");
    if (senhajs.type === "password") {
    senhajs.type = "text";
                        } 
    else {
    senhajs.type = "password";
                        }
    }

