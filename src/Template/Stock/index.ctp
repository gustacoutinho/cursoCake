<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['Stock']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="stock col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Stock</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('product_id') ?></th>
                                        <th><?= $this->Paginator->sort('decimal') ?></th>
                                        <th><?= $this->Paginator->sort('unit_price') ?></th>
                                        <th><?= $this->Paginator->sort('unit_coast') ?></th>
                                        <th><?= $this->Paginator->sort('created') ?></th>
                                        <th><?= $this->Paginator->sort('modified') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stock as $stock): ?>
                        <tr>
                                        <td><?= $this->Number->format($stock->id) ?></td>
                                        <td><?= $stock->has('product') ? $this->Html->link($stock->product->title, ['controller' => 'Products', 'action' => 'view', $stock->product->id]) : '' ?></td>
                                        <td><?= $this->Number->format($stock->decimal) ?></td>
                                        <td><?= $this->Number->format($stock->unit_price) ?></td>
                                        <td><?= $this->Number->format($stock->unit_coast) ?></td>
                                        <td><?= h($stock->created) ?></td>
                                        <td><?= h($stock->modified) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $stock->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class'=>'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                        <?= $this->Paginator->numbers(['escape'=>false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>