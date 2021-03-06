<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repass'); ?></dt>
		<dd>
			<?php echo h($user['User']['repass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interactions'), array('controller' => 'interactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interaction'), array('controller' => 'interactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activities'); ?></h3>
	<?php if (!empty($user['Activity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Interaction Id'); ?></th>
		<th><?php echo __('Task Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Object Type'); ?></th>
		<th><?php echo __('Method'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Activity'] as $activity): ?>
		<tr>
			<td><?php echo $activity['id']; ?></td>
			<td><?php echo $activity['user_id']; ?></td>
			<td><?php echo $activity['organization_id']; ?></td>
			<td><?php echo $activity['contact_id']; ?></td>
			<td><?php echo $activity['interaction_id']; ?></td>
			<td><?php echo $activity['task_id']; ?></td>
			<td><?php echo $activity['post_id']; ?></td>
			<td><?php echo $activity['comment_id']; ?></td>
			<td><?php echo $activity['object_type']; ?></td>
			<td><?php echo $activity['method']; ?></td>
			<td><?php echo $activity['created']; ?></td>
			<td><?php echo $activity['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), array(), __('Are you sure you want to delete # %s?', $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['activity_id']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Interactions'); ?></h3>
	<?php if (!empty($user['Interaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Interaction'] as $interaction): ?>
		<tr>
			<td><?php echo $interaction['id']; ?></td>
			<td><?php echo $interaction['user_id']; ?></td>
			<td><?php echo $interaction['organization_id']; ?></td>
			<td><?php echo $interaction['contact_id']; ?></td>
			<td><?php echo $interaction['type']; ?></td>
			<td><?php echo $interaction['notes']; ?></td>
			<td><?php echo $interaction['created']; ?></td>
			<td><?php echo $interaction['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interactions', 'action' => 'view', $interaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interactions', 'action' => 'edit', $interaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interactions', 'action' => 'delete', $interaction['id']), array(), __('Are you sure you want to delete # %s?', $interaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interaction'), array('controller' => 'interactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Organizations'); ?></h3>
	<?php if (!empty($user['Organization'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Street 2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Custom Technology'); ?></th>
		<th><?php echo __('Lead Status'); ?></th>
		<th><?php echo __('Interested Components'); ?></th>
		<th><?php echo __('Timeframe'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Organization'] as $organization): ?>
		<tr>
			<td><?php echo $organization['id']; ?></td>
			<td><?php echo $organization['user_id']; ?></td>
			<td><?php echo $organization['street']; ?></td>
			<td><?php echo $organization['street_2']; ?></td>
			<td><?php echo $organization['city']; ?></td>
			<td><?php echo $organization['zip']; ?></td>
			<td><?php echo $organization['state']; ?></td>
			<td><?php echo $organization['email']; ?></td>
			<td><?php echo $organization['phone']; ?></td>
			<td><?php echo $organization['website']; ?></td>
			<td><?php echo $organization['notes']; ?></td>
			<td><?php echo $organization['custom_technology']; ?></td>
			<td><?php echo $organization['lead_status']; ?></td>
			<td><?php echo $organization['interested_components']; ?></td>
			<td><?php echo $organization['timeframe']; ?></td>
			<td><?php echo $organization['created']; ?></td>
			<td><?php echo $organization['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'organizations', 'action' => 'view', $organization['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'organizations', 'action' => 'edit', $organization['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'organizations', 'action' => 'delete', $organization['id']), array(), __('Are you sure you want to delete # %s?', $organization['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['organization_id']; ?></td>
			<td><?php echo $post['comment']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array(), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proposals'); ?></h3>
	<?php if (!empty($user['Proposal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Interested Components'); ?></th>
		<th><?php echo __('Timeframe'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Proposal'] as $proposal): ?>
		<tr>
			<td><?php echo $proposal['id']; ?></td>
			<td><?php echo $proposal['user_id']; ?></td>
			<td><?php echo $proposal['organization_id']; ?></td>
			<td><?php echo $proposal['name']; ?></td>
			<td><?php echo $proposal['description']; ?></td>
			<td><?php echo $proposal['interested_components']; ?></td>
			<td><?php echo $proposal['timeframe']; ?></td>
			<td><?php echo $proposal['created']; ?></td>
			<td><?php echo $proposal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proposals', 'action' => 'view', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proposals', 'action' => 'edit', $proposal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proposals', 'action' => 'delete', $proposal['id']), array(), __('Are you sure you want to delete # %s?', $proposal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tasks'); ?></h3>
	<?php if (!empty($user['Task'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Interaction Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Eta'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Task'] as $task): ?>
		<tr>
			<td><?php echo $task['id']; ?></td>
			<td><?php echo $task['user_id']; ?></td>
			<td><?php echo $task['organization_id']; ?></td>
			<td><?php echo $task['contact_id']; ?></td>
			<td><?php echo $task['interaction_id']; ?></td>
			<td><?php echo $task['name']; ?></td>
			<td><?php echo $task['priority']; ?></td>
			<td><?php echo $task['type']; ?></td>
			<td><?php echo $task['notes']; ?></td>
			<td><?php echo $task['eta']; ?></td>
			<td><?php echo $task['created']; ?></td>
			<td><?php echo $task['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tasks', 'action' => 'edit', $task['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tasks', 'action' => 'delete', $task['id']), array(), __('Are you sure you want to delete # %s?', $task['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
