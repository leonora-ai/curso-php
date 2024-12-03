<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e hora atual </title>
    <style> 
         body {
            display: flex;
            justify-content: center;
          align-items: center;
          height: 100vh;
          margin:0;
          background: linear-gradient (135deg, #1e3c72, #2a5298);
          font-family:arial, sans-serif;
          color:#ffffff;
        }
        .container {
            text-align: center;
            background: rgba(0,0,0,3);
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,5);
            }
    .time {
        font-size: 3em;
        font-weight: bold;
        margin: 10px 0;
    }
.date {
  font-size: 1.5em;
}
    </style>
</head>
<body>
<div class="container">
<div class="dete" id="current-dete"></div>
<div class="time" id="currant-time"></div>
</div>

<script>
//Função para atualizar a data e hora dinamicamente
function updateDateTime() {
    const now = new date();
const optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
const optionsDate =  {hour: '2-digit', second: '2-digit',};

// Forestando deta hore
document.getElementById('current-date').textConten = now.toLocaleDateString('pt-BR', optionsDate); 
document.getElementById('current-time').textContent = now.talecalelimestrings ('pt-BR', optionsTime);
}

//Atualizar a cada segundo
setInterval(updateDateTime, 1000);

//chamada inicial
updateDateTime();
</script>
</body>
</html>