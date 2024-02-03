document.addEventListener("DOMContentLoaded", function() {
  var TabelaAnime = document.getElementById('Tabela-anime-body');

  $.get("listapessoal.php", function(resposta) {
    const allAnimes = JSON.parse(resposta);

    let numCols = allAnimes.length;
    let numRows = allAnimes[1].length;

    console.log(allAnimes);
    console.log(numCols);
    console.log(numRows);

    for (var i = 0; i < numRows; i++) {
      var tr = document.createElement('tr');
    
      for (var j = 0; j < numCols; j++) {
        var td = document.createElement('td');
    
        if (j === 0) {
          var img = document.createElement('img');
          img.src = allAnimes[j][i];
          img.classList.add('imagem');
          td.appendChild(img);
        } else {
          td.textContent = allAnimes[j][i];
        }
    
        tr.appendChild(td);
      }
    
      TabelaAnime.appendChild(tr);
    }

  });
  
});