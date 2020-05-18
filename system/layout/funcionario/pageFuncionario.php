<br/>
<h1>Funcionário</h1>
<br/>
<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo (!isset($_GET['menup']) || $_GET['menup'] == "home") ? 'active' : ''; ?>" href="?page=funcionario&subp=funcionario">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($_GET['menup'] == "cadFuncionario") ? 'active' : ''; ?>" href="?page=funcionario&subp=funcionario&menup=cadFuncionario">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($_GET['menup'] == "consulta") ? 'active' : ''; ?>" href="?page=funcionario&subp=funcionario&menup=consulta">Consultar</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <?php if (!isset($_GET['menup'])) { ?>
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <?php
        } else {
            $menuP = $_GET['menup'] == 'consulta' ? 'con' . ucfirst($_GET['page']) : $_GET['menup'];
            require_once "$menuP.php";
        }
        ?>
    </div>
</div>

