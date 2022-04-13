
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- /.search form -->
  <form action="/products" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="<?php echo __('Search...');?>">
          <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="active"><a href="/users/index"><i class="fa fa-link"></i> <span>Home</span></a></li>
    <li class="active"><a href="/stock-in"><i class="fa fa-link"></i> <span>Entrada de Produtos</span></a></li>
    <li class="active"><a href="/stock-out"><i class="fa fa-link"></i> <span>Saída de Produtos</span></a></li>
    <li><a href="/categories"><i class="fa fa-link"></i> <span>Categories</span></a></li>
    <li class="treeview">
      <a href="/products"><i class="fa fa-link"></i> <span>Products</span></a>
      <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
