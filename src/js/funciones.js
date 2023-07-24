const validarFormulario = (formulario, excepciones = [] ) => {
    const elements = formulario.querySelectorAll("input, select, textarea");
    let validarFormulario = []
    elements.forEach( element => {
        if(!element.value.trim() && ! excepciones.includes(element.id) ){
            element.classList.add('is-invalid');
          
            validarFormulario.push(false)
        }else{
            element.classList.remove('is-invalid');
        }
    });

    let noenviar = validarFormulario.includes(false);

    return !noenviar;
}

const removerValidaciones = formulario => {
    const elements = formulario.querySelectorAll("input, select, textarea");
    elements.forEach( element => {

        element.classList.remove('is-invalid');
        
    });
}