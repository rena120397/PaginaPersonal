function regis() {
    registrar(html5, 0.8, '#ffa500')
    registrar(css3, 0.7, '#0FC8FF');
    registrar(javascript, 0.7, '#ffff00');
    registrar(java, 0.6, '#ff0000');
    registrar(php, 0.9, '#767BB3');
    registrar(mysql, 0.9, '#C047A2');
    registrar(word, 0.75, '#32373B');
    registrar(c, 0.8, '#3a08ff');
}

function registrar(ss, se,cr) {
    var bar = new ProgressBar.SemiCircle(ss, {
        strokeWidth: 6,
        color: '#FEB916',
        trailColor: '#eee',
        trailWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        svgStyle: null,
        text: {
            value: '',
            alignToBottom: false
        },
        from: { color: '#FFEA82' },
        to: { color: cr },
        // Set default step function for all animate calls
        step: (state, bar) => {
            bar.path.setAttribute('stroke', state.color);
            var value = Math.round(bar.value() * 100);
            if (value === 0) {
                bar.setText('');
            } else {
                bar.setText(value);
            }

            bar.text.style.color = state.color;
        }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '2rem';

    bar.animate(se);  
}
