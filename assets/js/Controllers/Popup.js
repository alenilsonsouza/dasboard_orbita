class Popup {
    constructor() {
        this._btFecharEl = document.querySelector('.btFechar');
        this._popUpEl = document.querySelector('.areaPoup');

        this.inicializer();
    }

    inicializer() {
        if (this._btFecharEl) {
            this._btFecharEl.addEventListener('click', (e)=>{
                this._popUpEl.style="display:none";
            });
        }
    }
}
new Popup();