class Flash {
    constructor() {
        this._flashEl = document.querySelector('.flash');
        this._btFecharFlashEl = document.querySelector('.fecharFlash');
        this.inicializer();
    }

    inicializer() {
        if (this._btFecharFlashEl) {
            this._btFecharFlashEl.addEventListener('click', e=>{
                this._flashEl.style='display:none';
            });
        }
    }
}
new Flash();