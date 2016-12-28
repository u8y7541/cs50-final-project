<p>(Click <a href = '/'>here</a> to enter a different word)</p>
<h2> Your input was: </h2>
<script type="text/javascript">jumbleEffect("<?= $input ?>")</script>
<h2 id='msg'>Here <?= count($rows) == 1?'is the solution': 'are the solutions' ?>. Click a word to see its definition.</h2>
<h2><?= count($rows) == 0?'Sorry, the input is invalid.<script type="text/javascript">var element = document.getElementById("msg"); element.parentNode.removeChild(element);</script>':'' ?></h2> 
<?php foreach($rows as $row): ?>
<h1><a href = "https://merriam-webster.com/dictionary/<?= $row["word"] ?>"><?= $row["word"] ?></a></h1>
<script type="text/javascript">jumbleEffect("<?= $row["word"] ?>")</script>
<?php endforeach ?>
