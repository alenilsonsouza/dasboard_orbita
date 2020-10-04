class DataHora {
    constructor() {
        this._dataHoraEl = document.querySelector('#datahora');
        this.inicializer();
    }

    inicializer() {
        
        setInterval(e=>{ 
             this.mostrarDataHora();
        }, 10000);


    }

    mostrarDataHora() {
        fetch(`${BASE_URL}ajax/datahora`, {
            method: 'GET',
            mode: 'no-cors',
            cache: 'default',
        })
            .then(r => r.text())
            .then(result => {
                this._dataHoraEl.innerHTML = result;
            });
    }
}
new DataHora();