<br />
<br />
<br />
<br />
<br />
<br />
<div>
<?php foreach ($tab_f as $f): ?>
        <div><a href="./index.php?controller=generator&action=readForm&idForm=<?=$f->getIdForm();?>">Formulaire <?=$f->getIdForm();?></a>
<?php endforeach; ?>
</div>