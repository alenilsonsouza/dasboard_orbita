
class Calendario {
    constructor() {
        this._calendarioEl = document.querySelector('#calendario');

        this.inicializer();
    }

    inicializer() {
        this.carregarCalendario();

    }

    carregarCalendario(mes = '', ano = '') {
        fetch(`${BASE_URL}ajax/calendario?mes=${mes}&ano=${ano}`, {
            method: 'GET',
            mode: 'no-cors',
            cache: 'default',
        })
            .then(r => r.text())
            .then(result => {
                if (this._calendarioEl) {
                    this._calendarioEl.innerHTML = result;
                }
                this.marcarDia();
                this.escolhaMes();
            });
    }

    escolhaMes() {
        let mes = document.querySelector('#mes');
        let ano = document.querySelector('#ano');
        if (mes) {
            mes.addEventListener('change', (e) => {
                this.carregarCalendario(mes.value, ano.value)
            });
        }
    }

    marcarDia() {
        let diaEl = document.querySelectorAll('.dia');
        diaEl.forEach((item, index) => {

            item.addEventListener('click', e => {
                diaEl.forEach(item => {
                    item.classList.remove('marcado');
                });
                e.target.classList.add('marcado');
                let data = e.target.getAttribute('data-date');
                console.log(data);
                /*let inputDataEl = document.querySelector('input[name=data_marcacao]');
                inputDataEl.value = data;*/
            });

        });
    }
}
new Calendario();