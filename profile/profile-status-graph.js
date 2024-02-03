document.addEventListener('DOMContentLoaded', function() {

    $.get("status.php", function(resposta){  
        const arrStatus = JSON.parse(resposta);
        function contarFrequencia(array){
            let frequencia = {
                planejado: 0,
                completado: 0,
                dropado: 0,
                assistindo: 0
            };
        
            for (let i = 0; i < array.length; i++) {
                let estado = array[i];
        
                switch (estado) {
                    case "planejado":
                        frequencia.planejado++;
                        break;
                    case "completado":
                        frequencia.completado++;
                        break;
                    case "dropado":
                        frequencia.dropado++;
                        break;
                    case "assistindo":
                        frequencia.assistindo++;
                        break;
                    default:
                        break;
                }
            }
        
            return frequencia;
        }

        console.log(arrStatus);
        let frequenciaStatus = contarFrequencia(arrStatus);

        let completado = frequenciaStatus["completado"] || 0;
        let dropado = frequenciaStatus["dropado"] || 0;
        let planejado = frequenciaStatus["planejado"] || 0;
        let assistindo = frequenciaStatus["assistindo"] || 0;

        console.log(`completado = ${completado}`);
        console.log(`dropado = ${dropado}`);
        console.log(`planejado = ${planejado}`);
        console.log(`assistindo = ${assistindo}`);

        document.querySelector('.bolaStatusVerde + p').textContent = assistindo;
        document.querySelector('.bolaStatusVermelho + p').textContent = dropado;
        document.querySelector('.bolaStatusAzul + p').textContent = completado;
        document.querySelector('.bolaStatusAmarelo + p').textContent = planejado;

        const total = assistindo + dropado + completado + planejado;

        const assistindoPorcentagem = (assistindo / total) * 100;
        const dropadoPorcentagem = (dropado / total) * 100;
        const completadoPorcentagem = (completado / total) * 100;
        const planejadoPorcentagem = (planejado / total) * 100;

        document.getElementById('Assistindo').style.width = `${assistindoPorcentagem}%`;
        document.getElementById('Dropado').style.width = `${dropadoPorcentagem}%`;
        document.getElementById('Completado').style.width = `${completadoPorcentagem}%`;
        document.getElementById('Planejado').style.width = `${planejadoPorcentagem}%`;
    });
});    