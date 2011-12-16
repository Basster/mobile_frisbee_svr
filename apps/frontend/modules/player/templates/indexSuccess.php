<h1>Frisbee players List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nickname</th>
      <th>Email</th>
      <th>Is active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($frisbee_players as $frisbee_player): ?>
    <tr>
      <td><a href="<?php echo url_for('player/show?id='.$frisbee_player->getId()) ?>"><?php echo $frisbee_player->getId() ?></a></td>
      <td><?php echo $frisbee_player->getNickname() ?></td>
      <td><?php echo $frisbee_player->getEmail() ?></td>
      <td><?php echo $frisbee_player->getIsActive() ?></td>
      <td><?php echo $frisbee_player->getCreatedAt() ?></td>
      <td><?php echo $frisbee_player->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('player/new') ?>">New</a>
