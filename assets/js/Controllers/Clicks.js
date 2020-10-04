class Clicks {
    constructor() {
        this.inicializer();
    }

    inicializer() {
        let clickEl = document.querySelectorAll('.clickWhats');
        clickEl.forEach(item=>{
            item.addEventListener('click',(e)=>{
                let el = item.getAttribute('data-element');
                this.click(el);
            });
        });
    }

    click(elem) {
        let myInit = {
            method: 'POST',
            mode: 'cors',
            cache: 'default',
            body: JSON.stringify({
                elem,
            })
        };
        fetch(BASE_URL + 'click', myInit)
            .then((r) => r.text())
            .then((r) => {
                //console.log();
            });
    }
}
new Clicks();