<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linguaViva</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/estilos.css">

    <!-- JS -->
    <script src="./assets/js/script.js" defer></script>
</head>

<body>

    <section class="questionario">
        <h2 class="questionario__titulo">Conte um pouco sobre você</h2>
        <div class="questionario__grid">
            <form action="dados.php" method="get" class="questionario__form">
                <label for="nome" class="questionario__label">Qual o seu nome?</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="questionario__resposta" required>

                <label for="idade" class="questionario__label">Qual a sua idade?</label>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade" class="questionario__resposta" required>

                <label for="sexo" class="questionario__label">Qual o seu sexo?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="sexo" id="sexo-m" class="questionario__resposta" value="Masculino" required> <label for="sexo-m">Masculino</label>
                    <input type="radio" name="sexo" id="sexo-f" class="questionario__resposta" value="Feminino" required> <label for="sexo-f">Feminino</label>
                </div>

                <label for="email" class="questionario__label">Insira seu e-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="questionario__resposta" required>

                <label for="telefone" class="questionario__label">Insira seu telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" class="questionario__resposta" required maxlength="15">

                <label for="cpf" class="questionario__label">Insira seu CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" class="questionario__resposta" required maxlength="11">

                <label for="cursos" class="questionario__label">Qual lingua você irá aprender?</label>
                <select name="cursos" id="cursos" class="questionario__resposta">
                    <option value="Ingles">Ingles</option>
                    <option value="Espanhol">Espanhol</option>
                    <option value="Italiano">Italiano</option>
                    <option value="Alemão">Alemão</option>
                </select>

                <label class="questionario__label">Nivel de conhecimento:</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="Nivel" id="nivel-basico" class="questionario__resposta" value="Básico" required> <label for="nivel-basico">Básico</label>
                    <input type="radio" name="Nivel" id="nivel-intermediario" class="questionario__resposta" value="Intermediario" required><label for="nivel-intermediario">Intermediario</label>
                    <input type="radio" name="Nivel" id="nivel-avancado" class="questionario__resposta" value="Avançado" required><label for="nivel-avancado">Avançado</label>
                </div>

                <input type="submit" value="Enviar" class="questionario__btn"></input>
            </form>
        </div>
    </section>

    <footer class="rodape">
        <p class="rodape__texto">Kauã & Luan</p>
        <section class="rodape__topicos">
            <div class="rodape__servicos">
                <p class="rodape__titulo">Empresas</p>
                <a href="#" class="rodape__item"><img src="./assets/img/SafeSchool.svg" alt="Logo SafeSchool Tech">SafeSchool Tech</a>
                <a href="#" class="rodape__item"><img src="./assets/img/AgroVitalis.svg" alt="Logo AgroVitalis">AgroVitalis</a>
            </div>

            <div class="rodape__servicos">
                <p class="rodape__titulo">Projetos Sociais</p>
                <a href="#" class="rodape__item"><img src="./assets/img/Dia florido.svg" alt="Logo Dia florido">Dia florido</a>
                <a href="#" class="rodape__item"><img src="./assets/img/OpenAgro.svg" alt="Logo OpenAgro">OpenAgro</a>
            </div>
        </section>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>