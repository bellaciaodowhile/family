function eliminarDiacriticosEs(texto) {
    return texto
            .normalize('NFD')
            .replace(/([^n\u0300-\u036f]|n(?!\u0303(?![\u0300-\u036f])))[\u0300-\u036f]+/gi,"$1")
            .normalize();
}
function capitalize(text) {
    return text.charAt(0).toUpperCase() + text.slice(1)
}
const triggerMember = document.querySelector('.btn.trigger-member');
const triggerAssistant = document.querySelector('.btn.trigger-assistant');
const modalAssistant = document.querySelector('.main-modal.assistant');
const modalMember = document.querySelector('.main-modal.member');
const iCloses = [...document.querySelectorAll('.main-modal i.close')];
triggerAssistant.addEventListener('click', (e) => {
    e.preventDefault();
    modalAssistant.classList.toggle('show');
});
triggerMember.addEventListener('click', (e) => {
    e.preventDefault();
    modalMember.classList.toggle('show');
});

iCloses.map(x => {
    x.addEventListener('click', (e) => {
        e.preventDefault();
        modalAssistant.classList.remove('show');
        modalMember.classList.remove('show');
    })
});
const subtabsGj8 = [...document.querySelectorAll('.main-parent-subtabs-gj8')];
subtabsGj8.map((main, index) => {
    let mainTabsSubtabs = [...main.querySelectorAll('.tab-trigger-subtabs-gj8')];
    let contentTabsSubtabs = [...main.querySelectorAll('.tab-content-subtabs-gj8')];
    mainTabsSubtabs.map((tabTrigger, iTrigger) => {
        tabTrigger.addEventListener('click', (e) => {
            e.preventDefault();
            contentTabsSubtabs.map((content, iContent) => {
                if (iContent == iTrigger) {
                    content.style.display = 'block'
                    mainTabsSubtabs[iContent].classList.add('active')
                } else {
                    content.style.display = 'none'
                    mainTabsSubtabs[iContent].classList.remove('active')
                }
            });
        });
    });
});
const formAssistant = document.querySelector('form.form-assistant');
formAssistant.addEventListener('submit', (e) => {
    e.preventDefault();
    const data = new FormData(formAssistant);
    const url = BASE_URL + 'Assistant/setAssistant'
    let tabs = [...formAssistant.querySelectorAll('.tab-trigger-subtabs-gj8')];
    let active = tabs.filter(x => x.classList.contains('active'))
    let req = (window.XMLHttpRequest) ? new XMLHttpRequest() : ActiveXObject('Microsoft.XMLHTTP')
    req.open("POST", url, true);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    let name = Array.from(data)[0][1]
    let lastname = Array.from(data)[1][1]
    let email = Array.from(data)[2][1]
    let church = Array.from(data)[3][1]
    let phone = Array.from(data)[4][1]
    function datosFormulario() {
        let datos = '';
        datos += 'name=' + name;
        datos += '&lastname=' + lastname;
        datos += '&email=' + email;
        if (active[0].textContent.trim().toLowerCase() == 'adventista') {
            datos += '&church=' + eliminarDiacriticosEs(church).toLowerCase();
        }
        if(phone != '') {
            datos += '&phone=' + phone;
        }
        return datos;
    }
    req.send(datosFormulario())
    req.onreadystatechange = (e) => {
        if (req.readyState == 4 && req.status == 200) {
            let data = JSON.parse(req.responseText)
            if (data.status) {
                Swal.fire({
                    title: '¡Exito!',
                    text: data.msg,
                    icon: 'success',
                    html: `<strong>Nombre: </strong> ${ capitalize(name) } <br>
                    <strong>Apellido: </strong> ${ capitalize(lastname) } <br>
                    <strong>Correo: </strong> ${ email } <br>
                    ${phone != '' ? `<strong>Número celular: </strong> ${ phone } <br>` : ''}
                    <strong>${data.church == 'visita' ? 'Visita' : 'Iglesia:'} </strong> ${ data.church == 'visita' ? '' : church  } <br>` 
                });
                formAssistant.reset();
            } else {
                Swal.fire(
                    'Error',
                    data.msg,
                    'error'
                );
            }
        }
    }
});
const formMember = document.querySelector('form.form-member');
formMember.addEventListener('submit', (e) => {
    e.preventDefault();
    const data = new FormData(formMember);
    const url = BASE_URL + 'Member/setMember'
    let req = (window.XMLHttpRequest) ? new XMLHttpRequest() : ActiveXObject('Microsoft.XMLHTTP')
    req.open("POST", url, true);
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    let name = Array.from(data)[0][1]
    let lastname = Array.from(data)[1][1]
    let email = Array.from(data)[2][1]
    let phone = Array.from(data)[3][1]
    let church = Array.from(data)[4][1]
    let voice = Array.from(data)[5][1]
    let instrument = Array.from(data)[6][1]
    let inputConditionals = [...formMember.querySelectorAll('.tab-trigger-subtabs-gj8')];
    let type = inputConditionals.filter(x => x.classList.contains('active'))
    if (type[0].textContent.trim().toLowerCase() == 'voz') {
        typeRun = voice
    } else {
        typeRun = instrument
    }
    function datosFormulario() {
        let datos = '';
        datos += 'name=' + name;
        datos += '&lastname=' + lastname;
        datos += '&email=' + email;
        datos += '&church=' + church;
        datos += '&typeRun=' + typeRun;
        datos += '&phone=' + phone;
        return datos;
    }
    req.send(datosFormulario())
    req.onreadystatechange = (e) => {
        if (req.readyState == 4 && req.status == 200) {
            let data = JSON.parse(req.responseText)
            if (data.status) {
                Swal.fire({
                    title: '¡Exito!',
                    text: data.msg,
                    icon: 'success',
                    html: `<strong>Nombre: </strong> ${ capitalize(name) } <br>
                    <strong>Apellido: </strong> ${ capitalize(lastname) } <br>
                    <strong>Iglesia: </strong> ${ church } <br>
                    <strong>Correo: </strong> ${ email } <br>
                    <strong>Ejecuión: </strong> ${ capitalize(typeRun) } <br>` 
                });
                formMember.reset();
            } else {
                Swal.fire(
                    'Error',
                    data.msg,
                    'error'
                );
            }
        }
    }
});
let arr = [
    "Sabanita",
    "Yopal",
    "Nueva Guayana",
    "Brisa del Orinoco",
    "Próceres",
    "Nazareth",
    "Llano Alto",
    "Prado del Este",
    "Gran Sábana",
    "Central bolívar",
    "Nueva  república",
    "Cambao",
    "Moreas",
    "Betel",
    "Shell",
    "Maipure",
    "Manahaim",
    "Villa lola",
    "Soledad",
    "Principal",
    "Metropolitana",
    "Angosturita",
    "Angosturita",
    "Angostura",
    "Grimaldi",
    "Itoyponcon",
    "Caldoso",
    "giraluna",
    "Bicentenario",
    "Hipódromo",
    "Democracia",
    "El Este",
    "19 de Abril",
    "San Ignacio",
    "Cuyuni",
    "Grupo Peniel",
    "El Sur",
    "Alto Prado",
    "la Paragua",
    "San Francisco",
    "la pica *",
    "Periquera",
    "El plomo",
    "Betel"
];