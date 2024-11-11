* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Corpo da página */
body {
    font-family: Arial, sans-serif;
    background-color:lavender ;
    color: #333;
    padding: 10px;
}

/* Cabeçalho */
h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 10px;
}

/* Formulário */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 450px;
    margin: 0 auto;
    
}

/* Estilo para os rótulos do formulário */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

/* Campos de entrada */
input[type="text"], 
input[type="date"], 
input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

input[type="text"]:focus, 
input[type="date"]:focus, 
input[type="tel"]:focus {
    border-color: #3498db;
    outline: none;
}

/* Botão de envio */
input[type="submit"] {
    background-color: #3498db;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

/* Linha horizontal */
hr {
    margin: 30px 0;
    border: 1px solid #ddd;
}

/* Seção de lista de usuários */
h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 20px;
}

div {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    margin: 0 auto;
}

/* Tabela de usuários */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #3498db;
    color: white;
}

tr:hover {
    background-color: #f5f5f5;
}

/* Estilo para o rodapé */
footer {
    text-align: center;
    margin-top: 50px;
    color: #777;
    font-size: 14px;
}