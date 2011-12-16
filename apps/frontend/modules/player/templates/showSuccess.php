<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $frisbee_player->getId() ?></td>
    </tr>
    <tr>
      <th>Nickname:</th>
      <td><?php echo $frisbee_player->getNickname() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $frisbee_player->getEmail() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $frisbee_player->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $frisbee_player->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $frisbee_player->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('player/edit?id='.$frisbee_player->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('player/index') ?>">List</a>
