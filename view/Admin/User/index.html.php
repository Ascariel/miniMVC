<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
  </tr>
<?php foreach($list as $row): ?>
  <tr>
      <td><?=$row['id']?></td>
      <td><?=$row['name']?></td>
  </tr>
<?php endforeach ?>
</table>
<h1><?=$user->getName()?></h1>

<img src="/images/demo.jpg"/>
<link rel="stylesheet" href="/css/site.css" />
<script src="/js/user.js"></script>
