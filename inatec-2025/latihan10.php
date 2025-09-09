<?php $buah = ["test" => "Kluay", "appen", "Ma Muang", "dureng"]; ?>
<ul>
    <?php foreach($buah as $key => $value): ?>
        <li><?= $key ?>: <?= $value ?></li>
    <?php endforeach; ?>
</ul>







<!-- <?php $buah = ["Kluay", "Appen", "Ma Muang", "dureng"]; //<?= disingkat echo ?>
<ul>
    <?php foreach($buah as $value): ?>
        <li><?= $value ?></li>
    <?php endforeach; ?>
</ul> -->
