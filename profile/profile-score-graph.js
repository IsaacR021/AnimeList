document.addEventListener('DOMContentLoaded', function() {


    $.get("notas.php", function(resposta) {
        const arr = JSON.parse(resposta);


        /*calcular quantidade*/
        function contarFrequencia(array) {
            let frequencia = {};
        
            for (let i = 0; i < array.length; i++) {
                let numero = array[i];
        
                if (frequencia[numero]) {
                    frequencia[numero]++;
                } else {
                    frequencia[numero] = 1;
                }
            }
        
            return frequencia;
        }
        
        let frequenciaNotas = contarFrequencia(arr);
        
        for (let i = 1; i <= 10; i++) {
            let nota = `nota${i}`;
            if (frequenciaNotas[i]) {
                eval(`${nota} = ${frequenciaNotas[i]}`);
            } else {
                eval(`${nota} = 0`);
            }
        }



        /*montar grafico*/            

        notas = [nota1,nota2,nota3,nota4,nota5,nota6,nota7,nota8,nota9,nota10];
        var maiorquantidade = 0;
        maiorquantidade = Math.max.apply(null,notas);

        
        var barras = [  document.getElementById('barra1'),
                        document.getElementById('barra2'),
                        document.getElementById('barra3'),
                        document.getElementById('barra4'),    
                        document.getElementById('barra5'),
                        document.getElementById('barra6'),
                        document.getElementById('barra7'),
                        document.getElementById('barra6'),
                        document.getElementById('barra8'),
                        document.getElementById('barra9'),
                        document.getElementById('barra10'),
        ]
    
        document.querySelector('#barra1 .quantidade').textContent = nota1;
        document.querySelector('#barra2 .quantidade').textContent = nota2;
        document.querySelector('#barra3 .quantidade').textContent = nota3;
        document.querySelector('#barra4 .quantidade').textContent = nota4;
        document.querySelector('#barra5 .quantidade').textContent = nota5;
        document.querySelector('#barra6 .quantidade').textContent = nota6;
        document.querySelector('#barra7 .quantidade').textContent = nota7;
        document.querySelector('#barra8 .quantidade').textContent = nota8;
        document.querySelector('#barra9 .quantidade').textContent = nota9;
        document.querySelector('#barra10 .quantidade').textContent = nota10;



        barras.forEach(function(barra) {
            for(let x = 1; x<=10; x++){
                var quantidade = parseInt(barra.querySelector('.quantidade').textContent);

                
                console.log("nota - "+quantidade);

                if (quantidade === maiorquantidade) {
                    barra.style.height = '100%';
                } 
                else {
                    barra.style.height = `${(quantidade / maiorquantidade) * 100}%`;
                }
            }
        });

    });

});
