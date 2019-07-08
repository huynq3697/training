<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?= __('Users') ?></li>
    <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Add'), ['action' => 'add']) ?></li>
  </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
  <div class="container">
    <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       <A href="edit.html" >Edit Profile</A>

       <A href="edit.html" >Logout</A>
       <br>
       <p class=" text-info">May 05,2014,03:00 pm </p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Sheena Shrestha</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ID:</td>
                        <td><?= $this->Number->format($user->id) ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?= h($user->email) ?></td>
                      </tr>
                      <tr>
                        <td>Created:</td>
                        <td><?= h($user->created) ?></td>
                      </tr>

                      <tr>
                        <td>Modified</td>
                        <td><?= h($user->modified) ?></td>
                      </tr>

                    </tr>

                  </tbody>
                </table>

                <a href="#" class="btn btn-primary">My Sales Performance</a>
                <a href="#" class="btn btn-primary">Team Sales Performance</a>

                <div class="related">
                  <h4><?= __('Related Products') ?></h4>
                  <?php if (!empty($user->products)): ?>
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('User Id') ?></th>
                        <th scope="col"><?= __('Name') ?></th>
                        <th scope="col"><?= __('Price') ?></th>
                        <th scope="col"><?= __('Quantity') ?></th>
                        <th scope="col"><?= __('Image') ?></th>
                        <th scope="col"><?= __('Body') ?></th>
                        <th scope="col"><?= __('Created') ?></th>
                        <th scope="col"><?= __('Modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                      </tr>
                      <?php foreach ($user->products as $products): ?>
                        <tr>
                          <td><?= h($products->id) ?></td>
                          <td><?= h($products->user_id) ?></td>
                          <td><?= h($products->name) ?></td>
                          <td><?= h($products->price) ?></td>
                          <td><?= h($products->quantity) ?></td>
                          <td><?= h($products->image) ?></td>
                          <td><?= h($products->body) ?></td>
                          <td><?= h($products->created) ?></td>
                          <td><?= h($products->modified) ?></td>
                          <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
            <span class="pull-right">
              <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
              <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
            </span>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
