<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">PetShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('cliente.index')); ?>">Listar</a>
          <a class="dropdown-item" href="<?php echo e(route('cliente.cadastrar')); ?>">Cadastrar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('pet.index')); ?>">Listar</a>
          <a class="dropdown-item" href="<?php echo e(route('pet.cadastrar')); ?>">Cadastrar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('produto.index')); ?>">Listar</a>
          <a class="dropdown-item" href="<?php echo e(route('produto.cadastrar')); ?>">Cadastrar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('servico.index')); ?>">Listar</a>
          <a class="dropdown-item" href="<?php echo e(route('servico.cadastrar')); ?>">Cadastrar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuário
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo e(route('usuario.index')); ?>">Listar</a>
          <a class="dropdown-item" href="<?php echo e(route('usuario.cadastrar')); ?>">Cadastrar</a>
        </div>
      </li>


       <li class="nav-item active float-right">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>"> Sair </a>
      </li>

    </ul>
  </div>
</nav><?php /**PATH C:\Users\vb\Desktop\Nova pasta\Projeto_Web_2VA\resources\views/layouts/menu.blade.php ENDPATH**/ ?>