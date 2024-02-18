<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Таблица истинности и таблица сравнений на PHP">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Таблицы истинности и сравнения на PHP</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Введение в PHP</h1>
        </div>
    </header>
    <main>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; ?>

        <section id="truth-table">
            <div class="container">
                <h2><span>Задание 1.</span> Таблица истинности PHP</h2>

                <div class="table">
                    <div class="trow">
                        <div class="tcell">A</div>
                        <div class="tcell">B</div>
                        <div class="tcell">!A</div>
                        <div class="tcell">A || B</div>
                        <div class="tcell">A && B</div>
                        <div class="tcell">A xor B</div>
                    </div>

                    <?php while ($i < count($a)): ?>
                        <div class="trow">
                            <div class="tcell"><?= $a[$i] ?></div>
                            <div class="tcell"><?= $b[$i] ?></div>
                            <div class="tcell"><?= ! $a[$i] ?: 0 ?></div>
                            <div class="tcell"><?= ($a[$i] || $b[$i]) ? 1 : 0 ?></div>
                            <div class="tcell"><?= ($a[$i] && $b[$i]) ? 1 : 0 ?></div>
                            <div class="tcell"><?= ($a[$i] xor $b[$i]) ? 1 : 0 ?></div>
                        </div>

                        <?php $i++; ?>
                    <?php endwhile; ?>
                </div>
            </div>  
        </section>

        <section id="flexible-comparison">
            <div class="container">
                <h2><span>Задание 2.</span> Гибкое сранение в PHP</h2>

                <div class="table">
                    <div class="trow">
                        <div class="tcell"></div>

                        <?php foreach ($arr as $a): ?>
                            <div class="tcell"><?= getNameCell($a) ?></div>
                        <?php endforeach; ?>
                    </div>

                    <?php foreach ($arr as $a): ?>
                        <div class="trow">
                            <div class="tcell"><?= getNameCell($a) ?></div>

                            <?php foreach ($arr as $b): ?>
                                <div class="tcell <?= $a != $b ?: 'true' ?>">
                                    <?= $a == $b ? 'true' : 'false' ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="tough-comparison">
            <div class="container">
                <h2><span>Задание 2.</span> Жёсткое сравнение в PHP</h2>

                <div class="table">
                    <div class="trow">
                        <div class="tcell"></div>

                        <?php foreach ($arr as $a): ?>
                            <div class="tcell"><?= getNameCell($a) ?></div>
                        <?php endforeach; ?>
                    </div>
                    
                    <?php foreach ($arr as $a): ?>
                        <div class="trow">
                            <div class="tcell"><?= getNameCell($a) ?></div>

                            <?php foreach ($arr as $b): ?>
                                <div class="tcell <?= $a !== $b ?: 'true' ?>">
                                    <?= $a === $b ? 'true' : 'false' ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') === '2024' ? date('Y') : '2024-' . date('Y') ?> Anton Komarov</p>
        </div>
    </footer>
</body>
</html>