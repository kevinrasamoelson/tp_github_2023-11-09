<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" user-scalable=no maximum-scale=1.0 minimum-scale=1.0 content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>CRUD PRODUIT </title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><i class="fas fa-user-secret"></i> Pharma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Autres</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="recherche ...">
        <button class="btn btn-primary" type="button">Recherche</button>
      </form>
    </div>
  </div>
</nav>

    </header>

    <section class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-sm mb-5 mx-auto">
                <h1 class="fs-4 text-center lead text-primary">
                    CRUD clients POO php Mysql AJAX
                </h1>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-bold mb-0">
                    Listes des factures
                </h1>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm me-3"><i class="fas fa-folder-plus"></i>Nouveau</button>
                    <a href="" class="btn btn-success btn-sm" id="exporter"><i class="fas fa-table"></i>Exporter</a>
                </div>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>
        <div class="row">
            <div class="table-responsive" id="table">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Pharmacie</th>
        <th>Lieu</th>
        <th>Telephone</th>
        <th>Adresse email</th>
      </tr>
    </thead>
    <tbody>
        <?php for( $i = 0; $i < 50 ; $i++): ?> 
      <tr>
        <th scope="row"><?= $i ?></th>
        <td>Omeopharma-Ambanidia</td>
        <td>Ambanidia</td>
        <td> +261 33 00 000 09</td>
        <td>Pharma@gmail.com</td>
        <td>
          <a href="#" class="text-info me-2 infoBtn" title="Voir des details"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="text-primary me-2 editBtn" title="Modifier"><i class="fas fa-edit"></i></a>
          <a href="#" class="text-danger me-2 deleteBtn" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
        </td>
      
      </tr>      
      <?php endfor; ?>
    </tbody>
  </table>
            </div>
        </div>
    </section>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrepolicy="no-referre"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/js" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetaler2@11"></script>
    <script src="traitement.js"></script>
</body>
</html>