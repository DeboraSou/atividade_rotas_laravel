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
    <nav style="display: flex; justify-content: space-between; background-color: #f2f2f2; padding: 25px;">
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

    <section style="display: flex; justify-content: space-between; flex-direction: column; background-color: 
    #fefefe; font-family: 'arial'; margin: 120px 60px;">
        <h2
            style="color: #4a236f; letter-spacing: 8px; text-align: justify; font-weight: bold; font-size: 30px; margin-top: 20px;">
            Nossa Missão
        </h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 10px 0;">
            Na Comunidade Nacional de Ciclistas, nossa missão é simples: inspirar, conectar e apoiar ciclistas de todos
            os níveis e estilos. Acreditamos que a bicicleta não é apenas um meio de transporte, mas uma forma de vida.
            Queremos promover um estilo de vida saudável, sustentável e divertido por meio do ciclismo.
        </p>

        <h2 style="color: #4a236f; letter-spacing: 8px; text-align: justify; font-size: 30px; margin-top: 20px;">
            O que fazemos
        </h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 10px 0;">
            Oferecemos uma variedade de recursos, eventos e oportunidades para nossos membros:
        </p>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 5px 0;">
            <span style="color: #6a329f; font-weight: bold; font-family: arial;">Fóruns e Comunidade Online:
            </span>Conecte-se com outros ciclistas, compartilhe dicas e histórias, e encontre novos amigos de pedalada
            em nossos fóruns online.
        </p>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 5px 0;">
            <span style="color: #6a329f; font-weight: bold; font-family: arial;">Eventos e Passeios: </span>Organizamos
            eventos emocionantes, desde passeios em grupo até competições e festivais, para ciclistas de todos os níveis
            e interesses.
        </p>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 5px 0;">
            <span style="color: #6a329f; font-weight: bold; font-family: arial;">Recursos e Educação: </span>Oferecemos
            dicas, guias e recursos para ajudar os ciclistas a aprimorar suas habilidades, manter suas bicicletas e
            explorar novas trilhas com confiança.
        </p>

        <h2
            style="color: #4a236f; letter-spacing: 8px; text-align: justify; font-weight: bold; font-size: 30px; margin-top: 20px;">
            Junte-se a Nós
        </h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin: 10px 0;">
            Quer você seja um ciclista experiente ou esteja apenas começando, há um lugar para você na nossa comunidade.
            Junte-se a nós hoje mesmo e faça parte de uma rede vibrante de entusiastas do ciclismo. Vamos pedalar juntos
            em direção a novas aventuras e conquistas!
        </p>

        <div style="display: flex; justify-content: center; margin-top: 30px;">
            <a href="/register">
                <button
                    style="padding: 13px 25px; color: #0c0c0c; background-color: #f2f2f2; border: 3px solid #6a329f; border-radius: 5px; cursor: pointer; font-weight: 700; font-size: 18px;"
                    onmouseover="this.style.background='#6a329f'" onmouseout="this.style.background='#f2f2f2'">
                    CADASTRAR
                </button>
            </a>
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