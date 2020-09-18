function range(){
    let valor_bars = document.getElementById('range');

    let valor_input = document.getElementById('valor');

    let btn = document.getElementById('btn');
    let global_bar = document.getElementById('bar_global');
    let global_intern = document.getElementById('bar_intern');

    valor_input.value = '0,0';

    setInterval(() => {
        btn.style.left = `${(valor_bars.value / 2400) - 5.5}%`;
        global_intern.style.width = `${(valor_bars.value / 2400)}%`;
        
        let plus = `${valor_bars.value},00`;
        let explode = plus.split('');

        if(explode.length > 8){
            explode[2] = explode[2]+'.';
        }else if(explode.length > 7){
            explode[1] = explode[1]+'.';
        }else if(explode.length > 6){
            explode[0] = explode[0]+'.';
        }

        let formated_value = explode.join('');

        valor_input.value = formated_value;
    }, 1);
}

range();

function calculate(){
    let valor_input = document.getElementById('valor');
    let buttons = document.getElementsByClassName('button');
    let parcela_text = document.getElementById('parcela');
    let valor = document.getElementById('valor_par');
    let juros = document.getElementById('taxa_am');
    let txt = document.getElementById('text_juros');

    txt.innerHTML = juros.value.replace('.', ',')+'%';

    let valor_parcela = buttons[0].innerHTML;
        
    window.addEventListener('click', (e) => {
        for(let i = 0; i < buttons.length; i++){
            if(e.target.innerHTML == buttons[i].innerHTML){
                valor_parcela = buttons[i].innerHTML;
            }
        }

        parcela_text.innerHTML = valor_parcela;
    });

    parcela_text.innerHTML = buttons[0].innerHTML;

    setInterval(() => {
        let value = valor_input.value;
        let out_v = value.split(',');
        let v = out_v[0];
        let out_dot = v.split('.');
        let original = parseInt(out_dot.join(''));

        let final = (original/parcela_text.innerHTML) * juros.value;
        let comp = final.toFixed(2);
        let explode_dot = comp.split('.');
        let compass = explode_dot.join('');

        let plus = `${compass}`;
        let explode = plus.split('');

        if(explode.length > 6){
            explode[1] = explode[1]+'.';
            explode[4] = explode[4]+',';
        }else if(explode.length > 5){
            explode[0] = explode[0]+'.';
            explode[3] = explode[3]+',';
        }else if(explode.length > 4){
            explode[2] = explode[2]+',';
        }else if(explode.length > 3){
            explode[1] = explode[1]+',';
        }else if(explode.length > 2){
            explode[0] = explode[0]+',';
        } 

        let formated_value = explode.join('');

        valor.innerHTML = formated_value;
    }, 1);
}

calculate();

function show_faq(){
    let get_faq = document.getElementsByClassName('header_faq');
    let get_content = document.getElementsByClassName('content');

    for(let i = 0; i < get_faq.length; i++){
        get_faq[i].addEventListener('click', () => {
            get_content[i].classList.toggle('show');
        })
    }
}

show_faq();

function show_modal(){
    let close = document.getElementById('close');
    let modal_menu = document.getElementById('menu');
    let call_menu = document. getElementsByClassName('call_menu');

    for(let i = 0; i < call_menu.length; i++){
        call_menu[i].addEventListener('click', () => {
            close.style.display = 'flex';
            setTimeout(() => {
                modal_menu.classList.add('show_menu_modal');
            }, 100);
        });
    }

    window.addEventListener('click', (e) =>{
        if(e.target.className == 'close'){
            modal_menu.classList.remove('show_menu_modal');
            setTimeout(() => {
                close.style.display = 'none';
            }, 500);
        }
    })
}

show_modal();

function show_header_fixed(){
    let header = document.getElementById('fixed_header');

    setInterval(() => {
        if(window.pageYOffset > 85){
            header.classList.add('show');
        }else{
            header.classList.remove('show');
        }
    }, 100);
}

show_header_fixed();