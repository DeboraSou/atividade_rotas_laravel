<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas e Links</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #6a329f;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-track {
        background-color: #b498cf;
    }
</style>

<body>
    <nav style="display: flex; justify-content: space-between; background-color: 
    #f2f2f2; padding: 25px;">
        <!-- Logotipo. -->
        <ul style="list-style-type: none; display: flex;">
            <li>
                <a href="/"
                    style="text-decoration: none; margin-left: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 23px;">Ciclista
                    Amador<span style="color: #6a329f; font-weight: bolder; font-family: cursive;">.</span></a>
            </li>
        </ul>

        <!-- Links. -->
        <ul style="list-style-type: none; display: flex;">
            <li>
                <a href="/"
                    style="text-decoration: none; margin-right: 30px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Início</a>
            </li>
            <li>
                <a href="/sobrenos"
                    style="text-decoration: none; margin-right: 30px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Sobre Nós</a>
            </li>
            <li>
                <a href="/contato"
                    style="text-decoration: none; margin-right: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Contato</a>

            </li>
            <li>
                <a href="/login"
                    style="text-decoration: none; margin-right: 20px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Entrar</a>

            </li>
            <li>
                <a href="/register"
                    style="text-decoration: none; margin-right: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Cadastrar</a>

            </li>
        </ul>
    </nav>

    <section
        style="display: flex; justify-content: space-between; flex-direction: column; background-color: #fefefe; font-family: 'arial'; margin: 120px 60px;">
        <h2
            style="color: #4a236f; letter-spacing: 3px; text-align: justify; font-weight: bold; font-size: 30px; margin-top: 20px;">
            Entre em Contato
        </h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 10px 0;">
            Tem alguma dúvida, sugestão ou apenas quer dizer "olá"? Estamos aqui para ouvir você! Não hesite em nos
            contatar usando uma das opções abaixo:
        </p>

        <h2
            style="color: #4a236f; letter-spacing: 8px; text-align: justify; font-weight: bold; font-size: 30px; margin-top: 20px;">
            Formulário de Contato
        </h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 10px 0 30px 0;">
            Preencha o formulário abaixo e entraremos em contato com você o mais rápido possível:
        </p>
        <div style="display: flex; justify-content: center; font-family: arial;">
            <div
                style="max-width: 900px; border: 1px solid #6a329f; border-radius: 10px; overflow: hidden; display: flex;">
                <!-- Formulário. -->
                <div style="flex: 1; background-color: #f2f2f2; padding: 20px;">
                    <h2
                        style="text-align: center; color: #4a236f; letter-spacing: 5px; font-size: 30px; margin-top: 100px;">
                        <!-- Formulário de Contato. -->
                    </h2>
                    <form style="margin-top: 20px;">
                        <div style="margin-bottom: 15px;">
                            <label for="nome"
                                style="display: block; font-size: 20px; font-weight: bold; color: #0c0c0c;">Nome:</label>
                            <input type="text" id="nome" name="nome"
                                style="width: 100%; padding: 10px; border: 1px solid #6a329f; border-radius: 5px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="email"
                                style="display: block; font-size: 20px; font-weight: bold; color: #0c0c0c;">E-mail:</label>
                            <input type="email" id="email" name="email"
                                style="width: 100%; padding: 10px; border: 1px solid #6a329f; border-radius: 5px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="mensagem"
                                style="display: block; font-size: 20px; font-weight: bold; color: #0c0c0c;">Mensagem:</label>
                            <textarea id="mensagem" name="mensagem"
                                style="width: 100%; padding: 10px; border: 1px solid #6a329f; border-radius: 5px;"></textarea>
                        </div>
                        <button type="submit"
                            style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #6a329f; color: #fefefe; font-size: 18px; font-weight: bold; cursor: pointer;">Enviar</button>
                    </form>
                </div>
                <!-- Informações de Contato. -->
                <div style="flex: 1; background-color: #0c0c0c; padding: 20px;">
                    <h2
                        style="color: #6a329f; letter-spacing: 3px; text-align: center; font-size: 20px; margin-top: 30px;">
                        Informações de Contato</h2>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 10px 0;">Se preferir, você
                        pode entrar em contato conosco diretamente pelos seguintes meios:</p>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0;"><span
                            style="color: #6a329f; font-weight: bold; font-family: arial;">E-mail:</span>
                        ciclista_amador@ciclista.com</p>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0;"><span
                            style="color: #6a329f; font-weight: bold; font-family: arial;">Telefone:</span> (+55) 11
                        0000 - 0000</p>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0;"><span
                            style="color: #6a329f; font-weight: bold; font-family: arial;">Endereço:</span> Avenida
                        Nothing to Lose Nº0000 SP - São Paulo Brasil
                    </p>
                    <h2
                        style="color: #6a329f; letter-spacing: 3px; text-align: center; font-size: 20px; margin-top: 20px;">
                        Horário de Atendimento</h2>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 10px 0;">Nosso horário de
                        atendimento é de segunda a sexta-feira, das 9h às 18h. Estamos ansiosos para ouvir de você e
                        ajudar no que for preciso!</p>
                    <h2
                        style="color: #6a329f; letter-spacing: 3px; text-align: center; font-size: 20px; margin-top: 20px;">
                        Redes Sociais</h2>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 10px 0;">Siga-nos nas redes
                        sociais para ficar por dentro das últimas notícias, eventos e atualizações da nossa comunidade:
                    </p>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0; cursor: pointer;">
                        <span style="color: #6a329f; font-weight: bold; font-family: arial;">Facebook:</span>
                        ciclista.amador
                    </p>
                    <p style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0; cursor: pointer;">
                        <span style="color: #6a329f; font-weight: bold; font-family: arial;">Instagram:</span>
                        ciclista.amador
                    </p>
                    <p
                        style="color: #f2f2f2; text-align: justify; font-size: 15px; margin: 5px 0; cursor: pointer; margin-bottom: 30px;">
                        <span style="color: #6a329f; font-weight: bold; font-family: arial;">X:</span> ciclista.amador
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background: linear-gradient(to bottom, #0c0c0c, #6a329f); padding: 20px; border-top: 5px solid #6a329f; font-family: arial;">
        <h2 style="text-align: center;">
            <a href="/"
                style="text-decoration: none; font-family: cursive; color: #f2f2f2; letter-spacing: 3px; font-weight: bold; font-size: 30px; margin-top: 20px;">Ciclista
                Amador<span style="color: #0c0c0c; font-size: 60px; font-weight: bolder; font-family: cursive;">.</span>
            </a>
        </h2>

        <h3
            style="color: #f2f2f2; letter-spacing: 3px; text-align: center; font-weight: bold; font-size: 20px; margin-top: 10px;">
            Um site feito para o pelotão
        </h3>

        <p style="color: #f2f2f2; text-align: center; font-size: 15px; margin-top: 50px;">Copyright © 2024 Ciclista
            Amador. Todos os direitos reservados.</p>
    </section>
</body>

</html>