let estudiantes = [];
let name = document.querySelector('#name');
let sex = document.querySelector('#sexo');
let note = document.querySelector('#nota');

let form = document.querySelector('form');
form.addEventListener('submit', async(e)=>{
    let my_Headers = new Headers({"content-Type" : "application/json"});
    let config = {
        method : "POST",
        headers : my_Headers,
        body : JSON.stringify(estudiantes)
    }
    
    let res = await (await fetch('app.php', config)).text();
    console.log(res);
});


let añadir = document.querySelector('#añadir');
añadir.addEventListener('click', (e)=>{
    e.preventDefault();

    let obj = {
        name : name.value,
        sex : sex.value,
        note : note.value
    }
    estudiantes.unshift(obj);

    console.log(estudiantes);
});