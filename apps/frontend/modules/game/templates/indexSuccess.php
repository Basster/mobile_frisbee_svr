<h1>Frisbee games List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Lat</th>
      <th>Lng</th>
      <th>Started at</th>
      <th>Last action</th>
      <th>Created by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($frisbee_games as $frisbee_game): ?>
    <tr>
      <td><a href="<?php echo url_for('game/show?id='.$frisbee_game->getId()) ?>"><?php echo $frisbee_game->getId() ?></a></td>
      <td><?php echo $frisbee_game->getLat() ?></td>
      <td><?php echo $frisbee_game->getLng() ?></td>
      <td><?php echo $frisbee_game->getStartedAt() ?></td>
      <td><?php echo $frisbee_game->getLastAction() ?></td>
      <td><?php echo $frisbee_game->getCreatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('game/new') ?>">New</a>
