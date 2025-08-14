<?php
$title = get_sub_field('title');
$columns = get_sub_field('columns');
$rows = get_sub_field('rows');

/**
 * @var array $args
 */

$settings = get_sub_field('settings');
?>

<section class="flex-content-section">
    <div class="content-container">
        <?php if ($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($rows): ?>
            <table>
                <thead>
                <tr>
                    <?php foreach ($columns as $column): ?>
                        <th><?php echo $column['value']; ?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['key']; ?></td>
                        <td><?php echo $row['value']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>
    </div>
</section>
