class Menu {
    constructor() {
        this._btMenuDesktop = document.querySelector('.btMenu');
        this._menuDesktop = document.querySelector('.menu ul');
        this._btMenuMobile = document.querySelector('.btMenuLP');
        this._menuMobile = document.querySelector('.menu--LP ul');
        this.inicializer();
    }

    inicializer() {
        if(this._btMenuDesktop) {
            this.toggleMenu(this._btMenuDesktop, this._menuDesktop, 'flex');
        }
        if(this._btMenuMobile) {
            this.toggleMenu(this._btMenuMobile, this._menuMobile, 'block');
        }
    }

    toggleMenu(botaoEl, menuEl, display) {
        botaoEl.addEventListener('click', e=>{

            if(menuEl.hasAttribute('style')) {
                menuEl.removeAttribute('style');
            }else{
                menuEl.style = `display:${display}`;
            }
        });
    }
}
new Menu();

