<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Formulário base64</title>
    <!-- Incluindo o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3Bz6D4c7Da6j3cbP5V0a8nddHjj4tjt3cs9HIbfy0mxlo63h9YI8y9dZ4" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
        .textarea-area {
            resize: vertical;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center">Formulário para Imprimir Arquivo PDF Base64</h1>

            <?php
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if (isset($dados['BtnEnviar'])) {
                    header('Content-Type: application/pdf');
                    echo base64_decode($dados['arquivo']);
                }
            ?>

            <div class="card p-4 shadow-sm">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="arquivo" class="form-label">Código do Arquivo Base64 PDF</label>
                        <textarea id="arquivo" name="arquivo" rows="10" class="form-control textarea-area" placeholder="Cole o código Base64 aqui..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="BtnEnviar" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0l6+fR5w6fPzIi7t0w6gWuhzdLzSmMYVVbLOwA9T9FTxlXua" crossorigin="anonymous"></script>
</body>

</html>
