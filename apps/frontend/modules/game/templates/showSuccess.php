<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $frisbee_game->getId() ?></td>
    </tr>
    <tr>
      <th>Lat:</th>
      <td><?php echo $frisbee_game->getLat() ?></td>
    </tr>
    <tr>
      <th>Lng:</th>
      <td><?php echo $frisbee_game->getLng() ?></td>
    </tr>
    <tr>
      <th>Started at:</th>
      <td><?php echo $frisbee_game->getStartedAt() ?></td>
    </tr>
    <tr>
      <th>Last action:</th>
      <td><?php echo $frisbee_game->getLastAction() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $frisbee_game->getCreatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('game/edit?id='.$frisbee_game->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('game/index') ?>">List</a>
