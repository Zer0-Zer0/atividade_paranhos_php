<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("code.php");
    include("read.php");

    include("../_templates/head.php");
    head_constructor("Calculo de média");

    ?>

    <script src="/_js/toggle.js"></script>
    <script src="/_js/clamp.js"></script>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="center_flex flex_column">
            <h1>
                CORES
            </h1>

            <div class="flex_row">
                <div class="box standard_width">
                    <?php add_classmate(); ?>
                </div>

                <button onclick="toggle(document.getElementById('create_new'))" id="add_contact" class="square"></button>
            </div>

            <h1>Discentes</h1>

            <div class="center_flex flex_grid">
                <?php read_data(); ?>
            </div>

            <div id="create_new" class="box center_abs hidden box">
                <h2>
                    Adicionar novo discente
                </h2>

                <form method="post">
                    <div class="flex_row">
                        <label for="nome">
                            Nome completo
                        </label>
                        <input type="text" name="nome" maxlength="16" required>
                    </div>

                    <div class="flex_row">
                        <label for="matricula">
                            No. matrícula
                        </label>
                        <input maxlength=12 minlength=12 type="text" name="matricula" required>
                    </div>

                    <div class="flex_row">
                        <label for="turma">
                            Turma
                        </label>
                        <select name="turma">
                            <option value="ed-11">ed-11</option>
                            <option value="ed-12">ed-12</option>
                            <option value="ed-21">ed-21</option>
                            <option value="ed-22">ed-22</option>
                            <option value="ed-31">ed-31</option>
                            <option value="ed-32">ed-32</option>
                            <option value="ed-41">ed-41</option>
                            <option value="ei-11">ei-11</option>
                            <option value="ei-12">ei-12</option>
                            <option value="ei-21">ei-21</option>
                            <option value="ei-22">ei-22</option>
                            <option value="ei-31">ei-31</option>
                            <option value="ei-32">ei-32</option>
                            <option value="ei-41">ei-41</option>
                            <option value="ema-11">ema-11</option>
                            <option value="ema-12">ema-12</option>
                            <option value="ema-21">ema-21</option>
                            <option value="ema-22">ema-22</option>
                            <option value="ema-31">ema-31</option>
                            <option value="ema-32">ema-32</option>
                            <option value="ema-41">ema-41</option>
                        </select>
                    </div>

                    <div class="flex_row">
                        <label for="materia">
                            Matéria
                        </label>
                        <select name="materia">
                            <option value="artes">artes</option>
                            <option value="biologia">biologia</option>
                            <option value="dt">desenho tecnico</option>
                            <option value="edf">educação física</option>
                            <option value="fisica">fisica</option>
                            <option value="filoso">filosofia</option>
                            <option value="geografia">geografia</option>
                            <option value="historia">historia</option>
                            <option value="ingles">ingles</option>
                            <option value="matematica">matematica</option>
                            <option value="portugues">portugues</option>
                            <option value="quimica">quimica</option>
                            <option value="sociologia">sociologia</option>
                        </select>
                    </div>

                    <div class="flex_row">
                        <label for="unidade">
                            Unidade
                        </label>
                        <select name="unidade">
                            <option value="1">primeira unidade</option>
                            <option value="2">segunda unidade</option>
                            <option value="3">terceira unidade</option>
                        </select>
                    </div>

                    <div class="flex_row">
                        <label for="n1">Nota 1</label>
                        <input onchange="clamp(this, 0, 10)" step="0.1" type="number" name="n1" required>
                    </div>

                    <div class="flex_row">
                        <label for="n2">Nota 2</label>
                        <input onchange="clamp(this, 0, 10)" step="0.1" type="number" name="n2" required>
                    </div>

                    <div class="flex_row">
                        <label for="n3">Nota 3</label>
                        <input onchange="clamp(this, 0, 10)" step="0.1" type="number" name="n3" required>
                    </div>

                    <div>
                        <input type="submit" name="send" value="enviar">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>