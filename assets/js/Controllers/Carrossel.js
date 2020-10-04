class Carrossel {
    constructor() {
        this._carrosselEl = document.querySelector('#carrossel');
        this.inicializer();
    }

    inicializer() {
        if(this._carrosselEl) {
            let idlanding = this._carrosselEl.getAttribute('data-idlanding');
            this.carregarCarrossel(idlanding);
        }
    }

    carregarCarrossel(idlanding, pagina = 1) {

        fetch(`${BASE_URL}ajax/carrossel?idlanding=${idlanding}&pagina=${pagina}`, {
            method: 'GET',
            mode: 'no-cors',
            cache: 'default',
        })
            .then(r => r.text())
            .then(result => {
                this._carrosselEl.innerHTML = result;
                this.paginacao(idlanding);
                
        });
    }
    paginacao(idlanding) {
        
        let setas = document.querySelectorAll('.carrosselSeta');
        
        setas.forEach(item=>{
            item.addEventListener('click', e=>{
                let pagina = item.getAttribute('data-p');
                this.carregarCarrossel(idlanding, pagina);
            });
        });
    }
}
new Carrossel();
